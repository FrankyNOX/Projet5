<?php

namespace App\Http\Controllers;

use App\Notifications\UserConnect;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth','verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::all()->count();
        $enseignants = User::where('role','=' ,'4')->count();
        $etudiants = User::where('role','=','0')->count();
        return view('admin.index',compact('users','enseignants','etudiants'));
    }
}
