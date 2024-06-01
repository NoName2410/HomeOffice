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
                    <input type="text" name="name" value="<?= $kqone[0]['name'] ?>">
                    <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                </td>
                <td><input type="text" name="address" value="<?= $kqone[0]['address'] ?>"></td>
                <td><input type="text" name="email" value="<?= $kqone[0]['email'] ?>"></td>
                <td><input type="text" name="user" value="<?= $kqone[0]['user'] ?>"></td>
                <td><input type="password" name="pass" value="<?= $kqone[0]['pass'] ?>"></td>
                <td><input type="text" name="role" value="<?= $kqone[0]['role'] ?>"></td>
                <td><input type="submit" value="Cập nhật" name="capnhat"></td>
            </tr>
        </form>
    </table>
</div>