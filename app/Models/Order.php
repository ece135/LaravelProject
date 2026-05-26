<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'invoice_no', 'name', 'email', 'phone', 'address', 'total_amount', 'status'];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }
}
