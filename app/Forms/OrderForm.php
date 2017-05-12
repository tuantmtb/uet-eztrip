<?php

namespace App\Forms;

use App\Tour;
use App\User;
use Kris\LaravelFormBuilder\Form;

class OrderForm extends Form
{
    public function buildForm()
    {
        $this
            ->add('full_name', 'text')
            ->add('phone', 'text')
            ->add('address', 'text')
            ->add('email', 'email')
            ->add('name_on_card', 'text')
            ->add('card_number', 'text')
            ->add('expiration_date_month', 'text')
            ->add('expiration_date_year', 'text')
            ->add('ccv', 'text')
            ->add('number_of_people', 'number')
            ->add('tour_id', 'select', [
                'choices' => Tour::pluck('name', 'id')->toArray(),
            ])
            ->add('tourist_id', 'select', [
                'choices' => User::pluck('name', 'id')->toArray(),
            ])
            ->add('submit', 'submit');
    }
}
