<?php

/*
 * 
 */

require '/home/web/www/data/config.php';
include '/home/web/www/lib/mysql.php';

$q = "CREATE TABLE  `appearance`.`hear` 
    (
    `id` INT NOT NULL AUTO_INCREMENT ,
    `hearingPoint` VARCHAR( 255 ) NOT NULL ,
    `hearingDate` DATE NOT NULL ,
    `hearingTime` TIME NOT NULL ,
    `caseNum` VARCHAR( 20 ) NOT NULL ,
    `Judge` TEXT NOT NULL,
    `Part` TEXT NOT NULL ,
    `partType` INT NOT NULL,
    `Presence` INT NOT NULL DEFAULT 0,
    `Comment` TEXT,
    
    PRIMARY KEY (  `id` )
    ) ENGINE = MYISAM CHARACTER SET cp1251 COLLATE cp1251_general_ci";

echo "<form action=\"create_table.php\" method=\"POST\">
        <input type=\"submit\" name=\"createtable\" value=\"Создать таблицу\">
      </form>";

if(isset($_POST['createtable']))
    {
    if(mysql_query($q))
        {
        echo "Таблица создана";
        header("Location: http://192.168.56.101/install_db/form_1.html");
        }
    else 
        {
        echo "Ошибка: " .mysql_error ();
        }
    }

?>