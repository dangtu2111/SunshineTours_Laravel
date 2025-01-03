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
    public function getAllPaginate(){
        return $this->model->paginate(10);
    }
    public function updateStatus($id, $status){
        $payment = $this->model->find($id);
        $payment->status = $status;
        $payment->save();
        return $payment;
    }
}
