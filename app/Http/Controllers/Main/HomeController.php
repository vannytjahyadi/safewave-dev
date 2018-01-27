<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Show application home
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function __invoke()
    {

        return view('main.home');

    }
}
