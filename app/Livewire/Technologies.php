<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

class Technologies extends Component
{
    #[Layout('layouts.user')]
    public function render()
    {
        return view('livewire.technologies');
    }
}
