<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DivisiController extends Controller
{
    public function ids(Request $req) {
        $users = DB::select("SELECT * FROM users WHERE divisi=?", ["IDS"]);
        $divisi = DB::select("SELECT * FROM divisi WHERE id=?", [1]);
        return view('divisi/divisi_ids', ['users' => $users, 'divisi' => $divisi[0]]);
    }   
    
    public function voip(Request $req) {
        $users = DB::select("SELECT * FROM users WHERE divisi=?", ["VOIP"]);
        $divisi = DB::select("SELECT * FROM divisi WHERE id=?", [2]);
        return view('divisi/divisi_voip', ['users' => $users, 'divisi' => $divisi[0]]);
    }

    public function web(Request $req) {
        $users = DB::select("SELECT * FROM users WHERE divisi=?", ["WEB"]);
        $divisi = DB::select("SELECT * FROM divisi WHERE id=?", [3]);
        return view('divisi/divisi_web', ['users' => $users, 'divisi' => $divisi[0]]);
    }

    public function iv(Request $req) {
        $users = DB::select("SELECT * FROM users WHERE divisi=?", ["IV"]);
        $divisi = DB::select("SELECT * FROM divisi WHERE id=?", [4]);
        return view('divisi/divisi_iv', ['users' => $users, 'divisi' => $divisi[0]]);
    }

    public function gt(Request $req) {
        $users = DB::select("SELECT * FROM users WHERE divisi=?", ["Game Tech"]);
        $divisi = DB::select("SELECT * FROM divisi WHERE id=?", [5]);
        return view('divisi/divisi_game', ['users' => $users, 'divisi' => $divisi[0]]);
    }

    public function gis(Request $req) {
        $users = DB::select("SELECT * FROM users WHERE divisi=?", ["GIS"]);
        $divisi = DB::select("SELECT * FROM divisi WHERE id=?", [6]);
        return view('divisi/divisi_gis', ['users' => $users, 'divisi' => $divisi[0]]);
    }
    
    public function game(Request $req) {
        return view('divisi/game/WEBGL/index');
    }

    public function gis_map(Request $req) {
        return view('divisi/map/gis_map');
    }
}
