<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        $sum_persons = \Cart::content()->pluck('qty')->sum();

        return view('cart.cart', compact('sum_persons'));
    }

    public function delete(Request $request) {
        $rowId = $request->get('rowId');
        \Cart::remove($rowId);
        return redirect()->back();
    }

    public function add(Request $request) {
        $id = $request->get('id');
        $name = $request->get('name');
        $qty = $request->get('qty');
        $price = $request->get('price');
        $options = $request->only('url_gird');
        if (\Cart::content()->keyBy('id')->has($id)) {
            \Session::flash('toastr', [
                'level' => 'warning',
                'message' => 'If you still want to book this tour, remove it from cart then book again',
                'title' => 'You have already book this tour',
            ]);
        } else {
            \Cart::add($id, $name, $qty, $price, $options);
        };
        return redirect()->route('cart');
    }
}
