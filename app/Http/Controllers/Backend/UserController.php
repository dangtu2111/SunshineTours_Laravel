<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;
use App\Services\Interfaces\UserServiceInterface as UserService;

class UserController extends Controller
{   protected $userService;
    protected $userRepository;
    public function __construct(
        UserService $userService,
        UserRepository $userRepository
    ){
        $this->userService = $userService;
        $this->userRepository= $userRepository;
    }
    public function index()
    {   

        $users = $this->userService->paginate();
      
        // Gọi phương thức config() để lấy thông tin cấu hình
        $config = $this->config();  
        // Đặt tên template cho view
        $template = 'backend.user.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config', 'template','users'));
    }
    public function create(){
        // Đặt tên template cho view
        $template = 'backend.user.store';
        $config['method']='create';
        
        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact( 'template','config'));
    }
    public function store(StoreUserRequest $request){
        if($this->userService->create($request)){
            return redirect()->route('admin.user')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.user.create')->with('error', 'Insert error');
    }
    public function edit($id){
        // Đặt tên template cho view\
        $user=$this->userRepository->findById($id);
        $config['method']='edit';
        
        $template = 'backend.user.store';
        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact( 'template','user','config'));
    }
    public function update($id,UpdateUserRequest $request){
        if($this->userService->update($id,$request)){
            return redirect()->route('admin.user')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.user.edit')->with('error', 'Insert error');
    }
    public function delete($id){
        $user=$this->userRepository->findById($id);
        $template = 'backend.user.delete';
        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact( 'template','user'));
    }
    public function destroy($id){
        if($this->userService->destroy($id)){
            return redirect()->route('admin.user')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.user')->with('error', 'Insert error');
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
                'backend/js/plugins/flot/curvedLines.js',
                'backend/js/plugins/switchery/switchery.js',
                'backend\library\library.js'

                // Thêm các đường dẫn file JS vào đây nếu cần
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css',
                'backend\library\library.js'

            ]
        ];
    }
    
   
}
