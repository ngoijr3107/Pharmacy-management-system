<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category', 'store_box', 'purchase_price', 'sell_price', 'qty',
        'generic_name', 'company', 'effects', 'expiry_date'
    ];
}
