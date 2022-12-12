<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use App\Models\Nft;

use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    /**
     * SAVE
     */
    public function store(Request $request) {

        // Remove the purchased Nfts
        $nfts = explode(",", $request->id_nfts);
        $i = 0;
        while($i < count($nfts))
        {
            Nft::where('id', '=', $nfts[$i])->delete();
            $i++;
        }

        // dd($request->all());

        /* $validator = Validator::make($request->all(), [
          'id_users' => 'required',
          'id_nfts' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()
            ->route('cart')
            ->withErrors($validator)
            ->withInput();
        } */

        /* Shopping::create([
         'id_users' => $request->id_users,
         'id_nfts' => 27, // $request->id_nfts
        ]); */

        return redirect()
        ->route('purchase')
        ->with('status', 'La compra se ha completado correctamente.');
    }

}
