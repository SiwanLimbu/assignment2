<!DOCTYPE html>
<html>
<body>

<?php
$name1 = "Kusal Karki";
$attendance1= 20;
$hygiene1 = 70;
$rating1 = 3;


function Evaluate($name,$attendance,$hygiene,$rating){
	if($attendance < 80){
    	echo  $name . "You are fired from Rojan Kiran Pasal!";
  }
  	elseif($hygiene < 50){
    	echo  $name . "You are fired from Rojan Kiran Pasal!";
    }
    elseif($rating < 3){
    	echo  $name . "You are fired from Rojan Kiran Pasal!";
    }
	else{
		echo "you are not fired yet";
	}
}

Evaluate($name1,$attendance1,$hygiene1,$rating1);
?>

</body>
</html>