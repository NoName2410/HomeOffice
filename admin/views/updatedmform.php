<div class="main">
    <h2>CẬP NHẬT DANH MỤC</h2>
    <form action="index.php?act=updatedmform" method="post">
        <input type="text" name="tendm" value="<?=$kqone[0]['tendm']?>">
        <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
        <input type="submit" value="Cập nhật" name="capnhat">
    </form>
    <table>
        <tr>
            <th>STT</th>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>

        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $dm) {
                echo '<tr>
                        <td>'.$i.'</td>
                        <td>'.$dm['tendm'].'</td>
                        <td>'.$dm['uutien'].'</td>
                        <td>'.$dm['hienthi'].'</td>
                        <td> <a href="index.php?act=updatedmform&id='.$dm['id'].'">Sửa</a> | <a href="index.php?act=deldm&id='.$dm['id'].'">Xóa</a> </td>
                    </tr>';
                $i++;
            }
        }
        ?>
    </table>
</div>