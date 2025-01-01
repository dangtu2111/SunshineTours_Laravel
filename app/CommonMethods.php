<?php

namespace App;

trait CommonMethods
{
    public function createOrder(){
        $data = session('checkout_data');
        $id = session('id');
        $randomCode = session('randomCode');
        if ($this->bookingService->create($id, $data, $randomCode)) {
            return true;
        }else{
            return false;
        }
    }
}
