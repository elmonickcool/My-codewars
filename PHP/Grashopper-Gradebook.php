<?php 

function getGrade($a, $b, $c) {
  $averageGrade = ($a + $b + $c) / 3;
  if ($averageGrade >= 90) {
    return 'A';
  } elseif ($averageGrade >= 80) {
    return 'B';
  } elseif ($averageGrade >= 70) {
    return 'C';
  } elseif ($averageGrade >= 60) {
    return 'D';
  } else {
    return 'F';
  }
}

?>