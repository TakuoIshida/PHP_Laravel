<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    //
    public function index() {
        $view = view('test');
        $view->sub_title ='サブタイトル';
        return $view;
    }
}
