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
        $tours = Tour::with(['images' => function ($query) {
            $query->take(1); // Lấy chỉ một hình ảnh đầu tiên
        }])->paginate(8);
    
        return $tours;
    }
    public function allImage(){
        $tours = Tour::with(['images' => function ($query) {
            $query->take(1); // Lấy chỉ một hình ảnh đầu tiên
        }])->paginate(8);
    
        return $tours;
    }
    
}
