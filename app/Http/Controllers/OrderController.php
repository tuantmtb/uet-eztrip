<?php

namespace App\Http\Controllers;

use App\Forms\OrderForm;
use App\Order;
use Illuminate\Http\Request;
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

        Order::create($form->getRequest()->all());

        return redirect()->route('home');
    }
}
