<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\ContactRequest;

class ShopController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function register(Request $request)
    {
        $contact = $request->only(['username', 'email', 'password']);
        return view('register', ['contact' => $contact]);
    }

    public function thanks(ContactRequest $request)
    {
        $contact = $request->only(['username', 'email', 'password']);
        Contact::create($contact);
        return view('thanks', ['contact' => $contact]);
    }

    public function login()
    {
        return view('login');
    }

}
