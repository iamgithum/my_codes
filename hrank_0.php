<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
  // Write your code here
  $len = count($a);
  sort($a);
  $rep = 0;
  //$x=1;
  if($len==1){
    $rep = $a[0];
  }
  for($i=0;$i<$len;$i++){
    for($j=0;$j<$len;$j++){
      if($i!=$j){
        if($a[$i] != $a[$j]){
          $rep = $a[$i];
        }   
      }
    }
  }
  return $rep;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);





<?php

/*
 * Complete the 'lonelyinteger' function below.
 *
 * The function is expected to return an INTEGER.
 * The function accepts INTEGER_ARRAY a as parameter.
 */

function lonelyinteger($a) {
  // Write your code here
  $len = count($a);
  sort($a);
  $rep = 0;
  $x=1;
  for($i=0;$i<$len;$i++){
    if($a[$i] != $a[$i+$x]){
      $rep = $a[$i];
    }
  }
  return $rep;
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$n = intval(trim(fgets(STDIN)));

$a_temp = rtrim(fgets(STDIN));

$a = array_map('intval', preg_split('/ /', $a_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = lonelyinteger($a);

fwrite($fptr, $result . "\n");

fclose($fptr);
