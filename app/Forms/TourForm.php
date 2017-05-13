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
            ->add('description', 'textarea')
            ->add('place', 'text')
            ->add('city', 'text')
            ->add('price', 'number', [
                'attr' => [
                    'step' => 0.01,
                    'min' => 0,
                ],
            ])
            ->add('time_begin', 'date')
            ->add('time_end', 'date')
            ->add('time_duration', 'number', [
                'attr' => [
                    'min' => 0
                ],
            ])
            ->add('url_cover', 'url')
            ->add('url_gird', 'url')
            ->add('tourguide_id', 'select', [
                'rules' => [
                    'required',
                ],
                'choices' => User::pluck('name', 'id')->toArray(),
            ])
            ->add('submit', 'submit');
    }
}
