<?php
	echo file_get_contents("../tpl/head.tpl");
	echo "После заполнения полей и нажатия кнопки будет создан файл config.php в папке data";
	echo file_get_contents("../tpl/form.tpl");
	echo file_get_contents("../tpl/foot.tpl");
?>