<?php

namespace App\Http\Controllers\Api;

use App\Tour;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TourApiController extends Controller
{
    public function cartItem(Request $request) {
        $tour = Tour::findOrFail($request->get('id'));
        $total_amount = $request->get('total_amount', 0);
        $html = view('tour.cart_item', compact('tour', 'total_amount'))->render();
        return response()->json(compact('tour', 'html'));
    }
}
