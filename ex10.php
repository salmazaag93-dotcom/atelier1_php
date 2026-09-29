<?php
$x=rand(0,1000) ;
while ($x%2!==0) {
    $x=rand();
};
echo "le premier entier paire obtenu est: $x";
?>