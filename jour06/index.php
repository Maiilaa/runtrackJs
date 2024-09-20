<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LaPlateforme_</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <header class="bg-dark text-white p-3">
        <div class="container d-flex justify-content-between">
            <h1>LPTF</h1>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a href="https://laplateforme.io/" class="nav-link text-white">Accueil</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Units</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Jobs</a></li>
                    <li class="nav-item"><a href="#" class="nav-link text-white">Skills</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <img src="butterfly.jpeg" class="card-img-top" alt="Papillon">
                    <div class="card-body">
                        <h5 class="card-title">Un Papillon</h5>
                        <p class="card-text">Un papillon, c'est un peu comme une chenille, mais avec des ailes. Ne pas ingérer.</p>
                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#buyPapillonModal">Commander votre propre papillon</a>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="buyPapillonModal" tabindex="-1" role="dialog" aria-labelledby="buyPapillonModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="buyPapillonModalLabel">Confirmation d'achat</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Êtes-vous sûr de vouloir acheter ce papillon ?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="button" class="btn btn-primary">Confirmer l'achat</button>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
                <h2>Bonjour, monde!</h2>
                <p>Il existe plusieurs visions du terme :</p>
                <ul>
                    <li>Le monde est la matière, l'espace et les phénomènes qui nous sont accessibles par les sens, l'expérience ou la raison.</li>
                    <li>Le sens le plus courant désigne notre planète, la Terre, avec ses habitants, et son environnement plus ou moins naturel.</li>
                </ul>
                <p>Le sens étendu désigne l'univers dans son ensemble.</p>
                <button id="rebootButton" class="btn btn-danger">Rebooter le Monde</button>

                <section aria-label="Page navigation example" class="mt-4">
                    <ul class="pagination">
                        <li class="page-item"><a class="page-link" href="#" data-page="1">1</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-page="2">2</a></li>
                        <li class="page-item"><a class="page-link" href="#" data-page="3">3</a></li>
                    </ul>
                </section>
                <div id="jumbotronContent">
                    <h2>Bienvenue !</h2>
                    <p>Contenu par défaut du jumbotron.</p>
                </div>

                <h3 class="mt-4">Installation de AI 9000</h3>
                <div class="progress">
                    <div id="progressBar" class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
                </div>
                <button id="decreaseProgress" class="btn btn-secondary mt-2">-</button>
                <button id="increaseProgress" class="btn btn-secondary mt-2">+</button>

                <h3 class="mt-4">Recevez votre copie gratuite d'internet 2!</h3>
                <form id="form">
                    <div class="form-group">
                        <label for="login">Login</label>
                        <input type="text" class="form-control" id="login" placeholder="Login">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de Passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Mot de Passe">
                    </div>
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input type="email" class="form-control" id="email" placeholder="exemple@exemple.com">
                    </div>
                    <div class="form-group">
                        <label for="dogecoin">URL des Internets 2 et 2.1 Beta</label>
                        <input type="text" class="form-control" id="dogecoin" value="DogeCoin">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="https://133t.lptf/dkwb/berlusconimix/" readonly>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

            <div class="col-md-3">
                <ul class="list-group">
                    <li class="list-group-item active">Luxe</li>
                    <li class="list-group-item">Gourmandise</li>
                    <li class="list-group-item">Avarice</li>
                    <li class="list-group-item">Colère</li>
                    <li class="list-group-item">Hérésie</li>
                    <li class="list-group-item">Violence</li>
                    <li class="list-group-item">Ruse et Tromperie</li>
                    <li class="list-group-item">Trahison</li>
                    <li class="list-group-item">Internet Explorer</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="modal fade" id="formInfoModal" tabindex="-1" role="dialog" aria-labelledby="formInfoModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="formInfoModalLabel">Récapitulatif des informations</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" id="formInfoContent"></div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>
</html>
