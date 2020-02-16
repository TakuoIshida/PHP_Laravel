<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index() {
        $view = view('test');
        $view->now_date =date('Y年m月d日　H時i分s秒');
        return $view;
    }
}
