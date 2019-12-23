<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class LoadInitController extends Controller
{
    public $categories = '';

    public function __construct()
    {
        $this->categories = DB::select('select * from categories ');
    }


}
