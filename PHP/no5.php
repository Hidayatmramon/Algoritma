<?php 
$num = 1;
while ($num <= 50) {
    echo "$num " . ($num % 2 == 0 ? "genap" : "ganjil") . "\n";
          $num++;
}
?>