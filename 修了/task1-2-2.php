<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1-2-2</title>
</head>
<body>
  <?php
    $tax_rate = 0.1;
    $pencil_price = 100;
    $eraser_price = 200;
    $pencil_tax_included = $pencil_price * (1 + $tax_rate);
    $eraser_tax_included = $eraser_price * (1 + $tax_rate);

    echo "現在、消費税は{$tax_rate}%です。<br>";
    echo "鉛筆が{$pencil_price}円で税込み{$pencil_tax_included}円です。<br>";
    echo "消しゴムが{$eraser_price}円で税込み{$eraser_tax_included}円です。<br>";
  ?>
</body>
</html>