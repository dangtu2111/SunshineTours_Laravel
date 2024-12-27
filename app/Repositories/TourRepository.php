<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TourRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Tour;

class TourRepository extends BaseRepository implements TourRepositoryInterface
{
    protected $model;
    public function __construct(Tour $model){
        $this->model=$model;
    }
    public function getAllPaginate(){
        $users = Tour::paginate(10);
        return $users;
    }
    // public function findById($id, array $column = ['*'], $relation = []){
    //     // Tìm người dùng theo id, nếu không tìm thấy sẽ ném lỗi 404
    //     $user = User::findOrFail($id);
    //     return $user;
    // }
    
}
