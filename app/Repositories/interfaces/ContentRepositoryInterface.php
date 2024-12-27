<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface ContentRepositoryInterface extends BaseRepositoryInterface
{
    public function getAllPaginate();
    public function getCategoryName();
    public function createCategoryPost(array $payload =[]);
    public function updateNameCategory(int $id = 0, array $payload = []);
    public function deleteCategory($id);
}
