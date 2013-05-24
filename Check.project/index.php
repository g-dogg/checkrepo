<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
        <title>Процессы</title>
    </head>
    <body>
        <?php
        require '/home/web/www/lib/mysql.php';
        
        $today = date("d-F-Y");
        echo "Сегодня " . $today;
        
        $query = "SELECT * FROM hearing ORDER BY hearingTime";
        $result = mysql_query($query);
        
        echo'<table border=1>';
        
        while($row = mysql_fetch_array($result)){
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
    </body>
</html>
