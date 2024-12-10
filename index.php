<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de Contact</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Inclusion header -->
<?php include 'header.php'; ?> 

<main>
    <h1>Formulaire de Validation</h1>

    <form action="traitement.php" method="POST">
        <!-- Champs Nom -->
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom" required>
        
        <!-- Champs Genre -->
        <label for="genre">Genre :</label>
        <select name="genre" id="genre" required>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
        </select><br>
        
        <!-- Champs Email -->
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        
        <!-- Champs Sujet -->
        <label for="sujet">Sujet :</label>
        <input type="text" id="sujet" name="sujet" required><br>
        
        <!-- Champs Message -->
        <label for="message">Message :</label><br>
        <textarea id="message" name="message" rows="5" required></textarea><br>
        
        <!-- Bouton -->
        <button type="submit">Envoyer</button>
    </form>
</main>

 <!-- Inclusion du pied de page -->
<?php include 'footer.php'; ?>

</body>
</html>
