<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    protected $guarded = [];
    
    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'keywords',
        'description',
        'image',
        'price',
        'stock',
        'minimum_stock',
        'discount',
        'gender',
        'status',
        'sizes'
       
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

   
}
