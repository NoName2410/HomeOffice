<div class="main">
    <h2>CẬP NHẬT DANH MỤC</h2>
    <!-- <form action="index.php?act=updatedmform" method="post">
        <input type="text" required name="tendm" value="<?= $kqone[0]['tendm'] ?>">
        <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
        <input type="submit" value="Cập nhật" name="capnhat">
    </form> -->
    <table>
        <tr>
            <th>Tên danh mục</th>
            <th>Ưu tiên</th>
            <th>Hiển thị</th>
            <th>Hành động</th>
        </tr>
        <form action="index.php?act=updatedmform" method="post">
            <tr>
                <td>
                    <input type="text" required name="tendm" value="<?= $kqone[0]['tendm'] ?>">
                    <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                </td>
                <td><input type="text" required name="uutien" value="<?= $kqone[0]['uutien'] ?>"></td>
                <td><input type="text" required name="hienthi" value="<?= $kqone[0]['hienthi'] ?>"></td>
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

input[type=text], select, input[type=file], input[type=submit] {
  width: 100%;
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