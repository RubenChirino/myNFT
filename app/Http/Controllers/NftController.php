<?php

namespace App\Http\Controllers;

use App\Models\Nft;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

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

        
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'numeric|max:9999999',
            'image' => 'required|mimes:jpg,bmp,png',
            'category' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('nfts.create')
            ->withErrors($validator)
            ->withInput();
        }

        $imagen_nombre = time() . $request->file('image')->getClientOriginalName();

        $image = $request->file('image')->storeAs('nfts', $imagen_nombre, 'public'); 

         Nft::create([
            'name'=> $request->name,
            'price' => $request->price,
            'category' => $request->category,
            'image' => $image
        ]);

        return redirect()
        ->route('nfts.store')
        ->with('status', 'El producto se ha agregado correctamente.');
    }

    /**
     * UPDATE
     */
    public function update(Request $request, Nft $nft) {

         $rules= [
            'name' => 'required|max:255',
            'price' => 'numeric|max:9999999',
            'category' => 'required',
        ];

      //  if ($request->files('image')) {
         //  $rules['image'] = 'required|mimes:jpg,bmp,png';
       // }

        $validator = Validator::make($request->all(), $rules);

        if($validator->fails()){
            return redirect()
                ->route('nfts.update', $nft)
                ->withErrors($validator)
                ->withInput();
        }

            $data = [
                'name' => $request->name,
                'price' => $request->price,
                'category' => $request->category,
            ];

         if($request->file('image')){
                
                $imagen_nombre = time() . $request->file('image')->getClientOriginalName();
                
                $image = $request->file('image')->storeAs('nfts', $imagen_nombre, 'public');
                
                Storage::delete('public/' . $nft->image);
                $data['image'] = $image;
        }

        $nft->update($data);

        return redirect()
            ->route('nfts.store')
            ->with('status', 'El producto se ha modificado correctamente.');

    }

    /**
     * DELETE
     */
    public function destroy(Nft $nft) {
        $nft->delete();
        return back();
    }

    public function show($nft) {
        return view('admin.dashboard.nfts.index', [
            'nfts' => Nft::latest()->paginate()
        ]);
    }

}
