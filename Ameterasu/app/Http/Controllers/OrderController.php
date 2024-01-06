<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    // Show Orders For Current User
    public function index() {
        if(auth()->user()->name == 'admin')
            return back();
        return view('menu.order', [
            'orders' => auth()->user()->orders()->get(),
        ]);
    }

    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

         $formFields['user_id'] = auth()->id();

        $check  = Order::where('name', '=', $formFields['name'])->where('user_id', '=', $formFields['user_id'])->first();

        if($check != null) {
            $formFields['amount'] = $check['amount'] + 1;
            $check->update($formFields);
        }
        else {
            $formFields['amount'] = 1;
            Order::create($formFields);
        }

        return back()->with('message', 'Order added successfully');
    }
}
