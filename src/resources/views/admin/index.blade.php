@extends('admin_template')

@section('content')
    @foreach (['danger', 'warning', 'success', 'info'] as $key)
        @if(Session::has($key))
            <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
        @endif

    @endforeach
    <h2 class="alert alert-{{ $key }}"> {{"Welcome:  ".Auth::user()->name}}</h2>

@endsection