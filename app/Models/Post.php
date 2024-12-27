<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    // Nếu bạn có tên bảng khác, bạn có thể chỉ định như thế này:
    // protected $table = 'posts';

    // Các trường có thể gán hàng loạt
    protected $table = 'posts';
    protected $fillable = ['title','img', 'description', 'content', 'category_id', 'user_id'];

}
