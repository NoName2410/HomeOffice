<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require('D:\AppServ\www\WebsiteHomeOffice\tfpdf\tfpdf.php');

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "homeoffice";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$invoice_id = $_GET['id']; // ID của hóa đơn bạn muốn xuất

// Truy vấn thông tin khách hàng
$sql = "SELECT tbl_user.name, tbl_user.address, tbl_user.email
        FROM tbl_donhang
        JOIN tbl_user ON tbl_donhang.idkh = tbl_user.id
        WHERE tbl_donhang.id = $invoice_id";
$result = $conn->query($sql);

// Truy vấn các mục trong hóa đơn
$sql = "SELECT tbl_sanpham.tensp, tbl_chitietdonhang.slm, tbl_sanpham.gia
        FROM tbl_donhang
        JOIN tbl_chitietdonhang ON tbl_chitietdonhang.iddh = tbl_donhang.id
        JOIN tbl_sanpham ON tbl_sanpham.id = tbl_chitietdonhang.idsp
        WHERE tbl_donhang.id = $invoice_id";
$items = $conn->query($sql);
$invoice = []; // Khởi tạo một mảng trống để tránh lỗi khi không có dữ liệu trả về

if ($result->num_rows > 0) {
    // Lấy dữ liệu từ kết quả truy vấn
    $invoice = $result->fetch_assoc();
}

// Tạo đối tượng TFPDF
$pdf = new tFPDF();
$pdf->AddPage();

// Thêm font DejaVu
$pdf->AddFont('DejaVu', '', 'DejaVuSans.ttf', true);
$pdf->AddFont('DejaVu', 'B', 'DejaVuSans-Bold.ttf', true);

// Sử dụng font DejaVu
$pdf->SetFont('DejaVu', 'B', 16); // Sử dụng font DejaVu

// Tiêu đề hóa đơn
$pdf->Cell(40, 10, 'Hóa đơn');
$pdf->Ln(20);

// Thông tin khách hàng
$pdf->SetFont('DejaVu', '', 12);
$pdf->Cell(100, 10, 'Khách hàng: ' . ($invoice['name'] ?? ''));
$pdf->Ln(10);
$pdf->Cell(100, 10, 'Địa chỉ: ' . ($invoice['address'] ?? ''));
$pdf->Ln(10);
$pdf->Cell(100, 10, 'Email: ' . ($invoice['email'] ?? ''));
$pdf->Ln(20);

// Tiêu đề bảng sản phẩm
$pdf->SetFont('DejaVu', 'B', 12);
$pdf->Cell(100, 10, 'Sản phẩm');
$pdf->Cell(40, 10, 'Giá');
$pdf->Ln(10);

// Sản phẩm
$pdf->SetFont('DejaVu', '', 12);
while ($item = $items->fetch_assoc()) {
    $pdf->Cell(100, 10, $item['tensp'] . ' x ' . $item['slm']);
    $pdf->Cell(40, 10, number_format($item['gia'] * $item['slm'], 2) . ' VND');
    $pdf->Ln(10);
}

// Tổng cộng
$pdf->SetFont('DejaVu', 'B', 12);
$sql = "SELECT SUM(tbl_sanpham.gia * tbl_chitietdonhang.slm) as total
        FROM tbl_donhang
        JOIN tbl_chitietdonhang ON tbl_chitietdonhang.iddh = tbl_donhang.id
        JOIN tbl_sanpham ON tbl_sanpham.id = tbl_chitietdonhang.idsp
        WHERE tbl_donhang.id = $invoice_id";
$result = $conn->query($sql);
$total = $result->fetch_assoc();
$pdf->Cell(100, 10, '');
$pdf->Cell(40, 10, 'Tổng: ' . number_format($total['total'], 2) . ' VND');

// Xuất PDF
ob_clean(); // Xóa bỏ bất kỳ dữ liệu đã được gửi
$pdf->Output('D', 'hoa_don.pdf'); // Xuất PDF

// exit;
?>

