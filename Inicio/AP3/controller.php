<?php
require_once('model.php');
require_once('view.php');

// render($diccionario,'templates/template00.html');
// render($diccionario2,'templates/template01.html');

$action_array=explode(".php",$_SERVER['REQUEST_URI']);
$action=$action_array[1];

// echo var_dump($action_array);



switch($action){
    case "/":
        render(bbdd(3),'templates/main.html');
        break;
    case "/articulo":
        render(bbdd(1),'templates/template00.html');
        break;
    case "/foto":
        render(bbdd(2),'templates/template01.html');
        break; 
}
/*
if(){
    //articulo
}elseif(){
    //foto
}else{
    //default
}
*/
?>