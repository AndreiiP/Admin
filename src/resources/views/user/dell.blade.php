@extends('admin_template')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Remove User</h3>
        </div>

        @foreach (['danger', 'warning', 'success', 'info'] as $key)
            @if(Session::has($key))
                <p class="alert alert-{{ $key }}">{{ Session::get($key) }}</p>
            @endif
        @endforeach

        <form method="POST" action="{{ url('/dell') }}">
            {{ csrf_field() }}

            <table class="table table-bordered" width="200px">
                <thead>
                <tr>
                    <th width="7%">Photo</th>
                    <th width="15%">Name</th>
                    <th width="">Role</th>
                    <th width="30%">Email</th>
                    <th width="5%">Remove</th>
                </tr>
                </thead>

                <tbody>
                @foreach ($users as $member)
                    <tr>
                        <th scope="row"><img src="{{URL::asset('img/'.$member->photo)}}" class="img-responsive"></th>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->role }}</td>
                        <td><a href="mailto:{{ $member->email }}" class="">{{ $member->email }}</a></td>
                        @if($member->deleted_at == NULL)
                            @if(Auth::user()->id != $member->id)
                                <td>
                                    <button type="submit" name="dell" value="{{ $member->id }}"
                                            class="btn btn-danger btn-centre">Remove
                                    </button>
                                </td>
                            @endif
                        @else
                            @if(Auth::user()->id != $member->id)
                                <td>
                                    <button type="submit" name="restore" value="{{ $member->id }}"
                                            class="btn btn-success btn-centre">Restore
                                    </button>
                                </td>
                            @endif
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>

        </form>
    </div>
@endsection