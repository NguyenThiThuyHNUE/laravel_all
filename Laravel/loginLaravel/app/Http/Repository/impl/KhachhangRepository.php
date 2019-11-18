<?php


namespace App\Http\Repository\impl;


use App\Http\Repository\KhachhangRepositoryInterface;
use App\Nhanvien;

class KhachhangRepository implements KhachhangRepositoryInterface
{

    public function getAll()
    {
        return Nhanvien::all();
    }

    public function create()
    {

    }

    public function store($khachhang)
    {
        return $khachhang->save();
    }

    public function show($id)
    {
        $khachhang= Nhanvien::findOrFail($id);
        return $khachhang;
    }

    public function edit($id)
    {
        $khachhang= Nhanvien::findOrFail($id);
        return $khachhang;
    }

    public function update($id,$request)
    {
        $khachhang=Nhanvien::findorfail($id);
        return $khachhang->update($request->all());
    }

    public function delete($id)
    {
        $khachhang= Nhanvien::findorfail($id);
        return $khachhang->delete();
    }
}
