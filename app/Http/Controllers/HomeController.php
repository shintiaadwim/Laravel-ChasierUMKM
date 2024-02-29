<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $jumlahproduct = Product::count();
        $jumlahorder = Order::count();
        $jumlahuser = User::count();

        return view('pages.home.index', compact('jumlahproduct', 'jumlahorder', 'jumlahuser'));
    }

    public function show($username)
    {
        // $username
        // $user = User::where('username', $username)->firstOrFail();
        return view('pages.home.user', compact('user'));
    }
}
