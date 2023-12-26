<?php 
  $name = $_POST['name'];
  $ruby = $_POST['ruby'];
  $mail = $_POST['mail'];
  $tel = $_POST['tel'];
  $inqitem = $_POST['inqitem'];
  $inquiry = $_POST['inquiry'];
  $pp = $_POST['pp'];

  // チェックボックスの保持
  if ($pp == on) {
    $pp = "checked";
  }

  // エラーリスト
  $errors = [];

  if (empty($name)) {
    $errors['name'] = "名前が未入力です。";
  }
  if (empty($ruby)) {
    $errors['ruby'] = "フリガナが未入力です。";
  }
  if (preg_match('/[^ァ-ヶー]/u', $ruby)) {
    $errors['ruby'] = "カタカナで入力してください。";
  }
  if (empty($mail)) {
    $errors['mail'] = "メールアドレスが未入力です。";
  }
  if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
  }else{
    $errors['mail'] = "メールアドレスが無効です。";
  }
  if (empty($tel)) {
    $errors['tel'] = "電話番号が未入力です。";
  }
  if (preg_match('/^0[0-9]{9,10}\z/', $tel)) {
  }else{
    $errors['tel'] = "電話番号が無効です。";
  }
  if (empty($inqitem)) {
    $errors['inqitem'] = "お問い合わせ項目を選択してください。";
  }
  if (empty($inquiry)) {
    $errors['inquiry'] = "お問い合わせ内容を入力してください。";
  }
  if (empty($pp)) {
    $errors['pp'] = "個人情報保護方針に同意がありません。";
  }

  if ($errors == null) {
      $url = "http://192.168.33.10/task9-1.php";
    }else {
      $url = "http://192.168.33.10/task8-1.php";
  }

  if ($errors == null) {
    $button = "送信";
  }else {
    $button = "確認";
}

if ($errors == null) {
  $message = "
  <div class='title'>
  <h1>入力確認</h1>
</div>
<div class='text'>
  <p>下記の内容でお間違いありませんか？
    <br>宜しければ「送信」を押してください。
  </p>
</div>
  ";
}else {
  $message = "            
  <div class='title'>
    <h1>お問い合わせ</h1>
  </div>
  <div class='text'>
    <p>お問い合わせや業務に関するご質問は、電話またはこちらのお問い合わせフォームより承っております。
      <br>後ほど担当者よりご連絡させていただきます。
    </p>
  </div>
  ";
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
            $message
          </div>
          
          <div class='main_form wrapper'>
            <form method='post' action='$url'>
              <div class='form'>
              <div class='name_form form_item'>
              <label for='namelabel form_label'>お名前&emsp;<span class='badge'>必須</span></label>
              <input type='text' name='name' id='namelabel' class='name_input form_input form_border' placeholder='山田太郎' value='$name'>
              </div>
              <font color='red'>$errors[name]</font>
              <div class='ruby_form form_item'>
              <label for='rubylabel form_label'>フリガナ&emsp;<span class='badge'>必須</span></label>
              <input type='text' name='ruby' id='rubylabel' class='ruby_input form_input form_border' placeholder='ヤマダタロウ' value='$ruby'>
              </div>
              <font color='red'>$errors[ruby]</font>
              <div class='mail_form form_item'>
              <label for='maillabel form_label'>メールアドレス&emsp;<span class='badge'>必須</span></label>
              <input type='text' name='mail' id='maillabel' class='mail_input form_input form_border' placeholder='info@fast-creademy.jp' value='$mail'>
              </div>
              <font color='red'>$errors[mail]</font>
              <div class='tel_form form_item'>
              <label for='tellabel form_label'>電話番号&emsp;<span class='badge'>必須</span></label>
              <input type='tel' name='tel' id='tellabel' class='tel_input form_input form_border' placeholder='00000000000(ハイフンなし)' value='$tel'>
              </div>
              <font color='red'>$errors[tel]</font>
              <div class='inqitem_form form_item'>
              <label for='inqitemlabel form_label'>お問い合わせ項目&emsp;<span class='badge'>必須</span></label>
              <select name='inqitem' id='inqitemlabel' class='inqitem_input form_input form_border'>
            
              <option if ($inqitem == '選択肢1'){
                echo select;
              }
                value='選択肢1'>選択肢1</option>
              <option if ($inqitem == '選択肢2'){
                echo select;
              }
                value='選択肢2'>選択肢2</option>
              <option if ($inqitem == '選択肢3'){
                echo select;
              } 
                value='選択肢3'>選択肢3</option>
              </select>
              </div>
              <font color='red'>$errors[inqitem]</font>
              <div class='inquiry_form form_item'>
              <label for='inquirylabel form_label'>お問い合わせ内容&emsp;<span class='badge'>必須</span></label>
              <textarea name='inquiry' id='inquirylabel' class='inquiry_input form_input form_border' 
              cols='20' rows='10' placeholder='こちらにお問い合わせ内容をご記入ください' >$inquiry</textarea>
              </div>
              <font color='red'>$errors[inquiry]</font>
              <div class='pp_form form_item'>
              <label for='pplabel form_label'>個人情報保護方針&emsp;<span class='badge'>必須</span></label>
              <p class='form_input'><input type='checkbox' name='pp' id='pplabel' $pp><a href='#'>個人情報保護方針</a>に同意します。</p>
              </div>
              <font color='red'>$errors[pp]</font>
              </div>
              <div class='form_submit'>
                <button class='btn btn_main form_btn' type='submit' name='submit'>$button</button>
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