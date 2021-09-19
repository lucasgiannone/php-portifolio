<?php
//HTTP
// define('HTTP_SERVER','http://lucasgiannone.website.com/');
//HTTPS
// define('HTTPS_SERVER','https://lucasgiannone.website.com/');
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if(strcmp($lang,'en')==0){
    header("location:/en/home.php");
}
if(strcmp($lang,'pt')==0){
    header("location:/pt/inicio.php");
}
