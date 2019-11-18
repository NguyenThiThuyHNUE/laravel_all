@extends('layouts.app')
    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sửa thông tin khách hàng</title>
</head>
<body>
@section('content')
    <h2>Sửa thông tin khách hàng</h2>
    <form method="post" action="{{route('user.update',$khachhangs['id'])}}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH') }}
        <table border="0.5px">

            <tr>
                <td>Họ và tên</td>
                <td><input type="text" name="tenkhach" value="{{$khachhangs['tenkhach']}}"></td>
                @if($errors->has('tenkhach'))
                    <span  class="text-danger">{{$errors->first('tenkhach')}}</span>
                @endif
            </tr>
            <tr>
                <td>Quê quán</td>
                <td><input type="text" name="diachi"  value="{{$khachhangs['diachi']}}" ></td>
                @if($errors->has('diachi'))
                    <span  class="text-danger">{{$errors->first('diachi')}}</span>
                @endif
            </tr>
            <tr>
                <td>Số điện thoại</td>
                <td><input type="number" name="sdt" value="{{$khachhangs['sdt']}}"></td>
                @if($errors->has('sdt'))
                    <span  class="text-danger">{{$errors->first('sdt')}}</span>
                @endif
            </tr>
            <tr>
                <td>Ngày sinh</td>
                <td><input type="date" name="ngaysinh" value="{{$khachhangs['ngaysinh']}}"></td>
                @if($errors->has('ngaysinh'))
                    <span  class="text-danger">{{$errors->first('ngaysinh')}}</span>
                @endif
            </tr>
                <td></td>
                <td><button type="submit">Edit</button></td>
            </tr>

        </table>
    </form>
@endsection
</body>
</html>


