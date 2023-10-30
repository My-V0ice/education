"use strict";

// Создание переменных с классамы объектов

// Class modal-window - модально окно
const modalWindow = document.querySelector(`.modal-window`);
// Clsss overlay - размытие bg
const overlay = document.querySelector(`.overlay`);
// Class close-modal-window - закрытие окна
const btnCloseModalWindow = document.querySelector(`.close-modal-window`);
// Class Show-madol-seletcor - показать окно
const btnShowModalWindows = document.querySelectorAll(`.show-modal-window`); //Для выбора всех кнопок используется querySelectorAll

function CloseWindow() {
  // Добавление класса hidden
  modalWindow.classList.add(`hidden`);
  overlay.classList.add(`hidden`);
}

function openWindow() {
  // один из способов показа модального окна
  // modalWindow.style.display = `block`;

  // Удаление класса hidden
  modalWindow.classList.remove(`hidden`); // для показа модального
  overlay.classList.remove(`hidden`); // для блюра
}

// Обработчик действий кнопок открытия модального окна
for (let i = 0; i < btnShowModalWindows.length; i += 1) {
  btnShowModalWindows[i].addEventListener(`click`, openWindow);
}

// закрытие окна

// По кнопке
btnCloseModalWindow.addEventListener(`click`, CloseWindow);

// По заднему плану
overlay.addEventListener(`click`, CloseWindow);

// Закрытие при помощи ESC на клавиатуре
/*
keyup - клавиша поднята вверх, т.е. уже нажата и отпущена 
keydown - клавиша опущена вниз
keypress - клавиша зажата
*/
function btnCloseWindow(e) {
  // Для вывода названия клавиши
  // console.log(e.key);

  //Закрытие по нажитию
  // Проверка открыто ли окно
  if (e.key === `Escape` && !modalWindow.classList.contains("hidden")) {
    CloseWindow();
  }
}

document.addEventListener(`keydown`, btnCloseWindow);
