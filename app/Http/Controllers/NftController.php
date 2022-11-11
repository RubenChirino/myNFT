<?php

namespace App\Http\Controllers;

use App\Models\Nft;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class NftController extends Controller
{

    /**
     * GET
     */
    public function index() {
        return view('admin.dashboard.nfts.index', [
            'nfts' => Nft::latest()->paginate()
        ]);
    }

    /**
     * POST
     */
    public function create(Nft $nft) {
        return view('admin.dashboard.nfts.add', ['nft' => $nft]);
    }

    /**
     * EDIT
     */
    public function edit(Nft $nft) {
        return view('admin.dashboard.nfts.edit', ['nft' => $nft]);
    }

    /**
     * SAVE
     */
    public function store(Request $request) {

        $request->validate([
            'title' => 'required',
            'price' =>  'required',
            'url' =>  'unique:nfts,url', // required|
            'category' => 'required',
        ]);

        $nft = $request->user()->nfts()->create([
            'title' => $title = $request->title,
            'price' =>  $request->price,
            'url' => Str::slug($request->url),
            'category' => $request->category,
        ]);
        return redirect()->route('admin.dashboard.nfts.index');
    }

    /**
     * UPDATE
     */
    public function update(Request $request, Nft $nft) {

        $request->validate([
            'title' => 'required',
            'price' =>  'required',
            'url' =>  'unique:nfts,url,' . $nft->id, // required|
            'category' => 'required',
        ]);

        $nft->update([
            'title' => $request->title,
            'price' =>  $request->price,
            'url' => Str::slug($request->url),
            'category' => $request->category,
        ]);
        return redirect()->route('admin.dashboard.nfts.edit', $nft);
    }

    /**
     * DELETE
     */
    public function destroy(Nft $nft) {
        $nft->delete();
        return back();
    }

}
