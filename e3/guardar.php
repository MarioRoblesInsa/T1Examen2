<?php
    // Leer titulo y descripción
    $titulo = $_REQUEST['titulo'];
    $contenido = $_GET['descripcion'];

    $resultado = file_put_contents("posts/$titul",$contenid);

    if ($resultado = true){
        header("Location: index.php");
    }
    else{
        header("Location: nuevo.php");
    }

    
?>