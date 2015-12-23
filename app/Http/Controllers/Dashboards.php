<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Theme;
use App\Product;

class Dashboards extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        $admins = User::whereIsAdmin(true);
        $themes = Theme::all();
        $products = Product::all();
        return view('dashboards.index', compact('users', 'admins', 'themes', 'products'));
    }


}
