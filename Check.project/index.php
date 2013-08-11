<?php
        require 'data/config.php';
        require 'lib/mysql.php';
        //require 'lib/tpl_class.php'; 
        
        echo file_get_contents("tpl/head.tpl");
        
        $today = date("d-F-Y");
        echo "Сегодня " . $today;
        
       $query = "SELECT * FROM hear ORDER BY hearingTime";
       $result = mysql_query($query);
        
                echo '<table>';
        
                while($row = mysql_fetch_array($result))
                {
                    if($row['Presence'] == 1)
                    {
                        $Presense = "<b>Явился</b>"; //не запылился...
                    }
                    else 
                    {
                        $Presense = ' ';
                    }
                    echo '<tr>
                            <td>',$row['hearingPoint'],'</td>
                            <td>',$row['hearingDate'],'</td>
                            <td>',$row['hearingTime'],'</td>
                            <td>',$row['caseNum'],'</td>
                            <td>',$row['Judge'],'</td>
                            <td>',$row['Part'],'</td>
                            <td>',$row['partType'],'</td>
                            <td>',$Presense,'</td>
                            <td>',$row['Comment'],'</td>
                         </tr>';
                    
                }
                echo '</table>';

	
        echo file_get_contents("tpl/foot.tpl");
        
?>