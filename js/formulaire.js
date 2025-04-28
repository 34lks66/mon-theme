document.addEventListener('DOMContentLoaded', function() {
    const formulaire = document.getElementById('formulaire_contact');

    formulaire.addEventListener('submit', function(e) {
        e.preventDefault(); // Empêche l'envoi classique du formulaire

        const formData = new FormData(formulaire);

        fetch(formulaire.action, {
            method: 'POST',
            body: formData,
        })
        .then(response => response.text())
        .then(data => {
            document.getElementById('form-message').innerHTML = '<p style="color: green; font-weight: bold;">Votre message a bien été envoyé.</p>';
            formulaire.reset();
        })
        .catch(error => {
            console.error('Erreur lors de l\'envoi:', error);
            document.getElementById('form-message').innerHTML = '<p style="color: red; font-weight: bold;">Une erreur est survenue. Veuillez réessayer.</p>';
        });
    });
});
