<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Connection</title>
</head>
<body>
    <div class="container1">
        <h1>Bienvue sur la page de gestion des tâches</h1>
        <h2>Concter vous !</h2>
        <form action="{{asset(route('authentification'))}}" method="post">
            @csrf
            <input type="email" name="email" id="" placeholder="Etrez votre Email">
            <input type="password" name="password" id="" placeholder="Entrez votre mot de passe">
            <input type="submit" value="SE CONNECTER">
            <span>Si vous n'êtes pas encore inscrire, <a href="{{asset(route('inscription'))}}">lickez ici pour le faire</a></span>
        </form>
    </div>
</body>
</html>