<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use App\Models\Order\Order;
use Illuminate\Http\Request;

class OrderCustomerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Order $order)
    {
        $data = ["description" => $request->input('description')];
        $order->update($data);
        $myorder = $order;
        toastr()->success('Order has been saved successfully!', 'Congrats');
        return view("todayshow", compact("myorder"));
    }
}
