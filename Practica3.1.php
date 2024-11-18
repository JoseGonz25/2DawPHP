<?php
    if (isset($_POST['btnSubir'])&& $_POST['btnSubir'] =='Subir'){
        if (is_uploaded_file($_FILES['archivoEnviado']['tmp_name'])){ // aqui lo sube a la carpeta temporal 
            
            $nombre= microtime()."_".$_FILES['archivoEnviado']['name'];
            move_uploaded_file($_FILES['archivoEnviado']['tmp_name'], "./uploads/{$nombre}");

            echo "<p>Archivo $nombre subido con exito </p>";
        }
    }
?>

