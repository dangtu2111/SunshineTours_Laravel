<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriesContentRequest;
use App\Http\Requests\NewPostRequest;
use App\Services\Interfaces\ContentServiceInterface as ContentService;
use App\Repositories\Interfaces\ContentRepositoryInterface as ContentRepository;
use Illuminate\Http\Request;


class ContentController extends Controller
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
    
    public function index()
    {
        // Gọi phương thức config() để lấy thông tin cấu hình
        $config = $this->config();
        $category_post = $this->contentRepository->getCategoryName();
        $posts = $this->contentService->paginate();
       
        // Đặt tên template cho view
        $template = 'backend.content.index';

        // Trả về view 'backend.layout.layout' và truyền biến 'config' và 'template'
        return view('backend.layout.layout', compact('config', 'template','category_post','posts'));
    }
    public function addCategory(CategoriesContentRequest $request){
        if($this->contentService->createCategoryPost($request)){
            return redirect()->route('admin.content')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.content')->with('error', 'Insert error');
    }
    public function addNewPost(){
        $template = 'backend.content.newPost';
        $categories = $this->contentRepository->getCategoryName();
        $config['method']='create';
        return view('backend.layout.layout', compact( 'template','config','categories'));
    }
    public function formNewPost(NewPostRequest $request){
        if($this->contentService->createPost($request)){
            return redirect()->route('admin.content')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.content')->with('error', 'Insert error');
    }
    public function updateNameCategory(CategoriesContentRequest $request){
        if($this->contentService->updateNameCategory($request)){
            return redirect()->route('admin.content')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.content')->with('error', 'Insert error');
    }
    public function deleteCategory(Request $request){
        $id=$request->input('id');
        if($this->contentService->deleteCategory($id)){
            return redirect()->route('admin.content')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.content')->with('error', 'Insert error');
    }
    public function editPost($id){
        $post=$this->contentRepository->findById($id);
        $config['method']='edit';
        $template = 'backend.content.newPost';
        $categories = $this->contentRepository->getCategoryName();
        return view('backend.layout.layout', compact( 
            'template',
            'config',
            'post',
            'categories'));
    }
    public function updatePost($id,NewPostRequest $request){
      
        if($this->contentService->updatePost($id,$request)){
            return redirect()->route('admin.content')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.content')->with('error', 'Insert error');

    }
    public function deletePost($id){
        if($this->contentService->deletePost($id)){
            return redirect()->route('admin.content')->with('success', 'Insert successfull');
        }
        return redirect()->route('admin.content')->with('error', 'Insert error');
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
