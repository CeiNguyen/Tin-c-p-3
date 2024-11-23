<html>

<head>
  <meta charset="utf-8">
  <title>Hello</title>
</head>

<body>
  <!-- <?php $numberOne = 31;
        $numberTwo = 20;
        if ($numberOne > $numberTwo) {
          echo "<p>Tài liệu học HTML</p>";
          echo "<p>Tài liệu học CSS</p>";
          echo "<p>Tài liệu học JavaScript</p>";
        } else {
          echo "<p>Tài liệu học MySQL</p>";
          echo "<p>Tài liệu học PHP</p>";
        }
        ?>

  <?php
  $numberOne = 31;
  $numberTwo = 20;
  $numberThree = 20;
  if ($numberOne > $numberTwo) {
    if ($numberTwo === $numberThree) {
      echo "<p>$numberTwo === $numberThree </p>";
    } else {
      echo "<p>$numberTwo !== $numberThree </p>";
    }
    echo "<p>Tài liệu học HTML</p>";
    echo "<p>Tài liệu học CSS</p>";
    echo "<p>Tài liệu học JavaScript</p>";
  } else {
    echo "<p>Tài liệu học MySQL</p>";
    echo "<p>Tài liệu học PHP</p>";
  }
  ?> -->

  <!-- <?php

        $money = 500;

        switch ($money) {
          case 2000:
            echo "Trà đá";
            break;
          case 8000:
            echo "Sting dâu";
            break;
          case 10000:
            echo "Cà phê đá";
            break;
          case 12000:
            echo "Cà phê sữa";
            break;
          default:
            echo "Ko đủ tiền";
        }
        ?> -->


  <?php
  function bang($dong, $cot)
  {
    echo '<table width="95%" border="1" cellspacing="0" cellpadding="0">';
    for ($i = 1; $i <= $dong; $i++) {
      echo '<tr>';
      for ($j = 1; $j <= $cot; $j++) {
        echo '<td>bang' . $i . '</td>';
      }
      echo '</tr>';
    }
    echo '</table>';
  }

  // Gọi hàm
  bang(5, 4);
  ?>
  <!-- <table border="1" cellspacing="0" cellpadding="0">
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
    <tr>
      <td>1</td>
      <td>2</td>
      <td>3</td>
      <td>4</td>
    </tr>
  </table> -->
  <?php
  function tong2()
  {
    $s = 0;
    for ($i = 1; $i <= 10; $i++) {
      $s += $i;
      // echo "s la: $s <br />";
    }
    return $s;
  }

  // Gọi hàm và hiển thị kết quả
  $kq = tong2();
  // echo "ket qua la: $kq"
  ?>

  <?php
  function tong()
  {
    $s = 0;
    for ($i = 1; $i <= 10; $i++) {
      $s += $i;
    }
    echo '<br />' . $s;
  }

  // Gọi hàm
  // tong();
  ?>
</body>

</html>