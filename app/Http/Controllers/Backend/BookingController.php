<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\BookingServiceInterface as BookingService;

class BookingController extends Controller
{   
    
    protected $bookingService;
    public function __construct(
        BookingService $bookingService
    ) {
        $this->bookingService = $bookingService;
    }
    public function index()
    {
        // Gọi phương thức config() để lấy thông tin cấu hình
        $config = $this->config();
        $orders=$this->bookingService->paginateOrder();


        // Đặt tên template cho view
        $template = 'backend.booking.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config', 'template' ,'orders'));
    }
    public function config()
    {
        return [
            'js' => [
                'backend/js/plugins/flot/jquery.flot.js',
                'backend/js/plugins/flot/jquery.flot.tooltip.min.js',
                'backend/js/plugins/flot/jquery.flot.spline.js',
                'backend/js/plugins/flot/jquery.flot.resize.js',
                'backend/js/plugins/flot/jquery.flot.pie.js',
                'backend/js/plugins/flot/jquery.flot.symbol.js',
                'backend/js/plugins/flot/curvedLines.js'
                // Thêm các đường dẫn file JS vào đây nếu cần
            ]
        ];
    }
    
}
