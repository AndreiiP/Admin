<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $id = Auth::user()->id;
        //$user['photo'] = User::where('id', '=', $id)->value('photo');
        //return view('admin.index', ['user' => $user]);

        return view('admin.index');
    }
}
