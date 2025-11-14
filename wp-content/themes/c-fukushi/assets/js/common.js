// タッチデバイスを判定する関数
function isTouchDevice() {
  const userAgent = window.navigator.userAgent.toLowerCase();
  if (userAgent.match(/iphone|ipod|ipad|android/)) {
    return true;
  } else {
    return false;
  }
}

// トップに戻る
document.addEventListener('DOMContentLoaded', function () {
  var backToTopButton = document.querySelector('#back-top');

  if (backToTopButton) {
    backToTopButton.addEventListener('click', function () {
      window.scrollTo({
        top: 0,
        behavior: 'smooth',
      });
    });
  }
});

// PCサブメニュー対応
const menuItemsPc = document.querySelectorAll(
  '.header .menu-item-has-children'
);

menuItemsPc.forEach((menuItem) => {
  const link = menuItem.querySelector('a');
  const menuChild = menuItem.querySelector('.header-nav-child');
  // マウスオーバー時の動作
  link.addEventListener('mouseover', function () {
    menuItems.forEach((item) => {
      item.classList.remove('active');
    });

    menuItem.classList.add('active');

    // マウスリーブ時の動作
    const parentMenuItem = menuItem.parentNode;
    menuItem.addEventListener('mouseleave', function () {
      menuItem.classList.remove('active');
    });
  });
});

// サブメニュー対応
const menuItems = document.querySelectorAll(
  '.footer-nav-sp .menu-item-has-children'
);

menuItems.forEach((menuItem) => {
  const link = menuItem.querySelector('a'); // メニューアイテム内のリンクを取得

  link.addEventListener('click', function (event) {
    event.preventDefault(); // リンクのデフォルトのクリック動作を無効化
    const isActive = menuItem.classList.contains('active');

    // 全てのメニューアイテムから .active クラスを削除
    menuItems.forEach((item) => {
      item.classList.remove('active');
    });

    if (!isActive) {
      menuItem.classList.add('active');
    }
  });
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
  const headerBarHeight = document.querySelector('.header-bar').offsetHeight;
  const headerContentHeight =
    document.querySelector('.header-content').offsetHeight;
  const headerNavHeight = document.querySelector('.header-nav').offsetHeight;

  // PCヘッダー高さがない場合はSPとみなし1を返す
  if (headerBarHeight + headerContentHeight + headerNavHeight != 0) {
    return headerBarHeight + headerContentHeight + headerNavHeight;
  } else {
    return 1;
  }
}

// ヘッダーの高さを取得
const headerHeight = getHeaderHeight();
// フッターを最初から表示
document.querySelector('.footer-fixban').classList.add('scroll');
// document.querySelector('.footer-fixban-sp').classList.add('scroll');

// スクロールイベントのデバウンシング
window.addEventListener(
  'scroll',
  debounce(function () {
    // 現在のスクロール位置を取得
    const scrollPosition =
      window.pageYOffset || document.documentElement.scrollTop;

    // スクロール位置がheaderHeight以上の場合、scrollクラスを追加
    if (scrollPosition >= headerHeight) {
      document.querySelector('.header-fixnav').classList.add('scroll');
      // document.querySelector('.footer-fixban').classList.add('scroll');
      document.querySelector('.footer-fixban-sp').classList.add('scroll');
      // document.querySelector('.footer-sideban').classList.add('scroll');
    } else {
      // スクロール位置がheaderHeight未満の場合、scrollクラスを削除
      document.querySelector('.header-fixnav').classList.remove('scroll');
      // document.querySelector('.footer-fixban').classList.remove('scroll');
      // document.querySelector('.footer-fixban-sp').classList.remove('scroll');
      // document.querySelector('.footer-sideban').classList.remove('scroll');

      // fixヘッダーのサブメニューを閉じる
      menuItems.forEach((menuItem) => {
        menuItem.classList.remove('active');
      });
    }
  }, 250)
);

// spメニュー操作
var openBtn = document.querySelector('#btn-menu-open');
var closeBtn = document.querySelector('#btn-menu-close');
var body = document.querySelector('body');

openBtn.addEventListener('click', function () {
  body.classList.toggle('active');
});

// swiper

// hall
const hallSwiper = document.getElementById('hall-swiper');
if (hallSwiper) {
  window.addEventListener('load', function () {
    new Swiper(hallSwiper, {
      // lazy: true,
      speed: 600,
      loop: true,
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 1.2,
      // autoplay: {
      //   // 自動再生
      //   delay: 5000, // 1.5秒後に次のスライド
      // },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          spaceBetween: 30,
          slidesPerView: 1.3,
        },
      },
    });
  });
}

// equipment
const equipmentSwiper = document.getElementById('equipment-swiper');
if (equipmentSwiper) {
  window.addEventListener('load', function () {
    new Swiper(equipmentSwiper, {
      // lazy: true,
      speed: 600,
      loop: true,
      spaceBetween: 10,
      centeredSlides: true,
      slidesPerView: 1.5,
      // autoplay: {
      //   // 自動再生
      //   delay: 5000, // 1.5秒後に次のスライド
      // },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      breakpoints: {
        768: {
          spaceBetween: 20,
          slidesPerView: 3,
          centeredSlides: false,
        },
      },
    });
  });
}

// top plan
const topPlanSwpier = document.getElementById('top-plan-swiper');
if (topPlanSwpier) {
  const breakPoint = 767; // ブレークポイントを設定
  let swiper;
  let swiperBool;

  window.addEventListener(
    'load',
    () => {
      if (breakPoint < window.innerWidth) {
        swiperBool = false;
      } else {
        createSwiper();
        swiperBool = true;
      }
    },
    false
  );

  window.addEventListener(
    'resize',
    () => {
      if (breakPoint < window.innerWidth && swiperBool) {
        crateTopPlanSwiper.destroy(false, true);
        swiperBool = false;
      } else if (breakPoint >= window.innerWidth && !swiperBool) {
        createSwiper();
        swiperBool = true;
      }
    },
    false
  );

  const createSwiper = () => {
    crateTopPlanSwiper = new Swiper('#top-plan-swiper', {
      loop: true,
      slidesPerView: 1.5,
      centeredSlides: true,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  };
}

// staff
const staffSwpier = document.getElementById('staff-swiper');
if (staffSwpier) {
  const breakPoint = 767; // ブレークポイントを設定
  let swiper;
  let swiperBool;

  window.addEventListener(
    'load',
    () => {
      if (breakPoint < window.innerWidth) {
        swiperBool = false;
      } else {
        createSwiper();
        swiperBool = true;
      }
    },
    false
  );

  window.addEventListener(
    'resize',
    () => {
      if (breakPoint < window.innerWidth && swiperBool) {
        crateStaffSwpier.destroy(false, true);
        swiperBool = false;
      } else if (breakPoint >= window.innerWidth && !swiperBool) {
        createSwiper();
        swiperBool = true;
      }
    },
    false
  );

  const createSwiper = () => {
    crateStaffSwpier = new Swiper('#staff-swiper', {
      loop: true,
      slidesPerView: 1.3,
      centeredSlides: true,
      spaceBetween: 20,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  };
}

// faq
const faqAccordion = document.getElementById('accordion-faq');
if (faqAccordion) {
  const triggerOpens = faqAccordion.querySelectorAll('.triger-open');
  triggerOpens.forEach((triggerOpen) => {
    triggerOpen.addEventListener('click', function () {
      if (!this.parentNode.classList.contains('open')) {
        this.parentNode.classList.add('open');
      } else {
        this.parentNode.classList.remove('open');
        const childOpen = this.parentNode.querySelector('.open');
        if (childOpen) {
          childOpen.classList.remove('open');
        }
      }
    });
  });
  // data属性titleを持つ要素を取得
  const titleElements = faqAccordion.querySelectorAll('[data-title]');
  // data属性contentを持つ要素を取得
  const contentElements = faqAccordion.querySelectorAll('[data-content]');
  // タイトル要素をクリックした時の処理
  titleElements.forEach((titleElement) => {
    titleElement.addEventListener('click', function () {
      console.log('click');
      // data属性contentを持つ要素全てからactiveクラスを削除
      contentElements.forEach((contentElement) => {
        contentElement.classList.remove('active');
      });
      // クリックしたタイトル要素のdata属性titleの値を取得
      const title = this.getAttribute('data-title');
      // タイトル要素のdata属性titleの値と一致するdata属性contentを持つ要素を取得
      const contentElement = faqAccordion.querySelector(
        `[data-content="${title}"]`
      );
      // contentElementにactiveクラスを付与
      contentElement.classList.toggle('active');
    });
  });
}

// faq-page
const faqAccordionPage = document.getElementById('accordion-faq-page');
if (faqAccordionPage) {
  const triggerOpens = faqAccordionPage.querySelectorAll('.triger-open');
  triggerOpens.forEach((triggerOpen) => {
    triggerOpen.addEventListener('click', function () {
      if (!this.parentNode.classList.contains('open')) {
        this.parentNode.classList.add('open');
      } else {
        this.parentNode.classList.remove('open');
        const childOpen = this.parentNode.querySelector('.open');
        if (childOpen) {
          childOpen.classList.remove('open');
        }
      }
    });
  });
}

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

        const headerHight = 120;

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
        const headerHeight = 70;
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

// homeのlist
const listItems = document.querySelectorAll(
  '.component-list .list-search-list-term'
);
// console.log(listItems);

listItems.forEach((listItem) => {
  listItem.addEventListener('click', function (event) {
    // 全てのメニューアイテムから .active クラスを削除
    listItems.forEach((item) => {
      item.classList.remove('active');
    });

    listItem.classList.add('active');
  });
});

// scroll hint
new ScrollHint('.js-scrollable', {
  i18n: {
    scrollable: 'スクロール',
  },
});

// タブ切り替え
document.addEventListener('DOMContentLoaded', function () {
  // id=tab-changeの名前空間内のタブclass=quick-tab-itemを取得
  const tabTabs = document.querySelectorAll('#tab-change .quick-tab-item');
  const tabItems = document.querySelectorAll('#tab-change .quick-item');

  // タブをクリックした時の処理
  tabTabs.forEach((tab, index) => {
    tab.addEventListener('click', function () {
      // タブのアクティブ状態を切り替える
      tabTabs.forEach((tab) => {
        tab.classList.remove('active');
      });
      tab.classList.add('active');

      console.log(tabItems);
      // タブに対応するコンテンツを表示する
      tabItems.forEach((item) => {
        item.classList.remove('active');
      });
      tabItems[index].classList.add('active');
    });
  });
});
