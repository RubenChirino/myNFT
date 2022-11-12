<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Nft;

class PagesController extends Controller
{
    /**
     * Auth (Register / )
     */
    public function register() {
        return view('auth/register');
    }
    public function login() {
        return view('auth/login');
    }

    /**
    * Home
    */
    public function home() {
        return view('home');
    }

    /**
    * Gallery
    */
    public function gallery(Request $request) {
        // $search = $request->search;
        // $nfts = Nft::where('title', 'LIKE', "%{$search}%")->latest()->paginate();
        $nfts = Nft::get();
        return view('gallery', ['nfts' => $nfts]);
    }

    /**
    * Cart
    */
    public function cart() {
        return view('cart');
    }

    /**
    * Account
    */
    public function account() {
        return view('account');
    }

    /**
     * Admin Dashboard
     */
    public function dashboard() {
        return view('dashboard');
    }

    public function dashboard_edit(Nft $nft) {
        return view('dashboard.edit', ['nft' => $nft]);
    }
}
