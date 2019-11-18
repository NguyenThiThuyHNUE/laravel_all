<?php


namespace App\Http\Service\impl;


use App\Http\Repository\UserRepositoryInterface;
use App\Http\Service\UserServiceInterface;
use App\User;
use Illuminate\Support\Facades\Request;

class UserService implements UserServiceInterface
{
    public $userRepository;
    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository= $userRepository;
    }

    public function index()
    {
       return $this->userRepository->index();
    }

    public function create()
    {
        // TODO: Implement create() method.
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store($request)
    {
        $customer= new User();
        $customer->name= $request->input('name');
        $customer->email= $request->input('email');
        $customer->password= $request->input('password');
        return $this->userRepository->store($customer);
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
