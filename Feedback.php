<?php
$confirmation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $confirmation = "Votre feedback a bien été envoyé. Merci pour votre avis.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Votre avis</title>
    <link rel="stylesheet" href="Feedback.css">
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

	<main class="feedback-page">
		<section class="intro-block">
			<h1>Votre avis compte !</h1>
			<p>Nous apprécions votre feedback pour améliorer notre service et votre expérience.</p>
		</section>

 		<form class="feedback-card" action="Feedback.php" method="post">
			<section class="form-section">
				<h2>Vos coordonnées</h2>
				<div class="form-grid two-columns">
					<div class="field-group">
						<label for="nom">Nom</label>
						<input type="text" name="nom" id="nom" autocomplete="family-name">
					</div>

					<div class="field-group">
						<label for="prenom">Prénom</label>
						<input type="text" name="prenom" id="prenom" autocomplete="given-name">
					</div>

					<div class="field-group">
						<label for="email">Email</label>
						<input type="email" name="email" id="email" autocomplete="email">
					</div>

					<div class="field-group">
						<label for="tel_num">Téléphone</label>
						<input type="tel" name="tel_num" id="tel_num" autocomplete="tel">
					</div>
				</div>
			</section>

			<section class="form-section">
				<h2>Votre visite</h2>
				<div class="field-group">
					<label for="matter">Quelle branche avez-vous visitée ?</label>
					<select name="var_matter" id="matter">
						<optgroup label="France">
							<option value="chatelet">Châtelet</option>
							<option value="marais">Le Marais</option>
							<option value="saint-germain">Saint-Germain</option>
							<option value="pantheon">Pantheon</option>
							<option value="tour-eiffel">Tour-Eiffel</option>
							<option value="champs-elysees">Champs-Elysees</option>
							<option value="nice">Nice</option>
							<option value="marseille">Marseille</option>
							<option value="lyon">Lyon</option>
						</optgroup>
						<optgroup label="Internationale">
							<option value="dubai">Dubai</option>
							<option value="london">London</option>
							<option value="tokyo">Tokyo</option>
							<option value="barcelona">Barcelona</option>
							<option value="rome">Rome</option>
							<option value="amsterdam">Amsterdam</option>
							<option value="berlin">Berlin</option>
							<option value="montreal">Montreal</option>
						</optgroup>
					</select>
				</div>
			</section>

			<section class="form-section">
				<h2>Votre évaluation</h2>

				<div class="rating-block">
					<p>Comment évaluez-vous le goût et la qualité de votre crêpe ?</p>
					<div class="rating-options">
						<label><input type="radio" name="rate_1" value="1"> Mauvais</label>
						<label><input type="radio" name="rate_1" value="2"> Moyen</label>
						<label><input type="radio" name="rate_1" value="3"> Bon</label>
						<label><input type="radio" name="rate_1" value="4"> Excellent</label>
					</div>
				</div>

				<div class="rating-block">
					<p>Comment évaluez-vous le rapport qualité-prix de votre commande ?</p>
					<div class="rating-options">
						<label><input type="radio" name="rate_2" value="1"> Mauvais</label>
						<label><input type="radio" name="rate_2" value="2"> Moyen</label>
						<label><input type="radio" name="rate_2" value="3"> Bon</label>
						<label><input type="radio" name="rate_2" value="4"> Excellent</label>
					</div>
				</div>

				<div class="rating-block">
					<p>Comment évaluez-vous la rapidité du service ?</p>
					<div class="rating-options">
						<label><input type="radio" name="rate_3" value="1"> Mauvais</label>
						<label><input type="radio" name="rate_3" value="2"> Moyen</label>
						<label><input type="radio" name="rate_3" value="3"> Bon</label>
						<label><input type="radio" name="rate_3" value="4"> Excellent</label>
					</div>
				</div>

				<div class="rating-block">
					<p>Comment évaluez-vous l'accueil et l'hospitalité de notre équipe ?</p>
					<div class="rating-options">
						<label><input type="radio" name="rate_4" value="1"> Mauvais</label>
						<label><input type="radio" name="rate_4" value="2"> Moyen</label>
						<label><input type="radio" name="rate_4" value="3"> Bon</label>
						<label><input type="radio" name="rate_4" value="4"> Excellent</label>
					</div>
				</div>

				<div class="slider-grid">
					<div class="field-group">
						<label for="recommend">Quelle est la probabilité de recommander Krepfull à vos proches ?</label>
						<input type="range" min="0" max="10" name="recommend" id="recommend">
					</div>

					<div class="field-group">
						<label for="overall">Comment évaluez-vous votre expérience globale ?</label>
						<input type="range" min="0" max="10" name="overall" id="overall">
					</div>
				</div>
			</section>

			<section class="form-section">
				<h2>Votre message</h2>
				<div class="field-group">
					<label for="message">Your Feedback Matters! Please feel free to share your experience</label>
					<textarea id="message" name="message" rows="5" required placeholder="Ecrivez votre avis ici..."></textarea>
				</div>
			</section>

			<button type="submit" class="submit-button">Envoyer le feedback</button>
		</form>

        <p class="confirmation-message"><b>
            <?php echo $confirmation; ?>
        </b></p>
	</main>

    <footer>
        <p>&copy; 2026 Krepfull. Tous droits réservés.</p>
    </footer>
</body>
</html>