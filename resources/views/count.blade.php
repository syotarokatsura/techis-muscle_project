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
<div class="count">
<h4>トレーニング結果</h4>
        <form action="/musclecountRegister" method="post">
{{--            <input class="form-control" type="text" name="trainingparts" value={{$trainingpartsRecest}}>--}}
{{--            <input class="form-control" type="text" name="trainingname" value={{$trainingname}}>--}}
        @csrf <!-- データ保護 419error-->
            <tr>
                <th>日付</th>
                <th>部位</th>
                <th>筋トレ名</th>
                <th>回数</th>
                <th>kg</th>
            </tr>
                <tr>
                    <td><div class="input-group mb-3"><input class="form-control" type="date" name="date" max="{{date('Y-m-d')}}"></div></td>
                    <select class="form-select" aria-label="Default select example" name='trainingparts'>
                        <option selected>筋トレ部位の選択</option>
                        @foreach($trainingparts as $value)
                            <option value="{{$value->id}}">{{$value->name}}</option>
                        @endforeach
                    </select>
                    <td><div class="input-group mb-3"><input class="form-control" type="text" name="trainingname" placeholder="トレーニング名"></div></td>
                    <td><div class="input-group mb-3"><input class="form-control" type="number" name="numberoftime" placeholder="回数"></div></td>
                    <td><div class="input-group mb-3"><input class="form-control" type="number" name="weight" placeholder="重さkg入力"></div></td>
                    <button type="submit" class="btn btn-secondary">登録</button><!--record.balde.phpに-->
                </tr>
        </form>
</div>

</body>
</html>





