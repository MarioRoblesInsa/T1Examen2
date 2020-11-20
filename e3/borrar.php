<?php
    $nombre = $_GET['nom'];
    
    unlink("posts/$nombre");
    
    header("Location: borrar.php");
        
?>