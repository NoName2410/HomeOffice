<div class="main">
    <h2>ĐƠN HÀNG</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Mã KH</th>
            <th>Phương thức thanh toán</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>

        <?php
        if (isset($kq) && (count($kq) >-1)) {
            $i = 1;
            foreach ($kq as $dh) {
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $dh['idkh'] . '</td>
                        <td>' . $dh['payment'] . '</td>
                        <td>' . $dh['address'] . '</td>
                        <td>' . $dh['status'] . '</td>
                        <td> <a href="index.php?act=updatedhform&id=' . $dh['id'] . '">Sửa</a> | <a href="index.php?act=deldh&id=' . $dh['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
            
        }
        ?>
    </table>
</div>