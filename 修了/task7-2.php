<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>task7-2</title>
  </head>
  <body>
    <?php
    ini_set('display_errors', 1);
    
    class Staff {
      protected $name;
      protected $age;
      protected $sex;
      protected static $id = 1;
      
      public function __construct($name, $age, $sex) {
        $this -> name = $name;
        $this -> age = $age;
        $this -> sex = $sex;
      }

      public function show() {
        printf('(S%04d) %s %d歳 %s<br>', self::$id++, $this -> name, $this -> age, $this -> sex);
      }
    }
      
    class PartStaff extends Staff {
      private $jikyu;
      
      public function __construct($name, $age, $sex, $jikyu) {
        parent::__construct($name, $age, $sex);
        $this -> jikyu = $jikyu;
      }
      
      public function show() {
        printf('(P%04d) %s %d歳 %s 時給：%d円<br>', self::$id++, $this -> name, $this -> age, $this -> sex, $this -> jikyu);
      }
    }

$staffs = [];
$staffs[0] = new Staff('佐藤 一郎', 31, '男性');
$staffs[1] = new Staff('山田 花子', 25, '女性');
$staffs[2] = new Staff('鈴木 次郎', 27, '男性');
$staffs[3] = new PartStaff('田中 友子', 24, '女性', 900);
$staffs[4] = new Staff('中村 三郎', 27, '男性');

// function number($staffs) {
//     foreach ($staffs as $key => $value) {
//         $value -> id = $key + 1;
//     }
//     return $staffs;
// }

// $staffs = number($staffs);
    
    
    function AllStaff(Staff $staff){
      $staff -> show(); 
    }
  
    foreach ($staffs as $staff) {
      AllStaff($staff);
    }
    ?>
</body>
</html>