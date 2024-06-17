<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

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
        // $data = Contact::where('first_name', '=', 'AnasAshraf')->get();
        // dd($data);
        $contact = new Contact;
        $contact->first_name = 'YounesAnas';
        $contact->last_name = 'Naguib';
        $contact->email = 'Younes.a.ashraf@gmail.com';
        $contact->message = 'rfewrtggvasdgsagagsdg';
        $contact->save();
        dd('Done');
        return view('contact_us', compact('data'));
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
