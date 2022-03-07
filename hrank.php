<?php
//kangaroo
$n = ($x2 - $x1 -$v2 + $v1)/($v1 - $v2);
  $ap = $x1 + $n * $v1 - $v1;
  if($n<=0){
    return "NO\n";
  }elseif( ($x1 + $n * $v1 - $v1)==($x2 + $n * $v2 - $v2) ){
//    if($ap == (($n - $x1 + $v1)/$v1) ){
//      if($ap == (($n - $x2 + $v2)/$v2) ){
        return "YES\n";    
      }else{
      return "NO\n";
    }
  }
?>


<!DOCTYPE html>
<html> <!---W3schools-->
<body>
 
<?php
 $x1=0; 
 $v1=3;
 $x2=4;
 $v2=2;
  $n = ($x2 - $x1 -$v2 + $v1)/($v1 - $v2);
  var_dump($n);
  
  $n = ($x2 - $x1 -$v2 + $v1)/($v1 - $v2);
  $ap = $x1 + $n * $v1 - $v1;
  var_dump($ap);
  if($n<=0){
  echo "1NO\n";
//    return "NO\n";
  }elseif($n>0){
    if($ap == (($n - $x1 + $v1)/$v1) ){
      if($ap == (($n - $x2 + $v2)/$v2) ){
      echo "YES\n";
//        return "YES\n";    
      }
    }else{
    echo "2NO\n";
//      return "NO\n";
    }
  }

?>
 
</body>
</html>
