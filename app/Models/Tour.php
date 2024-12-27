<?php

namespace App\Models;

  use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tours';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'category_id',
        'title',
        'price',
        'discount',
        'thumbnail',
        'description',
        'deleted',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'price' => 'decimal:2',
        'discount' => 'decimal:2',
        'deleted' => 'boolean',
    ];

    /**
     * Get the category that owns the tour.
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
