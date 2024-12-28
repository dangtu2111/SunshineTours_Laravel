<?php

namespace App\Services;

use App\Services\Interfaces\TourServiceInterface;
use App\Repositories\Interfaces\ImageRepositoryInterface as ImageRepository;

use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;
use Illuminate\Support\Facades\DB;

/**
 * Class UserService
 * @package App\Services
 */
class TourService implements TourServiceInterface
{
    protected $tourRepository;
    protected $imageRepository;
    public function __construct(
        TourRepository $tourRepository,
        ImageRepository $imageRepository
    ) {
        $this->tourRepository = $tourRepository;
        $this->imageRepository = $imageRepository;
    }
    public function paginate()
    {

        return $this->tourRepository->getAllPaginate();
    }
    public function create($request)
    {
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token', 'send', 'thumbnails']);
            $payload['category_id'] = 1;
            $thumbnails = $request->input('thumbnails');


            $tour = $this->tourRepository->create($payload);
            $image = [];
            foreach ($thumbnails as $thumbnail) {
                $image['tour_id'] = $tour->id;
                $image['thumbnail'] = $thumbnail;
                $this->imageRepository->create($image);
            }
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
    public function update($id, $request)
    {
        DB::beginTransaction();
        try {
            // Loại bỏ các yếu tố không cần thiết trong request
            $payload = $request->except(['_token', 'send', 'thumbnails']);
            $payload['category_id'] = 1;
            $thumbnails = $request->input('thumbnails', []);
            $thumbnails_id = $request->input('thumbnails_id', []);

            $tour = $this->tourRepository->update($id, $payload);

            $image = [];
            if (!empty($thumbnails) && !empty($thumbnails_id)) {
                // Lặp qua tất cả các thumbnails và thumbnails_id để cập nhật
                foreach ($thumbnails as $index => $thumbnail) {

                    $image = [
                        'tour_id' => $id,
                        'thumbnail' => $thumbnail
                    ];


                    // Cập nhật hình ảnh với ID tương ứng
                    $this->imageRepository->update($thumbnails_id[$index], $image);
                }
            }
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
    public function delete($id)
    {
        DB::beginTransaction();
        try {
            $tour = $this->tourRepository->delete($id);
            $thumbnails = $this->imageRepository->getImagebyTourID($id);
           
            // Lặp qua tất cả các thumbnails và thumbnails_id để cập nhật
            foreach ($thumbnails as $thumbnail) {
                // Cập nhật hình ảnh với ID tương ứng
                $this->imageRepository->delete($thumbnail->id);
            }
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
