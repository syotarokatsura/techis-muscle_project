@extends('layouts'.'app')
@section('content')

<h1>Basic Add</h1>
<p>・編集ページ</p>

@if(count($errors) > 0)
<div>
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
    </ul>
</div>
@endif
<form action="/basic/edit" method="post">
    <table>
        @csrf
        <input type='hidden' name='user_id' value="{{$form->user_id}}"></td></tr>
        <tr><th>名前： </th><td><input type='text' name='name' value="{{$form->name}}"></td></tr>
        <tr><th>性別： </th><td><input type='' name='gender' value="{{$form->gender}}"></td></tr>
        <tr><th>年齢： </th><td><input type='number' name='age' value="{{$form->age}}"></td></tr>
        <tr><th>身長： </th><td><input type='number' name='height' value="{{$form->height}}"></td></tr>
        <tr><th></th><td><input type='submit' value="send"></td></tr>
    </table>
</form> 

@endsection