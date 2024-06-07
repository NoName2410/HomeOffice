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
            <th>Số lượng</th>
            <th>Mô tả</th>
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
                <td><input type="file" name="hinh"><img src="<?=$spct[0]['img']?>" width="80" alt="">
                    <?php 
                    if(isset($uploadOk) && $uploadOk==0){
                        echo"<script>alert('Vui lòng nhập đúng file!');</script>";
                    }
                    ?>
                </td>
                <td><input type="text" name="gia" value="<?= $spct[0]['gia'] ?>"></td>
                <td><input type="text" name="soluong" value="<?= $spct[0]['soluong'] ?>"></td>
                <td><input type="text" name="mota" value="<?= $spct[0]['mota'] ?>"></td>
                <input type="hidden" name="id" value="<?= $spct[0]['id'] ?>">
                <td><input type="submit" value="Cập nhật" name="capnhat"></td>
            </tr>
        </form>
    </table>
</div>
<style>
    .main {
  margin: 20px;
  font-family: Arial, sans-serif;
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f2f2f2;
}

input[type=text], select,  input[type=submit] {
  width: 100%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=file] {
    width: 31%;
  padding: 5px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  cursor: pointer;
}

img {
  max-width: 80px;
  height: auto;
}
</style>