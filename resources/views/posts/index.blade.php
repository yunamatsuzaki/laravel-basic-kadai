<!DOCTYPE html>
<html lang="la">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
</head>

<body>
    <h1>投稿一覧</h1>


    @foreach($posts as $post)
    <div style="margin-bottom:50px;">
        <p>{{ $post->title }}</p>
        <p>{{ $post->content }}</p>
    </div>
    @endforeach

</body>

</html>