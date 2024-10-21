document.addEventListener('DOMContentLoaded', function() {
    fetch('get_content.php')
        .then(response => response.json())
        .then(data => {
            const contentDiv = document.getElementById('content');
            contentDiv.innerHTML = `<h2>${data.titre}</h2><p>${data.contenu}</p>`;
        })
        .catch(error => console.error('Erreur:', error));
});