<?php
    $x = "Jesiel Mamedes Silva Junior";
    $y = null;
    for ($i=0; $i < strlen($x); $i++) { 
          if ($x[$i] === "e"){
            echo "$x[$i]  <br>";
            $y++;
          } 
    }
    echo " o e se repetiu $y vezes";