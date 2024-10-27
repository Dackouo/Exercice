document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formInscription"); // Assurez-vous que l'ID du formulaire est correct
    const notification = document.getElementById("notification");

    form.addEventListener("submit", function(event) {
        // Récupère les valeurs des champs du formulaire
        const nom = document.getElementById("nom").value.trim();
        const prenom = document.getElementById("prenom").value.trim();
        const motdepasse = document.getElementById("mdp").value.trim();
        const motdepasseConf = document.getElementById("mdpconf").value.trim();

        // Vérifie si tous les champs sont remplis
        if (nom === "" || prenom === "" || motdepasse === "" || motdepasseConf === "") {
            event.preventDefault(); // Empêche l'envoi du formulaire
            alert("Tous les champs sont obligatoires !"); // Message d'alerte
            return; // Sortir de la fonction
        }

        // Vérifie si les mots de passe correspondent
        if (motdepasse !== motdepasseConf) {
            event.preventDefault(); // Empêche l'envoi du formulaire
            alert("Les mots de passe ne correspondent pas !"); // Message d'alerte
            return; // Sortir de la fonction
        }

        // Envoie de la requête
        event.preventDefault(); // Empêche l'envoi par défaut pour faire une requête fetch

        const formData = new FormData(form); // Récupère les données du formulaire

        fetch("inscription.php", {
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
