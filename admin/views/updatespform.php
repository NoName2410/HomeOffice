<div class="main">
    <h2>CẬP NHẬT SẢN PHẨM</h2>
    <!-- <form action="index.php?act=updatespform" method="post">
        <input type="text" name="tendm" value="<?= $kqone[0]['tendm'] ?>">
        <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
        <input type="submit" value="Cập nhật" name="capnhat">
    </form> -->
    <table>
        <tr>
            <th>Danh mục</th>
            <th>Tên sản phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Hành Động</th>
        </tr>
        <form action="index.php?act=updatespform" method="post" enctype="multipart/form-data">
            <tr>
                <td>
                    <select name="iddm">
                    <option value="0">Chọn danh mục</option>;
                    <?php 
                        $iddmcur = $spct[0]['iddm'];
                        if(isset($dsdm)){
                            foreach($dsdm as $dm){
                                if($dm['id'] == $iddmcur)
                                    echo '<option value="'.$dm['id'].'" selected>'.$dm['tendm'].'</option>';
                                else
                                    echo '<option value="'.$dm['id'].'">'.$dm['tendm'].'</option>';
                            }
                        }
                    ?>
                    </select>
                </td>
                <td>
                    <input type="text" name="tensp" value="<?= $spct[0]['tensp'] ?>">
                </td>
                <td><input type="file" name="hinh">
                <img src="<?=$spct[0]['img']?>" width="80" alt="">
                    <?php 
                    if(isset($uploadOk) && $uploadOk==0){
                        echo"<script>alert('Vui lòng nhập đúng file!');</script>";
                    }
                    ?>
                </td>
                <td><input type="text" name="gia" value="<?= $spct[0]['gia'] ?>"></td>
                <input type="hidden" name="id" value="<?= $spct[0]['id'] ?>">
                <td><input type="submit" value="Cập nhật" name="capnhat"></td>
            </tr>
        </form>
    </table>
</div>