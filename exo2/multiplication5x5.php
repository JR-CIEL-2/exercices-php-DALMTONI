<?php
if (isset($_GET['nb1']) && isset($_GET['nb2'])) {
    $n = intval($_GET['nb1']);
    $p = intval($_GET['nb2']);

// Boucle pour les lignes de 1 à 5
    for ($i = 1; $i <= $n; $i++) {
        // Boucle pour les colonnes de 1 à 5
        for ($j = 1; $j <= $p; $j++) {

            $resultat = $i * $j;

            // La largeur totale est définie à 5 caractères
            $str = str_pad($resultat, 5, '.',STR_PAD_LEFT);

            echo $str;
        }

        echo "<br>";
    }
}
?>