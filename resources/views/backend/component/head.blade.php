
<meta charset="utf-8">
   
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>INSPINIA | Dashboard</title>

    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Toastr style -->
    <link href="{{ asset('backend/css/plugins/toastr/toastr.min.css') }}" rel="stylesheet">

    <!-- Gritter -->
    <link href="{{ asset('backend/js/plugins/gritter/jquery.gritter.css') }}" rel="stylesheet">

    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/css/customize.css') }}" rel="stylesheet">
    <script src="{{ asset('backend/js/jquery-3.1.1.min.js') }}"></script>

    @if (isset($config['css']) && is_array($config['css']))
        @if(isset($config['css']))
            @foreach($config['css'] as $key => $val)
                <link href="{{ asset($val)}}" rel="stylesheet">
            @endforeach
        @endif
    @endif