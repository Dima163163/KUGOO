let currentModal; // текущее модальное окно
let modalDialog; // белое диалоговое окно
let alertModal = document.querySelector("#alert-modal"); // окно с предупреждением

const modalButtons = document.querySelectorAll("[data-toggle=modal]"); // переключатели модальных окон
modalButtons.forEach((button) => {
  /* клик по переключателю */
  button.addEventListener("click", (event) => {
    event.preventDefault();
    /* определяем текущее открытое окно */
    currentModal = document.querySelector(button.dataset.target);
    /* открываем текущее окно */
    currentModal.classList.toggle("is-open");
    /* назначаем диалоговое окно */
    modalDialog = currentModal.querySelector(".modal-dialog");
    /* отслеживаем клик по окну и пустым областям */
    currentModal.addEventListener("click", (event) => {
      /* если клик в пустую область (не диалог)*/
      if (!event.composedPath().includes(modalDialog)) {
        /* закрываем оно */
        currentModal.classList.remove("is-open");
      }
    });
  });
});
/* ловим событие нажатия на кнопки */
document.addEventListener("keyup", (event) => {
  /* проверяем, что  это Escape и текущее оно открыто  */
  if (event.key == "Escape" && currentModal.classList.contains("is-open")) {
    /* закрываем текущее окно */
    currentModal.classList.toggle("is-open");
  }
});

/* Создаем префикс +7, даже если вводят 8 или 9 */
const prefixNumber = (str) => {
  /* если вводят семерку, добавляем ей скобку */
  if (str === "7") {
    return "7 (";
  }
  /* если вводят восьмерку, ставим вместо нее +7 ( */
  if (str === "8") {
    return "+7 (";
  }
  /* если пишут девятку, заменяем на +7 (9  */
  if (str === "9") {
    return "7 (9";
  }
  /* в других случаях просто 7 (  */
  return "7 (";
}; /* профикс в любом раскладе будет +7 () */

/* Ловим события ввода в любом поле */
document.addEventListener("input", (e) => {
  /* Проверяем, что это поле имеет класс phone-mask */
  if (e.target.classList.contains("phone-mask")) {
    /* поле с телефоном помещаем в переменную input */
    const input = e.target;
    /* вставляем плюс в начале номера */
    const value = input.value.replace(/\D+/g, "");
    /* длинна номера 11 символов */
    const numberLength = 11;

    /* Создаем переменную, куда будем записывать номер */
    let result;
    /* Если пользователь ввел 8... */
    if (input.value.includes("+8") || input.value[0] === "8") {
      /* Стираем восьмерку */
      result = "";
    } else {
      /* Оставляем плюсик в поле */
      result = "+";
    }

    /* Запускаем цикл, где переберем каждую цифру от 0 до 11 */
    for (let i = 0; i < value.length && i < numberLength; i++) {
      switch (i) {
        case 0:
          /* в самом начале ставим префикс +7 ( */
          result += prefixNumber(value[i]);
          continue;
        case 4:
          /* добавляем после "+7 (" круглую скобку ")" */
          result += ") ";
          break;
        case 7:
          /* дефис после 7 символа */
          result += "-";
          break;
        case 9:
          /* еще дефис  */
          result += "-";
          break;
        default:
          break;
      }
      /* на каждом шаге цикла добавляем новую цифру к номеру */
      result += value[i];
    }
    /* итог: номер в формате +7 (999) 123-45-67 */
    input.value = result;
  }
});

const formsEmail = document.querySelectorAll(".user-email-form"); // Собираем формы
formsEmail.forEach((formEmail) => {
  const validation = new JustValidate(formEmail, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=useremail]", [
      {
        rule: "required",
        errorMessage: "Укажите email",
      },
      {
        rule: "email",
        errorMessage: "Укажите email",
      },
      {
        rule: "minLength",
        value: 15,
        errorMessage: "Минимум 15 символов",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // наша форма
      const formDataEmail = new FormData(thisForm); // данные из нашей формы
      const ajaxSend = (formDataPhone) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formDataEmail,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alertModal.classList.add("is-open");
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formDataEmail);
    });
});

const formsPhone = document.querySelectorAll(".user-phone-form"); // Собираем формы
formsPhone.forEach((formPhone) => {
  const validation = new JustValidate(formPhone, {
    errorFieldCssClass: "is-invalid",
  });
  validation
    .addField("[name=userphone]", [
      {
        rule: "required",
        errorMessage: "Укажите телефон",
      },
      {
        rule: "minLength",
        value: 18,
        errorMessage: "Введите все цифры",
      },
    ])
    .onSuccess((event) => {
      const thisForm = event.target; // наша форма
      const formDataPhone = new FormData(thisForm); // данные из нашей формы
      const ajaxSend = (formDataPhone) => {
        fetch(thisForm.getAttribute("action"), {
          method: thisForm.getAttribute("method"),
          body: formDataPhone,
        }).then((response) => {
          if (response.ok) {
            thisForm.reset();
            alertModal.classList.add("is-open");
            currentModal.classList.remove("is-open");
            alertModal.classList.add("is-open");
            currentModal = alertModal;
            modalDialog = currentModal.querySelector(".modal-dialog");
            currentModal.addEventListener("click", (event) => {
              if (!event.composedPath().includes(modalDialog)) {
                currentModal.classList.remove("is-open");
              }
            });
          } else {
            alert("Ошибка. Текст ошибки: ".response.statusText);
          }
        });
      };
      ajaxSend(formDataPhone);
    });
});
