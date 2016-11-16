<?php
chdir("../Imagenes");
$path = getcwd();

if(!isset($_POST['id_tabla'])){
	$name_file = $_FILES["url_file"]["name"]; 
	$tmp_name_file = $_FILES["url_file"]["tmp_name"]; 
}else{
	$name_file = $_FILES["url_file_".$_POST['id_tabla']]['name'][$_POST['index_select_tabla']]; 
	$tmp_name_file =$_FILES["url_file_".$_POST['id_tabla']]['tmp_name'][$_POST['index_select_tabla']];
}

$path_file = $path ."\\". basename($name_file);


$file = $tmp_name_file;

if (move_uploaded_file($tmp_name_file, $path_file)) {
	echo $name_file;
        
} else {
   echo json_encode(array('respuesta' => 'No se pudo subir el archivo'));
}


?>