<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        return view('index');
    }
    function shop()
    {
        return view('shop');
    }
    function about_us()
    {
        return view('about_us');
    }
    function services()
    {
        return view('services');
    }
    function blog()
    {
        return view('blog');
    }
    function contact_us()
    {
        return view('contact_us');
    }
    function cart()
    {
        return view('cart');
    }
    function checkout()
    {
        return view('checkout');
    }
    function thankyou()
    {
        return view('thankyou');
    }
    function store(ContactRequest $request)
    {
        return view('thankyou');
    }
}
