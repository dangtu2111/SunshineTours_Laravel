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
@php
    $url = $config['method'] == 'create' 
        ? route('admin.user.store') 
        : route('admin.user.update', $user->id);

    // Chỉ xử lý địa chỉ nếu là phương thức 'update'
    if ($config['method'] != 'create' && !empty($user->address)) {
        $parts = explode(",", $user->address);

        $street = trim($parts[0]); // Tách phần street
        $ward = isset($parts[1]) ? trim($parts[1]) : null; // Tách phần ward
        $district = isset($parts[2]) ? trim($parts[2]) : null; // Tách phần district
        $province = isset($parts[3]) ? trim($parts[3]) : null; // Tách phần province
        $country = isset($parts[4]) ? trim($parts[4]) : null; // Tách phần country
    } else {
        $street = $ward = $district = $province = $country = null;
    }
@endphp

<form action="{{$url}}" method="POST" class="box">
    @csrf
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">General information</div>
                    <div class="panel-description">
                        <p>Enter general user information</p>
                        <p>
                            Note that fields marked with an
                            <span class="text-danger">(*)</span> ​​are .
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
                                        
                                    />
                                </div>
                            </div>
                        </div>
                        @php
                        $role_id=[
                            '[Select group members]',
                            'Administrator',
                            'Contributor',
                            'User',
                            ];
                        
                        @endphp    
                        <div class="row mb10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="role_id"
                                        class="control-label text-left"
                                        >Group members
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <select
                                        name="role_id"
                                        id="role_id"
                                        class="form-control"
                                        
                                    >
                                    @foreach($role_id as $key => $item)
                                        <option value="{{ $key }}" 
                                            {{ $key == old('role_id', default: isset($user->role_id) ? $user->role_id : '') ? 'selected' : '' }}>
                                            {{ $item }}
                                        </option>
                                    @endforeach

                                        
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="birthday"
                                        class="control-label text-right"
                                        >birthday</label
                                    >
                                    <input
                                        type="date"
                                        name="birthday"
                                        value='{{ old("birthday", ($user->birthday) ?? " ") }}'

                                        class="form-control"
                                        autocomplete="off"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row mb10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="password"
                                        class="control-label text-right"

                                        >Password
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="password"
                                        name="password"
                                        class="form-control"
                                        value='{{old("password")}}'

                                        placeholder="Enter password"
                                        autocomplete="off"
                                        
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="re_password"
                                        class="control-label text-right"
                                        >Re-enter password
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="password"
                                        name="re_password"
                                        class="form-control"
                                        value='{{old("re_password")}}'

                                        placeholder="Re-enter password"
                                        autocomplete="off"
                                        
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row mb10">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label
                                        for="avatar"
                                        class="control-label text-right"
                                        >Avatar
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                            <a
                                                id="lfm"
                                                data-input="thumbnail"
                                                data-preview="holder"
                                                class="btn btn-primary"
                                            >
                                                <i class="fa fa-picture-o"></i>
                                                Choose
                                            </a>
                                        </span>
                                        <input
                                            id="thumbnail"
                                            class="form-control"
                                            type="text"
                                            value='{{old("avatar", ($user->avatar) ?? " ")}}'
                                            name="avatar"
                                        />
                                    </div>
                                    <div
                                        id="holder"
                                        style="
                                            margin-top: 15px;
                                            max-height: 100px;
                                        "
                                    ></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr />
        <div class="row">
            <div class="col-lg-5">
                <div class="panel-head">
                    <div class="panel-title">Address Information</div>
                    <div class="panel-description">
                        <p>Enter user address details</p>
                        <p>
                            Note that fields marked with an
                            <span class="text-danger">(*)</span> ​​are .
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
                                        for="Country"
                                        class="control-label text-right"
                                        >Country
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="Country"
                                        class="form-control"
                                        value='{{old("Country", ($country) ?? " ")}}'
                                        placeholder="Enter country"
                                        autocomplete="off"
                                        
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="Province"
                                        class="control-label text-right"
                                        >Province/City</label
                                    >
                                    <input
                                        type="text"
                                        name="Province"
                                        value='{{old("Province", ($province) ?? " ")}}'

                                        class="form-control"
                                        placeholder="Enter province or city"
                                        autocomplete="off"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row mb10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="Distric"
                                        class="control-label text-left"
                                        >District
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="District"
                                        value='{{old("District", ($district) ?? " ")}}'
                                        
                                        class="form-control"
                                        placeholder="Enter district"
                                        autocomplete="off"
                                        
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="Ward"
                                        class="control-label text-right"
                                        >Ward</label
                                    >
                                    <input
                                        type="text"
                                        name="Ward"
                                        value='{{old("Ward", ($ward) ?? " ")}}'


                                        class="form-control"
                                        placeholder="Enter ward"
                                        autocomplete="off"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row mb10">
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="Street"
                                        class="control-label text-right"
                                        >Street
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="Street"
                                        value='{{old("Street", ($street) ?? " ")}}'
                                        

                                        class="form-control"
                                        placeholder="Enter street"
                                        autocomplete="off"
                                        
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-row">
                                    <label
                                        for="phone"
                                        class="control-label text-right"
                                        >Phone Number
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="phone_number"
                                        class="form-control"
                                        value='{{old("phone_number", ($user->phone_number) ?? " ")}}'
                                        
                                        placeholder="Enter phone number"
                                        autocomplete="off"
                                        
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row mb10">
                            <div class="col-lg-12">
                                <div class="form-row">
                                    <label
                                        for="Note"
                                        class="control-label text-right"
                                        >Note
                                        <span class="text-danger">(*)</span>
                                    </label>
                                    <input
                                        type="text"
                                        name="Note"
                                        class="form-control"
                                        value="{{old('Note')}}"
                                        
                                        placeholder="Enter any notes"
                                        autocomplete="off"
                                        
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
                    <button class="btn btn-primary" type="submit" name="send">
                        Submit
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    $(document).ready(function() {
            $('#lfm').filemanager('image');  // Mở CKFinder để chọn hình ảnh
        });
</script>
