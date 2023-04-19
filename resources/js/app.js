//import './bootstrap';

import { popUp } from './modules/popup.js';

//PopUp
const popupButtons = document.querySelectorAll('.link-on-popup');

popupButtons.forEach(btn => {
  btn.addEventListener('click', (e) => {
    popUp(e.target.dataset.popupId);
  });
})

//Переключение языков (комп и мобилка)
const languageBtn = document.querySelectorAll('.language-btn');
languageBtn.forEach(btn => {
  btn.addEventListener('click', function (e) {
    if (window.matchMedia("(pointer: coarse)").matches) { // Устройства со стилусом
      if (!btn.classList.contains('active')) {
        e.preventDefault()
      }
      btn.classList.toggle('active');
    }
  });
})

//Async form sending
const mainForm = document.getElementById('mainForm');

if (mainForm) {
  const token = document.querySelector('input[name="_token"]').value;
  const errorsMessagesUA = {
    name: ['Не заполнено поле "ВАШЕ ИМЯ"', 'Не заповнено поле "ВАШЕ ІМ\'Я"', 'Поле \"ИМЯ\" должно иметь 2 или больше символов', 'Поле "ІМ\'Я" повинно мати 2 або більше символів', 'Поле \"ИМЯ\" должно иметь не больше 80 символов', 'Поле "ІМ\'Я" повинно мати не більше 80 символів', 'Поле \"ИМЯ\" не может содержать цифры', 'Поле "ІМ\'Я" не може містити цифри'],
    phone: ['Не верный формат номера телефона', 'Невірний формат номеру телефона', 'Не заполнено поле "Номер телефона"', 'Не заповнено поле "Номер телефону"',],
    text: ['Вы ввели слишком много символов в поле "Сообщение"', 'Ви ввели занадто багато символів у полі "Повідомлення"']
  }
  const nameError = mainForm.querySelector('.error-name');
  const phoneError = mainForm.querySelector('.error-phone');

  mainForm.addEventListener('submit', async (e) => {
    e.preventDefault();
    const formData = new FormData(mainForm);
    try {
      const response = await fetch('https://eltop.artgas.pro/send-main-form', {
        headers: {
          "Accept": "application/json",
          "X-Requested-With": "XMLHttpRequest",
          "X-CSRF-Token": token
        },
        method: 'post',
        body: formData,
        credentials: "same-origin",
      })
      if (response.ok) {
        console.log('SEND WORK!');
        mainForm.closest('.popup').classList.add('sent');
        nameError.innerText = '';
        nameError.previousElementSibling.classList.remove('error');
        nameError.previousElementSibling.previousElementSibling.classList.remove('error');
        phoneError.innerText = '';
        phoneError.previousElementSibling.classList.remove('error');
        phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
        mainForm.reset();
        //return
      } else {
        const data = await response.json();
        if (mainForm.classList.contains('ru')) {
          if (data.errors?.name) {
            nameError.innerText = data.errors?.name[0];
            nameError.previousElementSibling.classList.add('error');
            nameError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            nameError.innerText = '';
            nameError.previousElementSibling.classList.remove('error');
            nameError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          if (data.errors?.phone) {
            phoneError.innerText = data.errors?.phone[0];
            phoneError.previousElementSibling.classList.add('error');
            phoneError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            phoneError.innerText = '';
            phoneError.previousElementSibling.classList.remove('error');
            phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          //data.errors?.name ? mainForm.querySelector('.error-name').innerText = data.errors?.name[0] : mainForm.querySelector('.error-name').innerText = "";
          //data.errors?.phone ? mainForm.querySelector('.error-phone').innerText = data.errors?.phone[0] : mainForm.querySelector('.error-phone').innerText = "";
          //data.errors?.text ? mainForm.querySelector('.error-text').innerText = data.errors?.text[0] : mainForm.querySelector('.error-text').innerText = "";
        } else {
          if (data.errors?.name) {
            nameError.innerText = errorsMessagesUA.name[errorsMessagesUA.name.findIndex(msg => msg == data.errors.name[0]) + 1];
            nameError.previousElementSibling.classList.add('error');
            nameError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            nameError.innerText = '';
            nameError.previousElementSibling.classList.remove('error');
            nameError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          if (data.errors?.phone) {
            phoneError.innerText = errorsMessagesUA.phone[errorsMessagesUA.phone.findIndex(msg => msg == data.errors.phone[0]) + 1];
            phoneError.previousElementSibling.classList.add('error');
            phoneError.previousElementSibling.previousElementSibling.classList.add('error');
          } else {
            phoneError.innerText = '';
            phoneError.previousElementSibling.classList.remove('error');
            phoneError.previousElementSibling.previousElementSibling.classList.remove('error');
          }
          // data.errors?.name ? mainForm.querySelector('.error-name').innerText = errorsMessagesUA.name[errorsMessagesUA.name.findIndex(msg => msg == data.errors.name[0]) + 1] : mainForm.querySelector('.error-name').innerText = "";
          // data.errors?.phone ? mainForm.querySelector('.error-phone').innerText = errorsMessagesUA.phone[errorsMessagesUA.phone.findIndex(msg => msg == data.errors.phone[0]) + 1] : mainForm.querySelector('.error-phone').innerText = "";
          // data.errors?.text ? mainForm.querySelector('.error-text').innerText = errorsMessagesUA.text[errorsMessagesUA.text.findIndex(msg => msg == data.errors.text[0]) + 1] : mainForm.querySelector('.error-text').innerText = "";
        }
      }
    } catch (e) {
      console.log(e);
    }
  });
}

//Animation header icons
if (window.matchMedia("(pointer: fine)").matches) {
  const headerContacts = document.querySelectorAll(".header__contacts-contact");

  headerContacts.forEach(contact => {
    contact.addEventListener('mouseenter', (e) => {
      e.target.closest('.header__contacts-content').previousElementSibling.classList.add('active');
    });
    contact.addEventListener('mouseleave', (e) => {
      e.target.closest('.header__contacts-content').previousElementSibling.classList.remove('active');
    });
  })
}


//Menu burger
const menuBtn = document.querySelector('.icon-menu');
const burger = document.querySelector('.burger');
const headerBackground = document.querySelector('.burger-bg');
const body = document.querySelector('body');
menuBtn.addEventListener('click', function () {
  menuBtn.classList.toggle('open');
  burger.classList.toggle('open');
  headerBackground.classList.toggle('open');
  body.classList.toggle('lock');
});

window.onresize = () => {
  if (menuBtn.classList.contains('open')) menuBtn.classList.remove('open');
  if (burger.classList.contains('open')) burger.classList.remove('open');
  if (headerBackground.classList.contains('open')) headerBackground.classList.remove('open');
  if (body.classList.contains('lock')) body.classList.remove('lock');
};