<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OrderDentailRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\OrderDetail;

class OrderDentailRepository extends BaseRepository implements OrderDentailRepositoryInterface
{
    protected $model;
    public function __construct(OrderDetail $model){
        $this->model=$model;
    }
    public function getAllPaginate()
    {   
    
        // Lấy dữ liệu từ bảng orders với các quan hệ được tải trước
        $orders = OrderDetail::with(['payments', 'order', 'tour'])->paginate(10);
        return $orders;
    }
    
    
}
