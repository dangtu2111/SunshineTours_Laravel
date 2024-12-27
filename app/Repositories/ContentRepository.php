<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ContentRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\category_posts;
use App\Models\Post;

class ContentRepository extends BaseRepository implements ContentRepositoryInterface
{
    protected $model;
    public function __construct(Post $model)
    {
        $this->model = $model;
    }
    public function getAllPaginate()
    {
        $posts = Post::paginate(10);

        return $posts;
    }
    public function createCategoryPost(array $payload = [])
    {
        $categories = category_posts::create($payload);
        return $categories;
    }
    public function updateNameCategory(int $id = 0, array $payload = [])
    {
        // Tìm danh mục dựa trên ID
        $category = category_posts::find($id);

        // Nếu danh mục không tồn tại, trả về false
        if (!$category) {
            return false;
        }

        // Cập nhật danh mục với dữ liệu từ payload
        $category->update($payload);

        // Trả về danh mục đã cập nhật
        return $category;
    }
    public function deleteCategory($id){
        $category = category_posts::find($id);
        if (!$category) {
            return false;
        }
        $category->delete();
        return true;
    }
    public function getCategoryName()
    {
        return category_posts::all();
    }
    // public function findById($id, array $column = ['*'], $relation = []){
    //     // Tìm người dùng theo id, nếu không tìm thấy sẽ ném lỗi 404
    //     $user = category_posts::findOrFail($id);
    //     return $user;
    // }

}
