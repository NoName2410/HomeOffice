<div class="main">
    <h2>ĐƠN HÀNG</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Username</th>
            <th>Phương thức thanh toán</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>

        <?php
        if (isset($kq) && (count($kq) >-1)) {
            $i = 1;
            foreach ($kq as $dh) {
                foreach($user as $tk){
                    if($dh['idkh']==$tk['id']){
                        $tenkh = $tk['user'];
                    }
                }
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $tenkh . '</td>
                        <td>' . $dh['payment'] . '</td>
                        <td>' . $dh['address'] . '</td>';
                        if($dh['status'] == 1){
                            echo'<td><a href="index.php?act=statusdh&id=' . $dh['id'] . '">Đơn hàng mới</a></td>';
                        }else{
                            echo'<td>Đã xem</td>';
                        }
                echo'
                        
                        <td> <a href="index.php?act=updatedhform&id=' . $dh['id'] . '">Sửa</a> | <a href="index.php?act=deldh&id=' . $dh['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
            
        }
        ?>
    </table>
</div>