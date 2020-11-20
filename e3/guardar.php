<!--Para que me funcione he tenido que cambiar los permisos al usuario www-data-->
<?php
    // Leer titulo y descripción
    //MRI: Cambio $_REQUEST Y $_GET por $_POST
    $titulo = $_POST['titulo'];
    $contenido = $_POST['descripcion'];
//MRI: Mal referenciado, el fichero es post, no posts, lo modifico, y le añado la o que le falta a la variable $contenido y $titulo
    $resultado = file_put_contents("post/$titulo",$contenido);
//MRI: Le falta un =
    if ($resultado == true){
        header("Location: index.php");
    }
    else{
        header("Location: nuevo.php");
    }

    
?>