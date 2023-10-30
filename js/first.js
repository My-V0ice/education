"use strict";
// const celsiusToKelvin = function () {
//   const measurement = {
//     type: "temp",
//     unit: "celsius",
//     value: Number(prompt("Temperature in Celsius: ")),
//   };
//   // Вывод объекта в виде таблицы
//   console.table(measurement);
//   const kelvin = measurement.value + 273;
//   // // Предупреждение
//   // console.warn(measurement.value);
//   // // Ошибка
//   // console.error(measurement.value);
//   return kelvin;
// };

// console.log(celsiusToKelvin());

// Данные погоды
const Data1 = [49, 51, 63];
const Data2 = [31, 29, 43, 58, 52];

printHumiditiesForecast(Data2);
// printHumiditiesForecast(Data1);
function printHumiditiesForecast(Data) {
  let i = 0;
  let text = ``;
  while (i < Data.length) {
    // console.log(Data[i]);
    i += 1;
    text += `... ${Data[i - 1]}% humidity in ${i} days`;
    // console.log(`... ${Data[i - 1]}% humidity in ${i} days`);
  }
  console.log(text);
}

// Моя ошибка была в добавлении return в конце функции

// printHumiditiesForecast(Data1);

// const printHumiditiesForecast = function (arr) {
//   let str = "";

//   for (let i = 0; i < arr.length; i++) {
//     str = str + `... ${arr[i]}% humidity in ${i + 1} days`;
//   }
//   console.log(str);
// };

// printHumiditiesForecast(Data1);
