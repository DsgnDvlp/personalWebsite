<?php

    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"]="eng";
    }

    include_once "languages/".$_SESSION["lang"].".php";

    function tr_($param){
        global $resource;
        return $resource[$param];
    }
?>