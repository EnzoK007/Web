<?php
$confirmation = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $confirmation = "Votre message a bien été envoyé. Merci pour votre message. Nous vous recontacterons dans les plus brefs délais.";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous Contacter</title>
    <link rel="stylesheet" href="Contact_Us.css">
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

    <main class="contact-page">
        <section class="intro">
            <h1>Nous Contacter</h1>
            <p>Contactez-nous pour toute question ou demande d'information. Notre equipe vous repond rapidement.</p>
        </section>

        <section class="contact-layout">
            <article class="contact-card">
                <h2>Envoyer un mail</h2>
                <form action="Contact_Us.php" method="post">
                    <label for="Mail">Mail :</label>
                    <input type="email" id="Mail" name="mail" placeholder="exemple@mail.com" required>

                    <label for="message">Votre message :</label>
                    <textarea id="message" name="message" rows="9" placeholder="Ecrivez votre demande ici..." required></textarea>

                    <button type="submit">Envoyer</button>
                </form>

                <p class="confirmation-message">
                    <?php echo $confirmation; ?>
                </p>
            </article>

            <article class="numbers-card">
                <h2>Nos numeros</h2>
                <table>
                    <tr>
                        <th>Pays / Ville</th>
                        <th>Numero</th>
                    </tr>
                    <tr>
                        <td>France</td>
                        <td>01 42 56 78 90</td>
                    </tr>
                    <tr>
                        <td>UAE (Dubai)</td>
                        <td>04 345 6789</td>
                    </tr>
                    <tr>
                        <td>UK (London)</td>
                        <td>020 7946 0958</td>
                    </tr>
                    <tr>
                        <td>Japan (Tokyo)</td>
                        <td>03 5678 1234</td>
                    </tr>
                    <tr>
                        <td>Spain (Barcelona)</td>
                        <td>+34 93 123 45 67</td>
                    </tr>
                    <tr>
                        <td>Italy (Rome)</td>
                        <td>+39 06 6987 6543</td>
                    </tr>
                    <tr>
                        <td>Netherlands (Amsterdam)</td>
                        <td>+31 20 123 4567</td>
                    </tr>
                    <tr>
                        <td>Germany (Berlin)</td>
                        <td>+49 30 9876 5432</td>
                    </tr>
                    <tr>
                        <td>Canada (Montreal)</td>
                        <td>+1 514 555 7890</td>
                    </tr>
                </table>

                <div class="support-box">
                    <h3>Service client</h3>
                    <p>Lundi - Vendredi : 9h00 - 20h00</p>
                    <p>Samedi : 10h00 - 18h00</p>
                </div>
            </article>
        </section>
    </main>

    <footer>
        <p>&copy; 2026 Krepfull. Tous droits réservés.</p>
    </footer>
</body>
</html>