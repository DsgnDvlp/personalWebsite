<?php

    if(!isset($_SESSION["lang"])){
        $_SESSION["lang"]="eng";
    }

    include_once "languages/".$_SESSION["lang"].".php";

    function tr_($param, $args=null){
        global $resource;
        if(isset($args) && $args != null && is_array($args)){
            return vsprintf($resource[$param], $args);
        }
        return $resource[$param];
    }
?>