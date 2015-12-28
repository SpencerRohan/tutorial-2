<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Theme;
use App\Product;
use Auth;

class Dashboards extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()){
            $users = User::all();
            $admins = User::where('is_admin', '1')->get();
            $themes = Theme::all();
            $products = Product::all();
            return view('dashboards.index', compact('users', 'admins', 'themes', 'products'));
        };
        return redirect()->route('backend.login')->withErrors(['You must be logged in to access Dashboard']);

    }


}
