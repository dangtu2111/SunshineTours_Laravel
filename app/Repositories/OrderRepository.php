<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Order;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    protected $model;
    public function __construct(Order $model){
        $this->model=$model;
    }
    
    
    
}
