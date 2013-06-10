<?php

/*НЕ работает!!!!!
 * загрузка наших многострадальных xml-ек на сервер для последущей обработки
 */

//каталог загрузки файлов

$dir = '../xml/';

if(isset($_FILES['upfile']) && isset($_GET['fload']))
{
    $upfile     = $_FILES['upfile']['tmp_name'];
    $upfileName = $_FILES['upfile']['name'];
    $upfileSize = $_FILES['upfile']['size'];
    $upfileType = $_FILES['upfile']['type'];
    $errorCode  = $_FILES['upfile']['error'];
    echo $_FILES['upfile']['tmp_name'];
    //если нет ошибок
    if($_FILES)
    {
        echo "<p>Вы загружаете файл: " . $upfile . "." . $upfileType . "</p><br />";
        
        //дополняем имя файла
        $upfileName = $dir . $upfileName;
        
        /*копируем временный файл в каталог $dir, имя файла исходное
         * первый параметр - источник
         * второй параметр - назначение (папка на сервере)
         */
        move_uploaded_file($upfile, $upfileName);
    }
    else 
    {
        echo $errorCode;
    }
}
?>