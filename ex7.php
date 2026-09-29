<?php
$a= 1.2;
$b= 0.11;
$result= match ($a <=> $b) {
     0 =>  "$a = $b",
     1 =>  "$a > $b",
     -1 => "$a < $b",
};
echo $result;
?>
