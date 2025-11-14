'use strict'
{

  /**
   * アニメーションリセット
   */
  function resetAnimation() {
    var element = document.getElementsByClassName('js-animation');
    if (!element) return; // 要素がなかったら処理をキャンセル

    for (var i = 0; i < element.length; i++) {
      element[i].classList.remove('is-show');
    }
  }


  // ラベルをクリックしたらクラスを付け替える
  const plan_ichinichiso_btn = document.getElementById('plan_ichinichiso_btn');
  const plan_hanasaidan_btn = document.getElementById('plan_hanasaidan_btn');
  const plan_futsukaso_btn = document.getElementById('plan_futsukaso_btn');
  const plan_ichinichiso = document.getElementById('ichinichiso');
  const plan_hanasaidan = document.getElementById('hanasaidan');
  const plan_futsukaso = document.getElementById('futsukaso');




  function setIchinichiso() {
    plan_ichinichiso_btn.classList.add('active');
    plan_hanasaidan_btn.classList.remove('active');
    plan_futsukaso_btn.classList.remove('active');
    plan_ichinichiso.classList.add('active');
    plan_hanasaidan.classList.remove('active');
    plan_futsukaso.classList.remove('active');
  }

  function setHanasaidan() {
    plan_ichinichiso_btn.classList.remove('active');
    plan_hanasaidan_btn.classList.add('active');
    plan_futsukaso_btn.classList.remove('active');
    plan_ichinichiso.classList.remove('active');
    plan_hanasaidan.classList.add('active');
    plan_futsukaso.classList.remove('active');
  }
  
  function setFutsukaso() {
    plan_ichinichiso_btn.classList.remove('active');
    plan_hanasaidan_btn.classList.remove('active');
    plan_futsukaso_btn.classList.add('active');
    plan_ichinichiso.classList.remove('active');
    plan_hanasaidan.classList.remove('active');
    plan_futsukaso.classList.add('active');
  }



  
  const plan_chokuso_btn = document.getElementById('plan_chokuso_btn');
  const plan_kasosiki_btn = document.getElementById('plan_kasosiki_btn');
  const plan_chokuso = document.getElementById('chokuso');
  const plan_kasosiki = document.getElementById('kasosiki');


  function setChokuso() {
    plan_chokuso_btn.classList.add('active');
    plan_kasosiki_btn.classList.remove('active');
    plan_chokuso.classList.add('active');
    plan_kasosiki.classList.remove('active');
  }

  function setKasosiki() {
    plan_chokuso_btn.classList.remove('active');
    plan_kasosiki_btn.classList.add('active');
    plan_chokuso.classList.remove('active');
    plan_kasosiki.classList.add('active');
  }


  plan_ichinichiso_btn.addEventListener('click', () => {
    setIchinichiso();
    resetAnimation();
  });
  plan_hanasaidan_btn.addEventListener('click', () => {
    setHanasaidan();
    resetAnimation();
  });
  plan_futsukaso_btn.addEventListener('click', () => {
    setFutsukaso();
    resetAnimation();
  });
  plan_chokuso_btn.addEventListener('click', () => {
    setChokuso();
    resetAnimation();
  });
  plan_kasosiki_btn.addEventListener('click', () => {
    setKasosiki();
    resetAnimation();
  });




  window.addEventListener('load', function() {
      // ページの読み込み完了後に実行するコード

      // URLからフラグメントを取得
      var fragment = window.location.hash.substr(1);
      if (fragment != null) {
        switch (fragment) {
          case "ichinichiso":
            setIchinichiso();
            break;
          case "hanasaidan":
            setHanasaidan();
            break;
          case "futsukaso":
            setFutsukaso();
            break;
          case "chokuso":
            setChokuso();
            break;
          case "kasosiki":
            setKasosiki();
            break;
          default:
            setIchinichiso();
            setChokuso();
        }
      } else {
        setIchinichiso();
        setChokuso();
      }

  });

  


}