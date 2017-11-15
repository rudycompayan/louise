@extends('layouts.pals')

@section('content')
    <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
            <div class="navbar-collapse collapse in">
                @include('layouts.common.navmobile')
                <ul class="nav navbar-nav navbar-left">
                    <li class="navbar-title"><strong>All Guest</strong></li>
                    {{--<li class="navbar-search hidden-sm">
                        <input id="searchTerm" type="text" placeholder="Search.." value="{{ old('search') }}">
                        <button class="btn-search" id="searchBtn"><i class="fa fa-search"></i></button>
                    </li>--}}
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @include('layouts.common.navbar')
                </ul>
            </div>
        </div>
    </nav>

    @include('layouts.common.flash')

    <div class="row">
        <div class="col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('admin.user.add') }}" class="btn btn-success">Add New</a>
                </div>
                <div class="card-body">
                    <table class="datatable table table-striped primary" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Phone Number</th>
                            <th>Gender</th>
                            <th>Max Add-on</th>
                            <th style="width: 150px;"></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $user->user_id }}</td>
                                <td>{{ $user->first_name }}</td>
                                <td>{{ $user->last_name }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->age }}</td>
                                <td>
                                    <input type="hidden" id="link{{ $user->user_id }}" value="{{ $user->fb_profile }}">
                                    <a href="{{ route('admin.user.edit', $user->user_id) }}"
                                       class="btn btn-success btn-xs cc_copy" id="{{ $user->user_id }}" title="Copy Link"><i class="fa fa-copy"></i></a>
                                    <a href="{{ route('admin.user.edit', $user->user_id) }}"
                                       class="btn btn-success btn-xs" title="Edit User"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="btn btn-danger btn-xs btnUserDelete"
                                       data-id="{{ $user->user_id }}"
                                       data-toggle="modal"
                                       data-target="#deleteModal" title="Delete User"><i class="fa fa-remove"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- Delete Modal -->
                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                         aria-labelledby="myModalLabel">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal"
                                            aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                    <h4 class="modal-title">Your are about to delete a user!</h4>
                                </div>
                                <form action="{{route('admin.user.delete')}}" method="post">
                                    <div class="modal-body">
                                        {{csrf_field()}}
                                        <input type="hidden" id="deleteId" name="id">
                                        <p>Are you sure you want to delete this user?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-sm btn-default"
                                                data-dismiss="modal">Close
                                        </button>
                                        <button type="submit" class="btn btn-sm btn-success">Proceed To Delete
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<form action="{{ route('admin.user.search') }}" id="searchForm" method="post">
    {{ csrf_field() }}
    <input type="hidden" id="searchInput">
</form>

@section('scripts')
    <script>
        $('.btnUserDelete').click(function (e) {
            e.preventDefault();
            $id = $(this).data('id');

            $('#deleteId').val($id);

        });

        $(".cc_copy").click(function(e) {
            e.preventDefault();
            var url = $("#link"+$(this).attr('id')).val();
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val(url).select();
            document.execCommand("copy");
            $temp.remove();
            $(this).children().removeClass('fa-copy');
            $(this).children().addClass('fa-check');
        });
    </script>
@endsection
