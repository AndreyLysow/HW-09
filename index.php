<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First project on PHP</title>
    <style type="text/css">
    table {
     border-collapse: collapse; /* Отображать двойные линии как одинарные */
    }
    th {
     text-align: center; /* Выравнивание по левому краю */
    }
    td, th {
     border: 1px solid #800; /* Параметры границы */
     padding: 4px; /* Поля в ячейках */
     text-align: center; /* Выравнивание по левому краю */
    }
    td.false {
     background: #FFD700
    }
    td.true {
     background: #90EE90
    }
    caption {
    text-align: right;
    font-style: italic;
    font-size: 1.3em;
    } 
  </style>
</head>
<body>

<?php
	echo '<table align="center" border="1" width="100%" cellspacing="0">';
    echo '<caption>Задание 1. Таблица истинности PHP</caption>';
	// $arr = [
	// 	['A' => 0, 'B' => 0, 'not' => (boolval(!0) ? 'true' : 'false'), 'or' => (boolval(0 || 0) ? 'true' : 'false'), 'and' => (boolval(0 && 0) ? 'true' : 'false'), 'xor' => (boolval(0 xor 0) ? 'true' : 'false')],
	// 	['A' => 0, 'B' => 1, 'not' => (boolval(!0) ? 'true' : 'false'), 'or' => (boolval(0 || 1) ? 'true' : 'false'), 'and' => (boolval(0 && 1) ? 'true' : 'false'), 'xor' => (boolval(0 xor 1) ? 'true' : 'false')],
	// 	['A' => 1, 'B' => 0, 'not' => (boolval(!1) ? 'true' : 'false'), 'or' => (boolval(1 || 0) ? 'true' : 'false'), 'and' => (boolval(1 && 0) ? 'true' : 'false'), 'xor' => (boolval(1 xor 0) ? 'true' : 'false')],
    //     ['A' => 1, 'B' => 1, 'not' => (boolval(!1) ? 'true' : 'false'), 'or' => (boolval(1 || 1) ? 'true' : 'false'), 'and' => (boolval(1 && 1) ? 'true' : 'false'), 'xor' => (boolval(1 xor 1) ? 'true' : 'false')],
	// ];
	$arr = [
		['A' => 0, 'B' => 0, 'not' => !0, 'or' => 0 || 0, 'and' => 0 && 0, 'xor' => 0 xor 0],
		['A' => 0, 'B' => 1, 'not' => !0 ,'or' => 0 || 1, 'and' => 0 && 1, 'xor' => 0 xor 1],
		['A' => 1, 'B' => 0, 'not' => !1, 'or' => 1 || 0, 'and' => 1 && 0, 'xor' => 1 xor 0],
        ['A' => 1, 'B' => 1, 'not' => !1, 'or' => 1 || 1, 'and' => 1 && 1, 'xor' => 1 xor 1],
	];
//echo var_dump($arr);
$arr1 = array();
foreach ($arr as $key => $value) {
    $arr1[] = [($value['A']), ($value['B']), (boolval($value['not']) ? 'TRUE' : 'FALSE'), (boolval($value['or']) ? 'TRUE' : 'FALSE'), boolval($value['and']) ? 'TRUE' : 'FALSE', boolval($value['xor']) ? 'TRUE' : 'FALSE'];
}

 //   echo var_dump($arr1);

       echo '<tr>';
       echo '<th>A</th>';
       echo '<th>B</th>';
       echo ' <th>!A</th>';
       echo '<th>A || B</th>';
       echo '<th>A && B</th>';
       echo '<th>A xor B</th>';
       echo '</tr>';
        // рабочий метод генерации таблицы, но ниже приведен более лаконичный
	// foreach ($arr1 as $user) {
	// 	echo "<tr>";
	// 	echo "<th>{$user[0]}</th>";
    //     echo "<th>{$user[1]}</th>";
	// 	echo "<td>{$user[2]}</td>";
	// 	echo "<td>{$user[3]}</td>";
	// 	echo "<td>{$user[4]}</td>";
	// 	echo "<td>{$user[5]}</td>";
	// 	echo '</tr>';
	// }
	foreach ($arr1 as $row) {
		echo '<tr>';
		foreach ($row as $key=> $elem) {
		if ($elem== 'TRUE') {
            echo "<td class ='true'>$elem</td>";
        } else if ($elem== 'FALSE') {
            echo "<td class ='false'>$elem</td>";
     }   else 
        echo "<td>$elem</td>"; 
    }
     echo '</tr>';
}
echo '</table>';	
?>
<br>
<br>
<?php
    
	echo '<table align="center" border="1" width="100%" cellspacing="0">';
    echo '<caption>Задание 2. Гибкое <strong>(==) </strong>сравнение в PHP</caption>';
	$arr2 = [
		['column_name' => 'true', 'col1' => true == true, 'col2' => true == false, 'col3' => true == 1, 'col4' => true == 0, 'col5' => true == -1, 'col6' => true == "1", 'col7' => true == null, 'col8' => true == "php"],
        ['column_name' => 'false', 'col1' => false == true, 'col2' => false == false, 'col3' => false == 1, 'col4' => false == 0, 'col5' => false == -1, 'col6' => false == "1", 'col7' => false == null, 'col8' => false == "php"],
        ['column_name' => '1', 'col1' => 1 == true, 'col2' => 1 == false, 'col3' => 1 == 1, 'col4' => 1 == 0, 'col5' => 1 == -1, 'col6' => 1 == "1", 'col7' => 1 == null, 'col8' => 1 == "php"],  
        ['column_name' => '0', 'col1' => 0 == true, 'col2' => 0 == false, 'col3' => 0 == 1, 'col4' => 0 == 0, 'col5' => 0 == -1, 'col6' => 0 == "1", 'col7' => 0 == null, 'col8' => 0== "php"],  
        ['column_name' => '-1', 'col1' => -1 == true, 'col2' => -1 == false, 'col3' => -1 == 1, 'col4' => -1 == 0, 'col5' => -1 == -1, 'col6' => -1 == "1", 'col7' => -1 == null, 'col8' => -1 == "php"],
        ['column_name' => '"1"', 'col1' => "1" == true, 'col2' => "1" == false, 'col3' => "1" == 1, 'col4' => "1" == 0, 'col5' => "1" == -1, 'col6' => "1" == "1", 'col7' => "1" == null, 'col8' => "1" == "php"],
        ['column_name' => 'null', 'col1' => null == true, 'col2' => null == false, 'col3' => null == 1, 'col4' => null == 0, 'col5' => null == -1, 'col6' => null == "1", 'col7' => null == null, 'col8' => null == "php"],
        ['column_name' => '"php"', 'col1' => "php" == true, 'col2' => "php" == false, 'col3' => "php" == 1, 'col4' => "php" == 0, 'col5' => "php" == -1, 'col6' => "php" == "1", 'col7' => "php" == null, 'col8' => "php" == "php"],
	];

    $arr3 = array();
foreach ($arr2 as $key => $value2) {
    $arr3[] = [$value2['column_name'], (boolval($value2['col1']) ? 'TRUE' : 'FALSE'), (boolval($value2['col2']) ? 'TRUE' : 'FALSE'), boolval($value2['col3']) ? 'TRUE' : 'FALSE', boolval($value2['col4']) ? 'TRUE' : 'FALSE', boolval($value2['col5']) ? 'TRUE' : 'FALSE', boolval($value2['col6']) ? 'TRUE' : 'FALSE', boolval($value2['col7']) ? 'TRUE' : 'FALSE', boolval($value2['col8']) ? 'TRUE' : 'FALSE' ];
}

       echo '<tr>';
       echo '<th></th>';
       echo '<th>true</th>';
       echo '<th>false</th>';
       echo '<th>1</th>';
       echo '<th>0</th>';
       echo '<th>-1</th>';
       echo '<th>"1"</th>';
       echo '<th>null</th>';
       echo '<th>"php"</th>';
       echo '</tr>';

	foreach ($arr3 as $row) {
		echo '<tr>';
		foreach ($row as $key=> $elem) {
            if ($elem== 'TRUE') {
                echo "<td class ='true'>$elem</td>";
            } else if ($elem== 'FALSE') {
                echo "<td class ='false'>$elem</td>";
         }   else 
            echo "<td>$elem</td>"; 
        }
		echo '</tr>';
	}
	echo '</table>';
?>
<br>
<br>
<?php
    
	echo '<table align="center" border="1" width="100%" cellspacing="0">';
    echo '<caption>Задание 3. Жесткое <strong>(===) </strong> сравнение в PHP</caption>';
	$arr4 = [
		['column_name' => 'true', 'col1' => true === true, 'col2' => true === false, 'col3' => true === 1, 'col4' => true === 0, 'col5' => true === -1, 'col6' => true === "1", 'col7' => true === null, 'col8' => true === "php"],
        ['column_name' => 'false', 'col1' => false === true, 'col2' => false === false, 'col3' => false === 1, 'col4' => false === 0, 'col5' => false === -1, 'col6' => false === "1", 'col7' => false === null, 'col8' => false === "php"],
        ['column_name' => '1', 'col1' => 1 === true, 'col2' => 1 === false, 'col3' => 1 === 1, 'col4' => 1 === 0, 'col5' => 1 === -1, 'col6' => 1 === "1", 'col7' => 1 === null, 'col8' => 1 === "php"],  
        ['column_name' => '0', 'col1' => 0 === true, 'col2' => 0 === false, 'col3' => 0 === 1, 'col4' => 0 === 0, 'col5' => 0 === -1, 'col6' => 0 === "1", 'col7' => 0 === null, 'col8' => 0 === "php"],  
        ['column_name' => '-1', 'col1' => -1 === true, 'col2' => -1 === false, 'col3' => -1 === 1, 'col4' => -1 === 0, 'col5' => -1 === -1, 'col6' => -1 === "1", 'col7' => -1 === null, 'col8' => -1 === "php"],
        ['column_name' => '"1"', 'col1' => "1" === true, 'col2' => "1" === false, 'col3' => "1" === 1, 'col4' => "1" === 0, 'col5' => "1" === -1, 'col6' => "1" === "1", 'col7' => "1" === null, 'col8' => "1" === "php"],
        ['column_name' => 'null', 'col1' => null === true, 'col2' => null === false, 'col3' => null === 1, 'col4' => null === 0, 'col5' => null === -1, 'col6' => null === "1", 'col7' => null === null, 'col8' => null === "php"],
        ['column_name' => '"php"', 'col1' => "php" === true, 'col2' => "php" === false, 'col3' => "php" === 1, 'col4' => "php" === 0, 'col5' => "php" === -1, 'col6' => "php" === "1", 'col7' => "php" === null, 'col8' => "php" === "php"],
	];

    $arr5 = array();
foreach ($arr4 as $key => $value3) {
    $arr5[] = [$value3['column_name'], (boolval($value3['col1']) ? 'TRUE' : 'FALSE'), (boolval($value3['col2']) ? 'TRUE' : 'FALSE'), boolval($value3['col3']) ? 'TRUE' : 'FALSE', boolval($value3['col4']) ? 'TRUE' : 'FALSE', boolval($value3['col5']) ? 'TRUE' : 'FALSE', boolval($value3['col6']) ? 'TRUE' : 'FALSE', boolval($value3['col7']) ? 'TRUE' : 'FALSE', boolval($value3['col8']) ? 'TRUE' : 'FALSE' ];
}

       echo '<tr>';
       echo '<th></th>';
       echo ' <th>true</th>';
       echo '<th>false</th>';
       echo '<th>1</th>';
       echo '<th>0</th>';
       echo '<th>-1</th>';
       echo '<th>"1"</th>';
       echo '<th>null</th>';
       echo '<th>"php"</th>';
       echo '</tr>';

	foreach ($arr5 as $row) {
		echo '<tr>';
        foreach ($row as $key=> $elem) {
            if ($elem== 'TRUE') {
                echo "<td class ='true'>$elem</td>";
            } else if ($elem== 'FALSE') {
                echo "<td class ='false'>$elem</td>";
         }   else 
            echo "<td>$elem</td>"; 
        }
		echo '</tr>';
	}
	echo '</table>';
?>


</body>
</html>