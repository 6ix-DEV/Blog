<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<h4>Créer un nouveau Poste</h4> 
<form action="{{ route('post.store') }}" method="POST">
    @csrf
    <div>
        <label for="title">Titre:</label>
        <input type="text" id="title" name="title" required>
    </div>
    <div>
        <label for="content">Contenu:</label>
        <textarea id="content" name="content" required></textarea>
    </div>
    <div>
        <label for="id_user">ID Utilisateur:</label>
        <input type="number" id="id_user" name="id_user" required>
    </div>
    <button type="submit">Créer le Poste</button>

</body>
</html>