<?php

   $db_host = $_POST['dbhostname'];
   $db_port = $_POST['dbport'];
   $db_name = $_POST['dbname'];
   $db_user = $_POST['dbuser'];
   $db_pass = $_POST['dbpass'];
   
   if(isset($_POST['save']))
   { 
       if(!empty($db_host) && !empty($db_name) && !empty($db_user))
           {
       
            $info .= '$db_host = "' . $db_host . "\"; \n";
            $info .= '$db_port = "' . $db_port ."\"; \n";
            $info .= '$db_name = "' . $db_name . "\"; \n";
            $info .= '$db_user = "' .  $db_user ."\"; \n";
            $info .= '$db_pass = "' . $db_pass . "\";";

            $handle = fopen("data/connect.php", "a+");
            fwrite($handle, $info);
            fclose($handle);
            echo 'Данные записаны в файл';
            echo '';
           }
           else
           {
               echo "Не указаны " . $db_host . "," . $db_name . "или" . $db_name . "<br />";
               echo "Вернуться к заполнению <a href=\"form.html\">формы</a>";
               
           }
   }
   
   
?>