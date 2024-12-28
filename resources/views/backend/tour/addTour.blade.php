<link rel="stylesheet" href="{{asset('backend/summernote/summernote-lite.min.css')}}">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Create Tour</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.home') }}">Home</a>
            </li>
            <li>
                <a>Tour</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">

    <div class="row">
        <div class="col-lg-12">
            <div class="tabs-container">
                <ul class="nav nav-tabs">
                    <li class="active"><a data-toggle="tab" href="#tab-1"> Tour info</a></li>
                    <li class=""><a data-toggle="tab" href="#tab-4"> Images</a></li>
                </ul>
                @php
                $url = $config['method'] == 'create'
                ? route('admin.tour.create')
                : route('admin.tour.update', $tour->id);
                $textButton= $config['method'] == 'create'?"Create": "Update";

                @endphp
                <form action="{{ $url }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                                @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif

                                <fieldset class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Title:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="title" class="form-control" placeholder="Tour Title" value="{{ old('title',($tour->title) ?? "") }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Price:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="price" class="form-control" placeholder="$160.00" value="{{ old('price',($tour->price) ?? "") }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Link youtobe:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="youtube" class="form-control" placeholder="Tour Title" value="{{ old('youtube',($tour->youtube) ?? "") }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Description:</label>
                                        <div class="col-sm-10">
                                            <textarea id="summernote" rows="8" name="description" class="form-control" placeholder="Post content">{{ old('description', $tour->description ?? "<h3>Lorem Ipsum is simply</h3>...") }}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Meta Tag Title:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="meta_title" class="form-control" placeholder="..." value="{{ old('meta_title',$tour->meta_title ?? "") }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Meta Tag Description:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="meta_description" class="form-control" placeholder="Sheets containing Lorem" value="{{ old('meta_description',$tour->meta_description ?? "") }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Meta Tag Keywords:</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="meta_keywords" class="form-control" placeholder="Lorem, Ipsum, has, been" value="{{ old('meta_keywords',$tour->meta_keywords ?? "") }}">
                                        </div>
                                    </div>

                                </fieldset>





                            </div>
                        </div>
                        <div id="tab-4" class="tab-pane">
                            <div class="panel-body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th>
                                                    Image preview
                                                </th>
                                                <th>
                                                    Image url
                                                </th>
                                                <th>
                                                    Sort order
                                                </th>
                                                <th>
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody id="image-table-body">
                                            <!-- Các dòng hình ảnh sẽ được thêm vào đây -->
                                            @if(isset($images))
                                            @foreach($images as $image)
                                            
                                            <tr>
                                                <td>
                                                    <img src="{{$image->thumbnail}}" alt="Image" style="height: 5rem;">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="thumbnails[]" readonly value="{{$image->thumbnail}}">
                                                </td>
                                                <td>
                                                    <input type="text" class="form-control" name="thumbnails_id[]" value="{{$image->id}}">
                                                </td>
                                                <td>
                                                    <button class="btn btn-white btn-delete-row">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                    <div class="container text-center" style="width:100%">
                                        <button type="button" class="btn btn-sm btn-primary" style="width:100%" id="lfm">Insert Image</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="container text-center">
                        <button type="submit" class="btn btn-sm btn-primary">Create Tour</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>



<script src="{{asset('backend/summernote/summernote-lite.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script src="/vendor/laravel-filemanager/js/imageTour.js"></script>
<script>
    $(document).ready(function() {
        $('#lfm').filemanager('image');
        // Khi người dùng chọn hình ảnh từ CKFinder

    });
    $(document).ready(function() {
        // Khi nhấn vào nút có class "fa-trash"
        $('button.btn-white').click(function() {
            // Xóa dòng <tr> chứa nút nhấn
            $(this).closest('tr').remove();
        });
    });
</script>