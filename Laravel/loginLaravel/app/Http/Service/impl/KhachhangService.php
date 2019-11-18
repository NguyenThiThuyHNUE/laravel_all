<?php


namespace App\Http\Service\impl;


use App\Http\Repository\KhachhangRepositoryInterface;
use App\Http\Service\KhachhangServiseInterface;
use App\Nhanvien;

class KhachhangService implements KhachhangServiseInterface
{
    public $khachhangRepository;
    public function __construct(KhachhangRepositoryInterface $khachhangRepository)
    {
        $this->khachhangRepository=$khachhangRepository;
    }

    public function getAll()
    {
        return $this->khachhangRepository->getAll();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($request)
    {
        $khachhang= new Nhanvien();
        $khachhang->email= $request->input('email');
        $khachhang->hoten= $request->input('hoten');
        $khachhang->sdt= $request->input('sdt');
        $khachhang->ngaysinh= $request->input('ngaysinh');
        $khachhang->gioitinh= $request->input('gioitinh');
        return $this->khachhangRepository->store($khachhang);
    }

    public function show($id)
    {
        return $this->khachhangRepository->show($id);
    }

    public function edit($id)
    {
        return $this->khachhangRepository->edit($id);
    }

    public function update($id, $request)
    {
        return $this->khachhangRepository->update($id,$request);
    }

    public function delete($id)
    {
        return $this->khachhangRepository->delete($id);
    }
}
