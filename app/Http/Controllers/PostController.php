<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use DB;
use Storage;
class PostController extends Controller
{
    public function index() {
        $all = Post::all();
        $ids_post = Post::all()->where('divisi', 'IDS');
        $voip_post = Post::all()->where('divisi', 'VOIP');
        $web_post = Post::all()->where('divisi', 'WEB');
        $iv_post = Post::all()->where('divisi', 'IV');
        $gis_post = Post::all()->where('divisi', 'GIS');
        $game_post = Post::all()->where('divisi', 'Game Tech');
        return view('post/index', [
            'all' => $all,
            'ids' => $ids_post,
            'voip' => $voip_post,
            'web' => $web_post,
            'iv' => $iv_post,
            'gis' => $gis_post,
            'game' => $game_post
        ]);
    }

    public function createPost(Request $request) {
        $input = $request->all();
        $foto = $request->file('gambar');
        $foto_name = $foto->getClientOriginalName();
        $upload_path = 'uploadfoto';
        $request->file('gambar')->move($upload_path, $foto_name);
        $input['gambar'] = $foto_name;
        $post = Post::create($input);
        return redirect()->route('home');
    }

    public function updatePost(Post $posts, Request $request) {
        $input = $request->all();
        $id_post = $input['id_post'];
        $post_title = $input['post_title'];
        $post_text = $input['post_text'];
        $exist = Storage::disk('gambar')->exists($posts->gambar);
        if(isset($posts->gambar) && $exist)
        {
            $delete= Storage::disk('gambar')->delete($posts->gambar);
        }
        $foto = $request->file('gambar');
        $foto_name = $foto->getClientOriginalName();
        $upload_path = 'uploadfoto';
        $request->file('gambar')->move($upload_path, $foto_name);
        $input['gambar'] = $foto_name;
        Post::where('id_post',$id_post)->update(array(
            'post_title' => $post_title,
            'post_text' => $post_text,
            'gambar' => $foto_name
        ));
        return redirect()->route('home');
    }

    public function deletePost(Request $req) {
        DB::delete("DELETE FROM posts WHERE id_post=?", [$req->id_post]);
        return redirect()->route('home');
    }

    public function ShowPost(Request $req, $id)
    {
        $komen = DB::select("SELECT * FROM comments WHERE id_post=?", [$id]);
        $tampil = DB::select("SELECT * FROM posts WHERE id_post =?", [$id]);
        return view('post/show', ['tampil' => $tampil[0], 'comment' => $komen]);
    }

    public function postComment(Request $req) {
        DB::insert("INSERT INTO comments(id_post, id_user, isi_komentar) VALUES(?, ?, ?)", [$req->id_post, $req->id_user, $req->comment]);
        return redirect()->route('show.post', ['id' => $req->id_post]);
    }

    public function deleteComment(Request $req) {
        DB::delete("DELETE FROM comments WHERE id=?", [$req->id_hapus]);
        return redirect()->route('show.post', ['id' => $req->id_post]);
    }
}
