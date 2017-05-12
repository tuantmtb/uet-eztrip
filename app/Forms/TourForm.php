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
                'required'
            ])
            ->add('description', 'textarea')
            ->add('place', 'text')
            ->add('city', 'text')
            ->add('price', 'number')
            ->add('time_begin', 'text')
            ->add('time_end', 'text')
            ->add('time_duration', 'number')
            ->add('url_cover', 'url')
            ->add('url_gird', 'url')
            ->add('tourguide_id', 'select', [
                'choices' => User::pluck('name', 'id')->toArray(),
            ])
            ->add('submit', 'submit');
    }
}
