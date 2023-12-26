<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="task2-2.css">
  <title>task3-1</title>
</head>
<body>
  <?php
    $goods1 = array
    (
      "商品" => "鉛筆",
      "価格" => 100,
    );

    $goods2 = array
    (
      "商品" => "消しゴム",
      "価格" => 200,
    );

    $tax = 0.1;
    $goods1_tax_include = $goods1["価格"] * (1 + $tax);
    $goods2_tax_include = $goods2["価格"] * (1 + $tax);

    $goods1_1dz = $goods1_tax_include * 12;
    $goods2_1dz = $goods2_tax_include * 12;

    echo "<table>";
    echo "<tr>";
    echo "<th>商品</th>";
    echo "<th>価格</th>";
    echo "<th>税込価格</th>";
    echo "<th>1Dzの価格</th>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$goods1[商品]</td>";
    echo "<td>$goods1[価格]"."円</td>";
    echo "<td>$goods1_tax_include"."円</td>";
    echo "<td>$goods1_1dz"."円</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>$goods2[商品]</td>";
    echo "<td>$goods2[価格]"."円</td>";
    echo "<td>$goods2_tax_include"."円</td>";
    echo "<td>$goods2_1dz"."円</td>";
    echo "</tr>";
    echo "</table>";
  ?>
</body>
</html>