<div class="main">
    <h2>CẬP NHẬT TÀI KHOẢN</h2>
    <table>
        <tr>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>user</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <form action="index.php?act=updatetkform" method="post">
            <tr>
                <td>
                    <input type="text" required name="name" value="<?= $kqone[0]['name'] ?>">
                    <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                </td>
                <td><input type="text" required name="address" value="<?= $kqone[0]['address'] ?>"></td>
                <td><input type="text" required name="email" value="<?= $kqone[0]['email'] ?>"></td>
                <td><input type="text" required name="user" value="<?= $kqone[0]['user'] ?>"></td>
                <td><input type="password" name="pass" value="<?= $kqone[0]['pass'] ?>"></td>
                <td><input type="text" required name="role" value="<?= $kqone[0]['role'] ?>"></td>
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