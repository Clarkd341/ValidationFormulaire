<?php
// Vérifie si les données ont été envoyées via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer et désinfecter les données du formulaire pour éviter des attaques XSS
    $nom = isset($_POST['nom']) ? htmlspecialchars($_POST['nom']) : '';
    $genre = isset($_POST['genre']) ? htmlspecialchars($_POST['genre']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $sujet = isset($_POST['sujet']) ? htmlspecialchars($_POST['sujet']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    // Tableau pour stocker les erreurs
    $erreurs = [];

    // Vérifier si les champs sont vides alerte
    if (empty($nom)) {
        $erreurs[] = "Le champ 'Nom' est obligatoire.";
    }
    if (empty($genre)) {
        $erreurs[] = "Le champ 'Genre' est obligatoire.";
    }
    if (empty($email)) {
        $erreurs[] = "Le champ 'Email' est obligatoire.";
    }
    if (empty($sujet)) {
        $erreurs[] = "Le champ 'Sujet' est obligatoire.";
    }
    if (empty($message)) {
        $erreurs[] = "Le champ 'Message' est obligatoire.";
    }

    // Si des erreurs existent dans le fichier vide, les afficher 
    if (!empty($erreurs)) {
        foreach ($erreurs as $erreur) {
            echo "<p style='color:red;'>$erreur</p>";
        }
        echo "<a href='index.php'>Retour au formulaire</a>";
        exit;
    }

    // Si tout est correct, rediriger avec les données vers infos.php 
    header('Location: infos.php?nom=' . urlencode($nom) . '&genre=' . urlencode($genre) . '&email=' . urlencode($email) . '&sujet=' . urlencode($sujet) . '&message=' . urlencode($message));
    exit;
} else {

    // Si la méthode n'est pas POST, afficher un message d'erreur
    echo "<p style='color:red;'>Aucune donnée reçue. Veuillez soumettre le formulaire à nouveau.</p>";
}
?>
