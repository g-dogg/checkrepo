<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$dirHabdle = glob("../xml/*.xml", GLOB_NOSORT);
print_r($dirHabdle);
$countFiles = count($dirHabdle);
$arrayElement = $countFiles - 1;
echo "Будет обработано " . $countFiles . " файла(ов)<br />";
for($i=0; $i<=$arrayElement; $i++)
{
    echo $dirHabdle[$i] . "<br />";
}
?>
