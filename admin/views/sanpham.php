<div class="main">
    <h2>SẢN PHẨM</h2>
    <table>
        <tr>
            <th>STT</th>
            <th>Danh Mục</th>
            <th>Tên sản phẩm</th>
            <th>Hình Ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Mô tả</th>
            <th>Hành động</th>
        </tr>

        <?php
        if (isset($kq) && (count($kq) >-1)) {
            $i = 1;
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
            <td><input type="text" name="tensp" style="width: 120px;"></td>
            <td><input type="file" name="hinh"></td>';
            if(isset($uploadOk) && $uploadOk==0){
                echo"<script>alert('Vui lòng nhập đúng file!');</script>";
            }
            echo'
            <td><input type="text" name="gia" style="width: 80px;"></td>
            <td><input type="text" name="soluong" style="width: 80px;"></td>
            <td><input type="text" name="mota"></td>
            <td><input type="submit" value="Thêm mới" name="themmoi"></td>
        </tr>
    </form>';
    
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
                        <td>' . $sp['soluong'] . '</td>
                        <td>' . $sp['mota'] . '</td>
                        <td> <a href="index.php?act=updatespform&id=' . $sp['id'] . '">Sửa</a> | <a href="index.php?act=delsp&id=' . $sp['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
            
        }
        ?>
    </table>
</div>
<style>
  .main {
  width: 100%;
  max-width: 1200px;
  margin: 0 auto;
  padding: 2rem;
}

h2 {
  text-align: center;
  margin-bottom: 2rem;
  font-size: 2rem;
  font-weight: bold;
  color: #333;
}

table {
  width: 100%;
  border-collapse: collapse;
  font-size: 1rem;
  background-color: #fff;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
}

th, td {
  padding: 1.2rem 1rem;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: #f7f7f7;
  font-weight: bold;
  color: #444;
}

tr:hover {
  background-color: #f9f9f9;
}

a {
  color: #007bff;
  text-decoration: none;
  transition: color 0.3s;
}

a:hover {
  color: #0056b3;
}

input[type="text"],
input[type="password"] {
  width: 100%;
  padding: 0.8rem 1rem;
  border: 1px solid #ddd;
  border-radius: 4px;
  font-size: 0.9rem;
}

input[type="submit"] {
  display: block;
  width: 100%;
  padding: 0.8rem 1rem;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 4px;
  font-size: 0.9rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

input[type="submit"]:hover {
  background-color: #0056b3;
}
</style>