<?php
for($r=0;$r<=5;$r++){
	for($c=0;$c<=$r;$c++){
		echo "*";
		
	}
	echo "<br>";
}

 function add($a,$b){
	return($a+$b);
}

echo add(5,2);
echo "<br>";

$student=array("Anik","Rahim","Karim","Safig","Jamal","Kamal","Jack","Rose","Stany","Niloy");

for($i=0;$i<count($student);$i++){
	
	if(($i%2)!=0)
	{echo $student[$i];
     echo "<br>";
	}
}

//Associative Array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";

//Server
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
//echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];

?>
