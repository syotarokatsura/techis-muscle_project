<!DOCTYPE html>
<!-- 文字コードの設定 -->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- 文字コードの設定 -->
    <meta charset="utf-8">

    <!-- 表示領域 -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token securityらしい-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- タイトル（タブに表示される）.envの一行目 -->
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- 独自のCSSを反映する publicの中のcssをもってくる-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
<div class="record">
<h4>筋トレメニューリスト</h4>
        <div>
            <table class="table" border="1">
                <tr>
                    <th>日付</th>
                    <th>部位</th>
                    <th>筋トレ名</th>
                    <th>回数</th>
                    <th>kg</th>
                </tr>
                @foreach($trainingevent as $key => $value) <!--データの数に合わせて表示。3つデータをとってくるなら、３つ表示する/回しているデータはAllだが、番号を指定（1.腕.腕立て）-->
                    <tr>
                        <td>{{$value->date}}</td>
                        <td>{{$value->trainingname_id}}</td>
                        <td>{{$muscletrainingnames[$key]}}</td>
                        <td>{{$value->numberoftime}}</td>
                        <td>{{$value->weight}}</td>
                        <td><a  href="/menuDelete/{{$value->trainingname_id}}"><button type="button" class="btn btn-secondary">削除</button></a></td> 
                    </tr>
                @endforeach
            
            </table>
        </div>
</div>
</body>
</html>

