<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>

        <h1>Basic Add</h1>
        <p>・新規作成ページ</p>

        @if(count($errors) > 0)

        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>

        @endif

        <form action="/basics" method="post">
            <table>
                @csrf
                <tr><th>名前： </th><td><input type='text' name='name' value="{{old('name')}}"></td></tr>
                <tr><th>性別： </th><td><select name='gender' value="{{old('gender')}}">
                    <option value="1">Male</option> <option value="2">Female</option> <option value="3">Other</option>                
                </select></td></tr>
                <tr><th>年齢： </th><td><input type='text' name='age' value="{{old('age')}}"></td></tr>
                <tr><th>身長： </th><td><input type='text' name='height' value="{{old('height')}}"></td></tr>
                <tr><th></th><td><input type='submit' value="send"></td></tr>
            </table>
        </form> 
    </body>
</html>



