<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;

class BookingController extends Controller
{  
    public function index(){

  
        $config = [
            "css"=>[
                'frontend/css/booking.css',
            ]
            ];
        // Đặt tên template cho view
        $template = 'frontend.booking.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template','config'));
    }
    public function tour_detail(){
        
        $config = [
            "css"=>[
                'frontend/css/tour_detail/font-awesome.min.css',
                'frontend/css/tour_detail/bootstrap.min.css',
                'frontend/css/tour_detail/jquery-ui.min.css',
                'frontend/css/tour_detail/owl.carousel.css',
                'frontend/css/tour_detail/jquery.mb.YTPlayer.min.css',
                'frontend/css/tour_detail/style.css',
            ],
            "js"=>[
                'frontend/js/tour_detail/jquery-1.11.0.min.js',
                'frontend/js/tour_detail/jquery-ui.min.js',
                'frontend/js/tour_detail/bootstrap.min.js',
                'frontend/js/tour_detail/owl.carousel.min.js',
                'frontend/js/tour_detail/parallax.min.js',
                'frontend/js/tour_detail/jquery.nicescroll.js',
                'frontend/js/tour_detail/jquery.ui.touch-punch.min.js',
                'frontend/js/tour_detail/jquery.mb.YTPlayer.min.js',
                'frontend/js/tour_detail/SmoothScroll.js',
                'frontend/js/tour_detail/script.js',

            ]
            ];
        // Đặt tên template cho view
        $template = 'frontend.booking.tour_detail';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template','config'));
    }
    public function orrder(){
      
        $config = [
            "css"=>[
                'frontend/css/tour_detail/font-awesome.min.css',
                'frontend/css/tour_detail/bootstrap.min.css',
                'frontend/css/tour_detail/jquery-ui.min.css',
                'frontend/css/tour_detail/owl.carousel.css',
                'frontend/css/tour_detail/jquery.mb.YTPlayer.min.css',
                'frontend/css/oder/style.css',
                'frontend/css/oder/input.css',
            ],
            "js"=>[
                'frontend/js/oder/js/jquery.min.js',
                'frontend/js/oder/popper.js',
                'frontend/js/oder/bootstrap.min.js',
                'frontend/js/oder/main.js',
              

            ]
            ];
        // Đặt tên template cho view
        $template = 'frontend.booking.order';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template','config'));
    }
}