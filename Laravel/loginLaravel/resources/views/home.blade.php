@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><a href="">Dashboard</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{route('user.index')}}">Quan li thanh vien</a><br>
                    <a href="{{route('hoadon.index')}}">Quan li hoa don</a><br>
                    <a href="{{route('phongchoi.index')}}">Quan li phong choi</a><br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
