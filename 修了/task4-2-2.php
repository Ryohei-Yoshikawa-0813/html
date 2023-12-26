<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task4-2-2</title>
</head>
<body>
  <?php
    $month = mt_rand(1, 12);

    if (3 <= $month && $month <= 5) {
      echo "<h1>「".$month."月は春の季節です。」</h1>";
    } elseif (6 <= $month && $month <=8) {
      echo "<h1>「".$month."月は夏の季節です。」</h1>";
    } elseif (9 <= $month && $month <= 11) {
      echo "<h1>「".$month."月は秋の季節です。」</h1>";
    } else {
      echo "<h1>「".$month."月は冬の季節です。」</h1>";
    }
  ?>
</body>
</html>