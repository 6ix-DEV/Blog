<h4>Liste des Commentaires</h4>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Message</th>
            <th>Utilisateur ID</th>
            <th>Post ID</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($commentaires as $commentaire)
        <tr>
            <td>{{ $commentaire->id }}</td>
            <td>{{ $commentaire->message }}</td>
            <td>{{ $commentaire->id_user }}</td>
            <td>{{ $commentaire->id_post }}</td>
            <td>
                <!-- Actions comme Editer, Supprimer peuvent être ajoutées ici -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>   
<br>
<a href="{{ route('commentaire.create') }}" class="btn btn-primary">Ajouter un Commentaire</a>