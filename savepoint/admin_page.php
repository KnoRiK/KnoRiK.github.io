<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>

<div class="container">

   <div class="content">
      <h3>Здравствуйте  , <span>Ковалёв Дмитий Сергеевич</span></h3>
      <h1>welcome <span><?php echo $_SESSION['admin_name'] ?></span></h1>
      <p>this is an admin page</p>
      <!-- <a href="login_form.php" class="btn">login</a> -->
      <!-- <a href="register_form.php" class="btn">register</a> -->
      <a href="logout.php" class="btn">logout</a>
   </div>


   <style>

    /* Стили для таблицы */
    table {
        font-size: 14px;
        border-collapse: collapse;
        text-align: center;
    }
    th, td:first-child {
        background: #AFCDE7;
        color: white;
        padding: 10px 20px;
    }
    th, td {
        border-style: solid;
        border-width: 0 1px 1px 0;
        border-color: white;
    }
    td {
        background: #D8E6F3;
    }
    th:first-child, td:first-child {
        text-align: left;
    }
    .myTable { display: none; }


    /* Стили для select+option */
    .styled-select {
        border: 1px solid #ccc;
        box-sizing: border-box;
        border-radius: 3px;
        overflow: hidden;
        position: relative;
    }

    .styled-select, .styled-select select { width: 240px;}

    .styled-select select {
        height: 34px;
        padding: 5px 0 5px 5px;
        background: transparent;
        border: none;
        -webkit-appearance: none; 
    }

</style>

<div class="styled-select">
        <!-- HTML код с двумя списками -->
    <select id="first_select" name="first_select">
    <option value="">Выберите группу</option>
    <option value="value1">ИСиП 3</option>
    <option value="value2">ИСиП 4</option>
    </select>

    <!-- Второй выпадающий список -->
    <select id="second_select1" name="second_select1" onchange="showTable(this)" style="display:none;">
    <option value="">Выберите предмет</option>
    <option value="1">Проектирование</option>
    <option value="2">Веб. дизайн</option>
    <option value="3">Веб. дизайн</option>
    </select>

    <!-- Третий выпадающий список -->
    <select id="second_select2" name="second_select2" onchange="showTable(this)" style="display:none;">
    <option value="">Выберите предмет</option>
    <option value="4">Разработка кода</option>
    <option value="5">Тестирование ИС</option>
    <option value="6">Веб. дизайн</option>
    </select>
</div>

<table id="table1" class="myTable">
    <tr>
        <th>Обучающиеся</th>
        <th>01.05</th><th>02.05</th><th>03.05</th><th>06.05</th><th>07.05</th><th>08.05</th><th>09.05</th><th>10.05</th><th>13.05</th><th>14.05</th><th>15.05</th><th>16.05</th><th>17.05</th><th>20.05</th><th>21.05</th><th>22.05</th><th>23.05</th><th>24.05</th><th>27.05</th><th>28.05</th><th>29.05</th><th>30.05</th><th>31.05</th>
    </tr>
    <tr>
        <td>Колосов Матвей Александрович</td>
        <td><select name="estimation"><option value=""></option><option value="Н">Н</option><option value="УЖ">УЖ</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td><td><select name="estimation">    <option value=""></option>    <option value="Н">Н</option>    <option value="УЖ">УЖ</option>    <option value="2">2</option>    <option value="3">3</option>    <option value="4">4</option>    <option value="5">5</option></select></td>
    </tr>
</table>

<table id="table2" class="myTable">
    <tr><td>Таблица 2</td></tr>
</table>

<table id="table3" class="myTable">
    <tr><td>Таблица 3</td></tr>
</table>

<table id="table4" class="myTable">
    <tr><td>Таблица 4</td></tr>
</table>

<table id="table5" class="myTable">
    <tr><td>Таблица 5</td></tr>
</table>

<table id="table6" class="myTable">
    <tr><td>Таблица 6</td></tr>
</table>

<script>
  // Получаем элементы списка и добавляем слушателя событий на изменение значения первого списка
  var firstSelect = document.getElementById("first_select");
  firstSelect.addEventListener("change", function() {
    // Скрываем все списки второго уровня
    var secondSelects = document.querySelectorAll("select[name^='second_select']");
    for (var i = 0; i < secondSelects.length; i++) {
      secondSelects[i].style.display = "none";
    }
    // Если выбрано значение первого списка, показываем соответствующий список второго уровня
    if (this.value === "value1") {
      document.getElementById("second_select1").style.display = "block";
    } else if (this.value === "value2") {
      document.getElementById("second_select2").style.display = "block";
    }
  });

  function showTable(select) {
        // Получить выбранное значение
        var value = select.value;
        // Найти таблицу по ID и скрыть ее
        var tables = document.querySelectorAll(".myTable");
        for (var i = 0; i < tables.length; i++) {
            tables[i].style.display = "none";
        }
        // Показать таблицу с выбранным ID
        document.querySelector("#table" + value).style.display = "table";
    }
</script>

</div>

</body>
</html>  