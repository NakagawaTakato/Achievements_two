<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Shop_allController extends Controller
{
    public function shop_all(Request $request)
    {
        // GETリクエストからデータを取得
        $name = $request->query('name');
        $city = $request->query('city');
        $shop = $request->query('shop');

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'city', 'shop'));
    }

    public function shop_detail(Request $request)
    {
        // POSTリクエストからデータを取得（この例ではGETと同じビューを使用）
        $name = $request->input('name');
        $city = $request->input('city');
        $shop = $request->input('shop');

        // ビューにデータを渡す
        return view('shop_detail', compact('name', 'city', 'shop'));
    }
}
