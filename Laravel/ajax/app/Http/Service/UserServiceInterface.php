<?php


namespace App\Http\Service;


use Illuminate\Support\Facades\Request;

interface UserServiceInterface
{
    public function index();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update(Request $request, $id);

    public function destroy($id);
}
