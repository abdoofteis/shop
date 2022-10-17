<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        return view('home');

    }
    public function index()
    {
        return view('page');

    }
    public function viewproduct()
    {
        return view('viewproduct');

    }
    public function addproduct()
    {
        return view('addproduct');

    }
    public function addcategory()
    {
        return view('category');

    }

    public function allcategory()
    {
        return view('allcategory');
    }

    public function noteproduct()
    {
        return view('noteproduct');
    }

    public function allorders()
    {
        return view('allorders');
    }
}
