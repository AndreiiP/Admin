@extends('admin_template')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create User</h3>
        </div>
        <?php //xdebug_break(); ?>
        @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
        @endforeach
        <form method="POST" action="{{ url('/user') }}">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email Address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email"
                           value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('email') }}</strong>
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
                <div class="form-group">
                    <label for="exampleInputPassword1">Role</label>
                    <select name="role" class="form-control">
                        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>user</option>
                        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>admin</option>
                    </select>
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" style="width: 80px" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection