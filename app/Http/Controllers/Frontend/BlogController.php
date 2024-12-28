<?php

namespace App\Http\Controllers\Frontend;

use App\Models\User;
use App\Http\Controllers\Controller;
use App\Services\Interfaces\ContentServiceInterface as ContentService;
use App\Repositories\Interfaces\ContentRepositoryInterface as ContentRepository;

class BlogController extends Controller
{  
    protected $contentService;
    protected $contentRepository;
    public function __construct(
        ContentService $contentService,
        ContentRepository $contentRepository
    ){
        $this->contentService = $contentService;
        $this->contentRepository= $contentRepository;
    }
    public function index(){
        // Đặt tên template cho view
        $template = 'frontend.blog.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('frontend.layout.layout', compact('template'));
    }
    public function blog_dentail($id){
         // Đặt tên template cho view
        $content = $this->contentRepository->findById($id);
   
         $template = 'frontend.blog.blog_dentail';

         // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
         return view('frontend.layout.layout', compact('template','content'));
    }
}