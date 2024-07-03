<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {

        $giochi = Game::all();

        $dati = [
            "gamesList" => $giochi
        ];

        return view("home", $dati);

    }
}
