<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shop;
use App\Models\Author;
use App\Models\Category;
use App\Models\Wrapper;
use App\Models\Number;


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
        $group = $request->input('group');
        $date = $request->input('date');
        $timeParam = Wrapper::where('id', $request->input('time'))->first()->param ?? '選択されていません';
        $numberValue = Number::where('id', $request->input('number'))->first()->value ?? '選択されていません';
        $wrappers = Wrapper::all();
        $numbers = Number::all();

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'image', 'city', 'shop', 'group', 'date', 'timeParam', 'numberValue', 'wrappers', 'numbers'));
    }

    public function shop_detail_two(Request $request)
    {
        $name = $request->input('name');
        $image = $request->input('image');
        $city = $request->input('city');
        $shop = $request->input('shop');
        $group = $request->input('group');
        $date = $request->input('date');
        $timeParam = Wrapper::where('id', $request->input('time'))->first()->param ?? '選択されていません';
        $numberValue = Number::where('id', $request->input('number'))->first()->value ?? '選択されていません';
        $wrappers = Wrapper::all();
        $numbers = Number::all();

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'image', 'city', 'shop', 'group', 'date', 'timeParam', 'numberValue', 'wrappers', 'numbers'));
    }

    public function my_page(Request $request)
    {
        $authors = Author::all();
        // リクエストからデータを取得
        $name = $request->input('name');
        $image = $request->input('image');
        $city = $request->input('city');
        $shop = $request->input('shop');
        $group = $request->input('group');
        $date = $request->input('date');
        $time = $request->input('time');
        $number = $request->input('number');

        // ビューにデータを渡す
        return view('my_page', compact('name', 'image', 'city', 'shop', 'group', 'authors', 'date', 'time', 'number'));
    }

    public function showShops()
    {
        $shops = Shop::all();
        return view('shops', compact('shops'));
    }
}
