<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'order_details';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'order_id',
        'tour_id',
        'price',
        'num',
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

    // Liên kết tới bảng tours
    public function tour()
    {
        return $this->belongsTo(Tour::class);
    }
}
