<?php

$hello="mohand alaidy"."<br>";
echo $hello;


echo"$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";

$name="mohand";
$last="alaidy";
echo $name . " " . $last ."<br>";
echo"$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";

$arr=array("c++","java","c#","opp");
echo "<ul>";
foreach ($arr as $new) {
	echo "<li>". $new .  "<li>";
}echo "</ul>";


echo $arr[2]."<br>";
echo"$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";
echo "<pre>";
print_r($arr);
echo "</pre>";
echo"$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";


//funection void

function myfun(){
echo "hello funection";
}

myfun();
echo  "<br>"."$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";

//function parameters
function myfun2($name,$age){
echo "name :" .$name ."<br>" . "age :" .$age."<br>";
}

myfun2("mohand",27);

echo  "<br>"."$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";
//funection return value
function myfun3($max){
if($max>20){return 10;}else{return 20;}
}
myfun2("mohand",27);

echo myfun3(19);

echo  "<br>"."$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";

$count=0;
$sum=0;
for($i=0;$i<10;$i++){
	//condition 
	if($i%2==0)
		continue;
$count+=2;
echo $i. "<br>";
$sum+=$i;
}
echo $count. "<br>";
echo $sum;
echo  "<br>"."$$$$$$$$$$$$$$$$$$$$$$$$"."<br>";


 $xt=9;
$y=8;

function news(){
echo "new" ."  ".$GLOBALS['xt'] ;
}
news();
$text="mohand alaidy";

echo "<br>". strlen($text)."<br>";
echo "<br>". str_word_count($text)."<br>";
echo "<br>". strrev($text)."<br>";
echo "<br>". strpos($text,"alaidy")."<br>";
echo "<br>". str_replace("alaidy", "new", $text)."<br>";

echo "***************************** "."<br>";
//constant 
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING."<br>";
define("name", ["khaled","jamil","sawsn"]);
echo name[2]."<br>";

echo "***************************** "."<br>";
$name="jamil";

switch ($name) {
	case "mohand":
	echo "mohand good";
		break;
	case "khaled":
	echo "khaled good";
		break;
		case "jamil":
	echo "jamil good";
		break;
	default:
echo "error...";
		break;
}
echo "***************************** "."<br>";


$arr3=array(

3=>"jamil",
2=>"khaled",
1=>"mohand",
4=>"sami"
);

echo "<pre>";
print_r($arr3);
echo "</pre>";
echo  "<br>"."***************************** "."<br>";

//echo assocative array as value
foreach($arr3 as $news){

echo $news."<br>";

}
echo  "<br>"."***************************** "."<br>";
//echo key and value assocative array
foreach($arr3 as $ke=>$val){

echo $ke." => ".$val."<br>";

}

echo  "<br>"."***************************** "."<br>";


//malti array

$lararr=array(

array("khaled","mohand"),
array("sami","jamil"),
array("sami",array("sawsn","kamil")),

);

echo $lararr[2][1][1];
?>