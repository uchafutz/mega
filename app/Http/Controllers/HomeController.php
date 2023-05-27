<?php

namespace App\Http\Controllers;

use App\Models\Mkeka\Mkeka;
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
        $user = Auth::user();
        if ($user->status == 1) {
            return view("home");
        } else {
            $userPackage = Subscription::where('user_id', "=", $user->id)->first();
            //  dd($userPackage);
            if ($user->subscription_flag == 0 && empty($userPackage->status)) {
                return view("today", compact("packages"));
            } elseif ($user->subscription_flag == 0 && $userPackage->active == 1) {
                return view("paymentpackage", compact("userPackage"));
            } elseif ($user->subscription_flag == 1 && $userPackage->active == 0) {
                $date_now = Carbon::now();
                $results = $date_now->gt($userPackage->date_to);
                if ($results) {
                    //create a new subscription
                    $respo = Subscription::where('user_id', "=", $user)->where("active", "=", "0")->update([
                        "active" => 1,
                        "status" => "EXPIRED"
                    ]);
                    if ($respo) {

                        return view("today", compact("packages"));
                    }
                } else {
                    $mkekas = Mkeka::orderBy('created_at', 'desc')->get();
                    return view("welcome", compact("mkekas"));
                }
            }
        }
    }
}
