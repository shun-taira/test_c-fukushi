<?php
session_start();
$ssData = [];
if (isset($_SESSION['formdata'])) {
    $ssData = $_SESSION['formdata'];
}
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
  <script>
    //郵便番号処理▼▼▼
    pcdflg = false;
    async function getAddress(pcd) {
      //APIに問合せ
      const api_ep = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
      const res = await fetch(api_ep + pcd);
      const address = await res.json();
      //ステータスチェックしてOKなら住所書き換え
      if (address.status && address.results != 'undefined' && address.results != null) {
        const adarr = address.results[0];
        document.getElementById("pcdcheck").innerHTML = "[○]";
        drawAdrs(adarr);
        pcdflg = true;
      } else {
        document.getElementById("pcdcheck").innerHTML = "[×]";
        pcdflg = false;
      }
    };

    function onPcdChange(e) {
      //変換済みなら
      if (pcdflg) {
        let pcd = e.target.value;
        //条件が揃ったらバリデーション開始
        if (pcd.length >= 7 && pcd.length <= 8) {
          //バリデーションを通ったらAPIに投げる
          let pcdPtn = /^[0-9]{3}-?[0-9]{4}$/;
          if (pcdPtn.test(pcd)) {
            document.getElementById("pcdcheck").innerHTML = "[…]";
            getAddress(pcd);
          } else {
            document.getElementById("pcdcheck").innerHTML = "[×]";
            pcdflg = false;
          }

        } else {
          deleteAdrs();
        }
      }
    }

    function onPcdKeyUp(e) {
      let pcd = e.target.value;
      //変換済みでなければ
      if (!pcdflg) {
        //条件が揃ったらバリデーション開始
        if (pcd.length >= 7 && pcd.length <= 8) {
          //バリデーションを通ったらAPIに投げる
          let pcdPtn = /^[0-9]{3}-?[0-9]{4}$/;
          if (pcdPtn.test(pcd)) {
            document.getElementById("pcdcheck").innerHTML = "[…]";
            getAddress(pcd);
          } else {
            document.getElementById("pcdcheck").innerHTML = "[×]";
          }
        }
      } else {
        document.getElementById("pcdcheck").innerHTML = "";
        if (pcd.length < 7 || pcd.length > 8) {
          pcdflg = false;
          deleteAdrs();
        }
      }
    }

    function drawAdrs(adarr) {
      //アドレスを書き換える
      document.getElementById("prefectures").value = adarr.address1
      document.getElementById("city").value = adarr.address2
      document.getElementById("street").value = adarr.address3
    }

    function deleteAdrs() {
      //アドレスを消す
      document.getElementById("prefectures").value = "";
      document.getElementById("city").value = "";
      document.getElementById("street").value = "";
    }
    //郵便番号処理▲▲▲

    //復元処理▼▼▼
    let ssData = new Array();
    <?php
    foreach ($ssData as $key => $value) {
      if (!is_array($value)) {
        echo 'ssData["'.$key.'"]="'.$value.'";'."\n";
      } else {
        echo 'ssData["'.$key.'"]=[';
        foreach ($value as $value) {
          echo "'$value',";
        };
        echo '];'."\n";
      }
    }
    ?>
    function reconst() {
      Object.keys(ssData).forEach(function(key) {
        if (typeof(ssData[key]) == "object") {
          elms = document.getElementsByName(key + "[]");
          Object.keys(elms).forEach(function(elm) {
            Object.keys(ssData[key]).forEach(function(scndkey) {
              if (elms[elm].value == ssData[key][scndkey]) {
                elms[elm].checked = true;
              }
            });
          });
        } else {
          const elm = document.getElementsByName(key);
          if (elm[0].type == "radio") {
            Object.keys(elm).forEach(function(chidx) {
              if (ssData[key] == elm[chidx].value) {
                elm[chidx].checked = true;
              }
            })
          } else if (elm[0].type == "checkbox") {
            Object.keys(elm).forEach(function(chidx) {
              if (ssData[key] == elm[chidx].value) {
                elm[chidx].checked = true;
              }
            })
          } else {
            elm[0].value = ssData[key];
          }
        }
      })
    }
    //復元処理▲▲▲
    
    window.onload = function() {
      document.getElementById('postalcode').addEventListener("keyup", onPcdKeyUp, false);
      document.getElementById('postalcode').addEventListener("change", onPcdChange, false);

      reconst();
    }
  </script>
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
        <p>
          ご葬儀に関すること、なんでもお気軽にお問い合わせください。<br>
          お急ぎの方はお電話でも随時受け付けております。0120-594-294(24時間365日受付)
        </p>

        <form method="POST" action="/form-confirmation/" class="form">
          <div class="second_width">
            <div class="form_step_bar">
              <div class="step step_01"></div>
              <div class="step_bar step_yet"></div>
              <div class="step step_02 step_yet"></div>
              <div class="step_bar step_yet"></div>
              <div class="step step_03 step_yet"></div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">お名前</h2>
              </div>
              <div class="formPair">
                <div>
                  姓<input type="text" name="name_spelling_first" required>
                </div>
                <div>
                  名<input type="text"name="name_spelling_last" required>
                </div>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">フリガナ</h2>
              </div>
              <div class="formPair">
                <div>
                  セイ<input type="text" name="name_kana_first" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" required>
                </div>
                <div>
                  メイ<input type="text" name="name_kana_last" pattern="(?=.*?[\u30A1-\u30FC])[\u30A1-\u30FC\s]*" required>
                </div>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">電話番号</h2>
              </div>
              <div class="formSingle">
                <input type="tel" name="tel" id="tel" pattern="\d{2,4}-?\d{2,4}-?\d{3,4}" required>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">メールアドレス</h2>
              </div>
              <div class="formSingle">
                <input type="email" name="email" id="email" required>
              </div>
            </div>
            <div class="form_itm address_section">
              <div class="back_color">
                <h2 class="required">ご住所</h2>
              </div>
              <div class="formGrid">
                <div class="formPair">
                  <div>
                    <div><label>〒</label></div>
                    <div>
                      <input type="text" name="postalcode" id="postalcode" pattern="\d{3}-?\d{4}" required>
                      <span id="pcdcheck"></span>
                    </div>
                  </div>
                </div>
                <div class="formPair">
                  <div>
                    <div>都道府県</div>
                    <div><input type="text" name="prefectures" id="prefectures" readonly></div>
                  </div>
                </div>
                <div>市区町村</div>
                <div><input type="text" name="city" id="city" readonly></div>
                <div>番地</div>
                <div><input type="text" name="street" id="street" required></div>
                <div>建物名・部屋番号</div>
                <div><input type="text" name="building" id="building"></div>
              </div>
            </div>
            <div class="form_itm">
              <div class="back_color">
                <h2 class="required">お問い合わせ内容</h2>
              </div>
              <div><textarea name="message" id="message" rows="5" required></textarea></div>
            </div>
            <p><a href="/privacy-policy/" target="_blank" rel="noopener noreferrer">個人情報の取り扱い</a>に</p>
            <input type="submit" class="form_next f_mincho" id="form_submit" value="同意して確認画面へ">
          </div>
        </form>
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
