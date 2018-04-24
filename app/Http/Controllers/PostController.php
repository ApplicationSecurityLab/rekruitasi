<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;

class PostController extends Controller
{
    public function index() {
        $ids_post = Post::all()->where('divisi', 'IDS');
        $voip_post = Post::all()->where('divisi', 'VOIP');
        $web_post = Post::all()->where('divisi', 'WEB');
        $iv_post = Post::all()->where('divisi', 'IV');
        $gis_post = Post::all()->where('divisi', 'GIS');
        $game_post = Post::all()->where('divisi', 'Game Tech');
        return view('post/index', [
            'ids' => $ids_post,
            'voip' => $voip_post,
            'web' => $web_post,
            'iv' => $iv_post,
            'gis' => $gis_post,
            'game' => $game_post
        ]);
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
