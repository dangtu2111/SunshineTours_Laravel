<?php

namespace App\Repositories;

use App\Repositories\Interfaces\PaymentRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Payment;

class PaymentRepository extends BaseRepository implements PaymentRepositoryInterface
{
    protected $model;
    public function __construct(Payment $model){
        $this->model=$model;
    }
    
    
    
}
