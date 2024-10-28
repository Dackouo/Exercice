document.getElementById('reservation-form').addEventListener('submit', function(e) {
    e.preventDefault();

    const formData = new FormData(this);

    fetch('dbreserve.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                alert('Réservation réussie !');
                this.reset();
            } else {
                alert('Erreur : ' + data.message);
            }
        })
        .catch(error => console.error('Error:', error));
});