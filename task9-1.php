<?php
  $name = $_POST['name'];
  $ruby = $_POST['ruby'];
  $mail = $_POST['mail'];
  $tel = $_POST['tel'];
  $inqitem = $_POST['inqitem'];
  $inquiry = $_POST['inquiry'];

try {
  
  $pdo = new PDO(
    'mysql:host=localhost;dbname=consumer;charset=utf8mb4',
    'root',
    'toyoaki1028',
    [
      PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]
    );
    
    // $pdo->query("DROP TABLE IF EXISTS consumer");
    // $pdo->query(
      //   "CREATE TABLE consumer(
        //     id INT(11) AUTO_INCREMENT PRIMARY KEY,
        //     time TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
        //     name VARCHAR(128),
        //     ruby VARCHAR(128),
        //     mail VARCHAR(128),
        //     tel INT(11),
        //     inqitem VARCHAR(64),
        //     inquiry VARCHAR(400)
        //   )"
        // ); 
  $stmt = $pdo->prepare("INSERT INTO consumer(name, ruby, mail, tel, inqitem, inquiry) VALUES( ?, ?, ?, ?, ?, ?)");
  $stmt->bindParam(1, $name, PDO::PARAM_STR);
  $stmt->bindParam(2, $ruby, PDO::PARAM_STR);
  $stmt->bindParam(3, $mail, PDO::PARAM_STR);
  $stmt->bindParam(4, $tel, PDO::PARAM_STR);
  $stmt->bindParam(5, $inqitem, PDO::PARAM_STR);
  $stmt->bindParam(6, $inquiry, PDO::PARAM_STR);
  $result = $stmt->execute();
  $pdo = null;
}
catch(PDOException $e) {
  echo $e->getMessage() . '<br>';
  exit;
}

echo "
    <!DOCTYPE html>
    <html>
    <head>
      <meta charset='UTF-8'>
      <meta name='viewport' content='width=device-width, initial-scale=1.0'>
      <link rel='stylesheet' href='reset.css'>
      <link rel='stylesheet' href='hp_content.css'>
      <title>contentページ</title>
    </head>
    <header>
      <div class='header_contents'>
        <div class='header_content01'>
          <div class='header_content01_left'>
            <h1 class='header_title'>ここには会社名が入ります</h1>
          </div>
          <div class='header_content01_right'>
            <button class='btn btn_header btn_header01' type='button' onclick='location.href='>ボタン01</button>
            <button class='btn btn_header btn_header02' type='button' onclick='location.href='>ボタン02</button>
          </div>
        </div>
        <div class='header_content02'>
          <ul class='header_list'>
            <li><a href=''>メニュー01</a></li>
            <li><a href=''>メニュー02</a></li>
            <li><a href=''>メニュー03</a></li>
          </ul>
        </div>
      </div>
    </header>
    <body>
      <div class='mv'>
        <img class='mv_img' src='mv.png' alt='>
      </div>
      
      <main>
        <div class='main'>
          <div class='main_title wrapper'>
            <div class='title'>
              <h1>送信が完了しました。</h1>
            </div>
            <div class='text'>
              <p>3営業日以内に担当より記載頂いたメールアドレスにご連絡差し上げます。
              </p>
            </div>
          </div>
        </div>
        
        <div class='btn_band'>
          <div class='btn btn_band01'>
            <h3>こちらからご購入ください</h3>
              <button class='btn btn_main' type='button' onclick='location.href='>ネットショップ</button>
          </div>
          <div class='btn btn_band02'>
            <h3>お気軽にお問い合わせください</h3>
            <button class='btn btn_main' type='button' onclick='location.href='>お問い合わせ</button>
          </div>
        </div>
      </main>
    </body>
    <footer>
      <p>©copyright</p>
    </footer>
    </html>
  ";
?>