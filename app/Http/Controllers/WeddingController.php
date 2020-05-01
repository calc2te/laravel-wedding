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
            $photo_info = [];
            $photo_info += pathinfo($photo);
            $photo_info += getimagesize($photo);
            @$photo_info += exif_read_data($photo, 0, TRUE);

            $photo_info['size'] = $photo_info[0] . 'x' . $photo_info[1];
            if ($photos_info && isset($photo_info['IFD0']['Orientation'])) {
                if ($photo_info['IFD0']['Orientation'] == 6 ||
                    $photo_info['IFD0']['Orientation'] == 8) {
                    $photo_info['size'] = $photo_info[1] . 'x' . $photo_info[0];
                }
            }

            $photos_info[] = $photo_info;
        }
        shuffle($photos_info);

        // thanks to list
        $thanks = explode("\n", Storage::get('visitor.txt'));

        return view ('after')
            ->with('photos_info', $photos_info)
            ->with('thanks', $thanks);
    }
}
