<?php

namespace App\Http\Controllers;

use App\Models\Shopping;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{

    /**
     * SAVE
     */
    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'user_id' => 'required',
            'nft_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('cart')
            ->withErrors($validator)
            ->withInput();
        }

        Shopping::create([
            'user_id'=> $request->user_id,
            'nft_id' => $request->nft_id,
        ]);

        return redirect()
        ->route('cart')
        ->with('status', 'La compra se ha completado correctamente.');
    }

}
