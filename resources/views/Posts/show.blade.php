<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
        padding: 40px 20px;
    }

    h4 {
        text-align: center;
        color: white;
        font-size: 2.5rem;
        margin-bottom: 40px;
        text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
    }

    .posts-container {
        max-width: 900px;
        margin: 0 auto;
    }

    .post-item {
        background: white;
        border-radius: 15px;
        padding: 25px;
        margin-bottom: 20px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.2);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        list-style: none;
    }

    .post-item:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.3);
    }

    .post-title {
        font-size: 1.8rem;
        color: #333;
        font-weight: bold;
        margin-bottom: 15px;
        border-bottom: 3px solid #667eea;
        padding-bottom: 10px;
    }

    .post-content {
        color: #555;
        line-height: 1.6;
        margin: 20px 0;
        font-size: 1.1rem;
    }

    .post-actions {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }

    .btn {
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 25px;
        font-weight: 600;
        transition: all 0.3s ease;
        display: inline-block;
    }

    .btn-view {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        color: white;
    }

    .btn-view:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
    }

    .btn-comment {
        background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
        color: white;
    }

    .btn-comment:hover {
        transform: scale(1.05);
        box-shadow: 0 5px 15px rgba(245, 87, 108, 0.4);
    }

    .posts-list {
        padding: 0;
    }
</style>
<body>

    <h4>Détail du Post</h4>
        
    {{$post->title}}
    <br>
    {{$post->content}}


    <br>
    <br>
    <a href="{{route('posts.index')}}">Retour à la liste des posts</a>
</body>
</html>