<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>Create User</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>Create User</a>
            </li>
        </ol>
    </div>
    <div class="col-lg-2"></div>
</div>
@if($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('admin.user.destroy',$user->id)}}" method="POST" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Are you sure you want to delete this account?</div>
                    <div class="panel-description">
                        <p>Accounts cannot be restored once deleted.</p>
                        <p>
                        Think carefully before doing it.
                            
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="ibox">
                    <div class="ibox-content">
                        <div class="row mb10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="email"
                                        class="control-label text-right"
                                        >Email
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        class="form-control"
                                        placeholder="Enter email"
                                        value='{{ old("email", ($user->email) ?? " ") }}'
                                        autocomplete="off"
                                        readonly
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="fullname"
                                        class="control-label text-right"
                                        >Full name
                                        <span class="text-danger"
                                            >(*)</span
                                        ></label
                                    >
                                    <input
                                        type="text"
                                        name="fullname"
                                        class="form-control"
                                        value='{{old("fullname", ($user->fullname) ?? " ")}}'
                                        placeholder="Enter full name"
                                        autocomplete="off"
                                        readonly
                                        
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="row">
            <div class="col-lg-5"></div>
            <div class="col-lg-7">
                <div class="text-center">
                    <button class="btn btn-primary btn-danger" type="submit" name="send">
                        Delete User
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
