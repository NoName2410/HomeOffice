<div class="main">
    <h2>CẬP NHẬT ĐƠN HÀNG</h2>
    <!-- <form action="index.php?act=updatetkform" method="post">
        <input type="text" name="user" value="<?= $kqone[0]['user'] ?>">
        <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
        <input type="submit" value="Cập nhật" name="capnhat">
    </form> -->
    <table>
        <tr>
            <th>Mã KH</th>
            <th>Phương thức thanh toán</th>
            <th>Địa chỉ</th>
            <th>Trạng thái</th>
            <th>Hành động</th>
        </tr>
        <form action="index.php?act=updatedhform" method="post">
            <tr>
                <td>
                    <input type="text" name="idkh" value="<?= $kqone[0]['idkh'] ?>">
                    <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                </td>
                <td><input type="text" name="payment" value="<?= $kqone[0]['payment'] ?>"></td>
                <td><input type="text" name="address" value="<?= $kqone[0]['address'] ?>"></td>
                <td><input type="text" name="status" value="<?= $kqone[0]['status'] ?>"></td>
                <td><input type="submit" value="Cập nhật" name="capnhat"></td>
            </tr>
        </form>
    </table>
</div>