<?php

echo "My name is Anik Sikder.<br/>";

$a="I am a Student.";
$b=10;
$c=10;
$d=$b+$c;
echo "a = ";
echo $a;
echo "<br/>";
echo "b = ";
echo $b;
echo "<br/>";
echo "c = ";
echo $c;
echo "<br/>";
echo "d = ";
echo $d;
echo "<br/>";

if($b>$c){
	echo "B is greater than c";
}
elseif($c>$b){
	echo"C is greater than B";
}
else{
	echo"equal";
}
echo "<br/>";



for($r=0;$r<=4;$r++){
	for($c=0;$c<=$r;$c++){
		echo "*";
	}
	echo"</br>";
}

	function myclass(){
		echo 1+2;
	}

	myclass();
echo"<br/>";
	function yourclass($m,$n){
			return($m+$n);

	}

	echo yourclass(4,8);
	echo"<br/>";

	$teacher=array("Dip","Mak","Asraf","sajib","Sazzad");
  	echo $teacher[1];
  	echo"<br/>";
	echo count($teacher);
	echo"<br/>";
	for ($i=0; $i<count($teacher); $i++) {
	echo $teacher[$i]; 
		echo "<br/>";
	}

?>