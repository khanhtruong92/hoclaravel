@extends('layouts.client')

@section('title')
    {{$title}}
@endsection

@section('content')
    <h1>Thêm sản phẩm</h1>
    <form action="" method="post">
        @csrf
        @method('put')
        <input type="text" name="username" id="">
        <button type="submit">Submit</button>
    </form>
@endsection

@section('css')
@endsection

@section('js')
@endsection
