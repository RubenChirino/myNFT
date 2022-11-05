<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Models
use App\Models\Nft;

class PagesController extends Controller
{
    /**
     * Auth (Register / Login)
     */
    public function register() {
        return view('auth/register');
    }

    public function login() {
        return view('auth/login');
    }

    public function home() {
        return view('home');
    }

    public function gallery() {
        $nfts = Nft::get();
        return view('gallery', ['nfts' => $nfts]);
    }

    public function dashboard() {
        return view('dashboard');
    }

    public function dashboard_edit(Nft $nft) {
        return view('dashboard.edit', ['nft' => $nft]);
    }
}
