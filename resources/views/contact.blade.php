<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html> -->
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

    <h2>BEAFIT Contact</h2>

    <p><strong>Téléphone:</strong> 06 00 00 00 00</p>
    <p><strong>Adresse:</strong> 5 Bd Louis XIV, 59800 Lille</p>

    <p><iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d10123.668230233567!2d3.0711753!3d50.6286576!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1701358467120!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
      

    <div id="map" style="height: 300px; margin-bottom: 20px;"></div>

    <label for="email">Votre email:</label>
    <input type="email" id="email" name="email" required>

    <label for="demande">Votre demande:</label>
    <input type="text" id="demande" name="demande" required>

    <label for="message">Votre message:</label>
    <textarea id="message" name="message" rows="4" required></textarea>

    <button onclick="envoyerMessage()">Envoyer le message</button>

    <script>
        // Fonction pour envoyer le message (à compléter selon mes besoins)
        function envoyerMessage() {
            // Ajoutez le code ici pour traiter l'envoi du message
            alert("Message envoyé !");
        }

</body>
</html>