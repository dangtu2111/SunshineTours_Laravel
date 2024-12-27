<?php

namespace App\Services\Interfaces;

/**
 * Interface ContentServiceInterface
 * @package App\Services\Interfaces
 */
interface ContentServiceInterface
{
    public function createCategoryPost($request);
    public function createPost($request);
    public function paginate();
    public function updateNameCategory($request);
    public function deleteCategory($id);
    public function updatePost($id,$request);
    public function deletePost($id);



}
