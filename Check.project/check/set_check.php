<?php
        require_once '../lib/mysql.php';
        $id = '';
           
        $id = key($_REQUEST);
        
        $query = "UPDATE hear SET Presence = 1 WHERE id = '$id'";	
        $result = mysql_query($query);

        if(!$result)
        {
        	echo "Ошибка обновления записи в БД";
        }
        else
        {
        	header('location: index.php');
        }
            
?>
