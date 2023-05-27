<?php

namespace App\Http\Controllers;

use App\Models\Subsription\Subscription;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $subscriptions = Subscription::paginate();
        return view("subscribe.index", compact("subscriptions"));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {



        $package_id = $request->input('package_id');
        $package_duration = $request->input("package_duration");
        $user_id = Auth::user()->id;
        // dd($user_id);
        $userSubscription = Subscription::where(['user_id' => $user_id, "status" => 1])->first();
        //  dd($userSubscription);
        if (empty($userSubscription->status)) {
            if ($package_duration == '7') {
                $date_from = Carbon::now();
                $date_to = Carbon::now()->addDays(6);
                $userPackage = Subscription::create(
                    [
                        'user_id' => Auth::user()->id,
                        'package_id' => $package_id,
                        'date_from' => $date_from,
                        'date_to' => $date_to,
                        'active' => '1'
                    ]
                );
                toastr()->success('Package has been saved successfully!', 'Congrats');
                return view("paymentpackage", compact("userPackage"));
            } else {
                $date_from = Carbon::now();
                $date_to = Carbon::now()->addDays(29);
                $userPackage = Subscription::create(
                    [
                        'user_id' => Auth::user()->id,
                        'package_id' => $package_id,
                        'date_from' => $date_from,
                        'date_to' => $date_to,
                        'active' => '1'
                    ]
                );
                toastr()->success('Package has been saved successfully!', 'Congrats');
                return view("paymentpackage", compact("userPackage"));
            }
        } else {

            $userPackage = $userSubscription;
            return view("paymentpackage", compact("userPackage"));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Subscription $subscription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Subscription $subscription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Subscription $subscription)
    {

        //dd($request->input());
        if ($subscription->active == 1) {
            $data = [
                "status" => "PAID",
                "active" => "0"
            ];
            $subscription->update($data);
            toastr()->success('Subscription has been updated successfully!', 'Congrats');
            return redirect()->route("subscriptions.index");
        } else {
            $data = [
                "status" => "PENDING",
                "active" => "1"
            ];
            $subscription->update($data);
            toastr()->success('Subscription has been updated successfully!', 'Congrats');
            return redirect()->route("subscriptions.index");
        }

        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Subscription $subscription)
    {
        $subscription->delete();
        toastr()->success('Package has been Delete successfully!', 'Congrats');
        return redirect()->route("subscriptions.index");
    }
}
