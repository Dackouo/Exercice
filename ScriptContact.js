document.getElementById('formContact').addEventListener('submit', function (event) {
    event.preventDefault();

    const formData = new FormData(this);

    fetch('Contact.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.text())
        .then(data => {
            document.getElementById('response').innerText = data;
        })
        .catch(error => console.error('Erreur:', error));
});

document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("formContact");
    const notification = document.getElementById("notification");

    form.addEventListener("submit", function(event) {
        event.preventDefault();

        const formData = new FormData(form); // Récupère les données du contact 

        fetch("Contact.php", {
            method: "POST",
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            notification.style.display = "block";
            notification.innerText = data; // Affiche le message retourné par PHP
            notification.style.backgroundColor = "lightgreen"; // Couleur de fond pour réussite

            // Efface le message après 4 secondes
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