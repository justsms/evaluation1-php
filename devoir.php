Exercice 1 :
<?php
// Année de naissance  dans une variable
$anneeNaissance = 2005; 

// Fonction pour calculer l'âge en 2025
function calculerAge($annee) {
    $anneeact = 2025;
    return $anneeact - $annee;
}

// Calcul de l'âge
$age = calculerAge($anneeNaissance);

// Affichage
echo "Vous aurez $age ans en 2025.";
echo "<br>";
?>
Exercice 2 :
<?php
//  Test mot de passe 
$motDePasse = "Passer1234"; 

// Vérification des contraintes
$longmdp = strlen($motDePasse) >= 8;
$chifmdp = preg_match('/[0-9]/', $motDePasse);
$majmdp = preg_match('/[A-Z]/', $motDePasse);

// Resultat
if ($longmdp && $chifmdp && $majmdp) {
    echo "Le mot de passe est valide.";
} 

elseif (!$longmdp) {
    echo "- Il doit contenir au moins 8 caractères.<br>";  
}
elseif (!$chifmdp) {
        echo "- Il doit contenir au moins un chiffre.<br>";
    }
elseif (!$majmdp) {
        echo "- Il doit contenir au moins une lettre majuscule.<br>";
    }
echo "<br>";
?>
Exercice 3 :
<?php
//  la table de multiplication
$nombre = 7; 

echo "Table de multiplication de $nombre :<br><br>";

// Boucle for de 1 à 10
for ($i = 1; $i <= 10; $i++) {
    $resultat = $nombre * $i;
    echo "$nombre x $i = $resultat<br>";
}
echo "<br>";
?>
Exercice 4 :
<?php
// Données en entrée 
$a = 10;
$b = 0;
$operateur = '/';

// Fonction pour effectuer le calcul
function calculer($a, $b, $operateur) {
    if ($operateur == "+") {
        return $a + $b;
    } elseif ($operateur == "-") {
        return $a - $b;
    } elseif ($operateur == "*") {
        return $a * $b;
    } elseif ($operateur == "/") {
        if ($b == 0) {
            return "Erreur : Division par zéro impossible.";
        }
        return $a / $b;
    } else {
        return "Opérateur invalide.";
    }
   
}

// Appel de la fonction et affichage
$resultat = calculer($a, $b, $operateur);
echo "Résultat : $resultat";
?>
