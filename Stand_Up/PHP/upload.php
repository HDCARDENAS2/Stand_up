<?php
chdir("../Images");
$path = getcwd();
$path_file = $path ."\\". basename($_FILES["url_file"]["name"]);


$file = $_FILES["url_file"]["tmp_name"];

if (move_uploaded_file($_FILES["url_file"]["tmp_name"], $path_file)) {
	echo $path_file;
        
} else {
   echo json_encode(array('respuesta' => 'No se pudo subir el archivo'));
}


?>