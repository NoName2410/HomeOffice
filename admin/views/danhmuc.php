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