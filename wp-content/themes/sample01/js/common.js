(function ($) {
  // back to top
  $('.button-top').click(function () {
    $('body, html').animate({ scrollTop: 0 }, 100);
    return false;
  });

  // ヘッダーメニューの固定
  function debounce(func, delay) {
    let timer;
    return function () {
      clearTimeout(timer);
      timer = setTimeout(func, delay);
    };
  }

  function getHeaderHeight() {
    const headerHeight = document.querySelector('.site-header').offsetHeight;
    if (headerHeight != 0) {
      return headerHeight;
    } else {
      return 1;
    }
  }

  // ヘッダーの高さを取得
  // const headerHeight = getHeaderHeight();
  // フッターを最初から表示
  document.querySelector('.footer-ban').classList.add('footer-ban_fix');
  // document.querySelector('.footer-fixban-sp').classList.add('scroll');
  // footer-sidebanクラスにtopの値としてheaderHeightを設定
  // document.querySelector('.footer-sideban').style.top = headerHeight + 'px';

  // スクロールイベントのデバウンシング
  // window.addEventListener(
  //   'scroll',
  //   debounce(function () {
  // 現在のスクロール位置を取得
  // const scrollPosition =
  //   window.pageYOffset || document.documentElement.scrollTop;

  // スクロール位置がheaderHeight以上の場合、scrollクラスを追加
  // if (scrollPosition >= headerHeight) {
  // document.querySelector('.header-fixnav').classList.add('scroll');
  // document.querySelector('.footer-fixban').classList.add('scroll');
  // document.querySelector('.footer-fixban-sp').classList.add('scroll');
  // document.querySelector('.footer-sideban').classList.add('scroll');
  // } else {
  // スクロール位置がheaderHeight未満の場合、scrollクラスを削除
  // document.querySelector('.header-fixnav').classList.remove('scroll');
  // document.querySelector('.footer-fixban').classList.remove('scroll');
  // document.querySelector('.footer-fixban-sp').classList.remove('scroll');
  // document.querySelector('.footer-sideban').classList.remove('scroll');
  //     }
  //   }, 250)
  // );

  // accordion
  $('#accordion .card-header').click(function () {
    $('+ .collapse', this).slideToggle();
    $(this).toggleClass('open');
  });

  // page link
  var headerHight = 200; //ヘッダの高さ
  $('.page-template-faq a[href^="#"]').click(function () {
    var speed = 500;
    var href = $(this).attr('href');
    var target = $(href == '#' || href == '' ? 'html' : href);
    var position = Number(target.offset().top) - headerHight - 20;
    // console.log({position});
    $('body,html').animate({ scrollTop: position }, speed, 'swing');
    return false;
  });

  // slider slick
  $('.slickl-slider').slick({
    infinite: false,
    // centerMode: true,
    slidesToShow: 3,
    slidesToScroll: 1,
    infinite: true,
    autoplay: false,
    autoplaySpeed: 3000,
    speed: 1000,
    arrows: true,
    dots: true,
    swipe: true,
    responsive: [
      {
        breakpoint: 961,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 769,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 641,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 481,
        settings: {
          slidesToShow: 1,
        },
      },
    ],
  });
})(jQuery);

// page link
// 1つ目のスクリプト（ページ内スクロール用）
(function () {
  document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('a[href^="#"]');
    links.forEach((link) => {
      link.addEventListener('click', function (event) {
        event.preventDefault();
        const href = this.getAttribute('href');
        const targetId = href.substring(1); // "#" を除いたアンカー名

        const headerHight = 210;

        // ページ内のアンカーへスクロール
        const target = document.getElementById(targetId);
        if (target) {
          const position =
            target.getBoundingClientRect().top +
            window.scrollY -
            headerHight -
            20;
          window.scrollTo({
            top: position,
            behavior: 'smooth',
          });
        }
      });
    });
  });
})();

// 2つ目のスクリプト（別ページからのアンカースクロール用）
(function () {
  window.onload = function () {
    // URLからアンカー部分を取得
    const url = window.location.href;
    const anchor = url.split('#')[1];

    if (anchor) {
      // アンカーIDがあれば該当要素を取得
      const target = document.getElementById(anchor);

      if (target) {
        // スムーズなスクロールのための設定
        const headerHeight = 210;
        const position =
          target.getBoundingClientRect().top +
          window.scrollY -
          headerHeight -
          20;

        // スクロール実行
        window.scrollTo({
          top: position,
          behavior: 'smooth',
        });
      }
    }
  };
})();

(function () {
  document.addEventListener('DOMContentLoaded', function () {
    const url = window.location.href;
    const anchor = url.split('#')[1];
    if (anchor) {
      const target = document.querySelector(`a[href="#${anchor}"]`);
      if (target) {
        target.click();
      }
    }
  });
})();
