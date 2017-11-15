@extends('layouts.pals')

@section('content')
    <nav class="navbar navbar-default" id="navbar">
        <div class="container-fluid">
            <div class="navbar-collapse collapse in">
                @include('layouts.common.navmobile')
                <ul class="nav navbar-nav navbar-left">
                    <li class="navbar-title"><strong>Edit User</strong></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    @include('layouts.common.navbar')
                </ul>
            </div>
        </div>
    </nav>

    @include('layouts.common.flash')

    <div class="row">
        {{--<div class="col-sm-4 col-xs-12">
            <div class="card">
                <div class="card-header">
                    Profile Image
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="thumbnail">
                                <img class="profile-img" style="width: 60%;height: 60%;border-radius: 50%;"
                                     src="{{ $user->getAvatar() }}">
                                <div class="caption">
                                    <div>
                                        <button class="btn btn-default" id="uploadAvatar"
                                                data-toggle="modal" data-target="#modalUploadAvatar">Change
                                        </button>
                                    </div>
                                </div>

                                <!-- Upload Modal -->
                                <div class="modal fade" id="modalUploadAvatar" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title">Update Your Profile Image</h4>
                                            </div>
                                            <form action="{{ route('admin.user.avatar.update', [$user->id]) }}" method="post"
                                                  enctype="multipart/form-data">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="id" value="{{ $user->id }}">
                                                <input type="hidden" name="isAvatar" value="1">
                                                <div class="modal-body">
                                                    <input type="file" id="avatarUpload"
                                                           name="avatar" class="file form-control" multiple
                                                           data-min-file-count="1">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-sm btn-danger"
                                                            data-dismiss="modal">Close
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
            </div>
        </div>
--}}

        <div class="col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    Profile Information
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Profile Form -->
                        <form class="form form-horizontal" action="{{ route('admin.user.profile.update', [$user->user_id]) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->user_id }}">
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">First Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="first-name" name="first_name"
                                                   value="{{ $user->first_name }}"
                                                   class="form-control"
                                                   data-validation="length"
                                                   data-validation-length="1-20"
                                                   data-validation-error-msg="First name is required."
                                            >
                                            @if ($errors->has('first_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('first_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Last Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="last-name" name="last_name"
                                                   value="{{ $user->last_name }}"
                                                   class="form-control"
                                                   data-validation="length"
                                                   data-validation-length="1-20"
                                                   data-validation-error-msg="Last name is required."
                                            >
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    {{--<div class="form-group {{ $errors->has('fb_profile') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Facebook Profile</label>
                                        <div class="col-md-9">
                                            <input type="text" id="fb_profile" name="fb_profile"
                                                   value="{{ $user->profile->fb_profile }}"
                                                   class="form-control"
                                            >
                                            @if ($errors->has('last_name'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('last_name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>--}}
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Phone Number</label>
                                            <p class="control-label-help">( Mobile or Home Number)</p>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" id="phone" name="phone"
                                                   value="{{ $user->phone }}"
                                                   class="form-control" data-mask="(000) 000-00000"
                                                   data-validation="length"
                                                   data-validation-length="1-20"
                                                   data-validation-error-msg="Phone number is required."
                                            >
                                        </div>
                                    </div>
                                    {{--<div class="form-group {{ $errors->has('age') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Age</label>
                                        <div class="col-md-9">
                                            <select name="age" id="age" class="form-control select2"
                                                    data-validation="length"
                                                    data-validation-length="1-3"
                                                    data-validation-error-msg="Age is required."
                                            >
                                                <option value="">- Select Age -</option>
                                                @for($i = 18; $i <= 80; $i++)
                                                    <option value="{{ $i }}"
                                                            @if($user->profile->age == $i) selected @endif>{{ $i }}</option>
                                                @endfor
                                            </select>
                                        </div>
                                    </div>--}}
                                    <div class="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Gender</label>
                                        <div class="col-md-9">
                                            <div class="radio radio-inline">
                                                <input type="radio" name=gender id="radio10" value="male" @if($user->gender == 'male') checked @endif>
                                                <label for="radio10">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="radio radio-inline">
                                                <input type="radio" name="gender" id="radio11" value="female" @if($user->gender == 'female') checked @endif>
                                                <label for="radio11">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Add-on Guest</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text"
                                                   name ="age"
                                                   class="form-control"
                                                   data-validation="length"
                                                   data-validation-length="1-20"
                                                   value="{{ $user->age }}"
                                            >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label class="control-label">Invitation URL</label>
                                        </div>
                                        <div class="col-md-9">
                                            <input type="text" name="fb_profile"
                                                   readonly
                                                   class="form-control"
                                                   value="{{ $user->fb_profile }}"
                                            >
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer">
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Update Profile</button>
                                        <div class="pull-right">
                                            <a href="{{ route('admin.user.add') }}" class="btn btn-success">Add New Guest</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        {{--<div class="col-sm-4 col-xs-12">

        </div>
        <div class="col-sm-8 col-xs-12">
            <div class="card">
                <div class="card-header">
                    Change Login Password
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Profile Form -->
                        <form class="form form-horizontal" action="{{ route('admin.user.password.update', [$user->id]) }} "
                        method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->id }}">
                            <div class="section">
                                <div class="section-body">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Username</label>
                                        <div class="col-md-9">
                                            <input type="text" id="username" name=""
                                                   value="{{ $user->username }}"
                                                   class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Email Address</label>
                                        <div class="col-md-9">
                                            <input type="text" id="email" name=""
                                                   value="{{ $user->email }}"
                                                   class="form-control" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('role') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Role</label>
                                        <div class="col-md-9">
                                            <select name="role" id="role" class="form-control select2"
                                                    data-validation="length"
                                                    data-validation-length="1-20"
                                                    data-validation-error-msg="Select a user role."
                                            >
                                                <option value="">- Select Role -</option>
                                                <option value="administrator" @if($user->role == 'administrator') selected @endif>Administrator</option>
                                                <option value="guest">Guest</option>
                                            </select>
                                            @if ($errors->has('role'))
                                                <span
                                                    class="help-block"><strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <label class="col-md-3 control-label">Password</label>
                                        <div class="col-md-9">
                                            <input type="password" id="password" name="password"
                                                   value=""
                                                   class="form-control"
                                                   data-validation="length" data-validation-length="min6"
                                                   data-validation-error-msg="Please enter at least 6 characters."
                                            >
                                            @if ($errors->has('password'))
                                                <span
                                                    class="help-block"><strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Confirm Password</label>
                                        <div class="col-md-9">
                                            <input type="password" id="password-confirm" name="password_confirmation"
                                                   value=""
                                                   class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-footer">
                                <div class="form-group">
                                    <div class="col-md-9 col-md-offset-3">
                                        <button type="submit" class="btn btn-success">Change Password</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>--}}
    </div>
@endsection

@section('scripts')
    <script>
        $.validate({
            modules : 'location, date, security, file'
        });
        $("#avatarUpload").fileinput({showCaption: false, allowedFileExtensions: ['jpg', 'png', 'gif']});
    </script>
@endsection