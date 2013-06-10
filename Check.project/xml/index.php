<?php
echo file_get_contents('../tpl/head.tpl');
echo file_get_contents('../tpl/upload.tpl');

if($_FILES)
{
    $name = $_FILES['filename']['name'];
    move_uploaded_file($_FILES['filename']['tmp_name'], $name);
    echo "Загружен файл " . $name;
}
echo file_get_contents('../tpl/foot.tpl');
?>