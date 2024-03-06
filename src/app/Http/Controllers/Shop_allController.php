<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Author;
use App\Models\Category;


class Shop_allController extends Controller
{
    public function search(Request $request)
    {
        $query = Author::query();
        $categories = Category::all();

        if ($request->filled('area')) {
            $query->where('gender', $request->input('area'));
        }

        if ($request->filled('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        $authors = $query->get();

        return view('shop_all', ['authors' => $authors, 'categories' => $categories]);
    }

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

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'image', 'city', 'shop'));
    }

    public function my_page(Request $request)
    {
        // リクエストからデータを取得
        $name = $request->input('name');
        $image = $request->input('image');
        $city = $request->input('city');
        $shop = $request->input('shop');

        // ビューにデータを渡す
        return view('my_page', compact('name', 'image', 'city', 'shop'));
    }

    public function showShops()
    {
        $shops = Shop::all();
        return view('shops', compact('shops'));
    }
}
