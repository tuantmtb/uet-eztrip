<?php

namespace App\Http\Controllers;


use App\Http\Requests\CheckoutRequest;
use App\Order;
use App\Tour;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function cart() {
        $sum_persons = \Cart::content()->sum('qty');

        return view('cart.cart', compact('sum_persons'));
    }

    public function payment() {
        if (\Cart::content()->isEmpty()) {
            \Session::flash('toastr', [
                'level' => 'info',
                'message' => 'Please choose any tour before checking out',
                'title' => 'Your cart is empty',
            ]);
            return redirect()->route('tour.lists');
        }
        $sum_persons = \Cart::content()->sum('qty');
        $months = collect(range(1, 12))->mapWithKeys(function($month) {
           return [$month => Carbon::createFromDate(0, $month + 1, 0)->format('F')];
        });
        return view('cart.payment', compact('sum_persons', 'months', 'tour'));
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

    public function checkout(CheckoutRequest $request) {
        $attributes = $request->only([
            'full_name',
            'phone',
            'address',
            'email',
            'name_on_card',
            'card_number',
            'expiration_date_month',
            'expiration_date_year',
            'ccv',
        ]);
        $attributes['tourist_id'] = \Auth::check() ? \Auth::id() : 5;
        $attributes['number_of_people'] = \Cart::content()->sum('qty');
        foreach (\Cart::content()->pluck('id') as $tour_id) {
            Order::create(array_merge($attributes, compact('tour_id')));
        }
        \Cart::destroy();

        \Session::flash('toastr', [
            'level' => 'success',
            'title' => 'Checked out successfully',
            'message' => 'You have just checked out successfully!',
        ]);
        return redirect()->route('home');
    }
}
