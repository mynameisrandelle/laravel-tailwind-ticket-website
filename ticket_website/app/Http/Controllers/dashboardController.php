<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function billAddressView() {
        return view('dashboard.billAddress');
    }


    public function priceTicket(Request $request) {
        // Store the email input into a session
        Session::put('billingData', [
            'price' => $request->price,
            'product' => $request->product,
        ]);

        return redirect()->route('billAddress');
    }

}
