<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Fiche étudiant</title>
<link rel="stylesheet" href="style.css?v=<?= time(); ?>">  
</head>

<body>

<?php

$nom = "Ella gharrech";
$filiere = "Info";
$moyenne = 16.53;
$estBoursier = true;
$anneeEtud = 2;

// Déterminer le statut
if ($moyenne >= 10) {
    $statut = "Admis(e)";
} else {
    $statut = "Non admis(e)";
}

// Déterminer la filière
switch ($filiere) {

    case "Info":
        $labelfiliere = "Informatique";
        $classeBadge = "badge-info";
        break;

    case "Elec":
        $labelfiliere = "Electronique";
        $classeBadge = "badge-elec";
        break;

    default:
        $labelfiliere = "Filière inconnue";
        $classeBadge = "badge-defaut";
        break;
}

?>

<div class="fiche">

    <h1>***<?php echo $nom; ?>***</h1>

    <span class="badge <?php echo $classeBadge; ?>">
        <?php echo $labelfiliere; ?>
    </span>

    <p>Moyenne : <?php echo $moyenne; ?></p>

    <p><?php echo $statut; ?></p>

   <?php if ($estBoursier) { ?>
        <p>🎓 Boursier(e)</p>
    <?php } ?>

    <p>Année d'étude : <?php echo $anneeEtud; ?></p>

</div>

</body>
</html>