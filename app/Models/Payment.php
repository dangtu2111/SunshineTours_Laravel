<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'order_id',
        'code',
        'price',
        'total_money',
    ];

    /**
     * Relationships
     */

    // Liên kết tới bảng orders
    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
