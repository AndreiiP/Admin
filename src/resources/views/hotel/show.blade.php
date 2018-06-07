@extends('admin_template')

@section('content')
    <div class="box box-primary">
        <div class="box-header with-border">
            <h3 class="box-title">Hotels</h3>
        </div>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
                <th width="1%">№</th>
                <th width="7%">Hotel</th>
                <th width="7%">Adress</th>
                <th width="10%">Description</th>
                <th width="1%">Photo</th>
            </tr>
            </thead>

            <tbody>
            @php $countHotel = 1; @endphp
            @php $countRoom = 1; @endphp

            <?php //xdebug_break(); ?>
            @for ($i = 0; $i < count($hotels); $i++)
                <tr style="cursor: pointer" class="showRoom" data-id="{{$hotels[$i]->id}}">
                    <th scope="row">{{$countHotel}}</th>
                    <td>{{$hotels[$i]->name}}</td>
                    <td>{{$hotels[$i]->address}}</td>
                    <td>{{$hotels[$i]->description}}</td>
                    <td><img src="{{URL::asset('img/'.$hotels[$i]->photo)}}" class="img-responsive"></td>
                </tr>
                @for ($y = 0; $y < count($rooms); $y++)
                    @if($hotels[$i]->id == $rooms[$y]->hotel_id)
                        @if($countRoom == 1)
                            <tr class="mo" style="display: none" data-hotel-id="{{$rooms[$y]->hotel_id}}">
                                <th scope="col"></th>
                                <th scope="col">Room</th>
                                <th scope="col">Price</th>
                                <th scope="col">Type</th>
                                <th scope="col">Photo</th>
                            </tr>
            @endif
            <tbody>
            <tr class="mo" style="display: none" data-hotel-id="{{$rooms[$y]->hotel_id}}">
                <th scope="row"></th>
                <td>{{$countRoom}}</td>
                <td>{{$rooms[$y]->price}}</td>
                <td>{{$rooms[$y]->type}}</td>
                <td><img src="{{URL::asset('img/'.$rooms[$y]->room)}}" class="img-responsive"></td>
            </tr>
            </tbody>
            @php $countRoom++; @endphp
            @endif
            @endfor
            @php $countRoom = 1; @endphp
            @php $countHotel++; @endphp
            @endfor
            </tbody>
        </table>
    </div>
    <?php echo $hotels->render(); ?>
@endsection