<?php

namespace App\Services\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface TourServiceInterface
{
    public function create($request);
    public function paginate();
    public function update($id,$request);
    public function delete($id);
}
