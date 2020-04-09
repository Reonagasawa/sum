
<?php
date_default_timezone_set('Asia/Tokyo');


function double($x){
  
  $result = 0;

  $result = $x *2;
  
  return $result;

}

echo double(10);

echo "\n";

function name($a){
  
  $ans = ("わたしの名前は". $a. "です");
  
  return $ans;
  
} 

echo name("玲大");


echo "\n";


function sum($a,$b){
  
  $sum = $a + $b;
  
  return $sum;
}

echo sum(5,10);

echo "\n";


$arr3 = array(1,3,5,7,9);

function y($arr){
  
  $abc = 1;
  
  foreach($arr as $ar){
      $abc = $ar* $abc;
  }
  return $abc;
}

echo y($arr3);

echo "\n";


$array_number =array(5,22,644,62,439);

function max_array($arr){
  
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a){
      $max_number = $a;
    }  
  }
  
  return $max_number;
}

echo max_array($array_number);

echo "\n";

$str = "<h1>タグをね、</h1>"
  ."<p1>外したり、</p1>"
  ."<p2>外さなかったり、</p2>"
  ."<p3>らじばんだり</p3>";

echo strip_tags($str);

echo "\n";

$array_number =array(5,22,644,62,439);

function max_array1($arr){
  
  array_push($arr,888,255,9201);
  $max_number = $arr[0];
  foreach($arr as $a){
    if ($max_number < $a){
      $max_number = $a;
    }  
  }
  
  return $max_number;
}

echo max_array1($array_number);

echo "\n";

$array1 = [1,2,3];
$array2 = [23,45,67];
$array3 = [124,542,998];

$array = array_merge($array1, $array2, $array3);
asort($array);
print_r($array);

echo "\n";

echo time("y/m/d");

echo "\n";

$yesterday = mktime(0,0,0,4,8,2020);
echo date("Y年m月d日", $yesterday);

echo "\n";

echo date("Y/m/d");
