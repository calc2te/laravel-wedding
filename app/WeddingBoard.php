<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WeddingBoard extends Model
{
    protected $table = 'wedding_board';

    protected $primaryKey = 'no';

    public $timestamps = false;
}
