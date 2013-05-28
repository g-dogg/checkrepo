<?php
	require '../lib/mysql.php';
        require '../lib/tpl_class.php';
	$today = date("Y-m-d");
	define ("colHall", "6");
	echo file_get_contents("../tpl/head.tpl");
	echo "<form action=\"index.php\" method=\"GET\"><select name=\"hall\" size=\"1\">";
	
	for($i=1; $i<=colHall; $i++)
	{
		
		echo "<option value=\"" . $i . "\">зал судебных заседаний № " . $i. "</option>";
		
	}
	
	echo "</select><br /><input type=\"submit\" value=\"OK\" name=\"hallchecked\" class=\"hallchecked\"></form>";

	if(isset($_REQUEST['hall']) && isset($_REQUEST['hallchecked']))
	{
		$hp ="зал судебных заседаний №" . $_REQUEST['hall'];
		echo "<p>Вы выбрали " . $hp . "</p>";
	}

	//$query = "SELECT * FROM hear WHERE hearingDate='$today' AND hearingPoint='$hp' ORDER BY hearingTime";
        echo file_get_contents("../tpl/foot.tpl");
?>