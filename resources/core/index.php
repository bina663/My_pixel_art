<?php

    $pathInfoCurrent = "";
    if(isset($_SERVER["PATH_INFO"])){
        $pathInfoCurrent = $_SERVER["PATH_INFO"];
    }
    $auth = false;
    if(isset($_COOKIE["auth"]) && $_COOKIE["auth"] == true ){
        $auth = $_COOKIE["auth"];
    }

    if(!$auth && $pathInfoCurrent != "/"){
        header("http://127.0.0.1:8000/");
    }
?>