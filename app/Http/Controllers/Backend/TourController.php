<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\Interfaces\TourRepositoryInterface as TourRepository;
use App\Repositories\Interfaces\ImageRepositoryInterface as ImageRepository;
use App\Services\Interfaces\TourServiceInterface as TourService;
use App\Http\Requests\TourRequest;

class TourController extends Controller
{
    protected $tourService;
    protected $tourRepository;
    protected $imageRepository;
    public function __construct(
        TourService $tourService,
        TourRepository $tourRepository,
        ImageRepository $imageRepository
    ){
        $this->tourService = $tourService;
        $this->tourRepository= $tourRepository;
        $this->imageRepository= $imageRepository;
    }
    public function index()
    {
        // Gọi phương thức config() để lấy thông tin cấu hình
        $config = $this->config();
        $tours = $this->tourService->paginate();
        // Đặt tên template cho view
        $template = 'backend.tour.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config','tours', 'template'));
    }
    public function addTour(){
        // Đặt tên template cho view
        $template = 'backend.tour.addTour';
        $config["method"]='create';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config', 'template'));
    }
    public function create(TourRequest $request){
        if($this->tourService->create($request)){
            return redirect()->route('admin.tour')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.tour')->with('error', 'Insert error');
    }
    public function edit($id){
        $tour=$this->tourRepository->findById($id);
        $images=$this->imageRepository->getImagebyTourID($id);
        // Đặt tên template cho view
        $template = 'backend.tour.addTour';
        $config["method"]='update';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config','images','tour', 'template'));
    }
    public function update(TourRequest $request, $id){
       
        if($this->tourService->update($id,$request)){
            return redirect()->route('admin.tour')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.tour.edit')->with('error', 'Insert error');

    }
    public function delete($id){
        if($this->tourService->delete($id)){
            return redirect()->route('admin.tour')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.tour.edit')->with('error', 'Insert error');
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
