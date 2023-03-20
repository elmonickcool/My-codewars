<?php 
function paperwork(int $n, int $m): int
{
  $total=$n*$m;
  if($n<0 || $m<0){
    return 0;
  }else{
    return $total;
  }
}

?>