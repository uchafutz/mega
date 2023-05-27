<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use App\Models\Subsription\Subscription;
use Illuminate\Http\Request;

class SubscriptCustomerController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Subscription $subscription)
    {
        $userPackage = $subscription;
        $data = [
            'description' => $request->input('description')
        ];
        $subscription->update($data);
        toastr()->success('Package has been saved successfully!', 'Congrats');
        return view('paymentpackage', compact('userPackage'));
    }
}
