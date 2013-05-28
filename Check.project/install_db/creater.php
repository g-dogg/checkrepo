<?php

   $db_host = $_POST['dbhostname'];
   $db_port = $_POST['dbport'];
   $db_name = $_POST['dbname'];
   $db_user = $_POST['dbuser'];
   $db_pass = $_POST['dbpass'];
   $hall_num = $_POST['hallcol'];
           
   if(isset($_POST['save']))
   { 
       if(!empty($db_host) && !empty($db_name) && !empty($db_user))
           {
       
            $info .= '$db_host = "' . $db_host . "\"; \n";
            $info .= '$db_port = "' . $db_port ."\"; \n";
            $info .= '$db_name = "' . $db_name . "\"; \n";
            $info .= '$db_user = "' . $db_user ."\"; \n";
            $info .= '$db_pass = "' . $db_pass . "\"; \n";
            $info .= 'define("colHall", "' . $hall_num . "\");";
            
            $handle = fopen("data/connect.php", "a+");
            fwrite($handle, $info);
            fclose($handle);
            echo 'Данные записаны в файл';
            echo '';
           }
           else
           {
               echo "Поля сервер, имя базы или имя пользователя не должны быть пустыми<br />";
               echo "Вернуться к заполнению <a href=\"../tpl/form.tpl\">формы</a>";
               
           }
   }
   
   
?>