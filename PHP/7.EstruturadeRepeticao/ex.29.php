<?php
    $x = [10,20,30,40,50,60,70,80,90,100];
    $y = 0;
    while ($y <= 9) {

        if ($x[$y] == 20 || $x[$y] == 50){
            echo "pulando " . $x[$y]." <br>";
            $y++;
            continue;
        }
        echo $x[$y] . "<br>";
        $y++;

    }