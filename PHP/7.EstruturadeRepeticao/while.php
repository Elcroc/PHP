<?php
 $x= 0;
 $y= 0;
 while ($x < 15){
    echo "X = $x <br>" ;
    $x++;
 }
 while ($y < 5){
    echo "Sesão = $y <br>" ;
    $z = 0;
   while ($z < 5){
      echo "Numero  = $z <br>" ;
      $z++;
   }  
   
   $y++;
}
do{
   echo "do while $x <br>";
   $x--;
}while ($x >= 0 );