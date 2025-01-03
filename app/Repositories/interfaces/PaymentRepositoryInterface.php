<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface PaymentRepositoryInterface extends BaseRepositoryInterface
{
    public function getAllPaginate();
    public function updateStatus($id, $status);
    
}
