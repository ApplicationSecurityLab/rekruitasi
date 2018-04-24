<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index() {
        return view('post/index');
    }

    public function createPost(Request $req) {
        DB::insert("INSERT INTO posts(id_user, post_title, divisi, post_text) VALUES(?, ?, ?, ?)", [
            $req->id_user,
            $req->post_title,
            $req->divisi,
            $req->post_text
            ]);
        return redirect()->route('home');
    }

    public function deletePost(Request $req) {
        DB::delete("DELETE FROM posts WHERE id_post=?", [$req->id_post]);
        return redirect()->route('home');
    }
}
