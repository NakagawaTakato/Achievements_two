<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Author;
use App\Models\Category;


class Shop_allController extends Controller
{
    public function shop_all(Request $request)
    {
        $authors = Author::all();
        $categories = Category::all();

        // ビューにデータを渡す
        return view('shop_all', ['authors' => $authors, 'categories' => $categories]);
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
