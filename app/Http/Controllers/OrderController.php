<?php

namespace App\Http\Controllers;

use App\Forms\OrderForm;
use App\Order;
use App\Tour;
use App\User;
use Kris\LaravelFormBuilder\FormBuilder;

class OrderController extends Controller
{
    public function create(FormBuilder $formBuilder) {
        $form =  $formBuilder->create(OrderForm::class, [
            'method' => 'POST',
            'url' => route('order.store'),
        ]);

        return view('order.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder) {
        $form = $formBuilder->create(OrderForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        $attributes = $form->getRequest()->only([
            'full_name',
            'phone',
            'address',
            'email',
            'name_on_card',
            'card_number',
            'expiration_date_month',
            'expiration_date_year',
            'ccv',
            'number_of_people',
            'tour_id',
            'tourist_id',
        ]);
        Order::create($attributes);

        return redirect()->route('home');
    }

    public function delete($id) {
        Order::destroy([$id]);
        return redirect()->route('order.my');
    }

    public function myOrder() {
        $tours = Tour::all()->random(6);
        /**
         * @var User $user
         */
        $user = \Auth::user();

        if (\Entrust::hasRole('tourguide')) {
            $tours = $user->tours;
            $orders = Order::whereIn('tour_id', $tours->pluck('id'));
        } else {
            $orders = $user->orders;
        }

        return view('order.list', compact('orders', 'tours'));
    }
}
