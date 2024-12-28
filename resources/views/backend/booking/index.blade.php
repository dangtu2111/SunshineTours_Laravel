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

          <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
            <thead>
              <tr>

                <th data-toggle="true">Info Tour </th>
                <th data-hide="phone">Service package type</th>
                <th data-hide="all">Description</th>
                <th data-hide="phone">Price</th>
                <th data-hide="phone,tablet">Number of guests</th>
                <th data-hide="phone">Status</th>
                <th class="text-right" data-sort-ignore="true">Action</th>

              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                <a href="project_detail.html">Contract with Zender Company</a>
                                            <br>
                                            <small>Date 14.08.2014</small>
                </td>
                <td>
                  Model 1
                </td>
                <td>
                  It is a long established fact that a reader will be distracted by the readable
                  content of a page when looking at its layout. The point of using Lorem Ipsum is
                  that it has a more-or-less normal distribution of letters, as opposed to using
                  'Content here, content here', making it look like readable English.
                </td>
                <td>
                  $50.00
                </td>
                <td>
                  1000
                </td>
                <td>
                  <span class="label label-primary">Enable</span>
                </td>
                <td class="text-right">
                  <div class="btn-group">
                    <button class="btn-white btn btn-xs">View</button>
                    <button class="btn-white btn btn-xs">Edit</button>
                  </div>
                </td>
              </tr>
              



            </tbody>
            <tfoot>
              <tr>
                <td colspan="6">
                  <ul class="pagination pull-right"></ul>
                </td>
              </tr>
            </tfoot>
          </table>

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