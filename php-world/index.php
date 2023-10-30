<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>PHP</title>
</head>
<body>
<?php
//Подключение файла-php
include 'assets/php/page.php';

//$i = 213;
////Получение информации о переменной
//echo var_dump($i);
//
//$a = 12;
//echo '<br>' . $a;
//$a = 1;
//echo '<br>' . $a;
//
//$a = 5 + 5 * 3 + 3;
//echo '<br>' . $a;
//
//$a = 8 / 2 + 2;
//echo '<br>' . $a;
//
////Остаток от деления
//echo '<br>';
//echo 10 % 2;
//echo '<br>';
//echo 10 % 6;
//
////Возведение в степень
//echo '<br>';
//echo 4 ** 4;
//echo '<br>';
//
////Объединение строк
//$str1 = 'abc';
//$str2 = 'def';
//
//echo $str1 . $str2;
//echo '<br>';
//
////Определение кол-ва символов в строке
//echo strlen('123456');
//echo '<br>';
//echo strlen('фбвгд'); //Вывод 10
////для строк, которые содержат или потенциально могут содержать проблемные символы, используйте функцию mb_strlen
//echo "<br>";
//echo mb_strlen('абвгд');
//
//$img = 'assets/images/1.png';
//
//echo '<img src="' . $img . '" alt="img">';
//echo "<br>";
//
////Принудительное преобразование типов
//$test = (int)"1";
//var_dump($test);
//echo "<br>";
//var_dump((string)$test);
//
////Получение символов строки
//$str = "abcdef";
//echo "<br>";
//echo $str[3];
//echo "<br>";
//$str[6] = "g";
//echo $str[6];
//echo "<br>";
//
////Определение последнего символа строки
//$str[strlen($str) + 1] = 't';
//echo $str;
//
//echo '<br>';
//echo $str = 12345;
//$str = (string)$str;
//echo "<br>";
//$num = (int)$str[0] + (int)$str[1] + (int)$str[2] + (int)$str[3] + (int)$str[4];
//echo $num;

//Практика на операции в PHP
//$second = 60;
//$minute = 60;
//$hour = 24;
//echo "В сутках " . $second * $minute * $hour . " секунд";
//echo "<br>В 30 сутках " . ($second * $minute * $hour) * 30 . " секунд";
//echo "<br>В году " . ($second * $minute * $hour) * 364 . " секунд";
//$bait = 2 ** 3;
//$kilobait = 2 ** 10;
//$megabait = 2 ** 20;
//$gigabait = 2 ** 30;
//$terabait = 3 ** 40;
//echo "<br>В мегабайте " . $megabait . " байт";
//echo "<br>В гигабайте " . $gigabait . " байт";
//echo "<br>В 10 гигабайтах " . $gigabait * 10 . " байт";
//echo "<br>В терабайте " . $gigabait . " байт";
//
///*
//Пусть дана переменная r с радиусом круга.
//По соответствующей формуле найдите площадь круга и запишите
//ее в переменную s. Выведите содержимое этой переменной на экран.
//*/
//
//echo "<br>";
//$r = 25;
////Площадь круга через радиус
//$s = pi() * $r ** 2;
//echo "площадь круга c радиусом " . $r . ' равна ' . $s;
//
///*
//Пусть дана переменная a со стороной квадрата.
//Найдите площадь квадрата и запишите ее в переменную s.
//Выведите содержимое этой переменной на экран.
//*/
//
//echo '<br>';
//$a = 10;
//$s = $a ** 2;
//echo 'Площадь квадрата равна ' . $s;
//
///*
//Пусть даны переменные a и b со сторонами прямоугольника.
//Найдите площадь прямоугольника и запишите ее в переменную s.
//Выведите содержимое этой переменной на экран.
//*/
//echo '<br>';
//$a = 12;
//$b = 15;
//$s = $a * $b;
//echo 'Площадь прямоугольника равна ' . $s;
//
///*
//Пусть даны переменные a и b со сторонами прямоугольника.
//Найдите периметр прямоугольника и запишите его в переменную p.
//Выведите содержимое этой переменной на экран.
//*/
//
//echo '<br>';
//$a = 20;
//$b = 25;
//$p = $a * 2 + $b * 2;
//echo 'Периметр прямоугольника равен ' . $p;
//
///*
//Пусть дана переменная tc с температурой в градусах Цельсия.
//По соответствующей формуле выполните перевод этой
//температуры в градусы Фаренгейта.
//*/
//
//echo '<br>';
//$tc = 14;
//echo $tc . " градусов цельсия в Фаренгейта - " . ($tc * (9 / 5)) + 32;
//
///*
//Пусть дана переменная tf с температурой в градусах Фаренгейта.
//По соответствующей формуле выполните перевод этой температуры
//в градусы Цельсия.
// */
//echo '<br>';
//$tf = 75;
//echo $tf . ' градусов Фаренгейта в цельсия: ' . ($tf - 32) * (5 / 9);

//Массивы PHP

//$arr = [
//        'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс',
//];
//
//var_dump($arr);
//echo '<br>' . $arr[2];

//$arr = [
//    'a', 'b', 'c'
//];
//echo $arr[0] . '<br>';
//echo $arr[1] . '<br>';
//echo $arr[2] . '<br>';
//
//$arr [3] = 'd';
//var_dump($arr);
//echo "<br>";
//echo "$arr[0] + $arr[1] + $arr[2] + $arr[3]"

//$arr = [
//    1, 2, 3
//];
//echo $arr[0] + $arr[1] + $arr[2];

//$arr = [
//    2, 5, 3, 9
//];
//$res = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
//echo $res;

//Ассоциативные массивы в PHP

//Задание "ключа" для элементов массива
//$arr = [
//    1 => 'пн', "day" => 'вт', 3 => 'ср', 4 => 'чт', 5 => 'пт', 6 => 'сб', 7 => 'вс',
//];
//
//echo $arr["day"];
//echo "<br>";
//
////краткая запись ключей, после 1 идет автоматическое определение
//$arr = [
//    1 => 'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'
//];
//echo $arr[2];
//
////определение длины массива
//
//echo "<br>";
//$arr = [
//    1, 2, 3
//];
//echo count($arr);
//echo '<br>';
//echo $arr[count($arr) - 1];
//echo '<br>';
//
////Изменение элементов массива в PHP
//$arr[0] = '9';
//echo $arr[0];
//
////Перезапись элементов массива
//$arr = [
//    'a', 'b', 'c', 'd'
//];
//echo '<br>';
//echo $arr[0];
//echo '<br>';
//$arr[0] = $arr[0] . '!';
//echo $arr[0];

//Инкремент и декремент в массивах
//$arr = [
//    1, 2, 3, 4, 5
//];
//
//echo var_dump($arr);
//
//$arr[0]++;
//$arr[1]--;
//++$arr[2];
//--$arr[3];
//
//echo "<br>";
//
//echo var_dump($arr);

//Заполнение массива
//$arr = []; /*Пустой массив*/
//
//var_dump($arr);
//echo "<br>";
//
//$arr[] = 1;
//$arr[] = 2;
//$arr[] = 3;
//
//var_dump($arr);
//
//echo "<br>";
////Добавление не в пустой массив
//$arr[] = 'a';
//var_dump($arr);
//
//$arr[0] = 'b';
//echo "<br>";
//var_dump($arr);

//Логические функции: if-else, >, <, >=, <=, ==, !=
//
//$test = 1;
//
//if ($test >= 0) {
//    echo '+++';
//} else {
//    echo '---';
//}
//echo "<br>";
//
////Неравенство по значению и типу
//
////Неравенство обычное
//if ("3" != 3) {
//    echo '+++';
//} else {
//    echo '---';
//};
//echo "<br>";
//
////Неравенство учитывающие тип
//if ("3" !== 3) {
//    echo '+++';
//} else {
//    echo '---';
//};

//Инвертирование высказываний
//$num = 12;
//
//if (!($num > 0 and $num < 5)) { /*То же самое, что и $num <= 0 or $num >= 5*/
//    echo '+++';
//} else {
//    echo '---';
//}

/*
== - сравнение по значению
=== - сравнение по значению и типу
*/
//$test = 1;
//
//if ($test == true) {
//    echo '++';
//} else {
//    echo '--';
//};
//
//$test = true;
//
//if ($test) { // эквивалентно if ($test == true)
//    echo '+++';
//} else {
//    echo '---';
//};

//
//$test = null;
//
//$test = false;
//
//if ($test) {
//    echo '+++';
//} else {
//    echo '---';
//}

//Команда isset
//$test = 'null';

//isset() - проверка, что не имеет не определена

//if (isset($test)) { //Эквивалентно $test !== null
//    echo '+';
//} else {
//    echo '-';
//};
//
//echo "<br>";
//
//if (!(isset($test))) { //Эквивалентно $test == null
//    echo '+';
//} else {
//    echo '-'; //т.е. определена
//};

//Проверка на существование элемента в массиве
//$arr = [
//    'a', 'b', 'c'
//];
//
//if (isset($arr[2])) {
//    echo $arr[2];
//} else {
//    echo 'element does not exist';
//}
//
//$test = 1;
//
//if (isset($test)) {
//    echo '+++';
//} else {
//    echo '---';
//}
//
//$test = null;
//
//if (!isset($test)) {
//    echo '+++';
//} else {
//    echo '---';
//}

//$test = false;
//
//if (isset($test)) {
//    echo '+++';
//} else {
//    echo '---';
//}


/*Команда empty проверке переменной на пустоту
 (0, '', '0', false или null)
*/
//$test = '';
//
//if (empty($test)) {
//    echo 'Пустая';
//} else {
//    echo "Не пустая";
//}
//
//echo "<br>";
//
//if ((!empty($test))) {
//    echo "Не пустая";
//} else {
//    echo 'Пустая';
//}
//
//$test = null;
//
//if (isset($test)) {
//    echo '+++';
//} else {
//    echo '---';
//}

/*
 * Необязательность фигурных скобок
В случае, если в фигурных скобках if или else будет только одно выражение,
*/

//$test = 0;

//if ($test == 0) echo '+'; else echo '-';
//
//if ($test == 0) {
//    echo '+';
//} else echo '-';
//
//if ($test == 0)
//    echo '+';
//else
//    echo '-';

//if ($test == 0) echo 'Верно'; else echo 'Неверно';
//
//if ($test == 0) echo 'верно';


//Switc-case
//
//$test = 1;
//
//switch ($test) {
//    case 1:
//        echo '++';
//        break;
//    case 2:
//        echo '--';
//        break;
//    default:
//        echo 'ничего';
//        break;
//}


//Тернарный оператор
//переменная = условие ? значение1 : значение2;

//$age = 17;
//$aduit = $age >= 18 ? true : false;
////если условие истинно, то возвращается значение1, в противном случае - значение2.
//var_dump($aduit);
//
//
////Эквивалентно коду ниже
//
//if ($age >= 18) {
//    $aduit = true;
//} else {
//    $aduit = false;
//}
//var_dump($aduit);

//Оператор объединения с null
//
//$user = [
//    'name' => 'ilya', "age" => 30
//];
//
//if (isset($user['name'])) {
//    $name = $user['name'];
//} else {
//    $name = 'unknown';
//};
//
//echo $name;
//echo "<br>";
//
//
//$name = $user['name'] ?? 'unknown';
//
//echo $name;
//echo "<br>";
//
//if (isset($user['name'])) {
//    $res = $user['name'];
//} elseif (isset($user['surname'])) {
//    $res = $user['surname'];
//} else {
//    $res = '';
//}
//echo $res;
//echo "<br>";
//
//$res = $user["name"] ?? $user['surname'] ?? 'empty';

//$min = 69;
//
//if ($min >= 0 and $min <= 20) {
//    echo "1 треть";
//} elseif ($min >= 21 and $min <= 40) {
//    echo "2 треть";
//} elseif ($min >= 41 and $min <= 59) {
//    echo "3 треть";
//} else {
//    echo "empty";
//}

//
//$arr = [
//    1, 2, 3, 4
//];
//
//if (count($arr) == 3) {
//    echo $arr[0] + $arr[1] + $arr[2];
//} else {
//    echo "В массиве меньше или больше 3 элементов";
//}


// Дана некоторая строка. Проверьте, заканчивается ли она на '0'

//$str = '123450';
//
//$last = $str[strlen($str) - 1];
//
//if ($last == 0) {
//    echo 'Строка заканчивается на 0';
//} else {
//    echo 'Строка не заканчивается на 0';
//}

/*
 * Как известно, четные числа делятся на 2 без остатка,
   а нечетные - с остатком. Пусть у вас дано число. С помощью
   оператора % и конструкции if проверьте четное это число или нет.
*/
//
//$num = 3;
//
//if ($num % 2 === 0) {
//    echo 'Четное';
//} else {
//    echo "Нечетное";
//}

//Практика на условия if-else

/*
 * В переменной $month лежит какое-то число
 * из интервала от 1 до 12. Определите в какую
 * пору года попадает этот месяц (зима, лето, весна, осень).
 */
//
//$month = 4;
//
//if ($month >= 1 and $month <= 2 or $month == 12) {
//    echo 'Зима';
//} elseif ($month >= 3 and $month <= 5) {
//    echo 'Весна';
//} elseif ($month >= 6 and $month <= 8) {
//    echo 'Лето';
//} elseif ($month >= 9 and $month <= 11){
//    echo "Осень";
//};

/*
 * Дана строка, состоящая из символов, например, 'abcde'.
 * Проверьте, что первым символом этой строки является буква 'a'.
 */
//
//$str = 'abcde';
//
//if ($str[0] === "a") {
//    echo 'Первая буква - а';
//} else {
//    echo 'Первая буква не - а';
//}

/*
 * Дано число, например, 12345. Проверьте, что
 * первым символом этого числа является цифра 1, 2 или 3.
*/

//$num = 312345;
//$num = (string)$num;
//
//if ($num[0] == 1 or $num[0] == 2 or $num[0] == 3) {
//    echo 'Первая цифра 1, 2 или 3';
//}

/*
 * Дано трехзначное число.
 * Найдите сумму цифр этого числа.
*/

//$num = 123;
//$num = (string)$num;
//echo $num[0] + $num[1] + $num[2];

/*
 * Дано число из 6-ти цифр. Проверьте,
 * что сумма первых трех цифр равняется
 * сумме вторых трех цифр.
*/

//$num = 123321;
//$num = (string)$num;
//if ($num[0] + $num[1] + $num[2] == $num[3] + $num[4] + $num[5]){
//    echo "Сумма первых 3-х чисел равна сумме последних 3-х чисел";
//}


//Цикл foreach

//$arr = [
//    1, 2, 3, 4, 5
//];
//
//
//foreach ($arr as $elem) {
//    echo $elem * $elem . "<br>";
//}
//
//$arr = [
//    'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5
//];

//Вывод ключей
//
//foreach ($arr as $key => $item) {
//    echo $key . '-' . $item . "<br>";
//}

//Перебор массива

//$arr = [
//    1, 2, 3, -4, 5, -2, -34, 4
//];
//
//$res = 0;
//
//foreach ($arr as $item) {
//    if ($item >= 0) {
//        $res = $res + $item ;
//    }
//}
//echo $res;

//$arr = [
//    10, 20, 30, 50, 235, 3000
//];
//
//foreach ($arr as $item) {
//    $res = (string)$item;
//    if ($res[0] == 1 or $res[0] == 2 or $res[0] == 5){
//        echo "<br>" . $res;
//    }
//}

//$days = [
//    'пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'
//];
//
//foreach ($days as $day) {
//    if ($day == 'сб' or $day == 'вс') {
//        echo "<strong>" . $day . "</strong><br>";
//    } else {
//        echo $day . "<br>";
//    }
//}
//
//echo "<br>";
//
//foreach ($days as $day) {
//    if ($day == 'пн') {
//        echo '<em>' . $day . '</em><br>';
//    } else {
//        echo $day . "<br>";
//    }
//}

//Цикл while

//$a = 1;
//
//while ($a !== 101) {
//    echo $a . "<br>";
//    $a++;
//}

//$a = 11;
//
//while ($a < 34) {
//    echo $a . "<br>";
//    $a++;
//}
//
//$i = 0;
//
//while ($i !== 102) {
//    echo $i . "<br>";
//    $i += 2;
//}
//
//$i = 0;
//
//while ($i !== 102) {
//    echo "<br>" . $i;
//    $i += 3;
//}

//Обратный отсчет в цикле while

//$i = 10;
//
//while ($i >= 1) {
//    echo $i . '<br>';
//    $i--;
//}
//
//$i = 10;
//
//while ($i >= 0) {
//    echo $i;
//    $i--;
//}

//Цикл for

//$result = 0;
//
//for ($i = 1; $i <= 100; $i++) {
//    $result = $result + $i;
//}
//echo $result;
//
//$result = 1;
//
//for ($i = 1; $i <= 10; $i++) {
//    $result = $result * $i;
//}
//
//echo "<br>" . $result;
//
//for ($i = 0, $j = 0; $i <= 9; $i++, $j += 2) {
//    echo $i . ' ' . $j . "<br>";
//}

//Инструкция break
//
//$arr = [
//    1, 2, 3, 4, 5, -4, 4, 4
//];
//
//foreach ($arr as $item) {
//    if ($item == 3) {
//        echo 'Есть 3';
//        break;
//    }
//}

//foreach ($arr as $item) {
//    if ($item < 0) {
//        break;
//    }
//    echo $item . "<br>";
//}

//Инструкция continue

//$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
//
//foreach ($arr as $elem) {
//    if ($elem % 2 === 0) {
//        $res = $elem * $elem;
//    } elseif ($elem % 3 === 0) {
//        $res = $elem * $elem * $elem;
//    } else {
//        continue; // перейдем на новую итерацию цикла
//    }
//
//    echo $res; // выполнится, если делится на 2 или 3
//}

//$arr = [
//    1, 2, 3, 4, 5
//];
//
//$flag = false;

//foreach ($arr as $item) {
//    if ($item === 3) {
//        echo 'Есть';
//    } else {
//        echo "Нет";
//    }
//}

//
//foreach ($arr as $item) {
//    if ($item === 3) {
//        $flag = true;
//        break;
//    }
//}
//
//if ($flag === true) {
//    echo "Есть";
//} else {
//    echo "Нет";
//}


//Произвольное количество итераций в цикле while

//$num = 13;
//
//$total = 0;
//
//while ($num < 1000) {
//    $num *= 3;
//    $total++;
//}
//
//echo $total

//Произвольное количество итераций в цикле for без тела

//for ($num = 13, $i = 0; $num < 1000; $num *= 3, $i++)
//    echo $num . ' ' . $i;

//Формирование строк через циклы
//
//$str = '';
//
//for ($i = 0; $i < 10; $i++) {
//    $str = $str . '-' . $i;
//}
//
//echo $str;
//echo strlen($str)
//var_dump($str);


//Вложенные циклы

//for ($i = 1; $i <= 9; $i++) {
//    for ($j = 1; $j <= 3; $j++) {
//        echo $i;
//    }
//}

//for ($i = 1; $i <= 3; $i++) {
//    for ($j = 1; $j <= 3; $j++) {
//        echo $i . $j . " ";
//    }
//}

//Заполнение массивов
//$arr = [];
//
//for ($i = 1; $i < 20; $i++) {
//    if ($i % 5 === 0) {
//        $arr[] = 'a';
//        $i++;
//    }
//    $arr[] = $i;
//}
//
//foreach ($arr as $item) {
//    echo $item . "<br>";
//}

//Перебор массива цклом for
//
//$arr = [
//    1, 2, 3, 4, 5, 6, 7, 8, 9
//];
//
//for ($i = 0; $i < count($arr); $i++){
//    echo $arr[$i] . ' ';
//}
//
//$arr = ['a', 'b', 'c', 'd', 'e'];
//
//for ($i = 0; $i < count($arr) - 1; $i++) {
//    echo $arr[$i] . ' ';
//}

//$arr = [1, 2, 3, 4, 5, 6, 7, 8];
//
//for ($i = 0; $i < count($arr) / 2; $i++) {
//    echo $arr[$i] . ' ';
//}

//$arr = [1, 2, 3, 4, 5, 6, 7, 8];
//$sum = 0;
//
//$length = count($arr);
//
//for ($i = 1; $i < $length; $i++) {
//    $sum += $arr[$i];
//}
//
//echo $sum;

//$arr = [
//    1, 2, 3, 4, 5
//];
//
//$length = count($arr);
//
//for ($i = 0; $i < $length; $i++) {
//    $arr[$i] = $arr[$i] ** 2;
//}
//
//var_dump($arr);

//Сокращенные операции для изменения массива в цикле for
//
//$arr = [
//    1, 2, 3, 4, 5
//];
//$length = count($arr);
//
//for ($i = 0; $i < $length; $i++) {
//    --$arr[$i];
//}
//var_dump($arr);

//Практика на массивы в цикле

//Увеличьте зарплату каждого работника на 10%.
//Дан следующий массив с работниками и их зарплатами:

//$arr = [
//    'employee1' => 100,
//    'employee2' => 200,
//    'employee3' => 300,
//    'employee4' => 400,
//    'employee5' => 500,
//    'employee6' => 600,
//    'employee7' => 700,
//];
//
//for ($i = 1; $i <= 7; $i++) {
//    if ($arr['employee'.$i] <= 400) {
//        $arr['employee'.$i] = $arr['employee'.$i] + ($arr['employee'.$i] * (10 / 100));
//    }
//}
//
//var_dump($arr);

//Модифицируйте предыдущую задачу так, чтобы зарплата увеличивалась только
// тем работникам, у которых она меньше или равна 400.

//Найдите сумму ключей этого массива и поделите ее на сумму значений.
//$arr = [
//    1 => 6, 2 => 7, 3 => 8, 4 => 9, 5 => 10
//];
//
//$length = count($arr);
//
//$res = 0;
//$total = 0;
//
//for ($i = 1; $i <= $length; $i++) {
//    $res += $arr[$i];
//    $total += $i;;
//}
//echo $total / $res;

//Запишите ключи этого массива в один массив, а значения - в другой.

//$arr = [
//    'a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5
//];
//
//$length = count($arr);
//
//$keys = [];
//$num = [];
//
//foreach ($arr as $key => $item) {
//    $keys[] = $key;
//    $num[] = $item;
//}
//
//foreach ($keys as $key) {
//    echo "<br>" . $key;
//}
//
//foreach ($num as $item) {
//    echo "<br>" . $item;
//}


//Дан следующий массив:

//$arr = [
//    1 => 125,
//    2 => 225,
//    3 => 128,
//    4 => 356,
//    5 => 145,
//    6 => 281,
//    7 => 452,
//];
//Запишите в новый массив элементы, значение которых начинается с цифры 1
// или цифры 2. То есть у вас в результате получится вот такой массив:
//
//[
//    125,
//    225,
//    128,
//    145,
//    281,
//];

//$num = [];
//
//foreach ($arr as $item) {
//    if ($item <= 300) {
//        $num[] = $item;
//    }
//}
//
//foreach ($num as $item) {
//    echo $item . "<br>";
//}
//
//$langth = count($arr);
//
//$res = '';
//
//for ($i = 1; $i <= $langth; $i++) {
//    $res = (string)$arr[$i];
//    if ( $res[0] == 1 or $res[0] == 2) {
//        $num[] = $arr[$i];
//    }
//}
//
//foreach ($num as $item) {
//    echo $item . "<br>";
//}


//Отработка циклов
//Выведите с помощью цикла столбец чисел от 1 до 100.
//for ($i = 1; $i <= 100; $i++) {
//    echo $i . "<br>";
//}

//Выведите с помощью цикла столбец чисел от 100 до 1.

//for ($i = 100; $i >= 1; $i--) {
//    echo $i . "<br>";
//}

//Выведите с помощью цикла столбец четных чисел от 1 до 100.

//for ($i = 1; $i <= 100; $i++) {
//    if ($i % 2 === 0) {
//        echo $i . "<br>";
//    }
//}

//Заполните массив 10-ю иксами с помощью цикла.
//
//$arr = [];
//
//for ($i = 1; $i <= 10; $i++) {
//    $arr[] = 'x';
//}
//foreach ($arr as $item) {
//    echo $item;
//}
//
//echo "<br>" . count($arr);

//Заполните массив числами от 1 до 10 с помощью цикла.
//
//$arr = [];
//
//$i = 1;
//
//while ($i < 11) {
//    $arr[] = $i;
//    $i++;
//}
//
//foreach ($arr as $item) {
//    echo $item . "<br>";
//}

//Дан массив с числами. С помощью цикла выведите только те элементы массива,
// которые больше нуля и меньше 10-ти.
//
//$arr = [
//    1, 2, 54, 32, 1, -331, 42, 245, 3, 5, -21
//];

//foreach ($arr as $item) {
//    if ($item > 0 and $item < 10) {
//        echo $item . "<br>";
//    }
//}

//$flag = false;
//
//foreach ($arr as $item) {
//    if ($item == 5) {
//        $flag = true;
//        break;
//    }
//}
//
//if ($flag) {
//    echo 'Есть 5';
//} else {
//    echo 'Нет 5';
//}

//Дан массив с числами. С помощью цикла найдите сумму элементов этого массива.

//$length = count($arr);
//$res = 0;
//
//for ($i = 0; $i <= $length - 1; $i++) {
//    $res += $arr[$i];
//}
//echo $res;


//Дан массив с числами. С помощью цикла найдите сумму квадратов
// элементов этого массива.

//$arr = [
//        2, 43, 52, 2, 423, 41, 423
//];
//$length = count($arr);
//$res = 0;
//
//for ($i = 0; $i < $length; $i++) {
//    $res = $res + ($arr[$i] ** 2);
//}
//
//echo $res;

//Дан массив с числами. Найдите среднее арифметическое его
// элементов (сумма элементов, делить на количество).
//
//for ($i = 0; $i < $length; $i++) {
//    $res += $arr[$i];
//}
//
//echo $res / $length;

//Напишите скрипт, который будет находить факториал числа.
// Факториал - это произведение всех целых чисел, меньше данного, и его самого.

//$num = 8;
//$res = 1;
//
//for ($i = 0; $i < $num; $i++) {
//    $res *= $num - $i;
//}
//
//echo $res;

//Многомерные массивы

//$arr = [
//    [1, 2, 3],
//    ['a', 'b', 'c']
//];
//
//echo $arr[0][1];
//echo $arr[1][0]

//$arr = [
//    ['a', 'b', 'c'],
//    ['d', 'e', 'f'],
//    ['g', 'h', 'i'],
//    ['j', 'k', 'l'],
//];
//
//echo $arr[3][2];
//echo $arr[1][1];
//echo $arr[2][0];
//echo $arr[0][0];
//
//$arr = [[1, 2], [3, 4], [5, 6]];
//
//$num = $arr[0][0] + $arr[0][1] + $arr[1][0] + $arr[1][1] + $arr[2][0] + $arr[2][1];
//echo $num;

//Трехмерный массив

//$arr = [
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7, 8],
//    ],
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7, 8],
//    ],
//    [
//        [1, 2, 3, 4],
//        [5, 6, 7, 8],
//    ]
//];
//
//echo $arr[0][1][2];

//$arr = [
//    [
//        [1, 2],
//        [3, 4],
//    ],
//    [
//        [5, 6],
//        [7, 8],
//    ],
//];
//
//$num = $arr[0][0][0] + $arr[0][0][1] + $arr[0][1][0] + $arr[0][1][1] + $arr[1][0][0] + $arr[1][0][1] + $arr[1][1][0] + $arr[1][1][1];
//echo $num

//Ассоциативные массивы

//$arr = [
//    'boys'  => [1 => 'Коля', 2 => 'Вася', 3 => 'Петя'],
//    'girls' => [1 => 'Даша', 2 => 'Маша', 3 => 'Лена'],
//];
//
//echo $arr['boys'][1] . "<br>";
//echo $arr['girls'][2];

//$arr = [
//    'ru' => ['пн', 'вт', 'ср', 'чт',
//        'пт', 'сб', 'вс'],
//    'en' => ['mn', 'ts', 'wd', 'th',
//        'fr', 'st', 'sn'],
//];
//
//echo $arr['en'][2];

//$arr = [
//    [
//        'name' => 'user1',
//        'age' => 30,
//        'salary' => 1000,
//    ],
//    [
//        'name' => 'user2',
//        'age' => 31,
//        'salary' => 2000,
//    ],
//    [
//        'name' => 'user3',
//        'age' => 32,
//        'salary' => 3000,
//    ],
//];
//
//echo 'salary user1 - ' . $arr[0]['salary'];
//echo '<br>salary user2 - ' . $arr[2]['salary'];

//Произвольные массивы

//$arr = [
//    [
//        1, 2, 3, [4, 5, [6, 7]]
//    ],
//    [8, [9, 10]]
//];
//
//$num = $arr[0][0] + $arr[0][1] + $arr[0][2] + $arr[0][3][0] + $arr[0][3][1] + $arr[0][3][2][0] + $arr[0][3][2][1] + $arr[1][0] + $arr[1][1][0] + $arr[1][1][1];
//echo $num;

//Перебор многомерных массивов

//$arr = [
//    ['a', 'b', 'c'],
//    ['d', 'e', 'f'],
//    ['g', 'h', 'i'],
//];
//
//foreach ($arr as $sub) {
//    foreach ($sub as $item) {
//        echo $item . "<br>";
//    };
//}
//
//$arr = [
//    [1, 2, 3],
//    [4, 5, 6, 7],
//    [8, 9]
//];
//
//foreach ($arr as $item) {
//    foreach ($item as $elem) {
//        echo $elem . "<br>";
//    }
//}

//Перебор трехмерного массива
//
//$arr = [
//    [
//        [1, 2, 3],
//        [6, 7, 8],
//        [3, 8, 4],
//        [6, 7, 9],
//    ],
//    [
//        [9, 1, 2],
//        [4, 5, 6],
//    ],
//    [
//        [9, 1, 2],
//        [4, 5, 6],
//        [5, 6, 3],
//    ],
//];
//
//$num = 0;
//
//foreach ($arr as $sub) {
//    foreach ($sub as $subItem) {
//        foreach ($subItem as $item) {
//            $num += $item;
//        }
//    }
//}
//echo $num;

//Работа с ключами в многомерных массивах

//$arr = [
//    'user1' => [
//        'name' => 'name1',
//        "age" => 31,
//    ],
//    'user2' => [
//        'name' => 'name2',
//        "age" => 32,
//    ],
//];
//
//foreach ($arr as $key1 => $sub) {
//    foreach ($sub as $key2 => $item) {
//        echo $key1 . ' ' . $key2 . ' ' . $item . "<br>";
//    }
//}

//$arr = [
//    [
//        'name'   => 'user1',
//        'age'    => 30,
//        'salary' => 1000,
//    ],
//    [
//        'name'   => 'user2',
//        'age'    => 31,
//        'salary' => 2000,
//    ],
//    [
//        'name'   => 'user3',
//        'age'    => 32,
//        'salary' => 3000,
//    ],
//];
//
//foreach ($arr as $key1 => $sub) {
//    foreach ($sub as $key2 => $item) {
//        echo $key2 . ' ' . $item . "<br>";
//    }
//}
//
//$arr = [
//    'group1' => ['user11', 'user12',
//        'user13', 'user43'],
//    'group2' => ['user21', 'user22', 'user23'],
//    'group3' => ['user31', 'user32', 'user33'],
//    'group4' => ['user41', 'user42', 'user43'],
//    'group5' => ['user51', 'user52'],
//];
//
//foreach ($arr as $group => $sub) {
//    foreach ($sub as $name => $item) {
//        echo $group . ' - ' . $item . "<br>";
//    }
//}

//Заполнение многомерных массивов
//$arr = [];
//
//for ($i = 0; $i < 3; $i++) {
//    for ($j = 0; $j < 5; $j++) {
//        $arr[$i][$j] = $j + 1;
//    }
//}
//
//foreach ($arr as $sub){
//    foreach ($sub as $item) {
//        echo $item . "<br>";
//    }
//}
//
//for ($i = 0; $i < 3; $i++) {
//    for ($j = 0; $j < 4; $j++) {
//        $arr[$i][$j] = 'x';
//    }
//}
//
//var_dump($arr);
//
//for ($i = 0; $i < 3; $i++) {
//    for ($j = 0; $j < 2; $j++) {
//        for ($k = 0; $k < 5; $k++) {
//            $arr[$i][$j][$k] = $k + 1;
//        }
//    }
//}
//var_dump($arr);
//
//foreach ($arr as $sub) {
//    foreach ($sub as $subsub) {
//        foreach ($subsub as $item) {
//            echo "<br>" . $item;
//        }
//    }
//}

//Заполнение многомерных массивов числами по порядку

//$arr = [];
//for ($i = 0, $k = 1; $i < 4; $i++){
//    for ($j = 0; $j < 2; $j++) {
//        $arr[$i][$j] = $k++;
//    }
//}
//
//var_dump($arr);

//$arr = [];
//
//for ($i = 0, $k = 2; $i < 4; $i++) {
//    for ($j = 0; $j < 3; $j++) {
//        $arr[$i][$j] = $k;
//        $k += 2;
//    }
//}
//
//var_dump($arr);

//$arr = [];
//
//for ($i = 0, $k = 1; $i < 2; $i++) {
//    for ($j = 0; $j < 2; $j++) {
//        for ($g = 0; $g < 2; $g++) {
//            $arr[$i][$j][$g] = $k++;
//        }
//    }
//}
//
//var_dump($arr);

//Массив ассоциативных массивов

//$products = [
//    [
//        'name'   => 'мясо',
//        'price'  => 100,
//        'amount' => 5,
//    ],
//    [
//        'name'   => 'овощи',
//        'price'  => 200,
//        'amount' => 6,
//    ],
//    [
//        'name'   => 'фрукты',
//        'price'  => 300,
//        'amount' => 7,
//    ],
//];
//
//foreach ($products as $product) {
//    echo $product['name'] . ' ' . $product['price'] . ' ' . $product['amount'] . "<br>";
//}


//Конвертация многомерных массивов
//
//$res = [];
//
//$arr = [
//    [
//        'country' => 'Россия',
//        'city' =>    'Москва',
//    ],
//    [
//        'country' => 'Беларусь',
//        'city' =>    'Минск',
//    ],
//    [
//        'country' => 'Россия',
//        'city' =>    'Питер',
//    ],
//    [
//        'country' => 'Россия',
//        'city' =>    'Владивосток',
//    ],
//    [
//        'country' => 'Украина',
//        'city' =>    'Львов',
//    ],
//    [
//        'country' => 'Беларусь',
//        'city' =>    'Могилев',
//    ],
//    [
//        'country' => 'Украина',
//        'city' =>    'Киев',
//    ],
//];
//
//foreach ($arr as $item) {
//    $country = $item['country'];
//    $city = $item['city'];
//
//    if (!isset($res[$country])) {
//        $res[$country] = [];
//    }
//
//    $res[$country][] = $city;
//}
//
//var_dump($res);
//
//
//$users = [
//    [
//        'id' => 11,
//        'name' => 'name11',
//        'surname' => 'surname11',
//    ],
//    [
//        'id' => 14,
//        'name' => 'name14',
//        'surname' => 'surname14',
//    ],
//    [
//        'id' => 17,
//        'name' => 'name17',
//        'surname' => 'surname17',
//    ],
//];
//
//$id = [];
//
//foreach ($users as $item) {
//    $idUser = $item['id'];
//    $nameUser = $item['name'];
//    $surnameUser = $item['surname'];
//    if (!isset($id[$idUser])){
//        $id[$idUser] = [];
//    }
//    $id[$idUser][] = $nameUser;
//    $id[$idUser][] = $surnameUser;
//}
//echo "<br>";
//var_dump($id);

//
//$data = [
//    [
//        'date' => '2019-12-29',
//        'event' => 'name1'
//    ],
//    [
//        'date' => '2019-12-31',
//        'event' => 'name2'
//    ],
//    [
//        'date' => '2019-12-29',
//        'event' => 'name3'
//    ],
//    [
//        'date' => '2019-12-30',
//        'event' => 'name4'
//    ],
//    [
//        'date' => '2019-12-29',
//        'event' => 'name5'
//    ],
//    [
//        'date' => '2019-12-31',
//        'event' => 'name6'
//    ],
//    [
//        'date' => '2019-12-29',
//        'event' => 'name7'
//    ],
//    [
//        'date' => '2019-12-30',
//        'event' => 'name8'
//    ],
//    [
//        'date' => '2019-12-30',
//        'event' => 'name9'
//    ],
//];
//
//$res = [];
//
//foreach ($data as $datum) {
//    $date = $datum['date'];
//    $event = $datum['event'];
//    if (!isset($res[$date])){
//        $res[$date] = [];
//    }
//    $res[$date][] = $event;
//}

//var_dump($res);

//$data = [
//    '2019-12-29' => ['name1', 'name2', 'name3', 'name4'],
//    '2019-12-30' => ['name5', 'name6', 'name7'],
//    '2019-12-31' => ['name8', 'name9'],
//];
//
//$res = [];
//
//foreach ($data as $date => $events) {
//    foreach ($events as $event) {
//        $result[] = [
//            'date' => $date,
//            'event' => $event,
//        ];
//    }
//}

//$arr = [
//    'Россия' => [
//        'Москва', 'Питер', 'Владивосток',
//    ],
//    'Беларусь' => [
//        'Минск', 'Могилев'
//    ],
//    'Украина' => [
//        'Киев', 'Львов'
//    ],
//];
//
//$res = [];
//
//foreach ($arr as $item => $subItem) {
//    foreach ($subItem as $city) {
//        $res[] = [
//            'contry' => $item,
//            'city' => $city
//        ];
//    }
//}
//
//var_dump($res);
//
//echo "<br>";
//
//
//foreach ($res as $re => $key) {
//    foreach ($key as $item) {
//        echo $re . ' ' . $item  . "<br>";
//    };
//}

//Математические функции

//Возведение в степень
//echo pow(2, 10) . '<br>';
//
//echo sqrt(245) . '<br>';
//
//$arr = [
//    4, 2, 5, 19, 13, 0, 10
//];
//
//$res = 0;
//
//foreach ($arr as $item) {
//    $res += pow($item, 2);
//}
//
//echo sqrt($res);

//Округление

//echo round(sqrt(379), 0) . '<br>';
//echo round(sqrt(370,), 1) . '<br>';
//echo round(sqrt(370), 2) . '<br>';
//
//$floor = floor(sqrt(587));
//$ceil = ceil(sqrt(587));
//
//$arr = [
//    'floor' => $floor,
//    'ceil' => $ceil
//];
//
//var_dump($arr);
//

//min max

//$arr = [
//    4, -2, 5, 19, -130, 0, 10
//];
//
//echo min($arr) . "<br>";
//echo max($arr);

//random num
//
//echo mt_rand(1, 100);
//
//$arr = [];
//
//for ($i = 0; $i < 10; $i++ ) {
//    $arr[] = mt_rand(1, 100);
//};
//
//var_dump($arr);

//Модуль
//
//$a = 112;
//$b = 33342;
//echo $a - $b . "<br>";
//echo abs($a - $b);

//Строковые функции
/*
 * strtolower - преобразовывает строку в нижний регистр
 * strtoupper - преобразовывает строку в верхний регистр
 * ucfirst - преобразует первый символ строки в верхний регистр
 * lcfirst - преобразует первый символ строки в нижний регистр
 * ucwords - преобразует первый символ каждого слова в строке в верхний регистр
*/

//$str = 'php';
//echo strtoupper($str);
//$str = 'PHP';
//echo "<br>" . strtolower($str);
//$str = "london";
//echo "<br>" . ucfirst($str);
//$str = "London";
//echo "<br>" . lcfirst($str);
//$str = "london is the capital of great britain";
//echo "<br>" . ucwords($str);
//$str = "LONDON";
//echo "<br>" . ucfirst(strtolower($str));

//Работа с strlen
//strlen - возвращает длину строки (количество символов в строке).

//$str = "html css php";
//echo strlen($str);

//$password = '1231';
//
//if (strlen($password) > 5 and strlen($password) < 10) {
//    echo "Пароль подходит";
//} else {
//    echo "Пароль не подходит";
//}


//Функция substr
//substr вырезает и возвращает подстроку из строки

//$str = 'html css php';
//echo substr($str, 8, 12);
//
//echo substr($str, 0, 3);

//$str = 'http://sdadas';
//if (substr($str, 0, 7) == 'http://') {
//    echo 'yes';
//} else {
//    echo 'no';
//}

//$str = 'imagedsdassdasdadas.jpg';
//
//
//if (substr($str, (strlen($str) - 4), strlen($str)) == '.png' or substr($str, (strlen($str) - 4), strlen($str)) == '.jpg') {
//    echo 'yes';
//} else {
//    echo 'no';
//}

//$str = 'ds dsgs dfsdf';
//
//if (strlen($str) > 5) {
//    echo substr($str, 5, strlen($str)).'...';
//} else {
//    echo $str;
//}

//Функция str_replace
//str_replace ищет в строке заданный текст и меняет его на другой
//str_ireplace, которая делает тоже самое, но без учета регистра.

//$str = '31.12.2013';
//
//echo str_replace('.', '-', $str);

//$str = 'a cf  f  f gfr e gca  b a c ';S
//
//echo str_replace(['a', 'b', "c"], ['1', "2", "3"], $str);
//
//$str = "1a2b3c4b5d6e7f8g9h0";
//
//echo str_replace([1, 2, 3, 4, 5, 6, 7, 8, 9, 0], '', $str);

//Функция strtr
//strtr осуществляет поиск и замену символов в строке

/*
 * Дана строка $str. Замените в ней все 'a' на цифру 1, буквы 'b' - на 2,
 * а буквы 'c' - на 3. Решите задачу двумя способами работы с функцией strtr
 * (массив замен и две строки замен).
*/

//$str = 'acvccabcbcabbweib';
//
//echo strtr($str, ['a' => '1', 'b' => "2", "c" => "3"]);
//echo "<br>" . strtr($str, "abc", "123");


//Функция substr_replace
//substr_replace заменяет указанную часть строки на другую

//$str = 'fjdsifiusdn';
//echo $str . "<br>";
//
//echo substr_replace($str, "!!!", 2, 5);

//Работа с strpos, strrpos
//strpos возвращает позицию первого вхождения подстроки в другую строку.
//strrpos возвращает позицию последнего вхождения подстроки.

//Дана строка 'abc abc abc'. Определите позицию первой буквы 'b'.
//$str = 'abc abc abc';
//echo strpos($str, 'b');

//Дана строка 'abc abc abc'. Определите позицию последней буквы 'b'.
//echo strrpos($str, 'b');

/*Дана строка 'abc abc abc'. Определите позицию первой найденной буквы 'b',
если начать поиск не с начала строки, а с позиции 3.*/

//echo strpos($str, 'b', 3);

//Дана строка 'aaa aaa aaa aaa aaa'. Определите позицию второго пробела.

//$str = 'aaa aaa aaa aaa aaa';
//echo strpos($str, ' ', (strpos($str, ' ') + 1));

//$str = 'fdfs...ffsa..';
//
//if (strpos($str, '..')) {
//    echo "yes";
//} else {
//    echo 'no';
//}

//Проверьте, что строка начинается на 'http://'.

//$str = 'http://dasada';
//if (strpos($str, 'http://') == 0) {
//    echo 'yes';
//} else {
//    echo 'no';
//}

//Работа с explode, implode
//explode разбивает строку в массив по определенному разделителю.
//implode сливает массив в строку с указанным разделителем.

//Дана строка 'html css php'. Запишите каждое слово этой строки в отдельный элемент массива.

//$str = 'html css php';
//
//$arr = explode(' ', $str);
//var_dump($arr);

/*Дан массив с элементами 'html', 'css', 'php'. С помощью implode
создайте строку из этих элементов, разделенных запятыми.*/

//$str = implode(', ', $arr);
//echo $str;

/*В переменной $date лежит дата в формате год-месяц-день. Преобразуйте
эту дату в формат день.месяц.год.*/

//$date = '2004-06-08';
//
//$arr = explode('-', $date);
//echo $arr[2] . '.' . $arr[1] . '.' . $arr[0];

//Работа с str_split
//str_split разбивает строку в массив
//Дана строка '1234567890'. Разбейте ее на массив с элементами '12', '34', '56', '78', '90'.

//$str = "1234567890";
//$arr = str_split($str, 2);
//var_dump($arr);

/*Дана строка '1234567890'. Разбейте ее на массив с элементами '1', '2',
'3', '4', '5', '6', '7', '8', '9', '0'.*/
//
//$str = "1234567890";
//$arr = str_split($str, 1);
//var_dump($arr);

//Дана строка '1234567890'. Сделайте из нее строку '12-34-56-78-90' не используя цикл.
//$str = "1234567890";
//$arr = str_split($str, 2);
//echo implode('-', $arr);

//Работа с trim, ltrim, rtrim
//trim удаляет пробелы с начала и конца строки
//ltrim удаляет пробелы с начала строки.
//rtrim удаляет пробелы с конца строки

//$str = '        fdfd         ';
//echo $str . "<br>";
//echo trim($str);

//Дана строка '/php/'. Сделайте из нее строку 'php', удалив концевые слеши.
//
//$str = '/php/';
//echo $str . "<br>";
//echo trim($str, '/');

/*
 * Дана строка 'слова слова слова.'. В конце этой строки может быть
 * точка, а может и не быть. Сделайте так, чтобы в конце этой строки
 * гарантировано стояла точка. То есть: если этой точки нет - ее надо
 * добавить, а если есть - ничего не делать. Задачу решите через rtrim без всяких ифов.
*/

//$str = 'слова слова слова';
//
//echo rtrim($str, '.') . '.';

//Работа с strrev
//strrev переворачивает строку так, чтобы символы шли в обратном порядке.

//$str = '12345';
//echo strrev($str);

/*
 * Проверьте, является ли слово палиндромом (одинаково читается во всех
 * направлениях, примеры таких слов: madam, otto, kayak, nun, level).
*/

//$str = 'otto';
//
//if ($str == strrev($str)) {
//    echo 'yes';
//} else {
//    echo 'no';
//}

//Работа с str_shuffle
//str_shuffle переставляет символы в строке в случайном порядке.

//Дана строка. Перемешайте символы этой строки в случайном порядке.

//$str = 'abcd';
//echo str_shuffle($str);

/*
 * Создайте строку из 6-ти случайных маленьких латинских букв так,
 * чтобы буквы не повторялись. Нужно сделать так, чтобы в нашей
 * строке могла быть любая латинская буква, а не ограниченный набор.
*/

//$str = "qwertyuiopasdfghjklzxcvbnm";
//echo substr(str_shuffle($str), 0, 6);

//Работа с number_format
//number_format позволяет форматировать число
//number_format(число, количество знаков, разделитель дробной части, разделитель тысяч);

//Дана строка '12345678'. Сделайте из нее строку '12 345 678'.
//$str = '12345678';
//echo number_format($str, 0, '', ' ');
//echo "<br>" . number_format($str);

//Работа с str_repeat
//str_repeat повторяет строку заданное количество раз.

//for ($i = 1; $i < 10; $i++) {
//    echo str_repeat("x", $i) . "<br>";
//}

//С помощью одного цикла и функции str_repeat выведите на экран следующую пирамидку:
//for ($i = 1; $i < 10; $i++) {
//    echo str_repeat($i, $i) . "<br>";
//}

//Работа с strip_tags и htmlspecialchars
//htmlspecialchars позволяет вывести теги в браузер так, чтобы он не считал их командами
//strip_tags удаляет HTML теги из строки, не трогая их содержимого.

//Дана строка 'html, <b>php</b>, js'. Удалите теги из этой строки.
//$str = "html, <b>php</b>, js";
//echo strip_tags($str);

//Дана строка $str. Удалите все теги из этой строки, кроме тегов <b> и <i>.
//$str = '<p>html</p>, <b>php</b>, <i>js</i>';
//echo strip_tags($str, '<b></b><i></i>');

/*
 *Дана строка 'html, <b>php</b>, js'. Выведите ее на экран 'как есть':
 * то есть браузер не должен преобразовать <b> в жирный.
*/

//$str = "html, <b>php</b>, js";
//echo htmlspecialchars($str);

//Работа с chr и ord
// chr находит символ по его ASCII коду.
//ord возвращает ASCII код символа.

//echo ord("a") . ' - a;' . ord("b") . ' - b;' . ord("c") . ' - c;' . ord(" ") . ' -  ;';

//Выведите на экран символ с кодом 33.
//echo chr(33);

/*Запишите в переменную $str случайный символ - большую букву латинского алфавита.
Для этого с помощью таблицы ASCII определите какие целые числа соответствуют
большим буквам латинского алфавита.*/
//
//$str = 90;
//echo chr($str);

/*Запишите в переменную $str случайную строку $len длиной, состоящую
из маленьких букв латинского алфавита.*/
//$len = mt_rand(0, 26);

//$str = substr(str_shuffle('qwertyuiopasdfghjklzxcvbnm', $len))
//$str = substr(str_shuffle(str_repeat('abcdefghijklmnopqrstuvwxyz', $len)), 0, $len);
//echo $str;

//Дана буква английского алфавита. Узнайте, она маленькая или большая.

//$a = 'R';
//if (ord($a) <= 90) {
//    echo 'big';
//} else {
//    echo 'not big';
//}

//Работа с strchr, strrchr
//strchr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки.
//strrchr находит последнее вхождение символа в строку и возвращает часть строки начиная с этого места до конца строки.

/*
 * Дана строка 'ab-cd-ef'. С помощью функции strchr выведите на экран строку '-cd-ef'.
*/
//$str = 'ab-cd-ef';
//echo strchr($str, '-');

//Дана строка 'ab-cd-ef'. С помощью функции strrchr выведите на экран строку '-ef'.
//$str = 'ab-cd-ef';
//echo strrchr($str, '-');

//Работа с strstr
//strstr находит первое вхождение подстроки в строку и возвращает часть строки начиная этого места до конца строки

//Дана строка 'ab--cd--ef'. С помощью функции strstr выведите на экран строку '--cd--ef'.
//$str = 'ab--cd--ef';
//echo strstr($str, '-');

//Функции для массивов в PHP
//Работа с in_array

//$arr = [
//        1, 2, 3, 4, 5
//];
//
//if (in_array(3, $arr)) {
//    echo 'yes';
//} else {
//    echo 'no';
//}

//Работа с array_sum и array_product
//$arr = [1, 2, 3, 4, 5];
//
//echo array_sum($arr);
//echo "<br>" . array_product($arr);

/*
 * С помощью функций array_sum и count найдите среднее арифметическое элементов
 * (сумма элементов делить на их количество) данного массива.
*/

//$arr = [1, 2, 3, 4, 5];
//
//echo (array_sum($arr)) / count($arr);

//Работа с range
//range создает массив с диапазоном элементов
//$arr = range(1, 100);
//var_dump($arr);

//Создайте массив, заполненный буквами от 'a' до 'z'.
//$arr = range('a', 'z');
//var_dump($arr);

//Создайте строку '1-2-3-4-5-6-7-8-9' не используя цикл.
//$arr = range(1, 9);
//$str = implode('-', $arr);
//echo $str;

//Найдите сумму чисел от 1 до 100 не используя цикл.
//echo array_sum(range(1, 100));

//Найдите произведение чисел от 1 до 10 не используя цикл.
//echo array_product(range(1, 10));

//Работа с array_merge
//array_merge сливает два и более массивов вместе.

//$arr1 = [1, 2, 3];
//$arr2 = ['a', 'b', 'c'];
//
//var_dump(array_merge($arr1, $arr2));

//Работа с array_slice
//array_slice отрезает и возвращает часть массива.
//$arr = [1, 2, 3, 4, 5];
//var_dump(array_slice($arr, 1, 3));

//Работа с array_splice
//array_splice отрезает и возвращает часть массива.

//$arr = [1, 2, 3, 4, 5];
//array_splice($arr, 1, 2);
//var_dump($arr);

//$arr = [1, 2, 3, 4, 5];
//array_splice($arr, 0, 1);
//array_splice($arr, 3, 1);
//var_dump($arr);

//$arr = [1, 2, 3, 4, 5];
//array_splice($arr, 3, 0, ['a', 'b', 'c']);
//var_dump($arr);

//$arr = [1, 2, 3, 4, 5];
//array_splice($arr, 1, 0, ['a', 'b']);
//array_splice($arr, 6, 0, ['c']);
//array_splice($arr, 8, 0, ['e']);
//var_dump($arr);

//Работа с array_keys, array_values, array_combine
//array_keys получает ключи массива и записывает их в новый массив
//array_values выбирает все значения из массива.
//rray_combine осуществляет слияние двух массивов в один ассоциативный.

//$arr = [
//    'a' => 1, 'b' => 2, 'c' => 3
//];
//
//$keys = array_keys($arr);
//$values = array_values($arr);
//
//var_dump($keys);
//echo "<br>";
//var_dump($values);

//$arr1 = ['a', 'b', 'c'];
//$arr2 = [1, 2, 3];
//
//$res = array_combine($arr1, $arr2);
//var_dump($res);

//Работа с array_flip, array_reverse
//array_flip производит обмен местами ключей и значений массива
//array_reverse переворачивает массив в обратном порядке
//$arr = [
//    'a' => 1, 'b' => 2, 'c' => 3
//];
//var_dump(array_flip($arr));

//$arr = [1, 2, 3, 4, 5];
//var_dump(array_reverse($arr));

//Работа с array_search
//array_search осуществляет поиск значения в массиве и возвращает ключ первого найденного элемента.
//$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
//echo array_search('-', $arr);

//$arr = ['a', '-', 'b', '-', 'c', '-', 'd'];
//array_splice($arr, array_search('-', $arr),1);
//var_dump($arr);

//Работа с array_replace
//array_replace заменяет значения первого массива значениями с такими же ключами из других переданных массивов.
//$arr = ['a', 'b', 'c', 'd', 'e'];
//var_dump(array_replace($arr, [0 => '!', 3 => '!!']));

//
////Работа с сортировку
//$arr = ['3' => 'c', '1' => 'a', '2' => 'e', '4' => 'b'];
///*
// * rsort - по убыванию элементов,
// * asort - по возрастанию элементов с сохранением ключей,
// * arsort - по убыванию элементов с сохранением ключей,
// * ksort - по возрастанию ключей,
// * krsort - по убыванию ключей,
// * usort - по функции по элементам,
// * uasort - по функции по элементам с сохранением ключей,
// * uksort - по функции по ключам,
// * natsort - натуральная сортировка.
//*/
//echo "sort - по порядку";
//echo "<br>";
//sort($arr);
//var_dump($arr);
//echo "<br>";
//
//echo 'rsort - по возрастанию элементов с сохранением ключей';
//echo "<br>";
//rsort($arr);
//var_dump($arr);
//echo "<br>";
//
//echo 'asort - по убыванию элементов с сохранением ключенй';
//echo "<br>";
//asort($arr);
//var_dump($arr);
//echo "<br>";
//
//echo 'ksort - по возрастанию ключей';
//echo "<br>";
//ksort($arr);
//var_dump($arr);
//echo "<br>";
//
//echo 'krsort - по убыванию ключей';
//echo "<br>";
//krsort($arr);
//var_dump($arr);
//
//echo "<br>";
//echo 'usort, uasort, uksort - по функции по элементам';
//echo "<br>";
//
//echo 'natsort - натуральная сортировка.';
//echo "<br>";
//natsort($arr);
//var_dump($arr);

//Работа с array_rand
//array_rand возвращает случайный ключ из массива.
//$arr = ['a' => 1, 'b' => 2, 'c' => 3];
//
//echo array_rand($arr) . "<br>";
//
//$key = array_rand($arr, 2);
//var_dump($key);

//Работа с shuffle
//shuffle осуществляет перемешивание массива так, чтобы его элементы шли в случайном порядке

//$arr = [1, 2, 3, 4, 5];
//shuffle($arr);
//var_dump($arr);

//Заполните массив числами от 1 до 25 с помощью range, а затем перемешайте его элементы в случайном порядке.
//$arr = range(1, 25);
//shuffle($arr);
//var_dump($arr);
//Создайте массив, заполненный буквами от 'a' до 'z' так, чтобы буквы шли в случайном порядке и не повторялись.

//$arr = range('a', 'z');
//shuffle($arr);
//var_dump($arr);

//Сделайте строку длиной 6 символов, состоящую из маленьких английских букв, расположенных в случайном порядке. Буквы не должны повторяться.
//$arr = range('a','z');
//shuffle($arr);
//$str = implode($arr);
//echo substr($str, 0, 6);

// Создаем массив букв от 'a' до 'z'
//$letters = range('a', 'z');
//shuffle($letters);
//$randomLetters = array_slice($letters, 0, 6);
//$randomString = implode('', $randomLetters);
//echo $randomString;


//Работа с array_unique
//array_unique осуществляет удаление повторяющихся элементов (дублей) из массива.
//$arr = ['a', 'b', 'c', 'b', 'a'];
//var_dump(array_unique($arr));

//Начало и конец массива
//array_shift вырезает и возвращает первый элемент массива.
//array_pop вырезает и возвращает последний элемент массива.
//array_unshift добавляет элементы в начало массива.
//array_push добавляет элементы в конец массива

//$arr = [1, 2, 3, 4, 5];
//echo array_shift($arr);
//echo "<br>" . array_pop($arr);
//array_unshift($arr, 0);
//array_push($arr, 6);
//echo "<br>";
//var_dump($arr);

//Заполнение массива
//array_pad дополняет массив определенным значением до заданного размера.
//array_fill создает массив, заполненный элементами с определенным значением.
//array_fill_keys создает массив и заполняет массив элементами с определенным значением так, чтобы весь массив был с одинаковыми элементами, но разными ключами.

//$arr = ['a', 'b', 'c'];
//$res = array_pad($arr, 6, '-');
//var_dump($res);

//$arr = array_fill(0, 10, 'x');
//var_dump($arr);

//$arr = array_fill_keys([0, 1, 2, 3, 4], 'x');
//var_dump($arr);

//Работа с array_chunk
//array_chunk разбивает одномерный массив в двухмерный
/*
 * Создайте массив, заполненный целыми числами от 1 до 25.
 * С помощью функции array_chunk разбейте этот массив на 5
 * подмассивов по пять элементов в каждом.
*/
//
//$arr = range(1, 25);
//var_dump(array_chunk($arr, 5));

//Работа с array_count_values
//array_count_values производит подсчет количества всех значений массива.

//$arr = ['a', 'b', 'c', 'b', 'a'];
//var_dump(array_count_values($arr));

//Работа с array_map
//array_map применяет заданную функцию ко всем элементам массива и возвращает измененный массив.
//$arr = [1, 2, 3, 4, 5];
//$res = array_map("sqrt", $arr);
//var_dump($res);

//Работа с array_intersect, array_diff
//array_diff - сравнивает массивы и выводит те, которых нет во втором массиве
//array_intersect вычисляет пересечение массивов - возвращает массив из элементов, которые есть во всех массивах,

//$arr1 = [1, 2, 3, 4, 5];
//$arr2 = [3, 4, 5, 6, 7];
////$res = array_diff($arr2, $arr1);
////var_dump($res);
//$res = array_intersect($arr1, $arr2);
//var_dump($res);

//$res1 = array_diff($arr1, $arr2);
//$res2 = array_diff($arr2, $arr1);
//var_dump($res1);
//echo "<br>";
//var_dump($res2);

//Функции для времени-даты в PHP
//Работа с timestamp
//time возвращает текущий момент времени в формате timestamp
//mktime переводит заданную дату в формат timestamp.
////echo time();
//echo mktime(12, 59, 59, 3, 1, 2025);

//$year = date("Y");
//echo mktime(00, 00, 00, 12, 31, $year);

//Найдите количество секунд, прошедших с 13:12:59 15-го марта 2000 года до настоящего момента времени.

//$before = mktime(13, 12, 59, 3, 15, 2000);
//$now = time();
//echo $now - $before;

//Найдите количество целых часов, прошедших с 7:23:48 текущего дня до настоящего момента времени.
//$before = mktime(7, 23, 28, 10, 31, 2023);
//$now = time();
//$hour = ($before - $now) / 3600;
//echo floor($hour);


?>
<script src="assets/js/main.js"></script>
</body>
</html>