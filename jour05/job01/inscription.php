<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="connexion.css?t=<?=time()?>">
</head>
<body>
    <?php include '_header.php'; ?>
    <div class="container mt-5">
        <h2>Inscription</h2>
        <form id="inscriptionForm">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
                <div class="error-message" id="nomError"></div>
            </div>
            <div class="form-group">
                <label for="prenom">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
                <div class="error-message" id="prenomError"></div>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
                <div class="error-message" id="emailError"></div>
            </div>
            <div class="form-group">
                <label for="password">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <div class="error-message" id="passwordError"></div>
            </div>
            <div class="form-group">
                <label for="adresse">Adresse</label>
                <input type="text" class="form-control" id="adresse" name="adresse" required>
                <div class="error-message" id="adresseError"></div>
            </div>
            <div class="form-group">
                <label for="codePostal">Code postal</label>
                <input type="text" class="form-control" id="codePostal" name="codePostal" required>
                <div class="error-message" id="codePostalError"></div>
            </div>
            <button type="submit" class="btn btn-primary">S'inscrire</button>
        </form>
    </div>
    <script src="script.js"></script>
</body>
</html>
