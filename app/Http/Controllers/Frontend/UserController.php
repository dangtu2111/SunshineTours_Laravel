<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Repositories\Interfaces\UserRepositoryInterface as UserRepository;

class UserController extends Controller
{  
    public function index(){
        // Đặt tên template cho view
        $template = 'frontend.home.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template'));
    }
}