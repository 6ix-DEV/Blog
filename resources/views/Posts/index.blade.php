

<h4>Listes des Postes</h4>

@foreach ($posts as $post)
    

<p>Posts:</p>

<li> {{$post->title}} - {{$post->content}} || <a href="{{route('posts.create')}}"> Ajouter Votre commentaire</a> </li>




@endforeach
