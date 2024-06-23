<?php

namespace App\Livewire;

use App\Models\User;
use App\Steps\CityStep;
use App\Steps\ExperienceStep;
use App\Steps\GeneralStep;
use App\Steps\InterestStep;
use App\Steps\UserInterests;
use Livewire\Attributes\Layout;
use Livewire\Component;
use Vildanbina\LivewireWizard\WizardComponent;

class RegisterWizard extends WizardComponent
{

    #[Layout('layouts.guest')]

    public User $user;

    public array $steps = [
        GeneralStep::class,
        InterestStep::class,
        ExperienceStep::class
    ];

    public function model(): User
    {
        return new User();
    }

}
