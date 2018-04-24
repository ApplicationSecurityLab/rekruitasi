<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all()->where('divisi', Auth::user()->divisi);
        $users = User::all()->where('isAdmin', 1);
        //$users = DB::select("SELECT * FROM users WHERE isAdmin=?", [1]);
        return view('home', ['users' => $users, 'posts' => $posts]);
    }

    public function createAdmin(Request $req) {
        /*$user = new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = $req->password;
        $user->divisi = $req->divisi;
        $user->jobdesk = $req->jobdesk;
        $user->isAdmin = $req->admin;
        $user->save;*/
        DB::insert("INSERT INTO users(name, email, password, divisi, jobdesk, isAdmin) VALUES(?, ?, ?, ?, ?, ?)", [
            $req->name, 
            $req->email, 
            Hash::make($req->password), 
            $req->divisi, 
            $req->jobdesk, 
            $req->admin
        ]);
        return redirect()->route('home');
    }

    public function deleteAdmin(Request $req) {

    }
}
