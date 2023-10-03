<?php
if (isset($_GET['nbLignes'])) {
    $n = intval($_GET['nbLignes']);

    function triangle($n)
    {
        // Boucle pour les lignes
        for ($i = 1; $i <= $n; $i++) {
            // Boucle pour les colonnes
            for ($j = 1; $j <= $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }

    echo "le triangle : <br>";
    triangle($n);
}
?>