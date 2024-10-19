<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylereserve.css">
    <title>Air Travel</title>
</head>
<body>
    <form action="reserve.php" method="post">
        <br>
    <h1>Page de Réservation</h1>
    <br><label class="label1">Nos clients sont importants pour nous, c'est pourquoi nous formons continuellement nos thérapeutes afin de garantir que tous les traitements soient d'un niveau élevé et que chaque client reçoive les meilleurs.</label>
        <br>
        <label for="nom">Nom:</label>
        <input type="text" name="name" placeholder="Votre nom" required>
        <label for="nom">Email:</label>
        <input type="email" name="email" placeholder="Votre email" required>
        <label for="nom">Destination:</label>
        <input type="text" name="destination" placeholder="Votre destination"required>
        <label for="nom">La Date:</label>
        <input type="date" name="date" required>
        <label for="nom">Heure:</label>
        <input type="time" name="time" required>

        <br>
        <br> 

    <p>
    <h3>Votre message:</h3>
    <br>
        <textarea name="le message" rows="7" cols="65"> Veuillez saisir votre message
    
                </textarea> 
            </p>
            <br>
        <button type="submit">Réserver</button>
    </form>
    
    <div id="message"></div>
    <script src="scriptreserve.js"></script>
    <header>
        <div class="logo">
            <a href="index.html"> <span>Air</span> Travel</a>
        </div>
        <ul class="menu">
            <li><a href="index.html">Acceuil</a></li>
            <li><a href="A-propos.html">à propos</a></li>
            <li><a href="Destination.html">destinations</a></li>
            <li><a href="Contact.html">contact</a></li>
        </ul>
        <div>
            <a href="#" class="btn-contacter">se connecter</a>
            <a href="#" class="btn-reservation">s'inscrire</a>
        </div>
        <div class="responsive-menu"></div>
    </header>
    
</body>
</html>