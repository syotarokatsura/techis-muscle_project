<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Basic Index</h1>
<p>・インデックスページ</p>
<a href="{{ url('/add')}}">追加</a> <a href="{{ url('/edit')}}">編集</a> <a href="{{ url('/del')}}">削除</a>

<table>
    <tr>
        <th>名前</th><th>性別</th><th>年齢</th><th>身長</th>            
    </tr>
        @foreach($basics as $basic)
        <tr>
            <td>{{$basic->name}}</td>
            <td>{{$$basic->gender}}</td>
            <td>{{$$basic->age}}</td>
            <td>{{$$basic->height}}</td>
        </tr>
        var_dump()
        @endforeach
</table>
</body>
</html>