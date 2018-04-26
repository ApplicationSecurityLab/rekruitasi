<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Assistant;

class AssistantController extends Controller
{
    public function listAssistant() {
        $ids_post = Assistant::all()->where('divisi', 'IDS');
        $voip_post = Assistant::all()->where('divisi', 'VOIP');
        $web_post = Assistant::all()->where('divisi', 'WEB');
        $iv_post = Assistant::all()->where('divisi', 'IV');
        $gis_post = Assistant::all()->where('divisi', 'GIS');
        $game_post = Assistant::all()->where('divisi', 'Game Tech');
        return view('assistant/listAssistant', [
            'ids' => $ids_post,
            'voip' => $voip_post,
            'web' => $web_post,
            'iv' => $iv_post,
            'gis' => $gis_post,
            'game' => $game_post
        ]);
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
