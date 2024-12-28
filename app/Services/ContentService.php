<?php

namespace App\Services;

use App\Services\Interfaces\ContentServiceInterface;
use App\Repositories\Interfaces\ContentRepositoryInterface as ContentRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ContentService implements ContentServiceInterface
{
    protected $contentRepository;
    public function __construct(
        ContentRepository $contentRepository
    ){
        $this->contentRepository=$contentRepository;
    }
    public function paginate(){
        $posts= $this->contentRepository->getAllPaginate();
        return $posts;
    }

    public function createCategoryPost($request){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token', 'send']);

            $categoryContent = $this->contentRepository->createCategoryPost($payload);
         
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
    public function createPost($request){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token', 'send']);
            $payload['user_id'] = Auth::id();

            $post = $this->contentRepository->create($payload);
         
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
    public function updateNameCategory($request){
        DB::beginTransaction();
        try {
            $id = $request->input('id');
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token', 'send','id']);
            $post = $this->contentRepository->updateNameCategory($id,$payload);
         
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
    public function deleteCategory($id){
        DB::beginTransaction();
        try {
            $post = $this->contentRepository->deleteCategory($id);
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
    public function updatePost($id,$request){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            
            $payload = $request->except(['_token', 'send','re_password']);
       
           
           
            $user = $this->contentRepository->update($id,$payload);
            
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
    public function deletePost($id){
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
           
            $user = $this->contentRepository->delete($id);
            
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