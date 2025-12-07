<!DOCTYPE html>
<html>
<head>
    <title>Ajouter un utilisateur</title>
</head>
<body>

    <h1>Ajouter un utilisateur</h1>

    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="/utilisateur/store" method="POST">
        @csrf

        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>

        <label>Prénom :</label><br>
        <input type="text" name="prenom"><br><br>

        <label>Email :</label><br>
        <input type="email" name="email" required><br><br>

        <label>Téléphone :</label><br>
        <input type="text" name="phone"><br><br>

        <label>Adresse :</label><br>
        <input type="text" name="adresse"><br><br>

        <label>Mot de passe :</label><br>
        <input type="text" name="motdepasse" required><br><br>

        <button type="submit">Ajouter</button>
    </form>

</body>
</html>
