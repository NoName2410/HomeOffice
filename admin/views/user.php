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
                        <td>' . $tk['password'] . '</td>
                        <td>' . $tk['role'] . '</td>
                        <td> <a href="index.php?act=updatetkform&id=' . $tk['id'] . '">Sửa</a> | <a href="index.php?act=deltk&id=' . $tk['id'] . '">Xóa</a> </td>
                    </tr>';
                $i++;
            }
        }
        ?>
    </table>
</div>