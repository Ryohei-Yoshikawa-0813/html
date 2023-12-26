<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="task2-2.css">
  <title>task2-2</title>
</head>
<body>
  <?php
    $goods1 = array
    (
      "商品" => "鉛筆",
      "価格" => "100円",
      "税込価格" => "110円",
    );

    $goods2 = array
    (
      "商品" => "消しゴム",
      "価格" => "200円",
      "税込価格" => "220円",
    );

    $goods3 = array
    (
      "商品" => "定規",
      "価格" => "300円",
      "税込価格" => "330円",
    );

    echo "<table>";
    echo "<tr>";
    echo "<th>商品</th>";
    echo "<th>価格</th>";
    echo "<th>税込価格</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$goods1[商品]";
    echo "<td>$goods1[価格]";
    echo "<td>$goods1[税込価格]";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$goods2[商品]";
    echo "<td>$goods2[価格]";
    echo "<td>$goods2[税込価格]";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$goods3[商品]";
    echo "<td>$goods3[価格]";
    echo "<td>$goods3[税込価格]";
    echo "</tr>";
    echo "</table>";

  ?>
</body>
</html>