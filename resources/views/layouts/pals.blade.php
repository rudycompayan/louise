<!DOCTYPE html>
<html>
<head>
    <title>Louise & April Admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/vendor.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/flat-admin.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/custom.css') }}">

    <!-- Theme -->
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/theme/blue-sky.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/theme/blue.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/theme/red.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/theme/yellow.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/fileinput.css') }}" media="all"/>
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/bootstrap-datetimepicker.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ \Illuminate\Support\Facades\URL::asset('/assets/css/jquery.form-validator.min.css') }}"/>
    @yield('styles')

</head>
<body>
<div class="app app-default">

    <aside class="app-sidebar" id="sidebar">
        <div class="sidebar-header">
            <a class="sidebar-brand" href="#"><span class="highlight">Administrator</span></a>
            <button type="button" class="sidebar-toggle">
                <i class="fa fa-times"></i>
            </button>
        </div>
        <div class="sidebar-menu">
            @if (Auth::user()->role == 'administrator')
                @include('layouts.admin.sidebar')
            @endif
        </div>
    </aside>

    <div class="app-container">

        @yield('content')

        @include('layouts.common.footer')

    </div>

</div>

<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/vendor.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/app.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/fileinput.min.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/sheepit.min.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/jquery.mask.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/bootstrap-datetimepicker.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/jquery.form-validator.min.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/date.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/file.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/sanitize.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/location.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/security.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/validator/sepa.js') }}"></script>
<script type="text/javascript" src="{{ \Illuminate\Support\Facades\URL::asset('/assets/js/loadingoverlay.min.js') }}"></script>
<script type="text/javascript"
        src="http://maps.google.com/maps/api/js?key=AIzaSyBy9ai0lR6qcKPtUyDSgGixQilvG11HsXs"></script>

@yield('scripts')
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('div.alert').not('.alert-important').delay(3000).fadeOut(450);
</script>
</body>
</html>