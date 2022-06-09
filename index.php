<?php
// creation du tableau dans le HTML avec 3 colonnes(Nombre, Carré et Racine carré)
echo '<table border>
        <tr>
            <th>Nombre</td>
            <th>Carré</td>
            <th>Racine</td>
        </tr>';

// Intégration du boucle FOR dans le tableau

// Boucle FOR avec comme parametre: une initialisation à 1, i strictement inférieur à 11 afin d'avoir une liste de 1 jusqu'à 10, et une incrementation de i 

for ($i = 1; $i < 11; $i++){
// Affichage des résultat de i (Carré et Racine) dans le tableau
    echo '<tr>
            <td>'. $i . '</td>
            <td>'. $i*$i . '</td>
            <td>'. sqrt($i) . '</td>
    </tr>';
}

// Fermeture du tableau
echo '</table>';





?>