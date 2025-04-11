<?php//assossiative array
$age=array("nahom"=>"25","Zelalem"=>"43","gebre"=>"45");
		echo "<br>";
		ksort($age);
foreach($age as $x=>$xvalue)
{
	echo $age[$x];
	echo "<br>";
}
?>