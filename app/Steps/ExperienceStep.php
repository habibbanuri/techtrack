<?php

namespace App\Steps;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Vildanbina\LivewireWizard\Components\Step;
use Illuminate\Validation\Rule;

class ExperienceStep extends Step
{
    // Step view located at resources/views/steps/general.blade.php
    protected string $view = 'register.experience';

    /*
     * Initialize step fields
     */

    public function mount()
    {
        $this->mergeState([
            'education'                         => $this->model->level_of_education,
            'experience'                        => $this->model->experience,
            'career_goal'                       => $this->model->career_goal,
            'interested_in_new_technologies'    => $this->model->interested_in_new_technologies,
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
                'state.education'                         => ['required'],
                'state.experience'                        => ['required'],
                'state.career_goal'                       => ['required'],
                'state.interested_in_new_technologies'    => ['required'],
            ],
            [
                'state.education'     => __('The Education field is required!'),
                'state.experience'    => __('The Experience field is required!'),
                'state.career_goal'    => __('This Career goal has already been taken!'),
                'state.interested_in_new_technologies'    => __('The Interested in new technologies field is required!'),
            ],
        ];
    }


    public function save($state)
    {


        $user = User::create([
            'name' => $state['name'],
            'email' => $state['email'],
            'password' => Hash::make($state['password']),
            'city' => $state['city'],
            'interest' => $state['interest'],
            'level_of_education' => $state['education'],
            'experience' => $state['experience'],
            'career_goal' => $state['career_goal'],
            'interested_in_new_technologies' => $state['interested_in_new_technologies'],
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('dashboard');
    }


    /*
     * Step Title
     */
    public function title(): string
    {
        return __('User Information');
    }
}
