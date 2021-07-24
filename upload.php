<?php

$uploadFileDir = './uploads/'; //nombre de la carpeta donde se va asubir los archivos


// detalles del archivo que se subio
$fileTmpPath = $_FILES['uploadedFile']['tmp_name']; //nombre temporal
$fileName = $_FILES['uploadedFile']['name'];        //nombre del archivo
$fileSize = $_FILES['uploadedFile']['size'];        //tamanio del archivo
$fileType = $_FILES['uploadedFile']['type'];        //tipo del archivo

if(!$fileSize > 0) { //verifica si se ha suvido un archvio
    echo 'No se ha suvido ningun archivo.';
    return;
}

$newFileName = (time() . $fileName); //se genera un numero + nombre del archvio
$dest_path = $uploadFileDir . $newFileName; //Destino del archivo

if (move_uploaded_file($fileTmpPath, $dest_path)) { //se mueve el archvo de la carpeta temporal, al destino (carpeta uploads)
    echo 'File is successfully uploaded.'; //si el archivo pudo moverse
} else {
    echo 'Error al mover el archivo al directorio. Asegurate que la carpeta tenga permisos para poder moverlos.'; //error
}
