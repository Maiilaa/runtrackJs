$(document).ready(function () {
    $('#loginForm').submit(function (event) {
        event.preventDefault();

        const email = $('#email').val();
        const password = $('#password').val();

        if (email.endsWith('@laplateforme.io')) {
            alert('Connexion réussie !');
            window.location.href = 'calendar.html';
        } else {
            alert('Adresse email invalide.');
        }
    });
});
