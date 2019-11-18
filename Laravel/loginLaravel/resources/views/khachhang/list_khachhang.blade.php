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
                        <th scope="col">Tên thành viên</th>
                        <th scope="col">Email</th>
                        <th scope="col">Số điện thoại</th>
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Giới tính</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($khachhangs)==0)
                        <tr>
                            <td colspan="4">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($khachhangs as  $khachhang)
                            <tr>
                                <td>{{$khachhang['hoten']}}</td>
                                <td>{{$khachhang['email']}}</td>
                                <td>{{$khachhang['sdt']}}</td>
                                <td>{{$khachhang['ngaysinh']}}</td>
                                <td>{{$khachhang['gioitinh']}}</td>
                                <td><a href= "{{route('user.show', $khachhang['email'])}}"><button>Show</button></a></td>
                                <td><a href= "{{route('user.edit', $khachhang['email'])}}"><button>Edit</button></a></td>
                                <td><a href= "{{route('user.delete', $khachhang['email'])}}" onclick="return confirm('Ban chac chan muon xoa?')"><button type="submit">Delete</button></a></td>
                                {{--                                            <button type="submit">Delete</button></a></td>
                                {{--                                <td> <form action="{{route('customers.destroy', $customer['id'])}}" method="post">--}}
{{--                                        @csrf--}}
{{--                                        {{ method_field('DELETE') }}--}}
{{--                                        <a href= "" onclick="return confirm('Ban chac chan muon xoa?')">--}}
{{--                                            <button type="submit">Delete</button></a>--}}
{{--                                    </form>--}}
{{--                                </td>--}}
                            </tr>
                        @endforeach
                    @endif
                    </tbody>
                </table>
                <a href="{{route('user.create')}}"><button> Thêm khách hàng</button></a>
            </div>
        </div>
    </div>
    {{--</form>--}}

@endsection
