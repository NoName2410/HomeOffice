<div class="main">
    <h2>DANH MỤC</h2>
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
                        <td>' . $i . '</td>
                        <td>' . $dm['tendm'] . '</td>
                        <td>' . $dm['uutien'] . '</td>
                        <td>' . $dm['hienthi'] . '</td>
                        <td> <a href="index.php?act=updatedmform&id=' . $dm['id'] . '">Sửa</a> | <a href="index.php?act=deldm&id=' . $dm['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
            echo '<form action="index.php?act=adddm" method="post">
                        <tr>
                        <td>' . $i . '</td>
                        <td><input type="text" name="tendm"></td>
                        <td><input type="text" name="uutien"></td>
                        <td><input type="text" name="hienthi"></td>
                        <td><input type="submit" value="Thêm mới" name="themmoi"></td>
                        </tr>
                    </form>';
        }
        ?>
    </table>
</div>