"use strict";

// Выбор элемента
// console.log(document.querySelector(`.guess-message`));

// Вывод текста из тэге в консоль
// console.log(document.querySelector(`.guess-message`).textContent);

// Изменение текта
// document.querySelector(`.guess-message`).textContent = `Привильно!`;

// document.querySelector(`.question`).textContent = String(
//   Math.floor(Math.random() * 20)
// );

// Вывод введенного значения
// console.log(document.querySelector(`.number-input`).value);

// const everHand = function () {
//   console.log(document.querySelector(`.number-input`).value);
// };

// +1 для вывода 1-20, иначе будет 0-19
let secretNumber = Math.trunc(Math.random() * 20) + 1;
let points = 20;
let bestResult = 0;

function displayNumberInput(message) {
  document.querySelector(`.guess-message`).textContent = message;
}
// console.log(secretNumber);
// document.querySelector(`.question`).textContent = secretNumber;
document.querySelector(`.check`).addEventListener(`click`, function () {
  const guessingNumber = Number(document.querySelector(`.number-input`).value);
  // console.log(guessingNumber);
  // Сценарий поведения для Первой строчки
  if (!guessingNumber) {
    // document.querySelector(`.guess-message`).textContent = `Введите число от 1 до 20`;
    displayNumberInput(`Введите число от 1 до 20`);

    // Верно
  } else if (guessingNumber === secretNumber) {
    displayNumberInput(`Правильно!`);
    document.querySelector(`.highscore`).textContent = bestResult = points;
    // Изменение bg
    document.querySelector(`body`).style.backgroundColor = `green`;
    // Ихменение шрифта
    document.querySelector(`.question`).style.width = `50rem`;
    // Показ верного числа
    document.querySelector(`.question`).textContent = secretNumber;
  } else if (guessingNumber !== secretNumber) {
    if (points > 1) {
      displayNumberInput(
        guessingNumber > secretNumber ? `Слишком много!` : `Слишком мало!`
      );
      points -= 1;
      document.querySelector(`.score`).textContent = points;
    } else {
      document.querySelector(`.guess-message`).textContent = `Конец Игры!`;
      document.querySelector(`.score`).textContent = 0;
      // Изменение bg
      document.querySelector(`body`).style.backgroundColor = `red`;
    }

    // Много
  } //else if (guessingNumber > secretNumber) {
  //   if (points > 1) {
  //     document.querySelector(`.guess-message`).textContent = `Слишком много!`;
  //     points -= 1;
  //     document.querySelector(`.score`).textContent = points;
  //   } else {
  //     document.querySelector(`.guess-message`).textContent = `Конец Игры!`;
  //     document.querySelector(`.score`).textContent = 0;
  //     // Изменение bg
  //     document.querySelector(`body`).style.backgroundColor = `red`;
  //   }

  //   // Мало
  // } else if (guessingNumber < secretNumber) {
  //   if (points > 1) {
  //     document.querySelector(`.guess-message`).textContent = `Слишком мало!`;
  //     points -= 1;
  //     document.querySelector(`.score`).textContent = points;
  //   } else {
  //     document.querySelector(`.guess-message`).textContent = `Конец Игры!`;
  //     document.querySelector(`.score`).textContent = 0;
  //     // Изменение bg
  //     document.querySelector(`body`).style.backgroundColor = `red`;
  //   }
  // }
  //
});

// Запуск игры с начала

document.querySelector(`.again`).addEventListener(`click`, function () {
  // Сброс первой строчки
  displayNumberInput(`Начни угадывать`);

  // Сброс очков
  document.querySelector(".score").textContent = points = 20;

  // Сброс секретного числа
  document.querySelector(`.question`).textContent = `???`;
  secretNumber = Math.trunc(Math.random() * 20) + 1;

  // Сброс ввода
  document.querySelector(`.number-input`).value = "";

  // Сброс стилей
  document.querySelector(`body`).style.backgroundColor = `rgb(0, 0, 0)`;
  document.querySelector(`.question`).style.width = `25rem`;
});
