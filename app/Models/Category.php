<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Medicine;

class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_name', 'description'
    ];

    public function medicine()
    {
        return $this->hasMany(Medicine::class);
    }
}
