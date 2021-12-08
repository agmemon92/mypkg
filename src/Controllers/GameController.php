<?php

namespace Renegade\Game\Controllers;

use App\Http\Controllers\Controller;

class GameController extends Controller
{
    public function index()
    {
        return view("game::game");
    }
}
