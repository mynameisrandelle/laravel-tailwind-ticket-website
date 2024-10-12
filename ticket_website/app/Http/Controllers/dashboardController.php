<?php

namespace App\Http\Controllers;
use App\Models\BillingInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class DashboardController extends Controller
{
    public function billAddressView() {
        return view('dashboard.billAddress');
    }
    
    public function receiptView() {
        return view('dashboard.receiptPage');
    }

    public function priceTicket(Request $request) {
        // Store the email input into a session
        Session::put('billingData', [
            'price' => $request->price,
            'product' => $request->product,
        ]);

        return redirect()->route('billAddress');
    }

    public function storeBillingInfo(Request $request) {
        $validatedData = $request->validate([
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:20',
            'paymentMethod' => 'required|string|max:50',
            'totalTickets' => 'required|integer|min:1',
        ]);

        $pricePerTicket = Session::get('billingData.price');
        $validatedData['price'] = $pricePerTicket * $validatedData['totalTickets'];

        // Call the method to create billing info
        $this->createBillingInfo($validatedData);

        return redirect()->route('receipt');
    }

    protected function createBillingInfo(array $data) {

        return BillingInfo::create([
            'first_name' => $data['firstName'],
            'last_name' => $data['lastName'],
            'email' => $data['email'],
            'address' => $data['address'],
            'country' => $data['country'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'payment_method' => $data['paymentMethod'],
            'total_tickets' => $data['totalTickets'],
            'price' => $data['price'],
        ]);
    }

}
