<?php
session_start();

if (isset($_POST['name_spelling_first'])) {
    //POSTがあればPOSTをSESSIONに突っ込んでリロード
    $_SESSION['formdata'] = $_POST;
    header('Location: ./form-confirm');
} elseif (!isset($_SESSION['formdata'])) {
    //POSTもSESSIONも無ければform-entryに戻る
    header('Location: ./form-entry');
}

//SESSIONがあれば以下実行
$formdata = $_SESSION['formdata'];
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ【中央福祉葬祭公式HP】</title>
  <meta name="description" content="">
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/common.css?updated=<?php echo date('YmdHis') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/form.css?updated=<?php echo date('YmdHis') ?>">
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-MGXMJ3V5');</script>
  <!-- End Google Tag Manager -->  
  <?php wp_head(); ?>
</head>
<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGXMJ3V5"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->  
  <a href="#" class="btn">
    <div id="top_btn_icon">
      <img src="<?php echo get_template_directory_uri(); ?>/img/top_icon.svg" alt="TOPへ">
    </div>
  </a>
  <header>
    <div class="header_inner">
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="中央福祉葬祭">
      </a>  
    </div>
  </header>
  <main>
    <div class="p_title">
      <div class="base_width">
        <h1 class="f_mincho">お問い合わせ</h1>
      </div>
    </div>
    <section id="form_sct">
      <div class="base_width">
        <p>ご入力いただいた内容をご確認いただき、送信するボタンを押してください。</p>
        <div class="form">
          <div class="second_width">
            <div class="form_step_bar">
              <div class="step step_01"></div>
              <div class="step_bar"></div>
              <div class="step step_02"></div>
              <div class="step_bar step_yet"></div>
              <div class="step step_03 step_yet"></div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">お名前</h2>
              </div>
              <div>
                <?php
                echo $formdata['name_spelling_first'];
                echo " ";
                echo $formdata['name_spelling_last'];
                ?>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">フリガナ</h2>
              </div>
              <div>
                <?php
                echo $formdata['name_kana_first'];
                echo " ";
                echo $formdata['name_kana_last'];
                ?>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">電話番号</h2>
              </div>
              <div>
                <?php echo $formdata['tel']; ?>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">メールアドレス</h2>
              </div>
              <div>
                <?php echo $formdata['email']; ?>
              </div>
            </div>
            <div class="form_itm address_section">
              <div class="back_color">
                <h2 class="required">ご住所</h2>
              </div>
              <div>
                〒<?php echo $formdata['postalcode']; ?><br>
                  <?php echo $formdata['prefectures'];
                  echo $formdata['city'];
                  echo $formdata['street'];
                  echo ' ';
                  echo $formdata['building']; ?>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">お問い合わせ内容</h2>
              </div>
              <div><?php echo $formdata['message']; ?>
              </div>
            </div>
            <a href="/form-entry/" class="form_back f_mincho">戻って修正する</a>
            <a href="/form-complete/" class="form_next f_mincho">この内容で送信する</a>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <a href="/">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_w.svg" alt="中央福祉葬祭">
    </a>  
  </footer>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <?php wp_footer(); ?>
</body>
