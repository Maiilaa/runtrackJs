document.getElementById('connexionForm').addEventListener('submit', async function (event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    
    let valid = true;

    // Clear previous errors
    document.getElementById('emailError').textContent = '';
    document.getElementById('passwordError').textContent = '';

    // Validate email
    try {
        const response = await fetch('/validate-email?email=' + encodeURIComponent(email));
        const data = await response.json();
        if (!data.valid) {
            document.getElementById('emailError').textContent = 'Email invalide.';
            valid = false;
        }
    } catch (error) {
        document.getElementById('emailError').textContent = 'Erreur de validation de l\'email.';
        valid = false;
    }

    // Validate password
    if (password.length < 6) {
        document.getElementById('passwordError').textContent = 'Le mot de passe doit contenir au moins 6 caractères.';
        valid = false;
    }

    if (valid) {
        // Submit form or handle successful validation
        // this.submit(); // Uncomment if you want to submit the form
        alert('Connexion réussie.');
    }
});

document.getElementById('inscriptionForm').addEventListener('submit', async function (event) {
    event.preventDefault();

    const nom = document.getElementById('nom').value;
    const prenom = document.getElementById('prenom').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const adresse = document.getElementById('adresse').value;
    const codePostal = document.getElementById('codePostal').value;
    
    let valid = true;

    // Clear previous errors
    document.getElementById('nomError').textContent = '';
    document.getElementById('prenomError').textContent = '';
    document.getElementById('emailError').textContent = '';
    document.getElementById('passwordError').textContent = '';
    document.getElementById('adresseError').textContent = '';
    document.getElementById('codePostalError').textContent = '';

    // Validate email
    try {
        const response = await fetch('/validate-email?email=' + encodeURIComponent(email));
        const data = await response.json();
        if (!data.valid) {
            document.getElementById('emailError').textContent = 'Email invalide.';
            valid = false;
        }
    } catch (error) {
        document.getElementById('emailError').textContent = 'Erreur de validation de l\'email.';
        valid = false;
    }

    // Validate password
    if (password.length < 6) {
        document.getElementById('passwordError').textContent = 'Le mot de passe doit contenir au moins 6 caractères.';
        valid = false;
    }

    // Validate code postal (simple example, you can adjust this)
    const postalCodeRegex = /^[0-9]{5}$/;
    if (!postalCodeRegex.test(codePostal)) {
        document.getElementById('codePostalError').textContent = 'Code postal invalide.';
        valid = false;
    }

    if (valid) {
        // Submit form or handle successful validation
        // this.submit(); // Uncomment if you want to submit the form
        alert('Inscription réussie.');
    }
});