<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Tour Management</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Tour</a>
      </li>

    </ol>
  </div>
  <div class="col-lg-2"></div>
</div>
<div class="ibox float-e-margins mt20">
  <div class="ibox-title">
    <h5>Tour List </h5>
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
    @include('backend.tour.component.filter')
    @include('backend.tour.component.listTours')


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

              <form id="deleteForm" method="POST" role="form">
                @csrf
                <div class="form-group">
                  <label>TOUR TITLE</label>
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
  <script>
    $(document).ready(function() {
    // Lắng nghe sự kiện click vào nút có class 'modal-form-01'
    $('.modal-form-02').on('click', function() {
      // Lấy giá trị từ các thuộc tính data-*
      const id = $(this).data('id');
      const title = $(this).data('title');

      // Lấy URL mẫu từ Blade và thay thế :id
      const route = "{{ route('admin.tour.delete', ['id' => '__ID__']) }}".replace('__ID__', id);

      // Cập nhật action cho form
      $('#deleteForm').attr('action', route);
      // Gán giá trị vào các input fields trong modal
      $('#modal-form-02 input[name="id"]').val(id);
      $('#modal-form-02 input[name="name"]').val(title);
    });
  });
  </script>