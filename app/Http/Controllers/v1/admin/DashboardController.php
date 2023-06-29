<?php

namespace App\Http\Controllers\v1\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\order;
use App\Models\item;
use App\Models\brand;
use App\Models\User;
use App\Models\Cat;

class DashboardController extends Controller
{
    public function index()
    {
        $cat = Cat::all()->sortBy('id');
        $order = Order::all()->sortBy('id');
        $item = Item::all()->sortBy('id');
        $user = User::all()->sortBy('id');
        $brand = Brand::all()->sortBy('id');

        return view('v1.admin.cat.index')->with(['cat'=> $cat, 'order' => $order, 'item' => $item, 'user' => $user, 'brand' => $brand]);
    }

}