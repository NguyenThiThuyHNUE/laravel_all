@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="col-12">
            <div class="row">

                <h1>Danh sách khách hàng</h1>
                <form  method="get" action="{{route('user.search')}}">
                    <input  type="search" placeholder="Tìm kiếm khách hàng" aria-label="Search" name="search">
                    <button type="submit">Search</button>
                </form>
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">Ten phong</th>
                        <th scope="col">Do kho</th>
                        <th scope="col">The loai</th>
                        <th scope="col">Ngay choi</th>
                        <th scope="col">Ca choi</th>
                        <th scope="col">So luong</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($phongchois)==0)
                        <tr>
                            <td colspan="4">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($phongchois as  $phongchoi)
                            <tr>
                                <td>{{$phongchoi['tenphong']}}</td>
                                <td>{{$phongchoi['dokho']}}</td>
                                <td>{{$phongchoi['theloai']}}</td>
                                <td>{{$phongchoi['ngaychoi']}}</td>
                                <td>{{$phongchoi['cachoi']}}</td>
                                <td>{{$phongchoi['soluong']}}</td>
                                <td>{{$phongchoi['email']}}</td>

                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    {{--</form>--}}

@endsection
