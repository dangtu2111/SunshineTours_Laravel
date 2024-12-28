<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OrderDentailRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Tour;

class OrderDentailRepository extends BaseRepository implements OrderDentailRepositoryInterface
{
    protected $model;
    public function __construct(Tour $model){
        $this->model=$model;
    }
    
    
}
