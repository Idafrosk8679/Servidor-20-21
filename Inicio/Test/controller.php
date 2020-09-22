<?php
require_once('model.php');
require_once('view.php');

// render($diccionario,'templates/template00.html');
// render($diccionario2,'templates/template01.html');

$action_array=explode(".php",$_SERVER['REQUEST_URI']);
$action=$action_array[1];

// echo var_dump($action_array);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "main";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$diccionario = "SELECT titulo_pagina, titulo, contenido, enlace, texto_enlace FROM diccionario";
$diccionario2 = "SELECT titulo_pagina, titulo_foto, foto, enlace_foto FROM diccionario2";
$diccionario3 = "SELECT titulo_pagina, nif, razon_social, direccion, telefono FROM diccionario3";
$result  = $conn->query($diccionario);
$result2 = $conn->query($diccionario2);
$result3 = $conn->query($diccionario3);

if ($result->num_rows > 0) {
  // output data of each row
//   $result = $result->fetch_assoc(); 
//   $result2 = $result2->fetch_assoc(); 
  $result3 = $result3->fetch_assoc(); 

} else {

  echo "0 results";
}
$conn->close();

switch($action){
    case "/":
        render($diccionario3,'templates/main.php');
        break;
    case "/articulo":
        render($diccionario,'templates/template00.html');
        break;
    case "/foto":
        render($diccionario2,'templates/template01.html');
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