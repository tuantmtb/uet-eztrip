<?php

namespace App\Forms;

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
            ->add('submit', 'submit');
    }
}
