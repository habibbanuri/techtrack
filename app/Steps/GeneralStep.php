<?php

namespace App\Steps;

use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class GeneralStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php
    protected string $view = 'register.general';

    /*
     * Initialize step fields
     */
    public function mount()
    {
        $this->mergeState([
            'name'                  => $this->model->name,
            'email'                 => $this->model->email,
            'password'              => $this->model->password,
            'city'              => $this->model->city,
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
                'state.name'        => ['required'],
                'state.email'       => ['required', Rule::unique('users', 'email')->ignoreModel($this->model)],
                'state.password'    => ['required','confirmed'],
                'state.city'    => ['required'],
            ],
            [
                'state.name'     => __('The Name field is required!'),
                'state.city'     => __('The City field is required!'),
                'state.email.required'    => __('The Email field is required!'),
                'state.email.unique'    => __('This Email has already been taken!'),
                'state.password.required'    => __('The Password field is required!'),
                'state.password.confirmed'    => __('The Password confirmation is not matched!'),
            ],
        ];
    }

    /*
     * Step Title
     */
    public function title(): string
    {
        return __('General');
    }
}
