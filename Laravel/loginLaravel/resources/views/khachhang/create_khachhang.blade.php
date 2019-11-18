@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tạo thành viên</title>
</head>
<body>
@section('content')
    <h2>Tạo thành viên</h2>
    <form method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
        @csrf
        <table border="0.5px">
            <tr>

                <td>Email</td>
                <td><input type="text" name="email"></td>
                @if($errors->has('email'))
                    <span  class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </tr>
            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="hoten"></td>
                @if($errors->has('hoten'))
                    <span  class="text-danger">{{$errors->first('hoten')}}</span>
                @endif
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="number" name="sdt"></td>
                @if($errors->has('sdt'))
                    <span  class="text-danger">{{$errors->first('sdt')}}</span>
                @endif
            </tr>
            <tr>
                <td>Ngày Sinh</td>
                <td><input type="date" name="ngaysinh"></td>
                @if($errors->has('ngaysinh'))
                    <span  class="text-danger">{{$errors->first('ngaysinh')}}</span>
                @endif
            </tr>
            <tr>
                <td>Gioi tinh</td>
                <td><input type="text" name="gioitinh"></td>
                @if($errors->has('gioitinh'))
                    <span  class="text-danger">{{$errors->first('gioitinh')}}</span>
                @endif
            </tr>
            <tr>
                <td></td>
                <td><button type="submit">Create</button></td>
            </tr>
        </table>
    </form>
@endsection
</body>
</html>

