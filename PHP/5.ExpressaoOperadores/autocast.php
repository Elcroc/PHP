<?php
     $x =5; $y =2;$z = NULL;
     $z = $x / $y;
     if (is_float ($z)){
        echo "é float <br>";
     }
     $z = 5 . 9;
     if (is_string ($z)){
        echo "é string <br>";
     }