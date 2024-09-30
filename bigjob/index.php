<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - La Plateforme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="">La Plateforme</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Connexion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="calendrier.php">Calendrier</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="backoffice.php">Backoffice</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-5">
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <h3 class="center-align">Connexion à La Plateforme</h3>
                <form id="loginForm">
                    <div class="input-field">
                        <label for="email">Adresse Email</label>
                        <input id="email" type="email" class="validate" required>
                    </div>
                    <div class="input-field">
                        <label for="password">Mot de passe</label>
                        <input id="password" type="password" class="validate" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Connexion</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="js/login.js"></script>
</body>
</html>
