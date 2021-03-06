<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Theme;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\FlashRepository;

class Users extends Controller
{
    protected $message;

    public function __construct(FlashRepository $message)
    {
        $this->message = $message;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        $count = count(User::all());
        return view('users.index', compact('users', 'count'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  CreateUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'is_admin' => $request['is_admin'] || 0,
            'password' => bcrypt($request['password']),
        ]);
        $this->message->flash("PUNY HUMAN - Your User has been created!");

        return redirect()->route('backend.users.index');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateUserRequest  $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update($request->all());
        $this->message->flash("PUNY HUMAN - Your User has been updated!");

        return redirect()->route('backend.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        $this->message->flash("PUNY HUMAN - You DESTROYED your User!");

        return redirect()->route('backend.users.index');
    }
}
