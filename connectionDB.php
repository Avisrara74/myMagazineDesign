<?php

// database connection
session_start();
$connection = mysqli_connect('127.0.0.1','mysql','mysql','myMagazineDesign');



if ($connection == false) {
  ?>
  <script type="text/javascript">
    alert("Не удалось подключиться к БД");
  </script>
  <?php
    echo mysql_connect_error();
    exit();
  }
?>
