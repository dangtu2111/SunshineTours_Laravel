<link href="{{asset('backend/css/plugins/footable/footable.core.css')}}" rel="stylesheet">
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-lg-10">
    <h2>Booking </h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Home</a>
      </li>
      <li>
        <a>Booking</a>
      </li>

    </ol>
  </div>
  <div class="col-lg-2"></div>
</div>
<div class="wrapper wrapper-content animated fadeInRight ecommerce">


  <div class="ibox-content m-b-sm border-bottom">
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="product_name">Info Tour </label>
          <input type="text" id="product_name" name="product_name" value="" placeholder="Info Tour " class="form-control">
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <label class="control-label" for="price">Price</label>
          <input type="text" id="price" name="price" value="" placeholder="Price" class="form-control">
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <label class="control-label" for="quantity">Number of guests</label>
          <input type="text" id="quantity" name="quantity" value="" placeholder="Quantity" class="form-control">
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label class="control-label" for="status">Status</label>
          <select name="status" id="status" class="form-control">
            <option value="1" selected>Enabled</option>
            <option value="0">Disabled</option>
          </select>
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-lg-12">
      <div class="ibox">
        <div class="ibox-content">

          @include('backend/booking/component/table')

        </div>
      </div>
    </div>
  </div>


</div>
<script src="{{asset('backend/js/plugins/footable/footable.all.min.js')}}"></script>
<script>
  $(document).ready(function() {

    $('.footable').footable();

  });
</script>