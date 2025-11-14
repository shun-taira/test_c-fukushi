'use strict'
{
  // スクロール量によってトップへ戻るボタンと供花注文ボタンを表示する
  function showTopAnimation() {
    //アイコン位置取得
    let top_btn_icon = document.getElementById('top_btn_icon');
    let kyoka_order_btn = document.getElementById('kyoka_order_btn');

    // 800pxスクロールしたら表示する
    if (window.pageYOffset > 400) {
      top_btn_icon.classList.add('active');
      kyoka_order_btn.classList.add('active');
    } else {
      top_btn_icon.classList.remove('active');
      kyoka_order_btn.classList.remove('active');
    }
  }
  window.addEventListener('scroll', showTopAnimation);


  // スクロール量によって固定フッターを表示する
  function showFixedfooterAnimation() {
    //アイコン位置取得
    let fixed_footer = document.getElementById('fixed_footer');
    let header_card = document.getElementById('header_card');
    let header_rt = document.getElementById('header_rt');

    // 200pxスクロールしたら表示する
    if (window.pageYOffset > 200) {
      fixed_footer.classList.add('active');
      header_card.classList.add('short');
      header_rt.classList.add('short');
    } else {
      fixed_footer.classList.remove('active');
      header_card.classList.remove('short');
      header_rt.classList.remove('short');
    }
  }
  window.addEventListener('scroll', showFixedfooterAnimation);



  // ページ内リンクへ移動するときにスムーススクロールさせる
  $(function () {
    // 1.aタグをクリックし、href属性に # から始まるリンクが設定してあったら発動
    $('a[href^="#"]').click(function () {

      // 2.クリックしたaタグのhref属性（リンク先URI）を取得し、変数に格納
      var href = $(this).attr('href');

      // 3.上で取得した値が#か空白だったら'html'を、それ以外だったら先ほど取得したhref属性の値を変数に格納
      var target = $(href == '#' || href === '' ? 'html' : href);

      // 4.変数targetのページトップからの位置を取得し、変数に格納
      var position = target.offset().top;

      // 5.scrollTopに上で取得した位置を設定し、ヌルヌルとスクロールさせる
      $('html,body').animate({ scrollTop: position }, 500);

      // 6.a要素のデフォルトの機能を無効化する
      return false;

    });
  });



  // ラベルをクリックしたらクラスを付け替える
  const hurry_btn = document.getElementById('hurry_btn');
  const hurry_btn_b = document.getElementById('hurry_btn_b');
  const hurry_container = document.getElementById('hurry_container');
  const body = document.getElementsByTagName('body');

  // お急ぎの方ボタンで開く
  hurry_btn.addEventListener('click', () => {
    hurry_container.classList.add('view');
    body[0].classList.add('no_scroll');
  });

  // お急ぎの方ボタンで開く
  hurry_btn_b.addEventListener('click', () => {
    hurry_container.classList.add('view');
    body[0].classList.add('no_scroll');
  });

  // モーダルの枠外をクリックで閉じる
  hurry_container.addEventListener('click', (event) => {
    if(event.target.closest('#hurry_inner') === null && event.target.closest('#hurry_close_btn') === null){
      hurry_container.classList.remove('view');
      body[0].classList.remove('no_scroll');
    }
  });



  // ラベルをクリックしたらクラスを付け替える
  const hb_btn = document.getElementById('hb_btn');
  const menu_content = document.getElementById('menu_content');
  const menu_content_a = document.querySelectorAll('#menu_content a');
  const overlay = document.getElementById('overlay');

  if (hb_btn != null && menu_content != null) {
    hb_btn.addEventListener('click', () => {
      hb_btn.classList.toggle('open');
      menu_content.classList.toggle('open');
      body[0].classList.toggle('no_scroll');
    });
    menu_content_a.forEach(function(target) {
      target.addEventListener('click', () => {
        hb_btn.classList.remove('open');
        menu_content.classList.remove('open');
        body[0].classList.remove('no_scroll');
      });
    });
    overlay.addEventListener('click', () => {
      hb_btn.classList.remove('open');
      menu_content.classList.remove('open');
      body[0].classList.remove('no_scroll');
    });

  }


  
  /**
   * 到達したら要素を表示させる
   */
  function showElementAnimation() {

    var element = document.getElementsByClassName('js-animation');
    if (!element) return; // 要素がなかったら処理をキャンセル

    var showTiming = window.innerHeight > 768 ? 100 : 70; // 要素が出てくるタイミングはここで調整
    var scrollY = window.pageYOffset;
    var windowH = window.innerHeight;

    for (var i = 0; i < element.length; i++) {
      var elemClientRect = element[i].getBoundingClientRect();
      var elemY = scrollY + elemClientRect.top;
      if (scrollY + windowH - showTiming > elemY) {
        element[i].classList.add('is-show');
      } else if (scrollY + windowH < elemY) {
        // 上にスクロールして再度非表示にする場合はこちらを記述
        // element[i].classList.remove('is-show');
      }
    }
  }
  showElementAnimation();
  window.addEventListener('scroll', showElementAnimation);


}