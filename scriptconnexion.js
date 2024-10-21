document.getElementById('formConnexion').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('connexion.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('response').innerText = data;
        })
        .catch(error => console.error('Erreur:', error));
});
