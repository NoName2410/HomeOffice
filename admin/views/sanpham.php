<div class="main">
    <h2>SẢN PHẨM</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Danh Mục</th>
            <th>Tên sản phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Hành động</th>
        </tr>

        <?php
        if (isset($kq) && (count($kq) >-1)) {
            $i = 1;
            foreach ($kq as $sp) {
                $tendm = '';
            foreach ($dsdm as $d) {
                if ($sp['iddm'] == $d['id']) {
                    $tendm = $d['tendm'];
                }
            }
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $tendm . '</td>
                        <td>' . $sp['tensp'] . '</td>
                        <td><img src="' . $sp['img'] . '" width="80px"></td>
                        <td>' . $sp['gia'] . '</td>
                        <td> <a href="index.php?act=updatespform&id=' . $sp['id'] . '">Sửa</a> | <a href="index.php?act=delsp&id=' . $sp['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
            echo '<form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
            <tr>
                <td>' . $i . '</td>
                <td><select name="iddm">
                    <option value="0">Chọn danh mục</option>';
                    if(isset($dsdm)){
                        foreach($dsdm as $dm){
                            echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                        }
                    }
            echo'</select>
            </td>
            <td><input type="text" name="tensp"></td>
            <td><input type="file" name="hinh"></td>';
            if(isset($uploadOk) && $uploadOk==0){
                echo"<script>alert('Vui lòng nhập đúng file!');</script>";
            }
            echo'
            <td><input type="text" name="gia"></td>
            <td><input type="submit" value="Thêm mới" name="themmoi"></td>
        </tr>
    </form>';
        }
        ?>
    </table>
</div>