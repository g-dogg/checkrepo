<?php
        require '../lib/mysql.php';
        echo file_get_contents("../tpl/head.tpl");
        
        $today = date("d-F-Y");
        echo "Сегодня " . $today;
        
        $query = "SELECT * FROM hearing ORDER BY hearingTime";
        $result = mysql_query($query);
        
        echo'<table border=1>';
        
        while($row = mysql_fetch_array($result)){
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
        ?>
    </body>
</html>
