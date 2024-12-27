<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>User Management</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>User</a>
            </li>

        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>
<div class="ibox float-e-margins mt20">
    <div class="ibox-title">
        <h5>Member List </h5>
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
        @include('backend.user.component.filter')
        @include('backend.user.component.table')


    </div>

</div>
</div>