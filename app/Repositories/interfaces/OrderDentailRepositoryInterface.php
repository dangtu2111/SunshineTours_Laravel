<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface OrderDentailRepositoryInterface extends BaseRepositoryInterface
{
    public function getAllPaginate();
}
