<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Mkeka\Mkeka;
use App\Models\Order\Order;
use App\Models\Package\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function free()
    {
        $mkekas = Mkeka::where(["type" => "free"])->paginate();
        return view("free", compact("mkekas"));
    }

    public function today()
    {
        $packages = Package::all();
        $mkekas = Mkeka::where("type", "!=", "results")->paginate();
        return view("today", compact("mkekas", "packages"));
    }

    public function todayshow()
    {
        return view("todayshow");
    }

    public function myorders()
    {
        $myorders = Order::where(["user_id" => Auth::user()->id])->get();
        return view("myorders", compact("myorders"));
    }

    public function results()
    {

        $mkekas = Mkeka::where(["type" => "results"])->paginate();
        //dd($mkekas);
        return view("result", compact("mkekas"));
    }
}
