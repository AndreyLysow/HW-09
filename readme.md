# Information about this Web project
## This project  was developed by a student of group PHPDEV31 of the course "Web Developer" of [Skillfactory](www.skillfactory.ru)
## by Lysov Andrey
---
## How to open/launch
## Еhis Web project is deployed on the website https://andreylysow.github.io/hw-09
## Technologies used:
* HTML
* CSS
* PHP
## Задание 1. Таблица истинности PHP. Аналиируя поведение логических операторов языка РНP посредством использования  таблицы истинности, можно отметить следующее: 
## 1)  Поведение логических операторов PHP без испключений совпадает с принципами булевой алгебры;
## 2) ! логическое отрицание меняет логическое значение операнда с истины в ложь и наоборот. Соответственно отрицание переменной A, имеюшей значение 0 будет получаться результат true и, соответственно, мы получим результат false при входящем значении 1ж
## 3) Поведения оператора дизъюнкции по двум переменным А и B, принимающим значения 0 и 1, миы видим, что результат false поручается только, если значения A=0 и B=0. В остальных случаях дизъюнкция двух переменных возвращает значение true;
## 4) Диаметрально противоположно ведет себя оператор конъюнкции, который при значениях A=1 и B=1 возвращает результат true. В остальных случаях конъюнкция двух переменных возвращает результат false;
## 5) Оператор исключающее ИЛИ обозначается как XOR. Он возвращает значение true, если один и только один из операндов имеет значение true, то есть если значения А=0 и B=1 или наоборот (A=1 и B=0). Если оба операнда имеют значение true (A и B имеют значение 1 или 0), оператор вернет значение false.

## Задание 2. Гибкое (==) сравнение в PHP 
## В таблице отражно поведение PHP при гибком сравнени. 
## Известно, что в PHP нет строгой типизации. В нкоторых случаях нестрогая типизация может привести к критическим ошибкам в приложениях. Мы видим, при сравнении true со сторокой "php" возвращается значение true. Таткже true возвращается при сравнении числовым значением 1 и строкой "1". При этом происходит преобразование строкового значения в числовое значение. Следует отметитЮ что при гибком сравнении null c 0 возвращается значение true. аналогично ведет себя null c false, возвращая значение true.

## Задание 3. Жесткое (===) сравнение в PHP
## При жестком стравнении вольности, присутствующие в гибком сравнении, исключены. Что мы и видим в таблице 3. 1 в жестком сравнении равна 1 (при сранении со значением "1" возвращается false). Соответсвенно, жесткое сравнение позволяет исключить допуски, присущие PHP языку, не имеющему строгой типизации.



---
## The project is available on Githab at https://github.com/AndreyLysow/HW-09
---


© [Andrey Lysov](https://github.com/AndreyLysow), 2022