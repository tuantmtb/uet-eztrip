<?php

namespace App\Forms;

use App\User;
use Kris\LaravelFormBuilder\Form;

class TourForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('name', 'text', [
                'rules' => [
                    'required'
                ]
            ])
            ->add('short_description', 'text')
            ->add('description', 'textarea')
            ->add('place', 'text')
//            ->add('city', 'text')
            ->add('price', 'number', [
                'label' => 'Price ($)',
                'attr' => [
                    'step' => 0.01,
                    'min' => 0,
                ],
            ])
//            ->add('time_begin', 'datetime-local')
//            ->add('time_end', 'datetime-local')
            ->add('time_duration', 'number', [
                'label' => 'Time duration (hours)',
                'attr' => [
                    'min' => 0
                ],
            ])
            ->add('url_cover', 'url', [
                'label' => 'Url cover size=1800x700 (ex: http://abc.com/cover.jpg)'
            ])
            ->add('url_gird', 'url', [
                'label' => 'Url cover size=800x533 (ex: http://abc.com/gird.jpg)'
            ])
            ->add('tourguide_id', 'hidden', [
                'value' => \Auth::user() ? \Auth::user()->id : null,

            ])
//            ->add('tourguide_id', 'select', [
//                'rules' => [
//                    'required',
//                ],
//                'choices' => \Auth::user()->id,
//            ])
            ->add('submit', 'submit');
    }
}
