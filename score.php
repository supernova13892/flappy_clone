<?php
$score=$_POST['score'];
$name=$_POST['name'];

$prev=file_get_contents("high.json");
$prev=json_decode($prev,true);
if(intval($prev['score'])<intval($score)){
	$contents=json_encode(compact('name','score'));
	file_put_contents("high.json",$contents);
}
?>