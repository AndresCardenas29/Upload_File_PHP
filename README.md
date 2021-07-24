## Subir archivos por medio de PHP
- Encontrar el php.ini para los ajustes y poder configurar la carga de archivos.
```php
<?php echo php_ini_loaded_file(); ?>
```
- En VSCode la precionar **F3** se activa el filtro, en el filtro se pone ***file_uploads*** y aparecera algo similar a esto.

```ini
;;;;;;;;;;;;;;;;
; File Uploads ;
;;;;;;;;;;;;;;;;

; Whether to allow HTTP file uploads.
; http://php.net/file-uploads
file_uploads=On

; Temporary directory for HTTP uploaded files (will use system default if not
; specified).
; http://php.net/upload-tmp-dir
;upload_tmp_dir =
upload_tmp_dir="/opt/lampp/temp/"
; Maximum allowed size for uploaded files.
; http://php.net/upload-max-filesize
upload_max_filesize=40M
```
- El valor de ***file_uploads*** sino esta en ***On*** tocaria cambiarle el valor a ***On*** para habilitar la subida de archivos.
- El valor de ***upload_tmp_dir*** es donde los archivos que vas a subir se van a guardar temporalmente antes de guardarlos a la ubicacion que indiques en la pagina web que se esta desarrollando,por lo gneral se deja como esta.
- El valor de ***upload_max_filesize*** indica el tamaño maximo del archivo que vas a permitir subir, para una imagen no creo que pase los 40 megabytes, esta opcion es muy util se te sale el error de `archivo excede upload_max_filesize`.