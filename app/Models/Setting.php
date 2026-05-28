<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'description', 'email', 'phone', 'address', 
        'facebook', 'instagram', 'twitter', 'about_us'
    ];
}
