<?php
//  check/index.php - чекаем явившихся сторон

	require '../lib/mysql.php';
        require '../lib/tpl_class.php';
	$today = date("Y-m-d");
	define ("colHall", "6");
	echo file_get_contents("../tpl/head.tpl");
        echo "<p>" . $today . "</p>";
	echo "<form action=\"index.php\" method=\"GET\"><select name=\"hall\" size=\"1\">";
	
	for($i=1; $i<=colHall; $i++)
	{
		
		echo "<option value=\"" . $i . "\">зал судебных заседаний № " . $i. "</option>";
		
	}
	
	echo "</select><br /><input type=\"submit\" value=\"OK\" name=\"hallchecked\" class=\"hallchecked\"></form>";

	if(isset($_REQUEST['hall']) && isset($_REQUEST['hallchecked']))
	{
		$hp ="зал судебных заседаний № " . $_REQUEST['hall'];
		echo "<p>Вы выбрали " . $hp . "</p>";
                $query = "SELECT * FROM hear WHERE hearingDate='$today' AND hearingPoint='$hp' ORDER BY hearingTime"; //W 
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
                            <td>',$row['Part'],'<form action=""><input type="submit" class="submit" value="Явился" name="P2OK"></form></td>
                            <td>',$row['partType'],'</td>
                            <td>',$row['Comment'],'</td>
                         </tr>';
                }
                echo '</table>';
	}

	
        echo file_get_contents("../tpl/foot.tpl");
?>