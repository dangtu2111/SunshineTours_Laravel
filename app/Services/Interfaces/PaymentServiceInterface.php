<?php

namespace App\Services\Interfaces;

/**
 * Interface ContentServiceInterface
 * @package App\Services\Interfaces
 */
interface PaymentServiceInterface
{
    public function paginate();
    public function setStatusById($id, $status);

}
