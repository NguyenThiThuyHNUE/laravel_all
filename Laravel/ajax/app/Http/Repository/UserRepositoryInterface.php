<?php


namespace App\Http\Repository;


use Illuminate\Support\Facades\Request;

interface UserRepositoryInterface
{
    public function index();

    public function create();

    public function store(Request $request);

    public function show($id);

    public function edit($id);

    public function update(Request $request, $id);

    public function destroy($id);

}
