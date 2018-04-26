<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AssistantController extends Controller
{
    public function listAssistant() {
        return view();
    }

    public function listCAssistant() {
        $ids_post = User::all()->where('divisi', 'IDS');
        $voip_post = User::all()->where('divisi', 'VOIP');
        $web_post = User::all()->where('divisi', 'WEB');
        $iv_post = User::all()->where('divisi', 'IV');
        $gis_post = User::all()->where('divisi', 'GIS');
        $game_post = User::all()->where('divisi', 'Game Tech');
        return view('assistant/listCalon', [
            'ids' => $ids_post,
            'voip' => $voip_post,
            'web' => $web_post,
            'iv' => $iv_post,
            'gis' => $gis_post,
            'game' => $game_post
        ]);
    }
}
