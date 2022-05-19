<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- 独自のCSSを反映する publicの中のcssをもってくる-->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>
<body>
    <!-- 体組成データ -->

<form action="{{ url('/taisosei')" method="POST">

    <table border='1'>
    <tr>
        <th>体重</th>
        <td><input type="number"></td>
        <td>kg</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>BMI</th>
        <td><input type="number"></td>
        <td></td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>体脂肪率</th>
        <td><input type="number"></td>
        <td>%</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>胸囲</th>
        <td><input type="number"></td>
        <td>cm</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>腕周り</th>
        <td><input type="number"></td>
        <td>cm</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>ウエスト</th>
        <td><input type="number"></td>
        <td>cm</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>大腿筋</th>
        <td><input type="number"></td>
        <td>cm</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    <tr>
        <th>ヒップ</th>
        <td><input type="number"></td>
        <td>cm</td>
        <td><button class="btn" type="submit">登録</button></td>
    </tr>
    </table>

</form>

</body>
</html>
