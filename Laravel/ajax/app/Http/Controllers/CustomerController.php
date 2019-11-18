<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Http\Service\UserServiceInterface;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public $userService;
    public function __construct(UserServiceInterface $userService)
    {
        $this->userService = $userService;
    }
    public function index()
    {
        $users= $this->userService->index();
        return view('user.list',compact('users'));
    }

    public function store(Request $request)
    {
        $customer= $this->userService->store($request);
        return response()->json($customer);

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


}
