<?php

namespace App\Repositories;

use App\Repositories\Interfaces\OrderRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Order;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    protected $model;
    public function __construct(Order $model)
    {
        $this->model = $model;
    }
    public function getAllPaginate()
    {
        // Lấy dữ liệu từ bảng orders với các quan hệ được tải trước
        $orders = Order::with(['orderDetail', 'orderDetail.tour'])->paginate(10);
        return $orders;
    }
}
