<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel基礎</title>
</head>
<body>
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                {{-- <ul> --}}
                    <li>{{ $error }}</li>
                {{-- </ul> --}}
                @endforeach
            </ul>
        </div>
    @endif

    <h1>投稿作成</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <table>
            <tr>
                <th>タイトル</th>
                <td>
                    <input type="text" name="title">
                </td>
            </tr>
            <tr>
                <th>本文</th>
                <td>
                    {{-- <input type="textarea" name="post_article"> --}}
                    <textarea name="content"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="投稿">
    </form>
</body>
</html>