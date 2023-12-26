<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task4-2-1</title>
</head>
<body>
  <?php
    $month = mt_rand(1, 12);

    switch ($month) {
      case 3:
      case 4:
      case 5:
        echo "<h1>「".$month."月は春の季節です。」</h1>";
        break;
      case 6:
      case 7:
      case 8:
        echo "<h1>「".$month."月は夏の季節です。」</h1>";
        break;
      case 9:
      case 10:
      case 11:
        echo "<h1>「".$month."月は秋の季節です。」</h1>";
        break;
      case 12:
      case 1:
      case 2:
        echo "<h1>「".$month."月は冬の季節です。」</h1>";
        break;
    }
  ?>
</body>
</html>