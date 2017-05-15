<?php

namespace App\Http\Controllers;

use App\Forms\OrderForm;
use App\Order;
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


}
