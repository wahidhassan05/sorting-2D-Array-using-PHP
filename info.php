<?php

echo "Randomly Generated 2D Array:"; echo "<br/>"; echo "<br/>";

$row = 10;
$col = 5;

for ($i=0; $i<$row ;$i++){
  for ($j=0; $j<$col; $j++){
    $array[$i][$j] = rand(10,90);
  }
}


for ($i=0; $i<$row ;$i++){
  for ($j=0; $j<$col; $j++){
    echo $array[$i][$j];echo "\n";
  } echo "<br/>";
}

echo "<br/>";

//after sorting is done 

$k = 0;


for ($i=0; $i<$row ;$i++){
  for ($j=0; $j<$col; $j++){
   $array1[$k] = $array[$i][$j]; echo "\n";
   $k++;
  } 
}


sort($array1);

for ($i=0; $i<$k ;$i++){
  
    $array1[$i];  "\n";

}

echo "<br/>";

echo "There are ".count($array1)." elements in the array";


$k = 0;

for ($i=0; $i<$row ;$i++){
  for ($j=0; $j<$col; $j++){
    $array[$i][$j] = $array1[$k];
    $k++;
  } 
}

echo "<br/>"; echo "<br/>";

echo "The sorted 2D Array:"; echo "<br/>"; echo "<br/>";

for ($i=0; $i<$row ;$i++){
  for ($j=0; $j<$col; $j++){
    echo $array[$i][$j]; echo "\n";
  } echo "<br/>";
}

?>


