<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Cart;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function my_home() {
        $data = Food::all();
        return view('home.index', compact('data'));
    }
    public function index()
    {
        if(Auth::id())
        {
            $usertype = Auth()->user()->usertype;

            if($usertype=='user') {
                $data = Food::all();
                return view('home.index', compact('data'));
            } else {
                return view('admin.index');
            }
        }
    }
    public function add_cart(Request $request,$id) {
        if(Auth::id()) {
            $food = Food::find($id);
            $cart_title = $food->title;
            $cart_details = $food->detail;
            $cart_price =Str::remove('$',$food->price);
            $cart_image = $food->image;

            $data = new Cart;
            $data->title = $cart_title;
            $data->details = $cart_details;
            $data->price = $cart_price * $request->qty;
            $data->image = $cart_image;
            $data->quantity = $request->qty;
            $data->userid = Auth()->user()->id;

            $data->save();

            return redirect()->back();
        } else {
            return redirect("login");
        }
    }
}
