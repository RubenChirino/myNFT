<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shopping extends Model
{
    use HasFactory;

    protected $fillable = [
       // 'user_id',
       // 'nft_id',
       'id_users',
       'id_nfts',
    ];
}
