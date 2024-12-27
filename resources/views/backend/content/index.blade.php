<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Content Blog</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Content</a>
      </li>

    </ol>
  </div>
  <div class="col-lg-2"></div>
</div>
<div class="row">
  <div class="col-md-5 category">
    <div class="ibox float-e-margins mt20">
      <div class="ibox-title">
        <h5>Category List </h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-wrench"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
          </ul>
          <a class="close-link">
            <i class="fa fa-times"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        @if ($errors->has('name'))
        <div class="alert alert-danger">
          {{ $errors->first('name') }}
        </div>
        @endif
        <div class="filter-wrapper">
          <div class="uk-flex-space-between uk-flex-middle uk-flex">
            <div class="perpage">
              <select name="perpage" id="" class="form-control input-sm perpage filter mr10">
                @for($i=20;$i<=200;$i=$i+20) <option value='{{$i}}'>{{$i}} ban ghi</option>
                  @endfor
              </select>


            </div>
            <div class="action">
              <div class="uk-flex uk-flex-middle">
                <a data-toggle="modal" class="btn btn-primary" href="#modal-form"><i class="fa fa-plus mr5"></i>Add New</a>
              </div>
            </div>
          </div>
        </div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>

              <th>Name</th>
              <th class='text-center'>Operation</th>
            </tr>
          </thead>
          <tbody>
            @if(isset($category_post)&&is_object($category_post))
            @foreach($category_post as $category_post)

            <tr>
              <td>
                <div class="info-ID name">{{$category_post->id}}</div>
              </td>
              <td>
                <div class="info-user name">{{$category_post->name}}</div>
              </td>
              <td class='text-center '>

                <a data-toggle="modal" class="btn btn-success modal-form-01" href="#modal-form-01" data-id="{{ $category_post->id }}"
                  data-title="{{ $category_post->name }}"><i class="fa fa-edit"></i></a>
                <a data-toggle="modal" class="btn btn-danger modal-form-02" href="#modal-form-02" data-id="{{ $category_post->id }}"
                  data-title="{{ $category_post->name }}"><i class="fa fa-trash"></i></a>

              </td>
            </tr>

            @endforeach
            @endif
          </tbody>
        </table>




      </div>

    </div>
  </div>
  <div class="col-md-7 post">
    <div class="ibox float-e-margins mt20">
      <div class="ibox-title">
        <h5>Post List </h5>
        <div class="ibox-tools">
          <a class="collapse-link">
            <i class="fa fa-chevron-up"></i>
          </a>
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-wrench"></i>
          </a>
          <ul class="dropdown-menu dropdown-user">
            <li><a href="#">Config option 1</a>
            </li>
            <li><a href="#">Config option 2</a>
            </li>
          </ul>
          <a class="close-link">
            <i class="fa fa-times"></i>
          </a>
        </div>
      </div>
      <div class="ibox-content">
        @include('backend.content.component.filter')
        @include('backend.content.component.table')


      </div>

    </div>
  </div>
  <div id="modal-form" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col b-r">
              <h3 class="m-t-none m-b">Add new Category</h3>

              <p>Sign in today for more expirience.</p>

              <form action="{{route('admin.content.addCategory')}}" method="POST" role="form">
                @csrf
                <div class="form-group"><label>Category name</label> <input type="text" name="name" placeholder="Category name" class="form-control"></div>
                <div>
                  <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Add new</strong></button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-form-01" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col b-r">
              <h3 class="m-t-none m-b">Edit Category Name</h3>

              <p>Sign in today for more expirience.</p>

              <form action="{{route('admin.content.updateNameCategory')}}" method="POST" role="form">
                @csrf
                <div class="form-group">
                  <label>Category name</label>
                  <input type="text" name="name" placeholder="Category name" class="form-control">
                </div>
                <input type="text" name="id" style="display:none">
                <div>
                  <button class="btn btn-sm btn-primary pull-right m-t-n-xs" type="submit"><strong>Edit </strong></button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-form-02" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col b-r">
              <h3 class="m-t-none m-b">Are you sure you want to delete this category?</h3>

              <p>Deleted data cannot be recovered, think carefully before making your choice.</p>

              <form action="{{route('admin.content.deleteCategory')}}" method="POST" role="form">
                @csrf
                <div class="form-group">
                  <label>Category name</label>
                  <input type="text" name="name" placeholder="Category name" class="form-control">
                </div>
                <input type="text" name="id" style="display:none">
                <div>
                  <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="submit"><strong>Remove </strong></button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="modal-form-03" class="modal fade" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <div class="row">
            <div class="col b-r">
              <h3 class="m-t-none m-b">Are you sure you want to delete this Post?</h3>

              <p>Deleted data cannot be recovered, think carefully before making your choice.</p>

              <form id="deletePostForm" method="POST" role="form">
                @csrf
                <div class="form-group">
                  <label>Post title</label>
                  <input type="text" name="name" placeholder="Category name" class="form-control">
                </div>
                <input type="text" name="id" style="display:none">
                <div>
                  <button class="btn btn-sm btn-danger pull-right m-t-n-xs" type="submit"><strong>Remove </strong></button>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script>
  $(document).ready(function() {
    // Lắng nghe sự kiện click vào nút có class 'modal-form-01'
    $('.modal-form-01').on('click', function() {
      // Lấy giá trị từ các thuộc tính data-*
      const id = $(this).data('id');
      const title = $(this).data('title');

      // Gán giá trị vào các input fields trong modal
      $('#modal-form-01 input[name="id"]').val(id);
      $('#modal-form-01 input[name="name"]').val(title);
    });
  });
  $(document).ready(function() {
    // Lắng nghe sự kiện click vào nút có class 'modal-form-01'
    $('.modal-form-02').on('click', function() {
      // Lấy giá trị từ các thuộc tính data-*
      const id = $(this).data('id');
      const title = $(this).data('title');

      // Gán giá trị vào các input fields trong modal
      $('#modal-form-02 input[name="id"]').val(id);
      $('#modal-form-02 input[name="name"]').val(title);
    });
  });
  $(document).ready(function() {
    // Lắng nghe sự kiện click vào nút có class 'modal-form-01'
    $('.modal-form-03').on('click', function() {
      // Lấy giá trị từ các thuộc tính data-*
      const id = $(this).data('id');
      const title = $(this).data('title');

      // Lấy URL mẫu từ Blade và thay thế :id
      const route = "{{ route('admin.content.deletePost', ['id' => '__ID__']) }}".replace('__ID__', id);

      // Cập nhật action cho form
      $('#deletePostForm').attr('action', route);
      // Gán giá trị vào các input fields trong modal
      $('#modal-form-03 input[name="id"]').val(id);
      $('#modal-form-03 input[name="name"]').val(title);
    });
  });
</script>