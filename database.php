<?php
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "paulromerodesign";


    function connect(){
        global $host, $user, $password, $database;
        $sql = mysqli_connect($host,$user,$password,$database) or die("Error " . mysqli_error($link));
        return $sql;
    }


    function disconnect($resource){
        mysql_close($resource);
    }

 ?>
