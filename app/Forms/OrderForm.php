<?php

namespace App\Forms;

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
            ->add('submit', 'submit');
    }
}
