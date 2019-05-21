<!DOCTYPE html>
<html>
<head>
	<title>Find Min & Max From Array</title>
</head>
<body>

	<?php
		// $arr = Array(1,2,3,4,5,6,7,8,9,10);

		// $min=$arr[0];
		// $max=$min;
		// foreach($arr as $val)
		// {
		// 	if($min>$val)
		// 		$min=$val;
		// 	if($max<$val)
		// 		$max=$val;
		// }
		// echo "Min of array : ".$min."<br>"."Max of array : ".$max;

		function isMax($array)  
		{ 
		   $n = count($array);  
		   $max = $array[0]; 
		   for ($i = 1; $i < $n; $i++)  
		       if ($max < $array[$i]) 
		           $max = $array[$i]; 
		    return $max;        
		} 
		  
		function isMin($array)  
		{ 
		   $n = count($array);  
		   $min = $array[0]; 
		   for ($i = 1; $i < $n; $i++)  
		       if ($min > $array[$i]) 
		           $min = $array[$i]; 
		    return $min;        
		} 
		  
		// Driver code 
		$array = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10); 
		echo(isMax($array)); 
		echo("\n"); 
		echo(isMin($array)); 
	?>

</body>
</html>

