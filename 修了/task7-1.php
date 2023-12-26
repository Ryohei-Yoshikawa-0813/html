<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>task7-1</title>
</head>
<body>
  <?php
  ini_set('display_errors', 1);

  class Staff {
    private $name;
    private $age;
    private $sex;
    public $id;
    private static $count = 0;

    public function __construct($name, $age, $sex) {
      $this -> name = $name;
      $this -> age = $age;
      $this -> sex = $sex;
      self::$count++;
    }
   
    public function name() {
      $this -> name;
    }
    
    public function age() {
      $this -> age;
    }
    
    public function sex() {
      $this -> sex;
    }

    public function show() {
      printf('(S%04d) %s %d歳 %s<br>', $this -> id, $this -> name, $this -> age, $this -> sex);
    }
  }
  
  $staffs = [];
  $staffs[0] = new Staff('佐藤 一郎', 31, '男');
  $staffs[1] = new Staff('山田 花子', 25, '女');
  $staffs[2] = new Staff('鈴木 次郎', 27, '男');

  function number($staffs) {
    foreach ($staffs as $key => $value) {
        $value->id = $key + 1;
    }
    return $staffs;
  }
  $staffs = number($staffs);

  $staffs[0] -> show();
  $staffs[1] -> show();
  $staffs[2] -> show();
  ?>
</body>
</html>