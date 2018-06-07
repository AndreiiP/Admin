@extends('admin_template')

@section('content')
    <?php //xdebug_break(); ?>
    {{--<div class="box box-primary">--}}

    <div class="col-md-3">
        <div class="box box-primary">
            <div class="box-body box-profile">
                <img class="profile-user-img img-responsive img-circle" src="{{URL::asset('img/'.$user['photo'])}}">

                <h3 class="profile-username text-center">{{$userinfo["0"]->name}}</h3>
                <br>
                <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                        <b>Email</b> <a class="pull-right">{{$userinfo["0"]->email}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Role</b> <a class="pull-right">{{$userinfo["0"]->role}}</a>
                    </li>
                    <li class="list-group-item">
                        <b>Created</b> <a class="pull-right">{{$userinfo["0"]->created_at}}</a>
                    </li>
                </ul>


            </div>

        </div>
    </div>
    <div class="col-md-9">
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">User Profile</h3>
            </div>
            @php isset($user['photo'])? $user['photo'] : $user['photo'] = 'one.jpg' @endphp

            @foreach (['danger', 'warning', 'success', 'info'] as $key)
                @if(Session::has($key))
                    <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
                @endif
            @endforeach
            <?php //xdebug_break(); ?>

            <form method="POST" action="{{ url('/profile') }}" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="box-body">

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" name="name" class="form-control" placeholder="Name">
                        @if ($errors->has('name'))
                            <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="******">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" placeholder="******"
                               name="password_confirmation">
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                        @endif
                    </div>
                    <input type="file" class="form-control-file input" id="photo" name="photo"><br>
                    @if ($errors->has('photo'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="box-footer">
                    <button type="submit" style="width: 80px" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>


@endsection