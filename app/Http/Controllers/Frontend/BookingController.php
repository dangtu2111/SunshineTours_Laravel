<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;
use App\Repositories\Interfaces\ImageRepositoryInterface as ImageRepository;
use App\Services\Interfaces\TourServiceInterface as TourService;
use App\Services\Interfaces\BookingServiceInterface as BookingService;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Str;

class BookingController extends Controller
{
    protected $tourService;
    protected $tourRepository;
    protected $imageRepository;
    protected $bookingService;
    public function __construct(
        TourService $tourService,
        TourRepository $tourRepository,
        ImageRepository $imageRepository,
        BookingService $bookingService
    ) {
        $this->tourService = $tourService;
        $this->tourRepository = $tourRepository;
        $this->imageRepository = $imageRepository;
        $this->bookingService = $bookingService;
    }
    public function index()
    {
        $config = [
            "css" => [
                'frontend/css/booking.css',
            ]
        ];
        // Đặt tên template cho view
        $template = 'frontend.booking.index';
        $tours = $this->tourRepository->allImage();

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template', 'config', 'tours'));
    }
    public function paymentSuccess(){
        return view('frontend.payment.paymentSuccess');
    }
    public function tour_detail($id,)
    {
        $config = [
            "css" => [
                'frontend/css/tour_detail/font-awesome.min.css',
                'frontend/css/tour_detail/bootstrap.min.css',
                'frontend/css/tour_detail/jquery-ui.min.css',
                'frontend/css/tour_detail/owl.carousel.css',
                'frontend/css/tour_detail/jquery.mb.YTPlayer.min.css',
                'frontend/css/tour_detail/style.css',
            ],
            "js" => [
                'frontend/js/tour_detail/jquery-1.11.0.min.js',

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
        $tour = $this->tourRepository->findById($id);
        $tour->youtube = $this->convertYoutubeUrlToEmbed($tour->youtube);
        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template', 'config', 'tour'));
    }
    public function convertYoutubeUrlToEmbed($url)
    {
        $parsedUrl = parse_url($url);
        if (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $queryParams);
            if (isset($queryParams['v'])) {
                return 'https://www.youtube.com/embed/' . $queryParams['v'];
            }
        }
        return $url; // Nếu không phải URL hợp lệ, trả về URL gốc.
    }
    public function order($id)
    {

        $config = [
            "css" => [
                'frontend/css/tour_detail/font-awesome.min.css',
                'frontend/css/tour_detail/owl.carousel.css',
                'frontend/css/oder/style.css',
                'frontend/css/oder/input.css',
            ],
            "js" => [
                'frontend/js/oder/popper.js',
                'frontend/js/oder/main.js',


            ]
        ];
        // Đặt tên template cho view
        $template = 'frontend.booking.order';
        $tour = $this->tourRepository->findById($id);
        $tour->youtube = $this->convertYoutubeUrlToEmbed($tour->youtube);
        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template', 'config', 'tour'));
    }
    public function checkout($id, OrderRequest $request)
    {

        
        $config = [
            "css" => [
                'frontend/css/checkout.css',
                'frontend/css/tour_detail/font-awesome.min.css',
                'frontend/css/tour_detail/owl.carousel.css',
                'frontend/css/oder/style.css',
                'frontend/css/oder/input.css',
            ],
            "js" => [
                'frontend/js/oder/popper.js',
                'frontend/js/oder/main.js',
                 'frontend/js/checkout.js',

            ]
        ];
        $randomCode='';
        $isValid=false;
        while (!$isValid) {
            $randomCode = Str::random(15);
            $isValid = $this->bookingService->isCodeValid($randomCode);
        }

        // Đặt tên template cho view
        $template = 'frontend.booking.checkout';
        $tour = $this->tourRepository->findById($id);
        $tour->youtube = $this->convertYoutubeUrlToEmbed($tour->youtube);
        session(['checkout_data' => $request->all()]);
        session(['id' => $id]);
        session(['randomCode' => $randomCode]);
       
        return redirect()-> route('processPaypal', ['amount' =>$request->input('down_payment') ]) ;
        
    }
}
