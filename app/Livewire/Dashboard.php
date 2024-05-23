<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.user')]

    public function render()
    {
        return view('livewire.dashboard');
    }

}
