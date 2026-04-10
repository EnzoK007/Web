<?php
$baseSelectionnee = "";
$toppingsSelectionnes = array();
$description = "";
$messageErreur = "";
$afficherDescription = false;

$basesAutorisees = array(
    "Nutella" => "Nutella.png",
    "Confiture Fraise" => "Confiture_Fraise.png",
    "Caramel" => "Caramel.png",
    "Chocolat Blanc" => "Chocolat_Blanc.png",
    "Sirop d'Erable" => "Sirop_Erable.png"
);

$toppingsAutorises = array(
    "KitKat" => "KitKat.png",
    "Oreo" => "Oreo.png",
    "Banane" => "Banane.png",
    "Fraise" => "Fraise.png",
    "Brownies Crumble" => "Brownies_Crumble.png",
    "Marshmallows" => "Marshmallows.png",
    "Nuts" => "Nuts.png",
    "Twix" => "Twix.png"
);

$prixBase = 6.5;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $base = $_POST["base"] ?? "";
    $toppings = $_POST["toppings"] ?? array();

    if ($basesAutorisees[$base]) {
        $baseSelectionnee = $base;
    }

    foreach ($toppings as $topping) {
        if ($toppingsAutorises[$topping]) {
            $toppingsSelectionnes[] = $topping;
        }
    }

    $afficherDescription = true;

    if ($baseSelectionnee == "") {
        $messageErreur = "Choisissez une base.";
    } else {
        $description = "Ta Krepe: Une délicieuse krêpe à base de " . $baseSelectionnee;

        if (count($toppingsSelectionnes) > 0 && count($toppingsSelectionnes) <= 3) {
            $description .= ", garnie de " . implode(", ", $toppingsSelectionnes);
            $description .= ".<br>Parfaite pour satisfaire vos envies sucrées!";
            $description .= "<br>Prix: " . $prixBase . "€";}
        else {            
            $description .= ", garnie de " . implode(", ", $toppingsSelectionnes);
            $description .= ".<br>Parfaite pour satisfaire vos envies sucrées!";
            $description .= " Prix: " . ($prixBase + (count($toppingsSelectionnes) - 3)) . "€";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ma Krepe</title>
    <link rel="stylesheet" href="Customize_Krep.css">
</head>
<body>
    <nav>
        <a href="Home.html"><img src="Images/Logo.png" alt="Accueil"></a>
        <a href="Menu.html">Menu</a>
        <a href="Customize_Krep.php">La Krepe de vos rêves</a>
        <a href="Branches.html">Branches</a>
        <a href="Contact_Us.php">Nous Contacter</a>
        <a href="Feedback.php">Votre avis</a>
        <a href="About_Us.html">About Us</a>
    </nav>

    <h1>Ma Krepe</h1>
    <p>Personnalisez votre krêpe parfaite!</p>

    <form method="post" action="Customize_Krep.php">
        <div class="crepe-box">
            <img src="Images/Custom/Krepe.png" class="crepe" alt="Crêpe">

            <?php if ($baseSelectionnee != "") { ?>
                <img src="Images/Custom/Bases/<?php echo $basesAutorisees[$baseSelectionnee]; ?>" class="layer-base" alt="Base">
            <?php } ?>

            <?php foreach ($toppingsSelectionnes as $topping) { ?>
                <img src="Images/Custom/Toppings/<?php echo $toppingsAutorises[$topping]; ?>" class="layer-topping" alt="<?php echo $topping; ?>">
            <?php } ?>
        </div>

        <div class="options">
            <h2>Base (1 maximum)</h2>
            <?php foreach ($basesAutorisees as $nom => $img) { ?>
                <label>
                    <input type="radio" name="base" value="<?php echo $nom; ?>" <?php if ($baseSelectionnee == $nom) echo "checked"; ?>>
                    <?php echo $nom; ?>
                </label>
            <?php } ?>
        </div>

        <div class="options">
            <h2>3 Toppings, +1€/topping en plus</h2>
            <?php foreach ($toppingsAutorises as $nom => $img) { ?>
                <label>
                    <input type="checkbox" name="toppings[]" value="<?php echo $nom; ?>" <?php if (in_array($nom, $toppingsSelectionnes)) echo "checked"; ?>>
                    <?php echo $nom; ?>
                </label>
            <?php } ?>
        </div>

        <div class="buttons">
            <button type="submit">Voir ma Krepe</button>
        </div>
    </form>

    <?php if ($messageErreur != "") { ?>
        <p class="error"><?php echo $messageErreur; ?></p>
    <?php } ?>

    <?php if ($afficherDescription && $description != "") { ?>
        <p class="desc"><?php echo $description; ?></p>
    <?php } ?>

    <footer>
        <p>&copy; 2026 Krepfull. Tous droits réservés.</p>
    </footer>
</body>
</html>