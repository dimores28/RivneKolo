function isValidPhone(p) {
  var phoneRe = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/g;
  var digits = p.replace(/\D/g, "");
  return phoneRe.test(digits);
}

function isValidEmail(value) {
  return /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(value);
}

function isValidLastName(value) {
  return /\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/.test(value);
}

function isValidName(value) {
  return /\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/.test(value);
}

function isValidZipCode(value) {
  return /^(?:[0-9a-zA-Z]+([- ]?[0-9a-zA-Z]+)*)?$/.test(value);
}

function isValidAdress(value) {
  return /^(?![ -.&,_'":?!/])(?!.*[- &_'":]$)(?!.*[-.#@&,:?!/]{2})[a-zA-Z0-9- .#@&,_'":.?!/]+$/.test(
    value
  );
}

function isValidCityName(value) {
  return /^\s*[a-zA-Z]{1}[0-9a-zA-Z][0-9a-zA-Z '-.=#/]*$/.test(value);
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

const form = document.querySelector("#form");
form?.addEventListener("submit", async function (e) {
  e.preventDefault();

  let error =
    isValidEmail(userEmail.value) &&
    isValidPhone(userPhone.value) &&
    isValidName(userName.value);

  let formData = new FormData(form);

  if (error) {
    form.classList.add("_sending");

    let response = await fetch("mail.php", {
      method: "POST",
      body: formData,
    });

    if (response.ok) {
      let result = await response.json();
      let alertMsg = document.querySelector(".form__success");
      alertMsg.innerHTML =
        ' <p class="form__success-msg">Дякуємо! ваша заявка прийнята</p><img class="form__success-mark" src="@img/feedback/ok_mark.png" alt="ok-mark"/>';
      alertMsg.classList.add("_show__success");
      form.reset();
      form.classList.remove("_sending");
    } else {
      let alertMsg = document.querySelector(".popup__alert");
      alertMsg.innerHTML = '<p class="alert__msg" >Error!!!</p>';
      alertMsg.classList.add("_show");
      console.log(response.data);
      form.classList.remove("_sending");
    }
  } else {
    let alertMsg = document.querySelector(".popup__alert");
    alertMsg.innerHTML =
      '<p class="alert__msg" >Fill in required fields!!!</p>';
    alertMsg.classList.add("_show");
    // alert("Fill in required fields!");
  }
});
