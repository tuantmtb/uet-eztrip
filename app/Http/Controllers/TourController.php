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

        $tour = Tour::create($form->getRequest()->all());
        $id = $tour->id;


//        return redirect()->route('home');
        return redirect()->route('tour.show', $id);
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        return view('tour.show', compact('tour'));
    }

    public function lists()
    {
        $tours = Tour::paginate(10);

        return view('tour.list', compact('tours'));

    }
}
