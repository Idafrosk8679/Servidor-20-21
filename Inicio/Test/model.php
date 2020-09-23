<?php

function bbdd($sel){
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

    switch ($sel) {
        case '1':
            $diccionario="SELECT titulo_pagina, titulo, contenido, enlace, texto_enlace FROM diccionario";
            break;

        case '2':
            $diccionario = "SELECT titulo_pagina, titulo_foto, foto, enlace_foto FROM diccionario2";
            break;
        case '3':
            $diccionario = "SELECT titulo_pagina, nif, razon_social, direccion, telefono FROM diccionario3";
            break;
        
    }
    $result  = $conn->query($diccionario);
    // var_dump($result);
    
    if ($result->num_rows > 0) {
        $result = $result->fetch_assoc();

    } else {

        echo "0 results";
    }
    $conn->close();
    
    return $result;

    
}

$diccionario=array(
    'titulo_pagina'=>'Ejemplo de MVC',
    'titulo'=>'Articulo 123',
    'contenido'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Incidunt eius aut eaque aspernatur illo modi. Ipsa omnis vero, quo iusto fuga adipisci sapiente cupiditate, sed atque hic distinctio, tempora necessitatibus.',
    'enlace'=>'http://www.google.es',
    'texto_enlace'=>'Google'
);
$diccionario2=array(
    'titulo_pagina'=>'Foto MVC',
    'titulo_foto'=>'foto de MVC en PHP',
    'foto'=>'https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/1024px-PHP-logo.svg.png',
    'enlace_foto'=>'https://www.php.net/'
);
$diccionario3=array(
    'titulo_pagina'=>'Datos Empresariales',
    'nif'=>'NIF: 53662991K',
    'razon_social'=>'Lorem ipsum dolor sit, amet consectetur adipisicing elit.',
    'direccion'=>'C\ Alameda Nº12',
    'telefono'=>'956332099'
);

?>