<?php

namespace App\Http\Controllers;

use App\Http\Requests\KhachhangRequest;
use App\Http\Service\KhachhangServiseInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KhachhangController extends Controller
{
    public $khachhangService;

    public function __construct(KhachhangServiseInterface $khachhangService)
    {
        $this->khachhangService = $khachhangService;
        $this->middleware('auth');
    }

    public function getAll()
    {
        $khachhangs = $this->khachhangService->getAll();
        return view('khachhang.list_khachhang', compact('khachhangs'));
    }

    public function create()
    {
        return view('khachhang.create_khachhang');
    }
//
//
    public function store(KhachhangRequest $request)
    {
        $khachhangs = $this->khachhangService->store($request);
        return redirect()->route('user.index', compact('khachhangs'));

    }
//
//
    public function show($id)
    {
        $khachhangs = $this->khachhangService->show($id);
        return view('khachhang.show_khachhang', compact('khachhangs'));
    }
//
//
    public function edit($id)
    {
        $khachhangs = $this->khachhangService->edit($id);
        return view('khachhang.edit_khachhang', compact('khachhangs'));
    }
//
//
    public function update(KhachhangRequest $request, $id)
    {
        $khachhangs = $this->khachhangService->update($id, $request);
        return redirect()->route('user.index', compact('khachhangs'));
    }
//
//
    public function delete($id)
    {
        $customers = $this->khachhangService->delete($id);
        return redirect()->route('user.index');
    }


    public function search(Request $request)
    {
        $search = $request->get('search');
        $khachhangs = DB::table('nhanviens')->where('hoten', 'like', '%' . $search . '%')
            ->orWhere('email', $search)
            ->orWhere('sdt', $search)
            ->get();
        return view('search.list', compact('khachhangs'));
    }
}
