<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;


class Shop_allController extends Controller
{
    public function shop_all(Request $request)
    {
        $name = $request->query('name');
        $image = $request->query('image');
        $city = $request->query('city');
        $shop = $request->query('shop');

        // ビューにデータを渡す
        return view('shop_all', compact('name', 'image', 'city', 'shop'));
    }

    public function shop_detail(Request $request)
    {
        $name = $request->input('name');
        $image = $request->input('image');
        $city = $request->input('city');
        $shop = $request->input('shop');

        $date = $request->input('date');
        $time = $request->input('time');
        $number = $request->input('number');

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'image', 'city', 'shop', 'date', 'time', 'number'));
    }

    public function my_page(Request $request)
    {
        $name = $request->input('name');
        $image = $request->input('image');
        $city = $request->input('city');
        $shop = $request->input('shop');

        $date = $request->input('date');
        $time = $request->input('time');
        $number = $request->input('number');


        // ビューにデータを渡す
        return view('my_page', compact('name', 'image', 'city', 'shop', 'date', 'time', 'number'));
    }

    public function showShops()
    {
        $shops = Shop::all();
        return view('shops', compact('shops'));
    }
}
