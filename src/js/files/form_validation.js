function isValidPhone(p) {
  var phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/g;
  var digits = p.replace(/\D/g, "");
  return phoneRe.test(digits);
}

function isValidEmail(value) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(value);
}

function isValidName(value) {
  return /^[а-яА-Яa-zA-Z]+$/.test(value);
}





const userEmail = document.querySelector("#userEmail");
const userPhone = document.querySelector("#userPhone");
const userName = document.querySelector("#userName");

userPhone?.addEventListener("input", function () {
  if (!isValidPhone(userPhone.value)) {
    userPhone.classList.add("_notvalid");
  } else {
    userPhone.classList.remove("_notvalid");
  }
});

userEmail?.addEventListener("input", function () {
  if (!isValidEmail(userEmail.value)) {
    userEmail.classList.add("_notvalid");
  } else {
    userEmail.classList.remove("_notvalid");
  }
});

userName?.addEventListener("input", function () {
  if (!isValidName(userName.value)) {
    userName.classList.add("_notvalid");
  } else {
    userName.classList.remove("_notvalid");
  }
});

const form = document.querySelector("#form-feedback");
form?.addEventListener("submit", async function (e) {
  e.preventDefault();

  let isValid =
    isValidEmail(userEmail.value) &&
    isValidPhone(userPhone.value) &&
    isValidName(userName.value);

  let formData = new FormData(form);

  if (isValid) {
    form.classList.add("_sending");

    let response = await fetch("mail.php", {
      method: "POST",
      body: formData,
    });


    if (response.ok) {
      let result = await response.json();
      let alertMsg = document.querySelector(".feedback__wrap .form__success");
      alertMsg.classList.add("_show__success");
      form.reset();
      form.classList.remove("_sending");
      let msg = document.querySelector(".popup__alert");
      msg.innerHTML ='';
    } else {
      let alertMsg = document.querySelector("#form-feedback .popup__alert");
      alertMsg.innerHTML = '<p class="alert__msg" >Помилка! Спробуйте пізніше</p>';
      alertMsg.classList.add("_show");
      console.log(response.data);
      form.classList.remove("_sending");
    }
  } else {
    let alertMsg = document.querySelector("#form-feedback .popup__alert");
    alertMsg.innerHTML =
      '<p class="alert__msg" >Заповніть будь ласка порожні поля!!!</p>';
    alertMsg.classList.add("_show");
    // alert("Fill in required fields!");
  }
});


const popupUserName = document.querySelector('#popupUserName');
const popupUserPhone = document.querySelector('#popupUserPhone');

popupUserName?.addEventListener('input', function() {
  if (!isValidName(popupUserName.value)) {
    popupUserName.classList.add("_notvalid");
  } else {
    popupUserName.classList.remove("_notvalid");
  }
});

popupUserPhone?.addEventListener('input', function() {
  if (!isValidPhone(popupUserPhone.value)) {
    popupUserPhone.classList.add("_notvalid");
  } else {
    popupUserPhone.classList.remove("_notvalid");
  }
});

const popupPorm = document.querySelector("#popup-form");
popupPorm?.addEventListener("submit", async function (e) {
  e.preventDefault();

  let isValid =
    isValidPhone(popupUserPhone.value) &&
    isValidName(popupUserName.value);

  let formData = new FormData(popupPorm);

  if (isValid) {
    popupPorm.classList.add("_sending");

    let response = await fetch("mail.php", {
      method: "POST",
      body: formData,
    });

    if (response.ok) {
      let result = await response.json();
      let alertMsg = document.querySelector("#popup-form .form__success");
      alertMsg.classList.add("_show__success");
      popupPorm.reset();
      popupPorm.classList.remove("_sending");
      let msg = document.querySelector(".popup__alert");
      msg.innerHTML ='';
    } else {
      let alertMsg = document.querySelector("#popup-form .popup__alert");
      alertMsg.innerHTML = '<p class="alert__msg" >Помилка! Спробуйте пізніше</p>';
      alertMsg.classList.add("_show");
      console.log(response.data);
      popupPorm.classList.remove("_sending");
    }
  } else {
    let alertMsg = document.querySelector("#popup-form .popup__alert");
    alertMsg.innerHTML =
      '<p class="alert__msg" >Заповніть будь ласка порожні поля!!!</p>';
    alertMsg.classList.add("_show");
    // alert("Fill in required fields!");
  }
});
