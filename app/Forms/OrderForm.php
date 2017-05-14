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
            ->add('email', 'email', [
                'rules' => [
                    'email'
                ]
            ])
            ->add('name_on_card', 'text')
            ->add('card_number', 'text')
            ->add('expiration_date_month', 'select', [
                'choices' => collect(range(1, 12))->mapWithKeys(function ($month) {
                    return [$month => $month];
                })->toArray()
            ])
            ->add('expiration_date_year', 'number', [
                'rules' => [
                    'min:0'
                ],
                'attr' => [
                    'min' => 0,
                ]
            ])
            ->add('ccv', 'text')
            ->add('number_of_people', 'number', [
                'rules' => [
                    'min:0'
                ],
                'attr' => [
                    'min' => 0
                ]
            ])
            ->add('tour_id', 'select', [
                'rules' => [
                    'required'
                ],
                'choices' => Tour::pluck('name', 'id')->toArray(),
            ])
            ->add('tourist_id', 'select', [
                'rules' => [
                    'required',
                ],
                'choices' => User::pluck('name', 'id')->toArray(),
            ])
            ->add('submit', 'submit');
    }
}
