<?php

echo "My name is anik Sikder!<br/>";
//echo "<br/>";

$txt="hello world";
$x=10;
$y=20.5;
$z=$x+$y;
echo $z;
echo "<br/>";
echo $txt;
echo "<br/>";


$a=10;
$b=10;

if($a<$b)
{
	echo "b is greater";
}
elseif($a==$b) {
	echo "equal";
}
else{
	echo "a is greater";
}

echo "<br/>";


for($i=0;$i<10;$i++){
	for($j=0;$j<=$i;$j++){
		echo "*";
	}
	echo "<br/>";
	}
	
function writeMsg(){
	echo  5+10;
}
writeMsg();
echo "<br/>";

function add($a,$b){
	return($a+$b);
}	
echo add(5,4);
echo "<br/>";

$student=array("Anik","Amit","Aunkan","Aurpa");



for($i=0;$i<count($student);$i++){
	
	echo $student[$i];
     echo "<br>";
	
}
?>
