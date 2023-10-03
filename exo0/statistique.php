<?php
    Function moyenne($tab){
        $moyenne=0;
        $n=count($tab);
        for($i=0;$i<$n;$i++){
            $moyenne += $tab[$i];
        }
        return $moyenne/$n;
    }

    Function mediane(&$tab){
        $n =count($tab);
        if(($n % 2) == 0){
            return ($tab[$n/2] + ($tab[$n/2 - 1])) / 2;

        }else{
            return $tab[($n)/2];
        }
    }
?>