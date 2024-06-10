<div class="main">
  <h2>ĐƠN HÀNG</h2>
  <table align="center">
    <tr>
      <th>STT</th>
      <th>Username</th>
      <th>Phương thức thanh toán</th>
      <th>Địa chỉ</th>
      <th>Trạng thái</th>
      <th>Hành động</th>
    </tr>

    <?php
    // ini_set('display_errors', 1);
    // ini_set('display_startup_errors', 1);
    // error_reporting(E_ALL);
    if (isset($kq) && (count($kq) > -1)) {
      $i = 1;
      foreach ($kq as $dh) {
        foreach ($user as $tk) {
          if ($dh['idkh'] == $tk['id']) {
            $tenkh = $tk['user'];
          }
        }
        echo '
        <tr>
          <td>' . $i . '</td>
          <td>' . $tenkh . '</td>';
        if ($dh['payment'] == 1) {
          $pt = "Thanh toán khi nhận hàng";
        } elseif ($dh['payment'] == 2) {
          $pt = "Chuyển khoản";
        } elseif ($dh['payment'] == 3) {
          $pt = "Đến mua tại quầy";
        }
        echo '
          <td>' . $pt . '</td>
          <td>' . $dh['address'] . '</td>';
        if ($dh['status'] == 1) {
          echo '<td><a href="index.php?act=statusdh&id=' . $dh['id'] . '">Đơn hàng mới</a></td>';
        } else {
          echo '<td>Đơn hàng đã hoàn thành</td>';
        }
        echo '
          <td>
            <a href="index.php?act=updatedhform&id=' . $dh['id'] . '">Sửa</a>
            | <a href="index.php?act=deldh&id=' . $dh['id'] . '">Xóa</a>
            | <a href="index.php?act=exdh&id=' . $dh['id'] . '">Xuất hóa đơn</a>
          </td>
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

  th,
  td {
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