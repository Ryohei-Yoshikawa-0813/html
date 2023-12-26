<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task6-2</title>
</head>
<body>
  <?php
    function max_number($a, $b) {
      echo '$a'. " = {$a}<br>";
      echo '$b'." = {$b}<br>";
      if ($a > $b){
        echo '$aと$bのうち最大値は'."{$a}です。<br>";
      } else {
        echo '$aと$bのうち最大値は'."{$b}です。<br>";
      }
    }

    max_number(9, 21);
  ?>
</body>
</html>