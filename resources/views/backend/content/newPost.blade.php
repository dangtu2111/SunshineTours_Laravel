<link rel="stylesheet" href="{{asset('backend/summernote/summernote-lite.min.css')}}">
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Create post</h2>
        <ol class="breadcrumb">
            <li>
                <a href="{{ route('admin.home') }}">Home</a>
            </li>
            <li>
                <a>Content</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>
@php
$url = $config['method'] == 'create'
? route('admin.content.formNewPost')
: route('admin.content.updatePost', $post->id);
$textButton= $config['method'] == 'create'?"Create": "Update";

@endphp
<form action="{{ $url}}" method="POST" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <div class="my-2 d-block">
        <p>Featured Image:</p>
        <label class="d-block text-center" style="width:100%;">
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input value="{{ old('img',($post->img) ?? " ") }}" id="thumbnail" class="form-control" type="text" name="img">
            </div>
            <div id="holder" style="margin-top:15px;">
                @if(isset($post->img))
                <img src="{{$post->img}}" style="height: 5rem;">
                @endif
            </div>

        </label>


    </div>

    <div class="form-floating">
        <label for="floatingInput">Title</label>

        <input value="{{ old('title',($post->title) ?? " ") }}" name="title" type="text" class="form-control mb-2" id="floatingInput" placeholder="Title">
    </div>


    <div class="">
        <label for="floatingInput">Content</label>

        <textarea id="summernote" rows="8" name="content" class="form-control" placeholder="Post content">{{ old('content',$post->content ?? " ") }}</textarea>
    </div>

    <div class="col">
        <p>
            Category
        </p>
        <select name="category_id" class="select2_demo_3 form-control">
            @foreach ($categories as $cat)
                <option value="{{ $cat->id }}"
                    {{ old('category_id', isset($post->category_id) ? $post->category_id : '') == $cat->id ? 'selected' : '' }}>
                    {{ $cat->name }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col text-center " style="margin-top:20px">
        <a href="#">
            <button class="mt-4 btn btn-lg btn-primary" style="height:auto !important" type="button">Back</button>
        </a>
        <button class="mt-4 btn btn-lg btn-primary float-end" style="height:auto !important" type="submit">{{$textButton}}</button>
    </div>
</form>
<script src="{{asset('backend/summernote/summernote-lite.min.js')}}"></script>
<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    $(document).ready(function() {
        $('#lfm').filemanager('image'); // Mở CKFinder để chọn hình ảnh
        // Khi người dùng chọn hình ảnh từ CKFinder

    });
</script>