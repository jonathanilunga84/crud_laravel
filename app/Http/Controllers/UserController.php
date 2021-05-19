<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;

use App\Http\Repository\UserRepository;

use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;
    protected $nbPerPage = 3;

    public function __construct(UserRepository $userRepository){
        $this->userRepository = $userRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->userRepository->getPaginate($this->nbPerPage);
        return view('user.userIndex', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view("user.userCreate1");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(UserCreateRequest $request)
    {
        $user = $this->userRepository->store($request->all());
        return redirect('user')->withOk("L'utilisateur ". $user->name. " a été créé. ");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->userRepository->getById($id);
        return view('user.userShow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->userRepository->getById($id);
        return view('user.userEdit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $this->userRepository->update($id, $request->all());
        return redirect('user')->withOk("L'utilisateur ". $request->input('name')." a été modifié");
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->userRepository->destroy($id);
        return redirect()->back();
    }


}
