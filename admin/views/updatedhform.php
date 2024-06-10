<div class="main">
    <h2>CHI TIẾT ĐƠN HÀNG</h2>
    <?php
    $iddh = $kqone[0]['id'];
    $getcart = get_cart($iddh);
    echo '<table class="table"> 
    <thead> 
        <tr> 
            <th class="product-thumbnail">Hình ảnh</th> 
            <th class="product-name">Sản phẩm</th> 
            <th class="product-quantity">Giá tiền</th> 
            <th class="product-quantity">Số lượng</th> 
            <th class="product-total">Tổng tiền</th> 
        </tr> 
    </thead> <tbody>';

    $i = 0;
    $tongall = 0;
    foreach ($getcart as $item) {

        $masp = $item['idsp'];
        $spct = getonesp($masp);

        $tongtien = $spct[0]['gia'] * $item['slm'];
        $tongall += $tongtien;
        echo "<tr>
                <td class='product-thumbnail'>
                    <img src='" . $spct[0]['img'] . "' alt='Image' class='img-fluid' width='100px'>
                </td>
                <td class='product-name'>
                    " . $spct[0]['tensp'] . "
                </td>
                <td class='product-quantity'>" . number_format($spct[0]['gia'], 0, ',', '.') . " VNĐ</td>
                <td class='product-quantity'>" . $item['slm'] . "</td>
                <td class='product-total'>number_format($tongtien, 0, ',', '.'). VNĐ</td>
            </tr>";
        $i++;
    }
    echo '
        <h5 class="product-total" colspan="2">
        Tổng thanh toán: ' . number_format($tongtien, 0, ',', '.') . ' VNĐ
        </h5>
        </tbody>
        
    </table>';
    ?>
    <h2>CẬP NHẬT THANH TOÁN</h2>
    <table class="table">
        <tr>
            <th>Mã KH</th>
            <th>Phương thức thanh toán</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>

        <form action="index.php?act=updatedhform" method="post">
            <tr>
                <td>
                    <input type="text" required name="idkh" value="<?= $kqone[0]['idkh'] ?>" readonly="true">
                    <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                </td>
                <td>
                    <select name="payment" class="form-control">
                        <?php
                        $paymentcur = $kqone[0]['payment'];
                        if ($paymentcur == 1) {
                            echo '<option value="1" selected>Thanh toán khi nhận hàng</option>
                        <option value="2">Chuyển khoản</option>
                        <option value="3">Đến mua tại quầy</option>';
                        }
                        if ($paymentcur == 2) {
                            echo '<option value="1" >Thanh toán khi nhận hàng</option>
                        <option value="2" selected>Chuyển khoản</option>
                        <option value="3">Đến mua tại quầy</option>';
                        }
                        if ($paymentcur == 3) {
                            echo '<option value="1" >Thanh toán khi nhận hàng</option>
                        <option value="2">Chuyển khoản</option>
                        <option value="3" selected>Đến mua tại quầy</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><input type="text" required name="address" value="<?= $kqone[0]['address'] ?>" class="form-control"></td>
                <td>
                    <select name="status" class="form-control">
                        <?php
                        $statuscur = $kqone[0]['status'];
                        if ($statuscur == 1) {
                            echo '<option value="1" selected>Đơn hàng mới</option>';
                            echo '<option value="0">Đơn hàng đã hoàn thành</option>';
                        }
                        if ($statuscur == 0) {
                            echo '<option value="1" >Đơn hàng mới</option>';
                            echo '<option value="0" selected>Đơn hàng đã hoàn thành</option>';
                        }
                        ?>
                    </select>
                </td>
                <td><input type="submit" value="Cập nhật" name="capnhat" class="btn btn-primary"></td>
            </tr>
        </form>
    </table>
</div>
<style>
    /* CSS for Main Container */
    .main {
        padding: 20px;
        background-color: #f8f9fa;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    /* CSS for Heading */
    .main h2 {
        margin-bottom: 20px;
        font-size: 24px;
        font-weight: bold;
        color: #333;
    }

    /* CSS for Table */
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .table th,
    .table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .table th {
        background-color: #f2f2f2;
        font-weight: bold;
    }

    .table td.product-thumbnail img {
        max-width: 100px;
    }

    .table td.product-name {
        font-weight: bold;
    }

    .table td.product-price,
    .table td.product-quantity,
    .table td.product-total {
        text-align: left;
    }

    /* CSS for Form */
    .table form {
        display: flex;
        align-items: center;
    }

    .table input[type="text"],
    .table select {
        padding: 5px 10px;
        border: 1px solid #ddd;
        border-radius: 3px;
        font-size: 14px;
    }

    .table input[type="submit"] {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 5px 10px;
        border-radius: 3px;
        font-size: 14px;
        cursor: pointer;
    }

    .table input[type="submit"]:hover {
        background-color: #0056b3;
    }
</style>