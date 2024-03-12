<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/EditPost/{{$post->id}}" method="post">
    @csrf
    @method('put')
    <input type="text" name="title" value="{{$post->title}}">
    <textarea type="text" name="body" value="{{$post->body}}">
        <button>Zapisz zmiany</button>
</form>
</body>
</html>