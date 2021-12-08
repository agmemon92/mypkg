<?php

use Illuminate\Support\Facades\Route;
use Renegade\Game\Controllers as Controller;

Route::get("/test", [Controller\GameController::class,"index"]);
