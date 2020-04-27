<?php

namespace App\Http\Controllers;

use App\WeddingBoard;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\View\View;

class WeddingController extends Controller
{
    /**
     * @return Factory|View
     */
    public function index() {
        return view('index');
    }

    /**
     * @return Application|Factory|View
     */
    public function after() {
        // photos
        $photos = File::allFiles(public_path('/images/after/photo'));
        $photos_info = [];
        foreach ($photos as $photo) {
            $photos_info[] = pathinfo($photo);
        }
        shuffle($photos_info);

        // thanks to list
        $thanks = explode("\n", Storage::get('visitor.txt'));

        return view ('after')
            ->with('photos_info', $photos_info)
            ->with('thanks', $thanks);
    }
}
