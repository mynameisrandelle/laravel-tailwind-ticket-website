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
        dd($request->all());

        return redirect()->route('billAddress');
    }

}
