<?php

namespace App\Http\Controllers;

use App\Events\UserOrderCreate;
use App\Events\UserSubriscription;
use App\Models\Order\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::paginate();
        return view("order.index", compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //Order::with('users')->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "mkeka_id" => "required",
            "amount" => "required",
            "user_id" => 'required'
        ]);
        $myorder = Order::where(["user_id" => $request->input("user_id"), "mkeka_id" => $request->input("mkeka_id")])->first();
        $email = User::where(["user_id" => $request->input("user_id")])->first();
        if (empty($myorder)) {
            // dd($myorder);
            //print("upo wapi");
            $order = Order::create($request->input());
            event(new UserOrderCreate($email));
            toastr()->success('Data has been updated successfully!', 'Congrats');

            $myorder = $order;
            return view("todayshow", compact('myorder'));
        } else if ($myorder->status == "PENDING") {
            //print("nafika");
            //dd($myorder);
            return view("todayshow", compact("myorder"));
        } else if ($myorder->status == "PAID") {

            $myorders = Order::where(["user_id" => Auth::user()->id])->get();
            return view("myorders", compact("myorders"));
        } else {
            dd($myorder);
            $order = Order::create($request->input());
            toastr()->success('Data has been updated successfully!', 'Congrats');
            $myorder = $order;
            return view("todayshow", compact('myorder'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        $order->update($request->input());
        toastr()->success('Data has been updated successfully!', 'Congrats');
        event(new UserSubriscription($order->user->email, 'Order payment confirm'));
        return redirect()->route("orders.index");
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        $order->delete();
        toastr()->error('Data has been delete successfully!', 'Congrats');
        return redirect()->route("orders.index");
    }
}
