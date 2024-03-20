<?php
$name = "dupont";
// mettre en majuscule
$name_maj = strtoupper("Dupont");

$firstname = "thierry";
// mettre en majuscule la premiere lettre
$firstname_maj = ucwords(strtolower("thierry"));
// afficher la longueur du prenom
$long = strlen($firstname);

$age = 18;

$city = "noyon";
// mettre en majuscule la premiere lettre
$city_maj = ucwords(strtolower("amiens"));

// modification de guillemets '' en "" pour question 4
$description = "Bonjour, je m’appelle $firstname $name,
    j’ai $age ans et j’habite $city.";
// phrase écrite avec les majuscules ajouté
$modif_description = "Bonjour, je m’appelle $firstname_maj $name_maj,
j’ai $age ans et j’habite $city_maj.";

$str = "je suis une \"chaîne de caractères\".";
$heredoc = <<< TEXT
    Croisant les bras, et tous s'assirent autour du foyer, rougie, rendait violâtre.
    Avoue que je suis simplement ici pour tenir compagnie au tien et pour t'imaginer
    que tu souffres par ta faute. Élevez un étendard sur une montagne, et je serais
    dans un extrême embarras. Voir, si touchés que je fusse un grand misérable!
    Facile, il devait trouver le cardinal seul, sans interlocuteur, un drame invisible et
    inconnu aux autres spectateurs que nous jouions, du pauvre pygmée qui s'en
    allait.
    TEXT;
// mettre en majuscule la première lettre de tous les mots 
$resultat = ucwords($heredoc);

// déclaration du tableau
$notes = array(15, 13, 8, 10, 17);
$matieres = array('html/css', 'algorithmique', 'anglais', 'marketing', 'ui/ux');
// correction du tableau
$replacements = ['algorithmique' => 10, 'marketing' => 13];


// Récupérer l'index de la dernière évaluation
$r_notes = count($notes) - 1;

// Récupérer la matière
$derniere_matiere = $matieres[$r_notes];
// et la note de la dernière évaluation
$derniere_note = $notes[$r_notes];

// fusion des tableaux
$table = array ('html/css' => 15 , 'algorithmique' => 13, 'anglais' => 8, 'marketing' => 10, 'ui/ux' => 17);

$newResults = array_replace($table, $replacements); // Fonction permettant de changer de place de plusieurs variables dans un tableau
$table = array_combine($matieres, $notes); // Permet de combiner 2 tableaux en 1


// stocker les notes de plusieurs étudiants
$students = [
    'Loris' => [
        'html/css' => 15,
        'algo' => 10,
        'anglais' => 20,
    ],
    'Evans' => [
        'html/css' => 19,
        'algo' => 5,
        'anglais' => 10,
    ],
    'Nicolas' => [
        'html/css' => 12,
        'algo' => 17,
        'anglais' => 12,
    ],
    'Matthias' => [
        'html/css' => 13,
        'algo' => 10,
        'anglais' => 15,
    ],
]




?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>td2</title>
</head>

<body>
    <h1>TD2</h1>
    <p><?= $description ?></p>
    <p><?= $modif_description ?></p>
    <p><?= "la longueur du prenom Thierry est de : ", $long?></p>
    <p><?= $str ?></p>
    <h2>Text heredoc</h2>
    <p><?= $heredoc ?></p>
    <h2>Text heredoc avec la première lettre de tous les mots en majuscule</h2>
    <p><?= $resultat ?></p>
    <h2>Concatenation</h2>
    <p><?= "la matiere de la dernière evaluation est : ", $derniere_matiere, " et tu as eu : ", $derniere_note, " / 20."?></p>
    <h2>Tableau simple</h2>
    <p><?= print_r ($table) ?></p>
    <h2>Tableau avec le remplacement </h2>
    <p><?= print_r ($newResults) ?></p>
    <h2>stocker les notes de plusieurs étudiants</h2>
    <p><?= print_r($students) ?></p>
    <p><?= $students['Loris']['anglais'] ?></p>
</body>

</html>