<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @auth
    <p>Jesteś zalogowany jako</p>
    <form action="/logout" method="post">
        @csrf
        <button>Wyloguj</button>
    </form>
    <div style="border: 3px solid black;">
        <h2>Stwórz post</h2>
        <form action="/CreatePost" method="post">
        @csrf
        <input type="text" name="title" placeholder="Tytuł posta">
        <textarea name="body" placeholder="Tekst twojego posta"></textarea>
        <button>Opublikuj</button>
    </div>
    </form>
    <br>
    <div style="border: 3px solid black;">
        <h2>Wszystkie posty</h2>
        @foreach ($posts as $post)
            <div style="background-color: gray; padding: 10px; margin: 10px;">
            <h3>{{$post['title']}}</h3>
            {{$post['body']}}
            <p><a href="/EditPost/{{$post->id}}"><button>Edytuj</button>
            </a></p>
            <form action="/DeletePost/{{$post->id}}" method="POST">
            @csrf
            @method('delete')
            <button>Usuń</button>
        </form>
        </div>
        @endforeach
    </div>
    
    @else
    <div style="border: 3px solid black;">
        <h2>Rejestracja</h2>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="login">
            <input type="email" name="email" placeholder="email">
            <input type="password" name="password" placeholder="password">
            <button type="submit">Zarejestruj</button>
        </form>
    </div>
    <br>
    <div style="border: 3px solid black;">
        <h2>Logowanie</h2>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="LoginName" placeholder="login">
            <input type="password" name="LoginPassword" placeholder="password">
            <button type="submit">Zaloguj</button>
        </form>
    </div>
    @endauth
    
</body>

</html>