<?php
// Vérifie si les données sont passées par l'URL
if (isset($_GET['nom'], $_GET['genre'], $_GET['email'], $_GET['sujet'], $_GET['message'])) {
    $nom = htmlspecialchars($_GET['nom']);
    $genre = htmlspecialchars($_GET['genre']);
    $email = htmlspecialchars($_GET['email']);
    $sujet = htmlspecialchars($_GET['sujet']);
    $message = htmlspecialchars($_GET['message']);
} else {
    // Si les données ne sont pas reçues, affiche un message d'erreur
    echo "<p style='color:red;'>Aucune donnée reçue. Veuillez soumettre le formulaire à nouveau.</p>";
    exit;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informations Soumises</title>
</head>
<body>
    <h1>Merci pour votre soumission !</h1>
    <article>
    <p><strong>Nom :</strong> <?php echo $nom; ?></p>
    <p><strong>Genre :</strong> <?php echo $genre; ?></p>
    <p><strong>Email :</strong> <?php echo $email; ?></p>
    <p><strong>Sujet :</strong> <?php echo $sujet; ?></p>
    <p><strong>Message :</strong> <?php echo $message; ?></p>
    </article>

    <a href='index.php'>Retour au formulaire</a>

</body>
</html>
