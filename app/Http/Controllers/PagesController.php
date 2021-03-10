<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home()
    {
        $this->data['title'] = 'Home';
        return view('home.index', $this->data);
    }
    public function about()
    {
        $this->data['title'] = 'About';
        $this->data['name'] = 'Alka';
        return view('home.about', $this->data);
    }
}
