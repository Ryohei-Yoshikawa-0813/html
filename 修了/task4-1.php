<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task4-1</title>
</head>
<body>
  <?php
    $fortune = mt_rand(1, 100);

    if ($fortune <= 5) {
      $result = "大凶";
    } elseif ($fortune <= 20) {
      $result = "凶";
    } elseif ($fortune <= 50) {
      $result = "吉";
    } elseif ($fortune <= 80) {
      $result = "中吉";
    } else {
      $result = "大吉";
    }

    echo '<h1>今日の運勢は"'.$result.'"です。</h1>';
  ?>
</body>
</html>