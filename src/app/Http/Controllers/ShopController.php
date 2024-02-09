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

    public function thanks(Request $request)
    {
        return view('thanks');
    }

    public function menu_two(Request $request)
    {
        return view('menu_two');
    }

    public function shop_all()
    {
        return view('shop_all');
    }
}
