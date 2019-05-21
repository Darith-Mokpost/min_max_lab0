<!DOCTYPE html>
<html>
<head>
	<title>Find Min & Max From Array</title>
</head>
<body>
	
	<?php
		$arr = Array(1,2,3,4,5,6,7,8,9,10);

		$min=$arr[0];
		$max=$min;
		foreach($arr as $val)
		{
			if($min>$val)
				$min=$val;
			if($max<$val)
				$max=$val;
		}
		echo "Min of array : ".$min."<br>"."Max of array : ".$max;
	?>

</body>
</html>

