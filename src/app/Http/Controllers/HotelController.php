<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Requests\CreateHotelRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Hotel;
use App\Models\Room;
use App\Models\UserHotel;
use Session;
use Cookie;
use Response;
use DB;

class HotelController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $user['photo'] = User::where('id', '=', $id)->value('photo');
            return view('hotel.add', $user);
        }
        return view('hotel.add');
    }

    public function add(CreateHotelRequest $request)
    {
        $req = $request->all();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo')->getClientOriginalName();
            $file_ext = explode('.', $photo);
            $file_ext = end($file_ext);
            $file_name_new_one = time(). '.' . $file_ext;
            $destination = base_path() . '/public/img';
            $request->file('photo')->move($destination, $file_name_new_one);
        }

        $hotel = Hotel::create([
            'name' =>  $req["name"],
            'address' =>  $req["address"],
            'description' =>  $req["description"],
            'photo' => $file_name_new_one,
        ]);
        $insertedId = $hotel->id;

        if ($request->hasFile('room')) {
            for($i = 0; $i < count($request['price']); $i++) {
                $photo = $request->file('room')[$i]->getClientOriginalName();
                $file_ext = explode('.', $photo);
                $file_ext = end($file_ext);
                $file_name_new = microtime() . '.' . $file_ext;
                $destination = base_path() . '/public/img';
                $request->file('room')[$i]->move($destination, $file_name_new);

                $room = new Room;
                $room->hotel_id = $insertedId;
                $room->price = $request['price'][$i];
                $room->type = $request['type'][$i];
                $room->room = $file_name_new;
                $room->save();
            }
        }
        $userHotel = new UserHotel();
        $userHotel->hotel_id = $insertedId;
        $userHotel->user_id = Auth::user()->id;
        $userHotel->save();

        Session::flash('success', ' Create is successful ');

        return view('hotel.add');
    }

    public function searchData(Request $request)
    {
        $term = $request->get('term');
        $data = DB::table('hotels')->where("name","LIKE","%$term%")->select('name as value')->get();
        return response()->json($data);
    }

    public function showHotels()
    {
        $hotels = DB::table('hotels')->orderBy('created_at', 'desc')->paginate(10);
        $rooms = DB::table('rooms')->get();

        return view('hotel.show', ['hotels' => $hotels, 'rooms' => $rooms]);
    }

    public function userHotels()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;

            $userHotelIds = UserHotel::where('user_id', $id)->get()->pluck('hotel_id');
            $hotels = Hotel::whereIn('id', $userHotelIds)->orderBy('created_at', 'desc')->paginate(10);

            $rooms = DB::table('rooms')->get();
            return view('hotel.user', ['hotels' => $hotels, 'rooms' => $rooms]);
        }
    }

    public function complite()
    {
       $hotel = $_POST['hotel'];
       $hotels = Hotel::where('name', '=', $hotel)->get();

       $userHotel = new UserHotel();
       $userHotel->hotel_id = $hotels[0]->id;
       $userHotel->user_id = Auth::user()->id;
       $userHotel->save();

       Session::flash('success', ' Hotel successfully created ');
    }
}
