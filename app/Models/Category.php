<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * Tên bảng tương ứng với model này.
     */
    protected $table = 'categories';

    /**
     * Các trường có thể gán giá trị hàng loạt.
     */
    protected $fillable = [
        'name',
    ];

    /**
     * Thiết lập quan hệ với model Tour.
     * Một danh mục có thể có nhiều tour.
     */
    public function tours()
    {
        return $this->hasMany(Tour::class);
    }
}
