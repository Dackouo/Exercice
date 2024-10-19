document.getElementById('reservationForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const formData = new FormData(this);

    fetch('submit.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('message').innerText = data;
        this.reset(); // Réinitialise le formulaire
    })
    .catch(error => console.error('Erreur:', error));
});