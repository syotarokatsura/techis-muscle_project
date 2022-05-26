<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- CSRF Token security?-->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- 独自のCSSを反映する publicの中のcssをもってくる-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <!-- 体組成データ -->
    <form action="{{ url('/taisosei') }}" method="POST">
    @csrf
        <table border='1'>
        <tr>
            <th>体重</th>
            <td><input type="number" name="weight"></td>
            <td>kg</td>
        </tr>
        <tr>
            <th>BMI</th>
            <td><input type="number" name="bmi"></td>
            <td></td>
        </tr>
        <tr>
            <th>体脂肪率</th>
            <td><input type="number" name="bfp"></td>
            <td>%</td>
        </tr>
        <tr>
            <th>胸囲</th>
            <td><input type="number" name="chest"></td>
            <td>cm</td>
        </tr>
        <tr>
            <th>腕周り</th>
            <td><input type="number" name="arm"></td>
            <td>cm</td>
        </tr>
        <tr>
            <th>ウエスト</th>
            <td><input type="number" name="waist"></td>
            <td>cm</td>
        </tr>
        <tr>
            <th>大腿筋</th>
            <td><input type="number" name="thign"></td>
            <td>cm</td>
        </tr>
        <tr>
            <th>ヒップ</th>
            <td><input type="number" name="hip"></td>
            <td>cm</td>
        </tr>
        <tr>
            <th>日付</th>
            <td><div class="input-group mb-3"><input class="form-control" type="date" name="date"></div></td>
        </tr>
        </table>
            <td><button class="btn" type="submit">登録</button></td> 

    </form>
</body>

</html>
