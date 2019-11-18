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
                        <th scope="col">Ngay giao dich</th>
                        <th scope="col">Tong tien</th>
                        <th scope="col">Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if(count($hoadons)==0)
                        <tr>
                            <td colspan="4">Khong co du lieu</td>
                        </tr>
                    @else
                        @foreach($hoadons as  $hoadon)
                            <tr>
                                <td>{{$hoadon['ngaygiaodich']}}</td>
                                <td>{{$hoadon['tongtien']}}</td>
                                <td>{{$hoadon['email']}}</td>

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
