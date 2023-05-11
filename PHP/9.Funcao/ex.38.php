<?php 
    function unir ($x){
        $y = NULL;        
        for ($i = 0 ; $i < count($x); $i++){
            if ($i + 1 == count($x)){
                $y .= "$x[$i].";
            }else{
            $y .= "$x[$i],";
            }
        }
        return $y;
    }
    $a = ["Jesiel" , "Mamedes" , "Silva","Junior"];
    $z = unir($a);
echo $z;