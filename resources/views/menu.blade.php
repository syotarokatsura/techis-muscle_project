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

<div class="menu">
<h4>筋トレメニュー登録</h4>
    <form action="/menuCreate" method="post">
        @csrf <!-- データ保護 419error-->
        <select class="form-select" aria-label="Default select example" name='trainingparts'>
            <option selected>筋トレ部位の選択</option>
            <option value="1">腕</option>
            <option value="2">背中</option>
            <option value="3">胸</option>
        </select>
        <div class="form-group">
            <input class="form-control" type="text" name="trainingname" placeholder="筋トレ名">
            <button type="submit" class="btn btn-secondary">登録</button><!-- count.blade.phpへ飛ぶ  <a></a>?-->
        </div>
    </form>
</div>

</body>

</html>
