<?php

    error_reporting(E_ALL); // Error/Exception engine, always use E_ALL

    ini_set('ignore_repeated_errors', TRUE); // always use TRUE

    ini_set('display_errors', FALSE); // Error/Exception display, use FALSE only in production environment or real server. Use TRUE in development environment

    ini_set('log_errors', TRUE); // Error/Exception file logging engine.

    ini_set("error_log","./php-error.log");
    error_log( "Hello, errors!" );


    require_once("Config/Config.php");
    require_once ("Helpers/Helpers.php");

    $url=!empty($_GET['url']) ? $_GET['url'] :"home/home";
    $url=rtrim($url,'/');
    $arrUrl=explode("/",$url);
    $controller=$arrUrl[0];
    $method=$arrUrl[0];
    $params="";

    if (!empty($arrUrl[1])){
        if ($arrUrl[1]!=""){
            $method=$arrUrl[1];
        }
    }

    if(!empty($arrUrl[2])){
        if ($arrUrl[2]!=""){
            for ($i=2;$i<count($arrUrl);$i++){
                $params.=$arrUrl[$i].',';
            }
            $params=trim($params,',');
           
        }
    }
    
    require_once("Libraries/Core/Autoload.php");

    require_once("Libraries/Core/Load.php");

   
?>