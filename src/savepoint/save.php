<?php

@include 'config.php'

// выполнение запроса INSERT
$table_data = $_POST['table_data'];
$rows = explode(';', $table_data);
foreach ($rows as $row) {
  $values = explode(',', $row);
  $sql = "INSERT INTO myTable (column1, column2, column3, ...) VALUES ('$values[0]', '$values[1]', '$values[2]', ...)";
  mysqli_query($conn, $sql);
}

?>
