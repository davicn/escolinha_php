<?php
    $host = "localhost";
    $user = "root";
    $passwd = "";
    $db = "escolinha";
    $conn = mysqli_connect($host,$user,$passwd);
    mysqli_select_db($conn,$db);

?>