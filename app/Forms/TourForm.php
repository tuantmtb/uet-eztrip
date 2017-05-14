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
                'rules' => [
                    'min:0',
                ],
                'label' => 'Price ($)',
                'attr' => [
                    'step' => 0.01,
                    'min' => 0,
                ],
            ])
//            ->add('time_begin', 'datetime-local')
//            ->add('time_end', 'datetime-local')
            ->add('time_duration', 'number', [
                'rules' => [
                    'min:0',
                ],
                'label' => 'Time duration (hours)',
                'attr' => [
                    'min' => 0
                ],
            ])
            ->add('url_cover', 'url', [
                'rules' => [
                    'active_url',
                ],
                'label' => 'Url cover size=1800x700 (ex: http://abc.com/cover.jpg)'
            ])
            ->add('url_gird', 'url', [
                'rules' => [
                    'active_url',
                ],
                'label' => 'Url grid size=800x533 (ex: http://abc.com/gird.jpg)'
            ])
            ->add('tourguide_id', 'hidden', [
                'value' => \Auth::user() ? \Auth::user()->id : null,
            ])
            ->add('submit', 'submit');
    }
}
