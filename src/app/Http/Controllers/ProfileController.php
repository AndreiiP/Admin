<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProfileRequest;
use App\Models\User;
use Session;


class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $userinfo = User::where('id', '=', $id)->get();
            $user['photo'] = User::where('id', '=', $id)->value('photo');
            //dd($userinfo);
            return view('profile.index', ['user' => $user, 'userinfo' => $userinfo]);
        }

        return view('profile.index');
    }
    public function edit(CreateProfileRequest $request)
    {
        if (Auth::check()) {
            $id = Auth::user()->id;

            if ($request->hasFile('photo')) {
                $photo = $request->file('photo')->getClientOriginalName();
                $file_ext = explode('.', $photo);
                $file_ext = end($file_ext);
                $file_name_new = time() . '.' . $file_ext;
                $destination = base_path() . '/public/img';
                $request->file('photo')->move($destination, $file_name_new);
            }

            $request = $request->all();
            $profile = User::find($id);
            if(isset($request["name"])){
                $profile->name = $request["name"];
            }
            if(isset($request["password"])){
                $profile->password = Hash::make($request['password']);
            }
            if(isset($request["photo"])){
                $profile->photo = $file_name_new;
            }
            $profile->save();
            Session::flash('success', ' edit is  successful ');
            $userinfo = User::where('id', '=', $id)->get();
            if (Auth::check()) {
                $id = Auth::user()->id;
                $user = User::where('id', '=', $id)->get();
                $user['photo'] = User::where('id', '=', $id)->value('photo');
                return view('profile.index', ['user' => $user, 'userinfo' => $userinfo]);
            }
            return view('profile.index');
        }
    }
}
