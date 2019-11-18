<?php


namespace App\Http\Repository\impl;


use App\Http\Repository\UserRepositoryInterface;
use App\User;
use Illuminate\Support\Facades\Request;

class UserRepository implements UserRepositoryInterface
{

    public function index()
    {
        return User::all();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    public function store($customer)
    {
        return $customer->save();
    }

    public function show($id)
    {
        // TODO: Implement show() method.
    }

    public function edit($id)
    {
        // TODO: Implement edit() method.
    }

    public function update(Request $request, $id)
    {
        // TODO: Implement update() method.
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
    }
}
