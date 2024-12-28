<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'tour_id', 
        'thumbnail',
    ];

    /**
     * Get the tour that owns the image.
     */
    
    public function tour()
    {
        return $this->belongsTo(Tour::class, 'tour_id');
    }
}
