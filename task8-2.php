<?php 
  $name = $_POST['name'];
  $ruby = $_POST['ruby'];
  $mail = $_POST['mail'];
  $tel = $_POST['tel'];
  $inqitem = $_POST['inqitem'];
  $inquiry = $_POST['inquiry'];
  $pp = $_POST['pp'];

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
              <h1>入力情報確認</h1>
            </div>
            <div class='text'>
              <p>以下の内容で送信します。よろしいですか？
                <br>お間違いがなければ「送信」ボタンを押してください。
              </p>
            </div>
          </div>
          
          <div class='main_form wrapper'>
            <form method='post' action='http://192.168.33.10/task9-1.php'>
              <div class='form'>
                <div class='name_form form_item'>
                  <label for='namelabel form_label'>お名前&emsp;<span class='badge'>必須</span></label>
                  <input type='text' name='name' id='namelabel' class='name_input form_input form_border' placeholder='山田太郎' value='$name' readonly>
                </div>
                <div class='ruby_form form_item'>
                  <label for='rubylabel form_label'>フリガナ&emsp;<span class='badge'>必須</span></label>
                  <p class='ruby_input form_input'>$ruby</p>
                </div>
                <div class='mail_form form_item'>
                  <label for='maillabel form_label'>メールアドレス&emsp;<span class='badge'>必須</span></label>
                  <p class='mail_input form_input'>$mail</p>
                </div>
                <div class='tel_form form_item'>
                  <label for='tellabel form_label'>電話番号&emsp;<span class='badge'>必須</span></label>
                  <p class='tel_input form_input'>$tel</p>
                </div>
                <div class='inqitem_form form_item'>
                  <label for='inqitemlabel form_label'>お問い合わせ項目&emsp;<span class='badge'>必須</span></label>
                  <p class='inqitem_input form_input'>$inqitem</p>
                </div>
                <div class='inquiry_form form_item'>
                  <label for='inquirylabel form_label'>お問い合わせ内容&emsp;<span class='badge'>必須</span></label>
                  <textarea readonly class='inquiry_input form_input' 
                  cols='20' rows='10'>$inquiry</textarea>
                </div>
                <div class='pp_form form_item'>
                  <label for='pplabel form_label'>個人情報保護方針&emsp;<span class='badge'>必須</span></label>
                  <p class='form_input'>個人情報保護方針</a>に同意します。</p>
                </div>
              </div>
              <div class='form_submit'>
                <button class='btn btn_main form_btn' type='submit' name='submit'>送信</button>
                <button class='btn btn_main form_btn' type='button' name='submit' onclick=location.href='http://192.168.33.10/task8-1.php'>戻る</button>
              </div>
            </form>
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
