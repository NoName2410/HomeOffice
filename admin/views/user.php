<div class="main">
    <h2>TÀI KHOẢN</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>user</th>
            <th>Password</th>
            <th>Role</th>
            <th>Action</th>
        </tr>

        <?php
        if (isset($kq) && (count($kq) > 0)) {
            $i = 1;
            foreach ($kq as $tk) {
                echo '<tr>
                        <td>' . $i . '</td>
                        <td>' . $tk['name'] . '</td>
                        <td>' . $tk['address'] . '</td>
                        <td>' . $tk['email'] . '</td>
                        <td>' . $tk['user'] . '</td>
                        <td>' . $tk['pass'] . '</td>
                        <td>' . $tk['role'] . '</td>
                        <td> <a href="index.php?act=updatetkform&id=' . $tk['id'] . '">Sửa</a> | <a href="index.php?act=deltk&id=' . $tk['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
            echo '<form action="index.php?act=addtk" method="post">
                        <tr>
                        <td>' . $i . '</td>
                        <td><input type="text" name="name"></td>
                        <td><input type="text" name="address"></td>
                        <td><input type="text" name="email"></td>
                        <td><input type="text" name="user"></td>
                        <td><input type="pass" name="pass"></td>
                        <td><input type="text" name="role"></td>
                        <td><input type="submit" value="Thêm mới" name="themmoi"></td>
                        </tr>
                    </form>';
        }
        ?>
    </table>
</div>