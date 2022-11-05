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
        // $nfts = Nft::get();
        return view('gallery');
    }

    public function admin_dashboard() {
        return view('admin_dashboard');
    }

    public function admin_dashboard_edit(Nft $nft) {
        return view('admin_dashboard_edit', ['nft' => $nft]);
    }
}
