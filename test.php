<?php 
$a=10;
$b=99;
$c=12;

// if ($a<$b && $a<$c) {
// 	echo $a;
// } elseif($b<$c)
// {
//   echo $b; 
// } else{
// 	echo $c;
// }

$arr =array(23,12,34,200);
// $c = count($arr);
$max=0;
foreach ($arr as $v) {
	if($v>$max)
	{
		$max = $v;
	}
}
echo $max;