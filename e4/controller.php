<?php

if(isset($_REQUEST['x']) && isset($_REQUEST['y']) && isset($_REQUEST['operacion'])){
    comprobarErrores();
}
else{
    header("Location: error.php");
}

function comprobarErrores(){
    
    $valorX = $_POST['x'];
    $valorY = $_POST['y'];
    $operacion = $_POST['operacion'];
    $resultado = "";

        switch (strtolower($operacion)) {
            case 'suma':
                $resultado = $valorX + $valorY;
                file_put_contents("resultados/exito", $resultado);

                if(file_put_contents("resultados/exito", $resultado) == true) {
                    header("Location: exito.php");
                }
                
                break;
            case 'resta':
                $resultado = $valorX - $valorY;
                file_put_contents("resultados/exito", $resultado);

                if(file_put_contents("resultados/exito", $resultado) == true) {
                    header("Location: exito.php");
                }
            break;
            case 'division': 
                $resultado = $valorX/$valorY;
                file_put_contents("resultados/exito", $resultado);

                if(file_put_contents("resultados/exito", $resultado) == true) {
                    header("Location: exito.php");
                }
            break;
            case 'multiplicacion':
                $resultado = $valorX * $valorY;
                file_put_contents("resultados/exito", $resultado);

                if(file_put_contents("resultados/exito", $resultado) == true) {
                    header("Location: exito.php");
                }
            break;
            default:
                header("Location: error.php");
        break;
        }
    
}