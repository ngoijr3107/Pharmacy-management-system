<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Medicine extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'category_id', 'store_box', 'purchase_price', 'sell_price', 'qty',
        'generic_name', 'company', 'effects', 'expiry_date'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');

    }
}