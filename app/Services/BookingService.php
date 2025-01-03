<?php

namespace App\Services;

use App\Services\Interfaces\BookingServiceInterface;
use App\Repositories\Interfaces\OrderRepositoryInterface as OrderRepository;
use App\Repositories\Interfaces\OrderDentailRepositoryInterface as OrderDentailRepository;
use App\Repositories\Interfaces\PaymentRepositoryInterface as PaymentRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Arr;
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
    public function create($id,$request,$code){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $orderDate = now()->toDateString(); 
           
            $payload = Arr::except($request, ['_token']);
            $payload['order_date']??$payload['order_date']=$this->coverBirthDate( $payload['order_date']);
            $payload['time']=$this->getTimeAttribute( $payload['time']);
            
            
            // Giả sử guest-type = 1 là người lớn (0-8 tuổi), và guest-type = 2 là trẻ em (8-12 tuổi)
            
            $personalInfo = [
                'email' => $payload['email'] ?? null,
                'fullname' => $payload['fullname'] ?? null,
                'phone_number' => $payload['phone'] ?? null,
                'note' => $payload['note'] ?? null,
                'order_date' => $orderDate,
                'status' => "1",
                'down_payment' => $payload['down_payment'] ?? null,
                'total_money' => $payload['total_money'] ?? null,
            ];
           
            $order=$this->orderRepository->create($personalInfo);
            
            $bookingInfo = [
                'order_id' => $order->id,
                'tour_id'=>$id,
                'date_booking' => $payload['order_date'] ?? null,
                'time' => $payload['time'] ?? null,
                'guest_08' => 0,
                'guest_812' => 0,
                'guest_12' => 0,
                'vip' =>  $payload['vip'] ?? 0,
                'video' =>  $payload['video'] ?? 0,
                'car_bus' =>  $payload['car_bus'] ?? 0,
                'total_money' => $payload['total_money'] ?? 0,

            ];
            foreach ($payload['guest-type'] as $key => $type) {
                $numOfPeople = $payload['numberOfPeople'][$key];  // Số lượng khách cho loại khách hiện tại
                
                if ($type == 1) {  // Người lớn (0-8 tuổi)
                    $bookingInfo['guest_08'] += $numOfPeople;
                } elseif ($type == 2) {  // Trẻ em (8-12 tuổi)
                    $bookingInfo['guest_812'] += $numOfPeople;
                } elseif ($type == 3) {  // Trẻ em lớn hơn 12 tuổi
                    $bookingInfo['guest_12'] += $numOfPeople;
                }
            }
       
            $orderDentail= $this->orderDentailRepository->create($bookingInfo);
            
            $paymentInfo = [
                'orderDetail_id' => $orderDentail->id,
                'code'=>$code,
                'total_money' => $payload['down_payment'] ?? null,
                
            ];

            $payment=$this->paymentRepository->create($paymentInfo);
            
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
    public function isCodeValid(string $code): bool
    {
        // Kiểm tra xem mã code có tồn tại trong bảng payments hay không
        $exists =$this->paymentRepository->where('code', $code)->exists();

        // Trả về true nếu mã không tồn tại (hợp lệ), false nếu mã đã tồn tại
        return !$exists;
    }
    private function coverBirthDate($birthday='1-11-1990'){
        $carbonDate = Carbon::createFromFormat('Y-m-d',$birthday);
        $birthday=$carbonDate->format('Y-m-d H:i:s');
        return $birthday;
    }
    public function paginateOrder(){
        
        return $this->orderRepository->getAllPaginate();
    }
    public function getTimeAttribute($value)
    {
        return Carbon::createFromFormat('h:i A',$value )->format('H:i');
    }
}