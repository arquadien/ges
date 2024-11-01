<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>inscription</title>
</head>
<body>
    <div class="container1">
        <h1>Bienvue sur la page de gestion des tâches</h1>
        <h2>Inscrivez vous !</h2>
        <form action="{{asset(route('do_inscription'))}}" method="post">
            @csrf
            <input type="email" name="email" id="" placeholder="Etrez votre Email">
            <input type="password" name="password" id="" placeholder="Entrez votre mot de passe">
            <input type="submit" value="S'inscrire">
            <span>Si vous avez déjà un compte, <a href="{{asset(route('home'))}}">lickez ici pour vous connecter</a></span>
        </form>
    </div>
</body>
</html>