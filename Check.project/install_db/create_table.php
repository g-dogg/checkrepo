<?php

/*
 * 
 */


require '/home/web/www/data/config.php';
include '/home/web/www/lib/mysql.php';

echo file_get_contents("../tpl/head.tpl");
echo "Будет создана таблица в БД. <br />";
echo '<TABLE><tr>
                 <td>id</td>
                 <td>hearingPoint</td>
                 <td>hearingDate</td>
                 <td>hearingTime</td>
                 <td>caseNum</td>
                 <td>Judge</td>
                 <td>Part</td>
                 <td>partType</td>
                 <td>Presence</td>
                 <td>Comment</td>
     </tr></TABLE><br />';

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
        <input type=\"submit\" name=\"createtable\" value=\"Создать таблицу\" class=\"ok\">
      </form>";

if(isset($_POST['createtable']))
    {
    if(mysql_query($q))
        {
        echo "Таблица создана";
        header("Location: http://localhost");
        }
    else 
        {
        echo "Ошибка: " .mysql_error ();
        }
    }
echo file_get_contents("../tpl/foot.tpl");
?>