<?php
require_once '/home/web/www/lib/mysql_class.php';
echo'<table border=1>';
$siquel->sql_connect();
$siquel->sql_query="SELECT * FROM hearing ORDER BY hearingTime";
$siquel->sql_execute();
while ($row = mysql_fetch_array($siquel->sql_result)) {
     echo '<tr>
                <td>',$row['id'],'</td>
                <td>',$row['hp'],'</td>
                <td>',$row['hearingDate'],'</td>
                <td>',$row['hearingTime'],'</td>
                <td>',$row['caseNum'],'</td>
                <td>',$row['Participant1'],'<form action=""><input type="submit" class="submit" value="Истец явился" name="P1OK"></form></td>
                <td>',$row['Participant2'],'<form action=""><input type="submit" class="submit" value="Ответчик явился" name="P2OK"></form></td>
                <td>',$row['Participant3'],'<form action=""><input type="submit" class="submit" value="3 лицо явился" name="P3OK"></td>
                <td>',$row['speakerJudge'],'</td>
               </tr>';
        }
        echo '</table>';
?>