<?php
//DB保存のために wp-load.php を使う
//require_once('/wp-load.php');

session_start();
if (!isset($_SESSION['formdata'])) {
    header('Location: ../form-entry/');
    exit();
};

//SESSIONがあれば以下実行
$formdata = $_SESSION['formdata'];

//
// global $wpdb;
// $tablename =  $wpdb->prefix . "chuofukushi_contact";

// function keta($num, $keta=2)
// {
//     $n = (string) $num ;
//     while (strlen($n)<$keta) {
//         $n = "0".$n;
//     }
//     return $n;
// }

// // 各種データの保存
// $wpdb->insert(
//     $tablename,
//     array(
//         'name_first'                => $formdata['name_spelling_first'],
//         'name_last'                 => $formdata['name_spelling_last'],
//         'kana_first'                => $formdata['name_kana_first'],
//         'kana_last'                 => $formdata['name_kana_last'],
//         'tel'                       => $formdata['tel'],
//         'email'                     => $formdata['email'],
//         'postal_code'               => $formdata['postalcode'],
//         'prefecture'                => $formdata['prefectures'],
//         'city'                      => $formdata['city'],
//         'street'                    => $formdata['street'],
//         'building'                  => $formdata['building'],

//         'message'                   => $formdata['message'],
//     ),
//     array(
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',
//         '%s',

//         '%s'
//     )
// );

date_default_timezone_set('Asia/Tokyo');

//メール送信処理
$dtm = date('Y年n月d日 H:i');

//メールコア部分
function getMailCore()
{
    global $formdata,$dtm;
    $mail_body_core  = "【受付日時】\n";
    $mail_body_core .= $dtm."\n";
    $mail_body_core .= "\n";

    $mail_body_core .= "【お名前】\n";
    $mail_body_core .= $formdata['name_spelling_first'].' '.$formdata['name_spelling_last'];
    $mail_body_core .= '（'.$formdata['name_kana_first'].' '.$formdata['name_kana_last']."）\n";
    $mail_body_core .= "\n";
    $mail_body_core .= "【電話番号】\n";
    $mail_body_core .= $formdata['tel']."\n";
    $mail_body_core .= "\n";
    $mail_body_core .= "【メールアドレス】\n";
    $mail_body_core .= $formdata['email']."\n";
    $mail_body_core .= "\n";
    $mail_body_core .= "【ご住所】\n";
    $mail_body_core .= '〒'.$formdata['postalcode']."\n";
    $mail_body_core .= $formdata['prefectures'].$formdata['city'].$formdata['street']."\n";
    if ($formdata['building']!="") {
        $mail_body_core .= $formdata['building']."\n";
    };
    $mail_body_core .= "\n";
    $mail_body_core .= "【お問い合わせ内容】\n";
    $mail_body_core .= $formdata['message']."\n";

    return $mail_body_core;
}
//ユーザー向けメール設定---------------------------------------------------------------------------
$mail_u_to   = $formdata['email'];
$mail_u_subject   = get_field('rsv_user_mail_title', $pid);
//ローカルの場合はメール先をテスト用に切り替える
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $mail_u_subject   = "【ローカルテスト】".get_field('rsv_user_mail_title', $pid);
}
$mail_u_body  = get_field('rsv_user_mail_top', $pid)."\n";
$mail_u_body .= "\n";
$mail_u_body .= getMailCore();
$mail_u_body .= "\n";
$mail_u_body .= "\n";
$mail_u_body .= get_field('rsv_user_mail_bottom', $pid)."\n";
$mail_u_body .= "\n";
$mail_u_headers   = [];
/*
$mail_u_headers[] = "Cc: ccemail@example.com";
$mail_u_headers[] = "Bcc: bccemail@example.com";
*/
if (get_field('rsv_user_mail_cc', $pid)) {
    $rsv_user_mail_cc = get_field('rsv_user_mail_cc', $pid);
    $rsv_user_mail_cc = explode(',', $rsv_user_mail_cc);
    foreach ($rsv_user_mail_cc as $mc) {
        $mail_u_headers[] = "Cc: ".$mc;
    }
}
if (get_field('rsv_user_mail_bcc', $pid)) {
    $rsv_user_mail_bcc = get_field('rsv_user_mail_bcc', $pid);
    $rsv_user_mail_bcc = explode(',', $rsv_user_mail_bcc);
    foreach ($rsv_user_mail_bcc as $mb) {
        $mail_u_headers[] = "Bcc: ".$mb;
    }
}

//ユーザーにメールを送る
$mail_u_esult = wp_mail($mail_u_to, $mail_u_subject, $mail_u_body, $mail_u_headers);

//スタッフ向けメール設定---------------------------------------------------------------------------
//カスタムフィールドからメールアドレスを取得
$rsv_staff_mail_to = get_field('rsv_staff_mail_to', $pid);
$mail_s_to = explode(',', $rsv_staff_mail_to);
$mail_s_subject   = get_field('rsv_staff_mail_title', $pid)." | $dtm ";
$mail_s_subject   .= $formdata['name_spelling_first'].$formdata['name_spelling_last'].'様';
//ローカルの場合はメール先をテスト用に切り替える
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    $mail_s_to   = ['m-shikanai@abs-inc.jp'];
    $mail_s_subject   = "【ローカルテスト】".get_field('rsv_staff_mail_title', $pid)." | $dtm ";
    $mail_s_subject   .= $formdata['name_spelling_first'].$formdata['name_spelling_last'].'様';
}
$mail_s_body  = get_field('rsv_staff_mail_top', $pid)."\n";
$mail_s_body .= "\n";
$mail_s_body .= getMailCore();
$mail_s_body .= "\n";
$mail_s_body .= get_field('rsv_staff_mail_bottom', $pid)."\n";
$mail_s_body .= "\n";
$mail_s_headers   = [];
/*
$mail_s_headers[] = "Cc: ccemail@example.com";
$mail_s_headers[] = "Bcc: bccemail@example.com";
*/
if (get_field('rsv_staff_mail_cc', $pid)) {
    $rsv_staff_mail_cc = get_field('rsv_staff_mail_cc', $pid);
    $rsv_staff_mail_cc = explode(',', $rsv_staff_mail_cc);
    foreach ($rsv_staff_mail_cc as $mc) {
        $mail_s_headers[] = "Cc: ".$mc;
    }
}
if (get_field('rsv_staff_mail_bcc', $pid)) {
    $rsv_staff_mail_bcc = get_field('rsv_staff_mail_bcc', $pid);
    $rsv_staff_mail_bcc = explode(',', $rsv_staff_mail_bcc);
    foreach ($rsv_staff_mail_bcc as $mb) {
        $mail_s_headers[] = "Bcc: ".$mb;
    }
}
//スタッフにメールを送る
$mail_s_esult = wp_mail($mail_s_to, $mail_s_subject, $mail_s_body, $mail_s_headers);

//セッション消去処理
$_SESSION = array();
if (isset($_COOKIE["PHPSESSID"])) {
    setcookie("PHPSESSID", '', time() - 1800, '/');
};
session_destroy();
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
        <p>お問い合わせを受け付けました。</p>
        <div class="form">
          <div class="second_width">
            <div class="form_step_bar">
              <div class="step step_01"></div>
              <div class="step_bar"></div>
              <div class="step step_02"></div>
              <div class="step_bar"></div>
              <div class="step step_03"></div>
            </div>
            <p class="thanks_msg">
              このたびはお問い合わせいただきありがとうございます。<br>
              確認のためご入力いただいたメールアドレスに自動送信させていただきました。<br>
              お問い合わせいただいた内容につきましては、確認の上、担当者よりご連絡いたします。<br>
              恐れ入りますがしばらくお待ちください。
            </p>
            <a href="/" class="form_next form_top f_mincho">トップへ戻る</a>
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
