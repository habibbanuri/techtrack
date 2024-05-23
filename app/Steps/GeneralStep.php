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
            ],
            [
                'state.name'     => __('The Name field is required!'),
                'state.email'    => __('The Email field is required!'),
                'state.password'    => __('The Password field is required!'),
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
