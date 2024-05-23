<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class CityStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php
    protected string $view = 'register.city';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'city'                  => $this->model->city
        ]);
    }

    /*
    * Step icon
    */
    public function icon(): string
    {
        return 'check';
    }


    /*
     * Step Validation
     */
    public function validate()
    {
        return [
            [
                'state.city'        => ['required'],
            ],
            [
                'state.city'    => __('The city name is required!'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('City');
    }
}
