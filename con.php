<?php

$x =array("a"=>"String","b"=>2,"c"=>"Ayaan","d"=>4,"f"=>5,"g"=>6,"h"=>7);
// $x['ami']="Something";
$article = [
	['id'=>1,'title'=>"Post title","body"=>"The following example will output the values of the given array ($colors):",'img'=>"img.jpeg"],
	['id'=>2,'title'=>"Post title 2","body"=>"The following example will output the values of the given array ($colors):",'img'=>"img.jpeg"],
	['id'=>3,'title'=>"Post title 3","body"=>"The following example will output the values of the given array ($colors):",'img'=>"img.jpeg"],
	['id'=>4,'title'=>"Post title 4","body"=>"The following example will output the values of the given array ($colors):",'img'=>"img.jpeg"],
];

// $key = $value;
// echo $x[f];
foreach ($article as $v) {
	?>
	<h2><?php echo $v['title'] ?></h2>
	<img src="<?php echo $v['img']?>" alt="">
	<p><?php echo $v['body'] ?></p>
	<a href="test.php?id=<?php echo $v['id'] ?>">Read More</a>
<?php
}
$a=3;
$b=4;
function add($x,$y)
{
	$c = 9;
	return $x+$y+$c;
}
$b= 10;
echo add($a,$b);

?>
