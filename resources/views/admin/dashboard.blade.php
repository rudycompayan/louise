@extends('layouts.pals')

@section('content')
    <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
            <div class="navbar-collapse collapse in">
                @include('layouts.common.navmobile')
                <ul class="nav navbar-nav navbar-left">
                    <li class="navbar-title"><strong>Dashboard</strong></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @include('layouts.common.navbar')
                </ul>
            </div>
        </div>
    </nav>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-green-light" href="{{ route('admin.user.index') }}">
                <div class="card-body">
                    <i class="icon fa fa-envelope fa-4x"></i>
                    <div class="content">
                        <div class="title">Total Invition Sent</div>
                        <div class="value"><span class="sign">&raquo;</span>{{ $totalinvitation }}</div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-blue-light" href="{{ route('admin.user.confirm') }}">
                <div class="card-body">
                    <i class="icon fa fa-check-square-o fa-4x"></i>
                    <div class="content">
                        <div class="title">Total Confirmed</div>
                        <div class="value"><span class="sign">&raquo;</span>{{ $going }}</div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
            <a class="card card-banner card-yellow-light" href="{{ route('admin.user.decline') }}">
                <div class="card-body">
                    <i class="icon fa fa-times fa-4x"></i>
                    <div class="content">
                        <div class="title">Total Decline</div>
                        <div class="value"><span class="sign">&raquo;</span>{{ $decline }}</div>
                    </div>
                </div>
            </a>

        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="/js/loader.js"></script>
    <script>

        // Load Charts and the corechart package.
        google.charts.load('current', {'packages': ['corechart']});

        google.charts.setOnLoadCallback(drawRegisteredUsers);

        // Callback that draws the pie chart for drinks and sales.
        function drawRegisteredUsers() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Day');
            data.addColumn('number', 'Sale');
            data.addColumn({type: 'string', role: 'annotation'});
            data.addRows({!! $salesToday !!});

            var options = {
                //title: 'Daily Total Sales',
                colors: ['#29c75f'],
                vAxis: {minValue: 0, title: 'Dollars (USD)',  textPosition: 'none'}
            };

            var chart = new google.visualization.LineChart(document.getElementById('registered-users'));
            chart.draw(data, options);
        }

        $(window).resize(function(){
            drawRegisteredUsers();
        });


    </script>
@endsection