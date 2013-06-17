<?php
        require '/home/web/www/data/config.php';
        require '/home/web/www/lib/mysql.php';
        require '/home/web/www/lib/tpl_class.php';
        
        echo file_get_contents("../tpl/head.tpl");
        
        $today = date("d-F-Y");
        echo "Сегодня " . $today;
        
       $query = "SELECT * FROM hear ORDER BY hearingTime"; //W 
       $result = mysql_query($query);
        
                echo '<table>';
        
                while($row = mysql_fetch_array($result))
                {
                    echo '<tr>
                            <td>',$row['id'],'</td>
                            <td>',$row['hearingPoint'],'</td>
                            <td>',$row['hearingDate'],'</td>
                            <td>',$row['hearingTime'],'</td>
                            <td>',$row['caseNum'],'</td>
                            <td>',$row['Judge'],'</td>
                            <td>',$row['Part'],'</td>
                            <td>',$row['partType'],'</td>
                            <td>',$row['Comment'],'</td>
                         </tr>';
                }
                echo '</table>';

	
        echo file_get_contents("../tpl/foot.tpl");
        
?>