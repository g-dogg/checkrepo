<?php

include 'mysql.php';

echo'<table border=1>';

$dirHabdle = glob("../xml/*.xml", GLOB_NOSORT);
print_r($dirHabdle);
$countFiles = count($dirHabdle);
$arrayElement = $countFiles - 1;
echo "Будет обработано " . $countFiles . " файла(ов)<br />";

for($i=0; $i<=$arrayElement; $i++)
{

    if(file_exists($dirHabdle[$i]))
        {
            $xml = simplexml_load_file($dirHabdle[$i]);
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
                $sName = htmlspecialchars($sds->sideName);

                //echo "Место " . $zal . "<br />Дата" . $sdate . " Время начала заседания" . $stime . "<br />";
  
                echo '<tr>
                          <td>',$zal,'</td>
                          <td>',$sDate,'</td>
                          <td>',$sTime,'</td>
                          <td>',$sNumber,'</td>
                          <td>',$judge,'</td>
                          <td>',$sType,'</td>
                          <td>',$sName,'</td>    
                     </tr>';
                $sql_query = "INSERT INTO `hear` (`hearingPoint`, `hearingDate`, `hearingTime`, `caseNum`, `Judge`, `Part`, `partType`) VALUES ('$zal', '$sDate', '$sTime', '$sNumber', '$judge', '$sName', '$sType')";
                $result = mysql_query($sql_query);
            }
         
        }
        unlink($dirHabdle[$i]);
}
echo '</table>';
?>