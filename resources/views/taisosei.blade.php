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
    <link rel="stylesheet" href="{{ asset('taisosei/style.css') }}">
</head>

<body>
    <!-- 体組成データ -->
    <!-- <div class="mx-5 py-5"> -->
    <div class="container">
        <div class="row justify-content-md-center">
        <div class="col-md-5">
            <form action="{{ url('/taisosei') }}" method="POST">
            @csrf
                <table class="table table-striped text-center">
                <tr>
                    <th>体重</th>
                    <td><input type="number" name="weight"></td>
                    <td>kg</td>
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
                    <td><input type="date" name="date"></div></td>
                </tr>
                </table>
                <!-- <div class="col-xl-8 col-md-offset-5"> -->
                <div>
                    <td><button type="submit" class="btn btn-secondary mx-auto d-block">登録</button></td>
                </div>
            </form>
        </div>
        </div>
    </div>
    <!-- </div> -->
</body>

</html>
