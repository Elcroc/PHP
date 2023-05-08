<?php
   $x = 2;$y = 3;$z = "3";
   if ($x <= $y && $y == $z){
    echo "Verdadeiro <br>";

   }
   if ($x <= $y && $y === $z){
    echo "Verdadeiro 2<br>";
   }
   if (($x <= $y && $y == $z) && ($x == 2)){
    echo "Verdadeiro 3<br>";
   }