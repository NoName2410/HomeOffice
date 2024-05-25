<div class="main">
    <h2>CẬP NHẬT DANH MỤC</h2>
    <!-- <form action="index.php?act=updatedmform" method="post">
        <input type="text" name="tendm" value="<?= $kqone[0]['tendm'] ?>">
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
                    <input type="text" name="tendm" value="<?= $kqone[0]['tendm'] ?>">
                    <input type="hidden" name="id" value="<?= $kqone[0]['id'] ?>">
                </td>
                <td><input type="text" name="uutien" value="<?= $kqone[0]['uutien'] ?>"></td>
                <td><input type="text" name="hienthi" value="<?= $kqone[0]['hienthi'] ?>"></td>
                <td><input type="submit" value="Cập nhật" name="capnhat"></td>
            </tr>
        </form>
    </table>
</div>