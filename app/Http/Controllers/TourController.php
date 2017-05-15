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
        if (\Auth::user() == null) {
            return redirect('/login');
        }

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

        /**
         * @var Tour $tour
         */
        $tour = Tour::create($form->getRequest()->only([
            'name',
            'short_description',
            'description',
            'place',
            'price',
            'time_duration',
            'url_cover',
            'url_gird',
            'tourguide_id'
        ]));

        return redirect()->route('tour.show', $tour->id);
    }

    public function show($id)
    {
        $tour = Tour::findOrFail($id);
        $tours = Tour::paginate(10);
        return view('tour.show', compact('tour', 'tours'));
    }

    public function lists()
    {
        $tours = Tour::paginate(10);

        return view('tour.list', compact('tours'));

    }
}
