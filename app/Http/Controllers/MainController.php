<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;
use App\Models\Catgory;

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
        $catgories = Catgory::all();
        return view('contact_us', compact('catgories'));
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
        $validated = $request->validated();
        Contact::create($validated);
        return view('thankyou');
    }
    function contact_list()
    {
        $contacts = Contact::paginate(5);
        return view('contact_list', compact('contacts'));
    }
}
