<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire d'Inscription</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="blue darken-2">
            <div class="nav-wrapper">
                <a href="index.php" class="brand-logo center white-text">Mon Site</a>
                <ul id="nav-mobile" class="left hide-on-med-and-down">
                    <li><a href="index.php" class="white-text">Accueil</a></li>
                    <li><a href="index.php" class="white-text">Inscription</a></li>
                    <li><a href="index.php" class="white-text">Connexion</a></li>
                    <li><a href="index.php" class="white-text">Rechercher</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <section class="container">
        <h4 class="teal-text">Formulaire de Création de Compte</h4>
        <form>
            <p class="blue-text">Civilité :</p>
            <p>
                <label>
                    <input name="gender" type="radio" checked />
                    <span>Mr</span>
                </label>
            </p>
            <p>
                <label>
                    <input name="gender" type="radio" />
                    <span>Mme</span>
                </label>
            </p>

            <div class="input-field">
                <input id="prenom" type="text" class="validate" required>
                <label for="prenom">Prénom</label>
            </div>

            <div class="input-field">
                <input id="nom" type="text" class="validate" required>
                <label for="nom">Nom</label>
            </div>

            <div class="input-field">
                <input id="adresse" type="text" class="validate">
                <label for="adresse">Adresse</label>
            </div>

            <div class="input-field">
                <input id="email" type="email" class="validate" >
                <label for="email">Adresse Email</label>
            </div>

            <div class="input-field">
                <input id="password" type="password" class="validate" >
                <label for="password">Mot de Passe</label>
            </div>

            <div class="input-field">
                <input id="confirm_password" type="password" class="validate">
                <label for="confirm_password">Confirmez le Mot de Passe</label>
            </div>

            <p class="blue-text">Passions :</p>
            <p>
                <label>
                    <input type="checkbox" />
                    <span>Informatique</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" />
                    <span>Voyages</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" />
                    <span>Sport</span>
                </label>
            </p>
            <p>
                <label>
                    <input type="checkbox" />
                    <span>Lecture</span>
                </label>
            </p>

            <button class="btn waves-effect waves-light red" type="submit" name="action">Valider
                <i class="material-icons right">send</i>
            </button>
        </form>
    </section>

    <footer class="page-footer grey darken-3">
        <div class="container">
            <ul>
                <li><a href="index.php" class="white-text">Accueil</a></li>
                <li><a href="index.php" class="white-text">Inscription</a></li>
                <li><a href="index.php" class="white-text">Connexion</a></li>
                <li><a href="index.php" class="white-text">Rechercher</a></li>
            </ul>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
