@extends('admin_template')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Create Hotel</h3>
        </div>
        <?php //xdebug_break(); ?>
        @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
        @endforeach
        <form method="POST" action="{{ url('/hotel') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="box-body">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="hidden" value="{{ old('roomss') }}" name="roomss" id="roomss">
                    <input type="name" name="name" id="searchString" class="form-control" placeholder="Name"
                           value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Address</label>
                    <input type="address" name="address" class="form-control" placeholder="Address"
                           value="{{ old('address') }}">
                    @if ($errors->has('address'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Description</label>
                    <input type="description" name="description" class="form-control" placeholder="Description"
                           value="{{ old('description') }}">
                    @if ($errors->has('description'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('description') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Main photo hotel</label>
                    <input name="photo" type="file">
                    @if ($errors->has('photo'))
                        <span class="invalid-feedback">
                            <strong class="error">{{ $errors->first('photo') }}</strong>
                        </span>
                    @endif
                </div>

                <h3>Rooms</h3>

                <ul class="nav nav-tabs castom-nav">
                    <li><a href="#" id="dell"><i class="glyphicon glyphicon-minus-sign text-danger"></i></a></li>
                    <li><a href="#" id="add"><i class="glyphicon glyphicon-plus-sign"></i></a></li>
                    <li class="active"><a href="#menu1" data-toggle="tab">Room 1</a></li>
                    @for ($c = 2, $i = 0; $i < old('roomss'); $i++, $c++)
                        <li class=""><a href="#menu{{$c}}" data-toggle="tab">Room {{$c}}</a></li>
                    @endfor
                </ul>

                <div class="tab-content">
                    <div class="active tab-pane " id="menu1">
                        <br>
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="number" class="form-control" name="price[]" placeholder="Price"
                                   value="{{ old('price.0') }}">
                            @if ($errors->has('price.0'))
                                <span class="invalid-feedback">
                                        <strong class="error">{{ $errors->first() }}</strong>
                                    </span>
                            @endif

                        </div>
                        <div class="form-group">
                            <label for="type">Type</label>
                            <select class="form-control" name="type[]">
                                <option {{ old('type.0') == 'Single' ? 'selected' : '' }}>Single</option>
                                <option {{ old('type.0') == 'Double' ? 'selected' : '' }}>Double</option>
                                <option {{ old('type.0') == 'Triple' ? 'selected' : '' }}>Triple</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="name">Photo room</label>
                            <input name="room[]" type="file" multiple>

                            @if ($errors->has("room.0"))
                                <span class="invalid-feedback">
                                       <strong class="error">{{ $errors->first() }}</strong>
                                   </span>
                            @endif
                        </div>
                    </div>
                    @for ($z = 1, $c = 2, $i = 0; $i < old('roomss'); $i++, $c++, $z++)
                        <div class="tab-pane fade mm" id="menu{{$c}}">
                            <br>
                            <div class="form-group tab-pane">
                                <label for="name">Price</label>
                                <input type="number" class="form-control" name="price[]" placeholder="Price"
                                       value="{{ old("price.$z") }}">
                                @if ($errors->has("price.$z"))
                                    <span class="invalid-feedback">
                                        <strong class="error">{{ $errors->first() }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="type">Type</label>
                                <select class="form-control" name="type[]">
                                    <option {{ old("type.$z") == 'Single' ? 'selected' : '' }}>Single</option>
                                    <option {{ old("type.$z") == 'Double' ? 'selected' : '' }}>Double</option>
                                    <option {{ old("type.$z") == 'Triple' ? 'selected' : '' }}>Triple</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="name">Photo room</label>
                                <input name="room[]" type="file">
                                @if ($errors->has("room.$z"))
                                    <span class="invalid-feedback">
                                        <strong class="error">{{ $errors->first() }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                    @endfor
                </div>
            </div>
            <div class="box-footer">
                <button type="submit" style="width: 80px" class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
@endsection


