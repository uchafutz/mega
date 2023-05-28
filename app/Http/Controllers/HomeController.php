<?php

namespace App\Http\Controllers;

use App\Models\Mkeka\Mkeka;
use App\Models\Order\Order;
use App\Models\Package\Package;
use App\Models\Subsription\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $packages = Package::all();
        $packagecount = Package::count();
        $mkekacount = Mkeka::count();
        $ordercount = Order::count();
        $subcount = Subscription::count();
        $user = Auth::user();
        $mkekas = Mkeka::where("type", "!=", "results")->paginate();
        if ($user->status == 1) {
            return view("home", compact("packagecount", "mkekacount", "ordercount", "subcount"));
        } else {
            $userPackage = Subscription::where(["user_id" => $user->id])->where("status", "!=", "EXPIRED")->first();
            //dd($userPackage);
            if ($user->subscription_flag == 0 && empty($userPackage->status)) {
                return view("today", compact("packages", "mkekas"));
            } elseif ($user->subscription_flag == 0 && $userPackage->active == 1) {
                return view("paymentpackage", compact("userPackage"));
            } elseif ($user->subscription_flag == 1 && $userPackage->active == 0) {
                $date_now = Carbon::now();
                $results = $date_now->gt($userPackage->date_to);
                if ($results) {
                    //create a new subscription
                    $respo = $userPackage->update([
                        "active" => 1,
                        "status" => "EXPIRED"
                    ]);
                    $val = $userPackage->user()->update(['subscription_flag' => '0']);
                    if ($respo && $val) {

                        return view("today", compact("packages", "mkekas"));
                    }
                } else {
                    // $mkekas = Mkeka::orderBy('created_at', 'desc')->get();
                    return view("welcome", compact("mkekas"));
                }
            }
        }
    }
}
