// メイン
const pageStep = document.querySelector(
  'body.page-template-membership, body.page-template-formentry'
);
if (pageStep) {
  document.addEventListener('DOMContentLoaded', function () {
    let uniqueRequiredNames = getNames();
    const postedData = cf7msm_posted_data;

    // 初期チェック
    if (!postedData['your-acceptance']) {
      resetData();
      uniqueRequiredNames.forEach((name) => {
        const radioElement = document.querySelector(
          `input[type="radio"][name="${name}"]:checked`
        );
        if (radioElement) {
          console.log(radioElement);
          radioElement.closest('.wpcf7-radio').classList.add('add_data');
        }
      });
    } else {
      uniqueRequiredNames.forEach((name) => {
        if (postedData[name] !== '') {
          const textElement = document.querySelector(
            `input[type="text"][name="${name}"] `
          );
          if (textElement) {
            textElement.classList.add('add_data');
          }
          const mailElement = document.querySelector(
            `input[type="email"][name="${name}"] `
          );
          if (mailElement) {
            mailElement.classList.add('add_data');
          }
          const telElement = document.querySelector(
            `input[type="tel"][name="${name}"] `
          );
          if (telElement) {
            telElement.classList.add('add_data');
          }
          const selectElement = document.querySelector(
            `select[name="${name}"] `
          );
          if (selectElement) {
            selectElement.classList.add('add_data');
          }
        }
      });
    }

    //  読み込み時にバインド
    uniqueRequiredNames.forEach((name) => {
      changeAlert(name);
    });
  });
}
// メインここまで

// リセット操作をした時
document.querySelector('.wpcf7-reset').addEventListener('click', function () {
  resetData();
  checkEmpty();
});

// 確認画面で送信する時
// const contactFormRequestSend = document.getElementById(
//   'contact-form-flower-send'
// );
// if (contactFormRequestSend) {
//   document.addEventListener(
//     'wpcf7submit',
//     function (event) {
//       resetData();
//     },
//     false
//   );
// }

// このページから遷移する前saveDataを実行
// window.addEventListener('beforeunload', function (e) {
//   saveData();
// });

// 入力ごとにチェック
function changeAlert(name) {
  const textElement = document.querySelector(
    `input[type="text"][name="${name}"]`
  );
  if (textElement) {
    textElement.addEventListener('blur', function () {
      if (textElement.value === '') {
        textElement.classList.remove('add_data');
      } else {
        textElement.classList.add('add_data');
      }
      checkEmpty();
    });
  }

  const mailElement = document.querySelector(
    `input[type="email"][name="${name}"]`
  );
  if (mailElement) {
    mailElement.addEventListener('blur', function () {
      if (mailElement.value === '') {
        mailElement.classList.remove('add_data');
      } else {
        mailElement.classList.add('add_data');
        const val = mailElement.value;
        const val2 = replaceZtoH(val);
        mailElement.value = val2;
      }
      checkEmpty();
    });
  }

  const telElement = document.querySelector(
    `input[type="tel"][name="${name}"]`
  );
  if (telElement) {
    telElement.addEventListener('blur', function () {
      if (telElement.value === '') {
        telElement.classList.remove('add_data');
      } else {
        telElement.classList.add('add_data');
        const val = telElement.value;
        const val2 = replaceZtoH(val);
        telElement.value = val2;
      }
      checkEmpty();
    });
  }

  const selectElement = document.querySelector(`select[name="${name}"]`);
  if (selectElement) {
    selectElement.addEventListener('change', function () {
      if (selectElement.value === '') {
        selectElement.classList.remove('add_data');
      } else {
        selectElement.classList.add('add_data');
        const val = selectElement.value;
        const val2 = replaceZtoH(val);
        selectElement.value = val2;
      }
      checkEmpty();
    });
  }

  const textareaElement = document.querySelector(`textarea[name="${name}"]`);
  if (textareaElement) {
    textareaElement.addEventListener('blur', function () {
      if (textareaElement.value === '') {
        textareaElement.classList.remove('add_data');
      } else {
        textareaElement.classList.add('add_data');
        const val = selectElement.value;
        const val2 = replaceZtoH(val);
        textareaElement.value = val2;
      }
      checkEmpty();
    });
  }

  let radioElements = document.querySelectorAll(
    `input[type="radio"][name="${name}"]`
  );
  if (radioElements) {
    radioElements.forEach((radioElement) => {
      radioElement.addEventListener('change', function () {
        if (radioElement.checked) {
          radioElement.closest('.wpcf7-radio').classList.add('add_data');
        } else {
          radioElement.closest('.wpcf7-radio').classList.remove('add_data');
        }
        checkEmpty();
      });
    });
  }
}

// 全角英数字を半角英数字に変換
function replaceZtoH(str) {
  return str.replace(/[！-～]/g, function (s) {
    return String.fromCharCode(s.charCodeAt(0) - 0xfee0);
  });
}

// 空欄チェックして、空欄の数を表示
function checkEmpty() {
  setTimeout(() => {
    const uniqueRequiredNames = getNameCount();
    const setNumCount = uniqueRequiredNames.length;
    const setNumElement = document.getElementById('set-num');
    setNumElement.textContent = setNumCount;
    const addNum = document.getElementById('add-num');
    let addDataElements = document.querySelectorAll('.add_data');
    addDataElements = Array.from(addDataElements).filter((element) => {
      return !element.closest('.wpcf7cf-hidden');
    });
    const addDataCount = addDataElements.length;
    addNum.textContent = setNumCount - addDataCount;
  }, 500);
}

// 必須入力項目のnameを取得
function getNames() {
  let requiredElements = document.querySelectorAll(
    '.wpcf7-validates-as-required, input[type="radio"]'
  );

  const requiredNames = Array.from(requiredElements).map((element) => {
    return element.getAttribute('name');
  });

  const uniqueRequiredNames = [...new Set(requiredNames)];
  return uniqueRequiredNames;
}

// 全ての入力項目のnameを取得
function getAllNames() {
  let requiredElements = document.querySelectorAll(
    '.wpcf7-form-control, input[type="radio"]'
  );

  const requiredNames = Array.from(requiredElements).map((element) => {
    return element.getAttribute('name');
  });

  const uniqueRequiredNames = [...new Set(requiredNames)];
  return uniqueRequiredNames;
}

// 必須入力項目のnameをカウント
function getNameCount() {
  let requiredElements = document.querySelectorAll(
    '.wpcf7-validates-as-required, input[type="radio"]'
  );

  requiredElements = Array.from(requiredElements).filter((element) => {
    return !element.closest('.wpcf7cf-hidden');
  });
  const requiredNames = Array.from(requiredElements).map((element) => {
    return element.getAttribute('name');
  });

  const uniqueRequiredNames = [...new Set(requiredNames)];
  return uniqueRequiredNames;
}

function saveData() {
  const allNames = getAllNames();
  let values = {};
  allNames.forEach((name) => {
    const textElement = document.querySelector(
      `input[type="text"][name="${name}"]`
    );
    if (textElement) {
      values[name] = textElement.value;
    }
    const mailElement = document.querySelector(
      `input[type="email"][name="${name}"]`
    );
    if (mailElement) {
      values[name] = mailElement.value;
    }
    const telElement = document.querySelector(
      `input[type="tel"][name="${name}"]`
    );
    if (telElement) {
      values[name] = telElement.value;
    }
    const selectElement = document.querySelector(`select[name="${name}"]`);
    if (selectElement) {
      values[name] = selectElement.value;
    }
    const textareaElement = document.querySelector(`textarea[name="${name}"]`);
    if (textareaElement) {
      values[name] = textareaElement.value;
    }
    const radioElement = document.querySelector(
      `input[type="radio"][name="${name}"]:checked`
    );
    if (radioElement) {
      values[name] = radioElement.value;
    }
  });
  localStorage.setItem('cf7msm_posted_data', JSON.stringify(values));
}

// データをリセット
function resetData() {
  console.log('resetData');
  const uniqueRequiredNames = getNames();
  uniqueRequiredNames.forEach((name) => {
    const textElement = document.querySelector(
      `input[type="text"][name="${name}"] `
    );
    if (textElement) {
      textElement.classList.remove('add_data');
    }
    const mailElement = document.querySelector(
      `input[type="email"][name="${name}"] `
    );
    if (mailElement) {
      mailElement.classList.remove('add_data');
    }
    const telElement = document.querySelector(
      `input[type="tel"][name="${name}"] `
    );
    if (telElement) {
      telElement.classList.remove('add_data');
    }
    const selectElement = document.querySelector(`select[name="${name}"] `);
    if (selectElement) {
      selectElement.classList.remove('add_data');
    }
    const textareaElement = document.querySelector(`textarea[name="${name}"] `);
    if (textareaElement) {
      textareaElement.classList.remove('add_data');
    }
    const radioElement = document.querySelector(
      `input[type="radio"][name="${name}"]:checked`
    );
    if (radioElement) {
      radioElement.closest('.wpcf7-radio').classList.remove('add_data');
      radioElement.checked = false;
    }
  });
  checkEmpty();
  document.cookie =
    'cf7msm_posted_data=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;';
  localStorage.removeItem('cf7msm_posted_data');
}

// データを読み込む
function loadData() {
  // locastrage cf7msm_posted_dataが存在すれば、ループさせて該当するnameのinputに値を入れる
  if (localStorage.getItem('cf7msm_posted_data')) {
    const postedData = JSON.parse(localStorage.getItem('cf7msm_posted_data'));
    const uniqueNames = getAllNames();
    const uniqueRequiredNames = getNames();
    uniqueNames.forEach((name) => {
      const textElement = document.querySelector(
        `input[type="text"][name="${name}"]`
      );
      if (textElement && postedData[name]) {
        textElement.value = postedData[name];
        if (uniqueRequiredNames.includes(name)) {
          textElement.classList.add('add_data');
        }
      }
      const mailElement = document.querySelector(
        `input[type="email"][name="${name}"]`
      );
      if (mailElement && postedData[name]) {
        mailElement.value = postedData[name];
        mailElement.classList.add('add_data');
      }
      const telElement = document.querySelector(
        `input[type="tel"][name="${name}"]`
      );
      if (telElement && postedData[name]) {
        telElement.value = postedData[name];
        telElement.classList.add('add_data');
      }
      const selectElement = document.querySelector(`select[name="${name}"]`);
      if (selectElement && postedData[name]) {
        selectElement.value = postedData[name];
        selectElement.classList.add('add_data');
      }
      const textareaElement = document.querySelector(
        `textarea[name="${name}"]`
      );
      if (textareaElement && postedData[name]) {
        textareaElement.value = postedData[name];
        textareaElement.classList.add('add_data');
      }
      const radioElement = document.querySelector(
        `input[type="radio"][name="${name}"][value="${postedData[name]}"]`
      );
      if (radioElement && postedData[name]) {
        radioElement.checked = true;
        radioElement.closest('.wpcf7-radio').classList.add('add_data');
      }
    });
  }
}
