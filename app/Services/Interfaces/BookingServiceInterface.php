<?php

namespace App\Services\Interfaces;

/**
 * Interface ContentServiceInterface
 * @package App\Services\Interfaces
 */
interface BookingServiceInterface
{

    public function create($id,$request,$code);
    public function isCodeValid(string $code);

}
