<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{titulo_pagina}</title>
    <nav>
        <ul>
            <li><a href="./">Home</a></li>
            <li><a href="./articulo">Articulo</a></li>
            <li><a href="./foto">Foto</a></li>
        </ul>
    </nav>
</head>
<body>
    <p>$row["nif"]</p>
    <p>{razon_social}</p>
    <p>{direccion}</p>
    <p>{telefono}</p>
    <?php
        $row = $result->fetch_assoc();
          echo
            <tr>
                <td>{$row['nif']}</td>
                <td>{$row['razon_social']}</td>
                <td>{$row['direccion']}</td>
                <td>{$row['telefono']}</td>
            </tr>
        
    ?>

</body>
</html>

