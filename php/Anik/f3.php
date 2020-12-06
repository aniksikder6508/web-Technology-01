<?php

$k="my name is Anik Sikder";
$p="love to learn";
$a=10;
$b=20.5;
$c=$a+$b;
echo  $a+$b;
echo "<br/>";

if($a+$b<40){
	echo "high";
}
else{
	echo "low";
}
echo "<br/>";
for($i=0;$i<5;$i++){
	print("Anik Sikder");
	echo "<br/>";
}


function myFunction($c,$d){
	return $c*$d;
}

echo myFunction(10,50);


$students=array("Anjan","Mita","Anik","Amit");



for($i=0;$i<count($students);$i++){
echo "I like " .$students[$i];
}




?>