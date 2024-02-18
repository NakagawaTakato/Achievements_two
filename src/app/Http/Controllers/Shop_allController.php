<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


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

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'image', 'city', 'shop'));
    }

    public function my_page(Request $request)
    {
        $name = $request->input('name');
        $image = $request->input('image');
        $city = $request->input('city');
        $shop = $request->input('shop');

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'image', 'city', 'shop'));
    }
}
