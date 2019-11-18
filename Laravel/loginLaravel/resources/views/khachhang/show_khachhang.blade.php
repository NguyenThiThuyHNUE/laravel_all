@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chi tiết khách hàng</title>
</head>
<body>
@section('content')
    <h2>Chi tiết khách hàng</h2>
    <form method="post"  enctype="multipart/form-data">
        @csrf
        <table border="0.5px">
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="tenkhach" value="{{$khachhangs['tenkhach']}}"></td>
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name="diachi" value="{{$khachhangs['diachi']}}"></td>
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="number" name="sdt" value="{{$khachhangs['sdt']}}"></td>
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" name="ngaysinh" value="{{$khachhangs['ngaysinh']}}"></td>
            </tr>

        </table>
    </form>
@endsection
</body>
</html>


