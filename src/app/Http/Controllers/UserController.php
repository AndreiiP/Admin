<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\CreateUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Session;
use Gate;



class UserController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $user['photo'] = User::where('id', '=', $id)->value('photo');
            return view('user.add', ['user' => $user]);
        }
        return view('user.add');
    }

    public function store(CreateUserRequest $request)
    {
        $request = $request->all();
        $user = User::create([
            'name' =>  $request["name"],
            'email' =>  $request["email"],
            'password' => Hash::make($request['password']),
            'role' => $request["role"],
        ]);
        $email = $request["email"];
        $data = array('password'=>$request['password'],'email' => $request['email']);

        Mail::send('mail.mail', $data, function($message) use ($email) {
            $message->to($email, $email)->subject('Login and Password');
            $message->from('perebeynos_as@groupbwt.com','perebeynos@gmail.com');
        });
        Session::flash('success', ' registration is successful ');
        return view('user.add');
    }

    public function dell(Request $request)
    {
        $request = $request->all();

        $id = Auth::user()->id;
        if(isset($request['dell'])){
            $user = User::find($request['dell']);
            $user->delete();
        }
        if(isset($request['restore'])){
            User::withTrashed()->find($request['restore'])->restore();
        }

        $users = DB::table('users')->get();

        return view('user.dell', ['users' => $users]);
    }
}
