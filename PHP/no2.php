<?php
    $bil1 = 1;
    $bil2 = 2;
    $bil3 = 3;

  $max = $bil1;
  if ($bil2 > $max) {
    $max = $bil2;
  }
  if ($bil3 > $max) {
    $max = $bil3;
  }

  echo"Bilangan max: "  .$max;

  return 0;
?>