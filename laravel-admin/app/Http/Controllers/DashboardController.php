<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.home', ['title' => 'Home']);
    }

    public function product()
    {
        return view('pages.product', ['title' => 'Product']);
    }

    public function service()
    {
        return view('pages.service', ['title' => 'Service']);
    }

    public function contact()
    {
        return view('pages.contact', ['title' => 'Contact']);
    }

    public function about()
    {
        return view('pages.about', ['title' => 'About']);
    }
}
