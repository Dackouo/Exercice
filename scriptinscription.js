document.getElementById('formInscription').addEventListener('submit', function (event) {
    event.preventDefault(); // Empfêche le rechargement de la page

    const mdp = document.getElementById('mdp').value;
    const mdpconf = document.getElementById('mdpconf').value;
    const message = document.getElementById('message');

    if (mdp === mdpconf) {
        message.innerText = "Les mots de passe correspondent.";
        message.style.color = "green"; // Change la couleur du message
    } else {
        message.innerText = "Les mots de passe ne correspondent pas.";
        message.style.color = "red"; // Change la couleur du message
    }
});

document.getElementById('formInscription').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('inscription.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('response').innerText = data;
        })
        .catch(error => console.error('Erreur:', error));
});

