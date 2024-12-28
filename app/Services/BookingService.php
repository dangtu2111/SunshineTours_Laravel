<?php

namespace App\Services;

use App\Services\Interfaces\BookingServiceInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
use App\Repositories\Interfaces\OrderDentailRepositoryInterface as OrderDentailRepository;
use App\Repositories\Interfaces\PaymentRepositoryInterface as PaymentRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

/**
 * Class UserService
 * @package App\Services
 */
class BookingService implements BookingServiceInterface
{
    protected $orderRepository;
    protected $orderDentailRepository;
    protected $paymentRepository;

    public function __construct(
        OrderRepository $orderRepository,
        OrderDentailRepository $orderDentailRepository,
        PaymentRepository $paymentRepository
    ){
        $this->orderRepository=$orderRepository;
        $this->orderDentailRepository=$orderDentailRepository;
        $this->paymentRepository=$paymentRepository;
    }
    public function create($request){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token']);
            dd($payload);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            // Rollback transaction nếu có lỗi
            DB::rollback();
            // Hiển thị lỗi
            echo $e->getMessage();
            die();
        }
    }
}