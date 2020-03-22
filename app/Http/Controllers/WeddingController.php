<?php

namespace App\Http\Controllers;

use App\WeddingBoard;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class WeddingController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index() {
        return view('index');
    }
}
