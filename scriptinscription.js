document.getElementById('inscriptionForm').addEventListener('submit', function(event) {
    // Empêcher l'envoi du formulaire par défaut
    event.preventDefault();

    // Récupérer les valeurs des champs
    const mdp = document.getElementById('mdp').value;
    const mdpconf = document.getElementById('mdpconf').value;

    // Vérifier si les mots de passe correspondent
    if (mdp !== mdpconf) {
        alert("Les mots de passe ne correspondent pas. Veuillez réessayer.");
        return; // Sortir de la fonction si les mots de passe ne correspondent pas
    }

    // Si tout est bon, soumettre le formulaire
    this.submit(); // Soumettre le formulaire
});
