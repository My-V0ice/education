// Создание объекта

// let user = {
//     name: `Ilya`,
//     age: 19,
//     gender: 'male'
// };

// console.log(user);

// Тоже самое, только с conts и с изменением переменных в нем
// const user2 = {
//     name: `Ivan`,
//     age: 20,
//     gender: `male`
// };

// console.log(user2);

// user2.age = 19;

// console.log(user2);

// Добавление в объект данных

// user2.dota = `2`;

// console.log(user2);

// Массив 

// const array = [
//     `1`,
//     `2`,
//     `3`
// ];

// console.log(array[0]);

// Добавление в массив данных 

// array.push(`red`);

// console.log(array[3].toLocaleUpperCase());


// Преобразование в строку
// let x = 111;
// console.log(typeof x);
// console.log(String(x));

// x = String(x);
// console.log(typeof x);

// еще один способ 

// let x = 1234;
// x = x.toString();
// console.log(x.length);

// Преобразование в число


// let x = `1.3434242`;

// // x = Number(x);
// // // Вывод количества чисел
// // console.log(x.toPrecision(5))

// x = String(x);

// // распознование целого числа

// // x = parseInt(x);

// // и десятичного числа

// x = parseFloat(x);

// console.log(x);


// **********************************
// Округдение 

// let x = 3.5;
// // Стандартное
// console.log(Math.round(x));
// // В меньшую 
// console.log(Math.floor(x));
// // в большую 
// console.log(Math.ceil(x));

// // кв корень 

// let y = 121;
// console.log(Math.sqrt(y));

// модуль 

// let z = -333;
// console.log(Math.abs(z));


// возведение в степень
// let x = 11;

// console.log(Math.pow(x, 2));

// случвйны значения десятичных чисел

// console.log(Math.random())


// получение рандомного числа от 1 до 100
// let x = Math.floor(Math.random() * 100);

// console.log(x);

// Поиск индекса по симлову 

// let x = `Let`;
// let = y = x.indexOf(`e`);

// console.log(x.indexOf(`e`));

// console.log(y);

// поиск буквы по индексу 

// let x = `ILU - I Love You`;

// console.log(x.charAt(1));
// // извлечение символов из переменных

// // substring()
// let y = x.substring(0 ,3);
// console.log(y);

// // slice()

// y = x.slice(0, 3);
// console.log(y);

// let text = `Text for u`;
// // полчуние массива из строки 
// let resute = text.split(' ');

// console.log(resute);

// console.log(resute[1])

// resute.push(`hello`);

// console.log(resute);

// // Замена слова в строке 

// resute = text.replace(`Text`, `Love`);

// console.log(resute);

// // Проверка на содержимое 

// console.log(resute.includes(`Loves`));

// // Вывод на страницу

// const name2 = 'Ilya';
// const age = '19';
// const gender = 'male'
// const location2 = 'Hbk';
// const text = `<h1>People</h1>
// <ul>
//     <li>Имя: ${name2}</li>
//     <li>Возраст: ${age}</li>
//     <li>Пол: ${gender}</li>
//     <li>Место положение: ${location2}</li>
// </ul>`;

// document.body.innerHTML = text;


// Falsy значения 
// 0, '', undefined, null, NaN

// console.log(Boolean(0));
// console.log(Boolean(''));
// console.log(Boolean(undefined));
// console.log(Boolean(null));
// console.log(Boolean(NaN));

// switch
// let x = `two`;
// switch (x){
//     case `two`:
//         console.log(`Aga`);
//         break;
//     case `one`:
//         console.log(`Nea`);
//         break;
//     default:
//         console.log(`Udu`);
// }

// тернарный оператор 

// const num1 = 100;
// const num2 = 50;

// num1 >= num2 ? console.log(`${num1} > or = ${num2} ?`) : console.log(`Та я шо знаю.`)


// let age = 17;

// age >= 18 ? console.log(`Иди за пивом`) : console.log(`Мальчик, иди нахуй`);

// Строгий режим. Помогает легко найти ошибки в коде.
// 'use strict';
// Для полного понимая используй этот код и закоментируй "use strict"

// Так же помогает определять зарезервированые имена переменных 

// let hasCertificate = false;
// const passExam = true;

// if(passExam) hasCetificate = true;
// if(hasCertificate) console.log(`Wow`);

// Функции

// function printText(){
//     console.log(`Pipi`)
// }

// printText();

// function colorisez(item, color){
//     console.log(item, color);

//     let colorisezItem = `The ${item} is ${color}`
//     console.log(colorisezItem);
// // Сохранение данных с помощью return
//     return colorisezItem;
// }

// let pi = colorisez(`desk`, `red`);

// console.log(`The ${pi}`);

// const myAge = function(a, b, c){
//     return c = Math.pow(a, 2) + Math.pow(b, 2);
// }


// const myAge2 = myAge(9, 9)
// console.log(myAge2); 


// Стрелочные функции 

// const myAge = (a, b, c) => c = Math.pow(a, 2) + Math.pow(b, 2);

// let pi = myAge(3, 3)

// console.log(pi);

// Вызов функции в функции 

// function colorMixer(color1, color2){
//     let newColor = color1 + color2;
//     return newColor;
// }


// function colorisez(item, color1, color2){
//     const color = (colorMixer(color1, color2));

//     let colorisezItem = `The ${item} is ${color}`
//     console.log(colorisezItem);
// // Сохранение данных с помощью return
//     return colorisezItem;
// }

// const colorItem = colorisez(`desk`, `red`, `blue`);
// console.log(colorItem)


// // Расчет средних продаж за месяц в квартале
// const getAverage = (month1, month2, month3) => (month1 + month2 + month3) /3;
// // console.log(getAverage(222, 222, 222))

// // Средние значение за квартал

// // The First Quarter

// // Dept 1
// let dept1AverSales1 = (getAverage(35467, 29842, 38501));

// // Dept 2
// let dept2AverSales1 = (getAverage(35467, 29842, 38501));

// // The Second Quarter

// // Dept 1
// let dept1AverSales2 = (getAverage(50301, 121984, 19207));

// // Dept 2
// let dept2AverSales2 = (getAverage(72381, 41562, 29465));


// // console.log(dept1AverSales1, dept2AverSales1, dept1AverSales2, dept2AverSales2)

// const printBonus = function(dept1AverSales, dept2AverSales){
//     if(dept1AverSales > dept2AverSales){
//         const diff = dept1AverSales - dept2AverSales;
        
//         const percent = diff / dept2AverSales * 100;
//         if(percent >= 30){
//             console.log(`Dept 1 will get a bonus of ${percent}%`)
//         }
//         else{
//             console.log(`No bonus`);
//         }
//     }
//     else if(dept1AverSales < dept2AverSales){
//         const diff = dept2AverSales - dept1AverSales;
        
//         const percent = diff / dept1AverSales * 100;
//         if(percent >= 30){
//             console.log(`Dept 2 will get a bonus of ${percent}%`)
//         }
//         else{
//             console.log(`No bonus`);
//         } 
//     }
//     else{
//         console.log(`No bonus`);
//     }
// };

// printBonus(dept1AverSales2, dept2AverSales2)

// Arrays
// Создание
// const Arrays = [ 
//     `red`,
//     `blue`,
//     `green`,
//     `yellow`,
//     `orange`
// ]

// console.log(Arrays[1]);

// // Добавление
// Arrays.push(`GREN`);

// console.log(Arrays);
// // Замена
// Arrays[1] = `BLUE`;

// console.log(Arrays);

// // Добавление в конец 
// Arrays[Arrays.length] = `RIP`;
// console.log(Arrays);


// Еще один способ созднания массива
// const array = new Array;

// Методы массива 

// Длина массива 

// const numbers = [11, 22, 34, 41, 323, 332, 32];
//  let resute;

// resute = numbers.length;
// // Проверка "является" ли массивом

// resute = Array.isArray(numbers);

// // Поиск индекса значения

// resute = numbers.indexOf(22);


// // Добавление в конде 
// resute = numbers.push(98);

// // Противоположный методу push()

// resute = numbers.pop();


// // Добавление элемента в начало массива 

// resute = numbers.unshift(31);

// // Удаление элемента в начале массива

// resute = numbers.shift();


// // "Сращивание" массива || Удаление элементов массива

// resute = numbers.splice(1, 4);

// // Реверс массива
// resute = numbers.reverse()

// numbers.push(22,24, 44, 53, 53, 54, 432);

// // Копирование данных из массива

// resute = numbers.slice(1, 5);


// // Объеденение массивов 

// resute = numbers.concat(resute);

// console.log(resute);
// console.log(numbers);


// const bills= [`Счет:  `, 11, 20, 47];
// const calculateTips = (bills) => bills < 20 ? bills * 0.2 : bills * 0.15;

// const tips = [`Чаевые:`, calculateTips(bills[1]), calculateTips(bills[2]), calculateTips(bills[3]),];

// const billPlusTips = `${bills}\n${tips}`;

// console.log(billPlusTips);

// calculateTips(bills[1]);

// Objects

// myDataObject = {
//     firstName: `Ilya`, 
//     lastName: `Makarov`,
//     dateOfBirth: 2004, 
//     speciality: `Web-Developer`,
//     placeOfResidence: `Khabarovsk`
// };

// // Способы вывода данных из объекта

// console.log(myDataObject.lastName);
// // 
// console.log(myDataObject[ `firstName`]);
// // or
// let MName = `lastName`;
// console.log(myDataObject[MName]);

// // Добавление в объект 


// myDataObject.word = `No word`;
// myDataObject[`gender`] = `Male`;
// myDataObject.skills = [`PhotoShop`, `Figma`];

// console.log(myDataObject);

// // Вывод различных данных из объекта, включая внутрений массив 
// console.log(`My name is ${myDataObject.firstName}, age ${myDataObject[`dateOfBirth`] - 2023}, work - ${myDataObject.speciality}, my skills: ${myDataObject.skills[0]}`);

// Методы объектов 


// myDataObject = {
//     firstName: `Ilya`, 
//     lastName: `Makarov`,
//     dateOfBirth: 2004, 
//     speciality: `Web-Developer`,
//     placeOfResidence: `Khabarovsk`,
//     hasDriveLicense: false,
//     skills: [`PhotoShop`, `Figma`],
    
    // Способы записи и вызова функции  
    
    //**********
    // calcAge: function(dateOfBirth){
    //     return 2023 - dateOfBirth; 
    // }
    //***** 
    // calcAge: function(){
    //     return 2023 - this.dateOfBirth; 
    // }
        //***** 
//     calcAge: function(){
//         this.age = 2023 - this.dateOfBirth;
//     },

//     getSummary: function(){
//         return `First Name: ${this.firstName}\nLast Name${this.lastName}\nAge: ${this.calcAge()}\nLocation: ${this.placeOfResidence}\nDrive licence: ${this.hasDriveLicense ? `Yes`: `No`}\nSkills: ${this.skills[0]} and ${this.skills[1]}`
//     }
// };

// console.log(myDataObject.calcAge());

// console.log(myDataObject[`calcAge`](myDataObject.dateOfBirth))

// Вызов функции для создания свойсва "age" для объекта 
// myDataObject.calcAge();
// // 

// console.log(myDataObject.age);

// console.log(myDataObject.getSummary());

// jakeObject = {
//     firstName: `Jake`,
//     lastName: `White`,
//     height: 1.70,
//     weight: 79,
//     BMI: function(){
//         this.jakeBMI = this.weight / this.height ** 2;
//     }    
// };
// jakeObject.BMI();

// console.log(Math.round(jakeObject.jakeBMI));


// mikeObject = {
//     firstName: `Mike`,
//     lastName: `Black`,
//     height: 1.93,
//     weight: 91,
//     BMI: function(){
//         this.mikeBMI = this.weight / Math.pow(this.height, 2);
//     }    
// };

// mikeObject.BMI();

// console.log(Math.round(mikeObject.mikeBMI));

// // Нечитабельно, что пиздец, но оно работает, да и по заданию все верно
// console.log(jakeObject.jakeBMI > mikeObject.mikeBMI ? `${jakeObject.firstName} ${jakeObject.lastName} BMI (${jakeObject.jakeBMI}) is higher than ${mikeObject.firstName} ${mikeObject.lastName} (${mikeObject.mikeBMI})!`: `${mikeObject.firstName} ${mikeObject.lastName} BMI (${mikeObject.jakeBMI}) is higher than ${jakeObject.firstName} ${jakeObject.lastName} (${jakeObject.jakeBMI})!`)



// Циклы 


// For 
// for(let rep = 1; rep <= 10; rep += 1){
//     console.log(`Push ups repetition ${rep}`)
// }

// Вывод из массива и добавление в массив с помощью цикла
// const user123 = [`Ilya`, `Makarov`, `developer`, 2004, [`Inna`, `Iolanta`]];
// const types = [];

// for(let i = 0; i < user123.length; i += 1 ){
//     console.log(user123[i]);

//     types[i] = typeof user123[i];
// }

// console.log(types)


// const birthDate = [1999, 2003, 2000, 1975, 1995, 1998];

// const ages = [];

// for(let i = 0; i < birthDate.length; i += 1){
//     ages.push(2023 - birthDate[i]);
// }

// for(let i = 0; i < ages.length; i += 1){
//     console.log(ages[i])
// }

// continue and break

// const user123 = [`Ilya`, `Makarov`, `developer`, 2004, [`Inna`, `Iolanta`]];

// for(let i = 0; i < user123.length; i += 1 ){
//     // Пропуск итерации
//     // Вывод только строк
//     if(typeof user123[i] !== `string`) continue;
    
//     console.log(user123[i]);
//  }

//  for(let i = 0; i < user123.length; i += 1 ){
//     // Выход из массива
     
//     if(typeof user123[i] === `number`) break;
    
//     console.log(user123[i]);
//  }

// Итерации в обратном порядке и вложенные циклы 


// const user123 = [`Ilya`, `Makarov`, `developer`, 2004, [`Inna`, `Iolanta`]];

// for(let i = user123.length - 1; i >= 0; i -= 1){
//     console.log(user123[i])
// }

// Вложенный цикл 

// for(let exercise = 1; exercise <= 3; exercise += 1){
//     console.log(`Exercise ${exercise}`)

//     for(let j = 1; j <= 5; j += 1){
//         console.log(`Rep ${j}`)
//     }
// }


// Мой таймер
// for(let hour = 0; hour <= 1; hour += 1){
//     for(let minute = 0; minute < 60; minute += 1){
//         for(let second = 0; second < 60; second += 1){
     
//         console.log(`Таймер: ${hour}:${minute}:${second}`)
//         }
//     }
// }


// while ( )

// let rep = 1;

// while(rep <= 10){
//     console.log(`Push ups repetition ${rep}`);
//     rep += 1;
// }

// Создание "Кубика"
// Math.trunc - избавление от десятичных 
// let diceNumber = Math.trunc(Math.random() * 6) + 1;

// while(diceNumber !== 6){
//     console.log(diceNumber);
//     // Для дальнейшей генерации чисел 
//     diceNumber = Math.trunc(Math.random() * 6) + 1;
// }

// Заданме и окончание изучения основ JS 

// // Массив счетов
// const bills = [31, 95, 276, 540, 27, 205, 11, 1180, 96, 57];

// // Чаевые
// const tips = [];

// // Итоги
// const totals = [];

// // Рассчет чаевых
// const calculateTips = (bills) => bills < 20 ? bills * 0.2 : bills * 0.15;

// for(let i = 0; i <= bills.length - 1; i +=1){
//     tips.push(calculateTips(bills[i]));
//     totals.push(bills[i] + tips[i]);
// }

// console.log(tips);
// console.log(totals);

// // const arr = [31, 95, 276, 540, 27, 205, 11, 1180, 96, 57];

// const calculateAverage = (arr) => {
//     let sum = 0;
//     for(let i = 0; i < arr.length; i += 1){
//         sum += arr[i];
//     }
//     return sum / arr.length;
// }

// console.log(calculateAverage(totals));


// END 