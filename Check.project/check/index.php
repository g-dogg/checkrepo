<?php
	require '../lib/mysql.php';
        require '../lib/tpl_class.php';
	$today = date("Y-m-d");
	define ("colHall", "6");
	
	echo "<form action=\"index.php\" method=\"GET\"><select name=\"hall\" size=\"1\">";
	
	for($i=1; $i<=colHall; $i++)
	{
		
		echo "<option value=\"" . $i . "\">зал судебных заседаний № " . $i. "</option>";
		
	}
	
	echo "</select><input type=\"submit\" value=\"OK\" name=\"hallcheked\"></form>";

	if(isset($_REQUEST['hall']) && isset($_REQUEST['hallcheked']))
	{
		$hp ="зал судебных заседаний №" . $_REQUEST['hall'];
		echo "Вы выбрали " . $hp;
	}

	//$query = "SELECT * FROM hear WHERE hearingDate='$today' AND hearingPoint='$hp' ORDER BY hearingTime";
?>