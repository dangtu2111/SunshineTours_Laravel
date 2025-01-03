<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';

    protected $fillable = [
        'orderDetail_id',
        'code',
        'total_money',
    ];

    /**
     * Relationships
     */

    // Liên kết tới bảng orders
    public function orderDetail()
    {
        return $this->belongsTo(OrderDetail::class);
    }
}

