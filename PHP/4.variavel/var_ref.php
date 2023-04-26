<?php
    $x = 10;
    $y =& $x;
    echo $x ; echo " "; echo $y;
    $y = 12.5;
    echo $x ; echo " "; echo $y;
    