<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;


class UserController extends Controller
{  
    public function index(TourRepository $tourRepository){
        // Đặt tên template cho view
        $template = 'frontend.home.index';
        $tours=$tourRepository->allImage();
        $config=[
            'css'=>[
                'frontend/css/booking.css',
            ]
            ];

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template','config','tours'));
    }
}