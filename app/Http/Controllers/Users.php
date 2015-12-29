<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;
use App\Theme;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class Users extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        return view('users.index', compact('users'));
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
        $userUpdate = $request->all();
        $user = User::find($id);
        $user->update($userUpdate);
        return redirect()->route('backend.users.index', compact('id'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('backend.users.index');
    }
}
