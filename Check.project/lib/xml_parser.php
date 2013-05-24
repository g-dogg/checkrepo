<?php

require_once 'mysql.php';

echo'<table border=1>';
if(file_exists('../xml/sud2504.xml'))
    {
        $xml = simplexml_load_file('../xml/sud2504.xml');
    }
else 
    {
    exit("Файл отсуствует!");
    }
/* в цикле перебираем все параметры, указаные в xml файле
 * причем теги <schedule></schedule> и все, что выше - пропускаем
 */
  
foreach ($xml->session as $sr) 
    {
    $zal = $sr->sessionRoom;
    $sDate = $sr->sessionDate;
    $sTime = $sr->beginTime;
    $sNumber = $sr->sessionNumber;
    $judge = $sr->judge;

    foreach($sr->sides as $sds)
        {
        $sType = $sds->sideType;
        $sName = $sds->sideName;

    //echo "Место " . $zal . "<br />Дата" . $sdate . " Время начала заседания" . $stime . "<br />";
   /* $sql_query = "INSERT INTO hearing (hp, hearingDate, hearingTime, caseNum) VALUES ('$zal', '$sdate', '$stime', '$snumber')";
    mysql_query($sql_query);*/
    echo '<tr>
                <td>',$zal,'</td>
                <td>',$sDate,'</td>
                <td>',$sTime,'</td>
                <td>',$sNumber,'</td>
                <td>',$judge,'</td>
                <td>',$sType,'</td>
                <td>',$sName,'</td>    
         </tr>';
    
        }
    }
echo '</table>';
?>