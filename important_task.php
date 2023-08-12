<?php


/*
echo "<h5> First task: swapping two variables </h5>";
$var_1 = 10;
$var_2 = 20; 
echo "Before swapping variables of A: ".$var_1." And B : ".$var_2."<br>";

$var_1 = $var_1 + $var_2; // 30
$var_2 = $var_1 - $var_2; // 10
$var_1 = $var_1 - $var_2; // 20

echo "After swapping variables of A: ".$var_1." And B : ".$var_2."<br>";
*/





/*
echo "<h5> Second task: swapping two variables using other way </h5>";



$var_1 = 10;
$var_2 = 20; 
echo "Before swapping variables of A: ".$var_1." And B : ".$var_2."<br>";

$var_1 = $var_1 * $var_2; // 200
$var_2 = $var_1 / $var_2; // 10
$var_1 = $var_1 / $var_2; // 20

echo "After swapping variables of A: ".$var_1." And B : ".$var_2."<br>";
*/




/*echo "<h5> Third Task: Table using for loop</h5>";
$tab = 5;
for($i = 1; $i <= 10; $i++){
	echo $tab." * ".$i." = ".$tab*$i."<br>";
}*/




/* echo "<h5> four Task: Sum of natural number</h5>";
//0+1+2+3+4+

 $total = 0;
 $sum = "";

 for($i = 0; $i <= 10; $i++ ){
   $total = $total + $i;
   $sum   = $sum . $i;

   if($i != 10){
   	$sum = $sum." + ";
   }

 }
 echo $sum." = ".$total;*/




/*echo "<h5> five Task: Even or Odd number</h5>";

$num = 3; 
if($num%2 == 0){
	echo "it is a even number $num";

}else{
	echo "it is a odd number $num";

}*/




/*echo "<h5> six Task: Even or Odd number using for loop</h5>";
$a = 0;
for($i = 1; $i <= 10; $i++){
	if($i%2 == $a){
		echo " even number ".$i."<br>";
	}
}*/





/*echo "<h5> seven Task: Even or Odd number using for while</h5>";

$i = 1;
while ($i <= 10) {

if($i%2 == 0){
		echo " even number ".$i."<br>";
	}

	$i++;
}*/




/*echo "<h5> eight Task: Factorial using forloop</h5>";
// 5*4*3*2*1 = 120
$fact = 1;
$num  = 5;

for ($i=1; $i <=$num ; $i++) { 
	$fact = $fact*$i;
}
echo "Factorial of $num is: ".$fact;*/




/* echo "<h5> nine Task: Fibnoacci series</h5>";

 $first = 0;
 $second = 1;
for ($i=1; $i <= 10 ; $i++) { 
	$next = $first + $second; // 0+1 = 1
     $second = $first;
     echo $first."&nbsp";
     $first = $next;
}*/




/*echo "<h5> Ten Task: Series Table</h5>";


$limit =3;
$tab = 2;

for ($j=1; $j <=$limit ; $j++) { 
	# code...

for($i =1; $i<=10; $i++){
echo $tab."*".$i."=".$tab*$i."<br>";
}
++$tab;
echo "<br>";
echo "<br>";
}*/


/*echo "<h5> 11 Task: Star triangle shape </h5>";

for ($i=1; $i <=5 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo "*";
	}
	echo "<br>";
}
*/

/*echo "<h5> 12 Task: Alphabetical triangle shape </h5>";

for ($i='A'; $i <='F' ; $i++) { 
	for ($j='A'; $j <=$i ; $j++) { 
		echo $j;
	}
	echo "<br>";
}*/



/*echo "<h5> 13 Task: Number triangle shape </h5>";

for ($i=1; $i <=5 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo $j;
	}
	echo "<br>";
}*/


/*echo "<h5> 14 Task: Star Diamond shape </h5>";

for ($i=1; $i <=5 ; $i++) { 
	for ($j=1; $j <=$i ; $j++) { 
		echo "* ";
	}
	echo "<br>";

}*/




/*echo "<h5> 15 Task: Numeric Triangular Shape And Its Multiplication </h5>";

	
$column = 5;
for ($i=1; $i <=$column; $i++) { 
	$mul =1;
	for ($j=1; $j <=$i ; $j++) { 
		$mul = $mul * $j;
		echo $j;
	}

	for ($k=1; $k <= $column -$i ; $k++) { 
		echo "&nbsp;&nbsp;";
	}
	echo " = ".$mul;
	echo "<br/>";
}*/







/*echo "<h5> 16 Task: Star Diamond Shape </h5>";


$x=6;
for ($i=1; $i <=$x ; $i++) { 
	for ($j=$x-$i; $j >=1 ; $j--) { 
		echo "&nbsp;&nbsp;";
	}
	for ($k=1; $k <=$i*2-1 ; $k++) { 
		echo "*";
	}
	echo "<br>";



}

for ($d=$x; $d >=1 ; $d--) { 
	for ($e=$x-$d; $e >=1 ; $e--) { 
		echo "&nbsp;&nbsp;";
	}
	for ($f=1; $f <=$d*2-1 ; $f++) { 
		echo "*";
	}
	echo "<br>";

	

}*/




/*echo "<h5> 17 Task: Triangle table Shape </h5>";

for($a=0; $a<=5; $a++)
{
	for($b=0; $b<=$a; $b++)
	{
		$out = $b * $a;
		echo $out."&nbsp;";
	}
	echo "<br>";
}*/




/*echo "<h5> 18 Task: Intersection Array </h5>";

$array1 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$array2 = [3, 5, 8, 7, 9, 3, 7];

foreach ($array1 as $key1 => $value1) {
	foreach ($array2 as $key2 => $value2) {
		if ($value1 == $value2) {
			$Intersection_array[] = $value2;
			break;
		}
	}
}
 
 echo "<pre>";
 print_r($Intersection_array);
 echo "</pre>";*/



/*
echo "<h5> 19 Task: Reverse_letter </h5>";

$name = "sameer";
for ($i=-1; isset($name[$i]) ; $i--) { 
	echo $name[$i]."<br/>";
}
*/





/*
echo "<h5> 20 Task: Count all elements in Array </h5>";
$elements = [2,6,'saleem',5,7,'waseem','kaleem'];
$count =0;

foreach ($elements as $key => $value) {
	if ($elements[$key]) {
		$count++;
	}
}
echo "<br>";
echo "<br>";
echo "<br>";
echo "Count_All_Elements in_Array ".$count;

echo "<pre>";
print_r($user);
echo "</pre>";
*/




?>


<!-- <!DOCTYPE html>
<html>
<head>
	<title>Generating multiple tables</title>
</head>
<body>

	<form method="POST">
		<tr>
			<td><input type="text" name="limit" value="<?php // if(isset($_POST['limit'])) echo $_POST['limit']; ?>"></td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="Submit">
			</td>
		</tr>
		
	</form>

	<?php
/*   if (isset($_POST['submit'])) {
    	$limit = $_POST['limit'];
      
    $tab = 2;

    for ($j=1; $j < $limit ; $j++) { 

    for($i =1; $i<=10; $i++){
    echo $tab."*".$i."=".$tab*$i."<br>";
    }
    $tab++;
    echo "<br>";
    echo "<br>";

    }
}*/
	?>

</body>
</html> -->




<!-- <!DOCTYPE html>
<html>
<head>
	<title>reverse_alphabet</title>
</head>
<body>

	<form method="POST">
		<tr><td>
			<input type="text" name="fname" value="<?php // if(isset($_POST['fname'])) echo $_POST['fname']; ?>">
		</td></tr>
		<tr><td><input type="submit" name="submit" value="Reverse_letter"></td></tr>
		
	</form>

	<?php
   /* if (isset($_POST['submit'])) {
    	$name = $_POST['fname'];
    	for ($i=-1; isset($name[$i]) ; $i--) { 
	    echo $name[$i]."<br/>";
         }
    }*/
	?>

</body>
</html> -->

