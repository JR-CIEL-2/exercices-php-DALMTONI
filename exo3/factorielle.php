<?php

if (isset($_GET['nb1']) && isset($_GET['nb2'])) {
    $n = intval($_GET['nb1']);
    $m = intval($_GET['nb2']);

    function factorielle($n)
    {
        if ($n == 0) {
            return 1; // 0 est défini comme égal à 1
        } else {
            $resultat = 1;
            for ($i = 1; $i <= $n; $i++) {
                $resultat = $resultat * $i;
            }
            return $resultat;
        }
    }

    function somme($m)
    {
        $total = 0;
        for ($i = 1; $i <= $m; $i++) {
            $total = $total + $i;
        }
        return $total;
    }

    echo "Factorielle de $n : " . factorielle($n) . "<br>";
    echo "Somme de 1 a $m : " . somme($m) . "<br>";

}
?>