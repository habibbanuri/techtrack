<?php

namespace App\Steps;

use App\Models\AllJobs;
use App\Models\User;
use App\Models\UserInterests;
use Illuminate\Auth\Events\Registered;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Vildanbina\LivewireWizard\Components\Step;

class InterestStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php
    protected string $view = 'register.interests';
    /*
     * Initialize step fields
     */
    public function mount($state = [])
    {
        $this->mergeState([
            'interest'                  => $this->model->interest,
        ]);
    }


    public function save($state)
    {
        $user = User::create([
            'name' => $state['name'],
            'email' => $state['email'],
            'password' => Hash::make($state['password']),
            'city' => $state['city'],
            'interest' => $state['interest'],
        ]);
        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
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
                'state.interest'     => ['required'],
            ],
            [
                'state.interest'     => __('Choose your  tech interest please!'),
            ],
        ];
    }


    /*
     * Step Title
     */
    public function title(): string
    {
        return __('Interests');
    }
}
