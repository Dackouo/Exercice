document.getElementById("reservationForm").addEventListener("submit", function(event) {
    event.preventDefault(); // Empêche le rechargement de la page

    const Nom = document.getElementById("Nom").value;
    const Email = document.getElementById("Email").value;
    const Date = document.getElementById("Date de Réservation").value;

    fetch("reserve.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `Nom=${nom}&Email=${email}&Date de Réservation=${date}`
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById("message").innerText = data;
        document.getElementById("reservationForm").reset(); // Réinitialise le formulaire
    })
    .catch(error => {
        document.getElementById("message").innerText = "Erreur lors de la réservation.";
    });
});