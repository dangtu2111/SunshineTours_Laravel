<?php

namespace App\Repositories;

use App\Repositories\Interfaces\ImageRepositoryInterface;
use App\Repositories\BaseRepository;
use App\Models\Image;

class ImageRepository extends BaseRepository implements ImageRepositoryInterface
{
    protected $model;
    public function __construct(Image $model){
        $this->model=$model;
    }
    public function deleteAllImgNotArr($arr, $tourid) {
        $imgs = $this->model->where('tour_id', $tourid)->get(); // Fetch images
    
        foreach ($imgs as $img) {
            if (!in_array($img->id, $arr)) { // If ID is NOT in the array
                $img->delete(); // Delete the image
            }
        }
    
        return true;
    }
    

    public function getAllPaginate(){
        $users = Image::paginate(8);
        return $users;
    }
    public function getImagebyTourID($id){
        $images = $this->model->where('tour_id', $id)->get();

        // Trả về kết quả (có thể là danh sách các hình ảnh)
        return $images;
    }
}
