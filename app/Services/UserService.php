<?php

namespace App\Services;

use App\Services\Interfaces\UserServiceInterface;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

/**
 * Class UserService
 * @package App\Services
 */
class UserService implements UserServiceInterface
{
    protected $userRepository;
    public function __construct(
        UserRepository $userRepository
    ){
        $this->userRepository=$userRepository;
    }
    public function paginate(){
        $users = $this->userRepository->getAllPaginate();
        return $users;
    }
    public function create($request){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token', 'send','re_password']);
            $carbonDate = Carbon::createFromFormat('Y-m-d',$payload['birthday']);
            $payload['birthday']=$carbonDate->format('Y-m-d H:i:s');
            $payload['password']=Hash::make( $payload['password']);
            $address = $payload['Street'] . ', ' . $payload['Ward'] . ', ' . $payload['District'] . ', ' . $payload['Province'] . ', ' . $payload['Country'];
            $payload['address'] = $address;
            // Xóa các trường cũ khỏi payload
            unset($payload['Street']);
            unset($payload['Ward']);
            unset($payload['District']);
            unset($payload['Province']);
            unset($payload['Country']);
            // dd($payload);

            $user = $this->userRepository->create($payload);
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
    public function update($id,$request){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            
            $payload = $request->except(['_token', 'send','re_password']);
            
           
            $payload['birthday']=$this->coverBirthDate($payload['birthday']);
         
            if (isset($payload['password'])) {
                // Mã hóa mật khẩu trước khi lưu
                $payload['password'] = Hash::make($payload['password']);
            }
            $address = $payload['Street'] . ', ' . $payload['Ward'] . ', ' . $payload['District'] . ', ' . $payload['Province'] . ', ' . $payload['Country'];
            $payload['address'] = $address;
            // Xóa các trường cũ khỏi payload
            if($payload['password']==null){
                unset($payload['password']);

            }
            

            unset($payload['Street']);
            unset($payload['Ward']);
            unset($payload['District']);
            unset($payload['Province']);
            unset($payload['Country']);
           
            $user = $this->userRepository->update($id,$payload);
            
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
    public function destroy($id){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
           
            $user = $this->userRepository->delete($id);
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
    private function coverBirthDate($birthday='1-11-1990'){
        $carbonDate = Carbon::createFromFormat('Y-m-d',$birthday);
        $birthday=$carbonDate->format('Y-m-d H:i:s');
        return $birthday;
    }
    
}
