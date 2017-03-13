<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function test()
    {
        $pdo = DB::connection()->getPDO();
        dd($pdo);
    }

    public function login()
    {

    }
}
