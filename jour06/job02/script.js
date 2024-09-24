const quotes = [
    "J'ai vu des choses que vous ne croiriez pas...",
    "Les flammes jaillissent des ténèbres...",
    "Tous ces moments se perdront dans le temps, comme des larmes dans la pluie.",
    "Il est temps de mourir."
];


$('#rebootButton').on('click', function() {
    const randomQuote = quotes[Math.floor(Math.random() * quotes.length)];
    $('h2').text(randomQuote);
    $('p').text("Citation tirée de Blade Runner.");
});

$('.list-group-item').on('click', function() {
    $('.list-group-item').removeClass('active');
    $(this).addClass('active');
});


$('#increaseProgress').on('click', function() {
    let currentProgress = $('#progressBar').attr('aria-valuenow');
    if (currentProgress < 100) {
        currentProgress = parseInt(currentProgress) + 10;
        $('#progressBar').css('width', currentProgress + '%').attr('aria-valuenow', currentProgress).text(currentProgress + '%');
    }
});

$('#decreaseProgress').on('click', function() {
    let currentProgress = $('#progressBar').attr('aria-valuenow');
    if (currentProgress > 0) {
        currentProgress = parseInt(currentProgress) - 10;
        $('#progressBar').css('width', currentProgress + '%').attr('aria-valuenow', currentProgress).text(currentProgress + '%');
    }
});

let sequence = [];
$(document).on('keydown', function(e) {
    const key = e.key.toUpperCase();
    sequence.push(key);
    if (sequence.join('') === 'DGC') {
        sequence = [];
        const login = $('#login').val();
        const email = $('#email').val();
        const password = $('#password').val();
        const dogecoin = $('#dogecoin').val();
        const content = `
            <p>Login: ${login}</p>
            <p>Email: ${email}</p>
            <p>Mot de Passe: ${password}</p>
            <p>DogeCoin: ${dogecoin}</p>
        `;
        $('#formInfoContent').html(content);
        $('#formInfoModal').modal('show');
    }
});

$('#form').on('submit', function(e) {
    e.preventDefault();
    const colors = ['text-primary', 'text-success', 'text-danger', 'text-warning'];
    const randomColor = colors[Math.floor(Math.random() * colors.length)];
    $('#spinner').removeClass('text-primary text-success text-danger text-warning').addClass(randomColor);
});

const pagesContent = {
    1: `
        <h2>Page 1 : Introduction</h2>
        <p>Ceci est le contenu de la page 1. Vous y trouverez des informations générales.</p>
    `,
    2: `
        <h2>Page 2 : Détails</h2>
        <p>Bienvenue à la page 2 ! Ici, vous verrez plus de détails spécifiques.</p>
    `,
    3: `
        <h2>Page 3 : Conclusion</h2>
        <p>Ceci est la dernière page. Merci de nous avoir suivi jusqu'ici !</p>
    `
};

$('.page-link').on('click', function(e) {
    e.preventDefault();
    
    const page = $(this).data('page');  
    $('#jumbotronContent').html(pagesContent[page]);
});
