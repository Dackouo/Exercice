/*document.getElementById('formConnexion').addEventListener('submit', function (event) {
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
});*/

//Validation du formulaire

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formConnexion");

    form.addEventListener("submit", function(event) {
        // Récupère les valeurs des champs du formulaire
        const nom = document.getElementById("nom").value.trim();
        const prenom = document.getElementById("prenom").value.trim();
        const motdepasse = document.getElementById("mdp").value.trim();

        // Vérifie si tous les champs sont remplis
        if (nom === "" || prenom === "" || motdepasse === "") {
            event.preventDefault(); // Empêche l'envoi du formulaire
            alert("Tous les champs sont obligatoires !"); // Message d'alerte
        }
    });
});

//Envoie de la requête
document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formConnexion");
    const notification = document.getElementById("notification");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(form); // Récupère les données du formulaire

        fetch("connexion.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            notification.style.display = "block";
            notification.innerText = data; // Affiche le message retourné par PHP
            notification.style.backgroundColor = "lightgreen"; // Couleur de fond pour réussite

            // Efface le message après 3 secondes
            setTimeout(() => {
                notification.style.display = "none";
            }, 3000);
        })
        .catch(error => {
            notification.style.display = "block";
            notification.innerText = "Une erreur s'est produite.";
            notification.style.backgroundColor = "lightcoral"; // Couleur de fond pour échec
        });
    });
});

