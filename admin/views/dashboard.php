<?php // Kết nối đến database 
$conn = mysqli_connect("localhost", "root", "12345678", "homeoffice"); // Lấy thông tin đơn hàng 
$selectall = "SELECT * FROM tbl_donhang JOIN tbl_chitietdonhang ON tbl_chitietdonhang.iddh = tbl_donhang.id JOIN tbl_sanpham ON tbl_sanpham.id = tbl_chitietdonhang.idsp";
$sql = "SELECT * FROM tbl_donhang";
$donhang = mysqli_query($conn, $sql); // Tính số lượng đơn hàng 
$total_orders = mysqli_num_rows($donhang);
$result = mysqli_query($conn, $selectall); // Tính tổng doanh thu
$total_revenue = 0;
while ($row = mysqli_fetch_assoc($result)) {
    $totalsp += $row['slm'];
    $total_revenue += $row['gia'] * $row['slm'];
} // Tính số lượng đơn hàng theo trạng thái 
$sql = "SELECT status, COUNT(*) as count FROM tbl_donhang GROUP BY status";
$status_count = mysqli_query($conn, $sql); // Đóng kết nối database mysqli_close($conn); 
$alltk = getall_tk();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Thống kê đơn hàng</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
</head>

<body>
    <div class="container my-5">
        
        <div class="row">
            <div class="col-md-6">
                <!-- <p>Tổng số đơn hàng: <?php echo $total_orders; ?></p>
                <p>Tổng doanh thu: <?php echo number_format($total_revenue, 0); ?> VND</p> -->
                <div class="row mb-3"><h1>Thống kê đơn hàng</h1></div>
                <div class="row mb-3">
                        <div class="col-md-6 ">
                            <div class="card widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Tổng đơn hàng</div>
                                        <div class="widget-subheading">Đơn hàng đã được đặt</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span><?php echo $total_orders; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 ">
                            <div class="card widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Sản phẩm đã bán</div>
                                        <div class="widget-subheading">Tổng số sản phẩm đã bán</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span><?php echo $totalsp; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <div class="row mb-3">
                
                        <div class="col-md-12 ">
                            <div class="card widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Doanh thu</div>
                                        <div class="widget-subheading">Tổng doanh thu</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span><?php echo number_format($total_revenue, 0)." VND"; ?></span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <div class="col-md-6"> <canvas id="myChart"></canvas> </div>
        </div>
        <ul> <?php while ($row = mysqli_fetch_assoc($status_count)) {
                    if ($row['status'] == 0) {
                        $stat = "đã thanh toán";
                        $datt = $row['count'];
                    } else {
                        $stat = "chưa thanh toán";
                        $chua = $row['count'];
                    }
                    
                } ?> </ul>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        #myChart {
            max-width: 600px;
            height: 400px;
            margin: 0 auto;
        }
    </style>
    <script>
        // Lấy dữ liệu từ PHP
        const paid = Math.floor(<?php echo $datt ?>);;
        const unpaid = Math.floor(<?php echo $chua ?>);;

        // Vẽ biểu đồ tròn
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Đã thanh toán', 'Chưa thanh toán'],
                datasets: [{
                    label: 'Số lượng đơn hàng',
                    data: [paid, unpaid],
                    backgroundColor: [
                        '#36A2EB',
                        '#FF6384'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    title: {
                        display: true,
                        text: 'Số lượng đơn hàng theo trạng thái'
                    }
                }
            }
        });
    </script>





<div class="flex-grow-1">
    <div class="container my-4 appCard bg-transparent">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./styles/DashboardStyles.css">

        <div class="row mb-3">
                        <div class="col-md-12">
                            <div class="main-card card">
                                <div class="card-header">
                                    Active Users
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th>Tên người dùng</th>
                                                <th class="text-center">Thành phố</th>
                                                <th class="text-center">Trạng thái </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php 
                                            $i=1;
                                                foreach($alltk as $tk){
                                                    
                                                    echo '<tr>
                                                <td class="text-center text-muted">'.$i.'</td>
                                                <td>
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <div class="widget-content-left">
                                                                    <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-left flex2">
                                                                <div class="widget-heading">'.$tk['name'].'</div>
                                                                <div class="widget-subheading opacity-7">';
                                                                if($tk['name']=="Admin"){
                                                                    echo "Quản trị viên";
                                                                }else{
                                                                    echo "Khách hàng";
                                                                }
                                                                echo '</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="text-center">'.$tk['address'].'</td>
                                                <td class="text-center">
                                                    <div class="badge badge-success">Active</div>
                                                </td>
                                                
                                            </tr>';
                                            $i++;
                                                }
                                            ?>
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
</div>
</body>

</html>