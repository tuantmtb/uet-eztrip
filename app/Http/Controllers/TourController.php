<?php

namespace App\Http\Controllers;

use App\Forms\TourForm;
use App\Tour;
use Illuminate\Http\Request;
use Kris\LaravelFormBuilder\FormBuilder;

class TourController extends Controller
{
    public function create(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(TourForm::class, [
            'method' => 'POST',
            'url' => route('tour.store'),
        ]);

        return view('tour.create', compact('form'));
    }

    public function store(FormBuilder $formBuilder)
    {
        $form = $formBuilder->create(TourForm::class);

        if (!$form->isValid()) {
            return redirect()->back()->withErrors($form->getErrors())->withInput();
        }

        Tour::create($form->getRequest()->all());

        return redirect()->route('home');
    }

    public function show($id)
    {
        return view('tour.show');
    }
}
