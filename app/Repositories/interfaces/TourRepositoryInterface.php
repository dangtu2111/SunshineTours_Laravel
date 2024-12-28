<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface TourRepositoryInterface extends BaseRepositoryInterface
{
    public function getAllPaginate();
    public function allImage();
}
