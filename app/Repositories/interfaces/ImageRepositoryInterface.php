<?php

namespace App\Repositories\Interfaces;

/**
 * Interface UserServiceInterface
 * @package App\Services\Interfaces
 */
interface ImageRepositoryInterface extends BaseRepositoryInterface
{
    public function getImagebyTourID($id);
    public function deleteAllImgNotArr($arr,$tourid);
}
