<?php
function getListPosts(){
    //MRI: El directorio en el que se encuentran los post, se llama 'post', no posts, lo modifico 
    $directorio = 'post';
    //MRI: La función array_diff, esta mal escrita, la modifico
    $ficheros = array_diff(scandir($directorio), array('..', '.'));
//MRI: Inicializo resultado = ""
    $resultado = "";
     //MRI: Añado resultado = "<ul>\n"
    $resultado .= "<ul>\n";
    foreach ($ficheros as $fichero){
       
        
        $resultado .= "<li>";
        $resultado .= '<a href="ver.php?nombre='.urlencode($fichero).'">'.$fichero.'</a>';
        $resultado .= '<a href="borrar.php?nombre='.urlencode($fichero).'"> Borrar</a>';
        $resultado .= '<a href="editar.php?nombre='.urlencode($fichero).'"> Editar</a>';
        //MRI: Le faltaba el . delante del = para concatenar
        $resultado  .= "</li>\n";
    }
    
    $resultado .= "</ul>\n";

    return $resultado;
}



function getPostHTML(){
    $fichero = $_GET['nombre'];
    //MRI: Mal referenciado, el fichero es post, no posts, lo modifico
    $ruta = "post/$fichero";

    $contenido = file_get_contents($ruta);

    $resultado = '<p>'.$contenido.'</p>';
    return $resultado;
}

function getPostContent($fichero){
    //MRI: Mal referenciado, el fichero es post, no posts, lo modifico
    $ruta = "post/$fichero";

    $contenido = file_get_contents($ruta);
    

    return $contenido;
}

function getRecentPosts(){
    //MRI: Mal referenciado, el fichero es post, no posts, lo modifico
    $listado = `ls -t post`;
    $elementos = explode("\n",$listado);
    $resultado = "";
    //MRI: le falta el . para concatenar
    $resultado .= "<div>\n";
    $resultado .= substr(getPostContent($elementos[0]), 0, 9);
    $resultado .= "</div>\n";
    $resultado .= "<div>\n";
    $resultado .= substr(getPostContent($elementos[1]), 0, 9);
    $resultado .= "</div>\n";

    return $resultado;
}
?>