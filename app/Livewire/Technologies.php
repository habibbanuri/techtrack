<?php

namespace App\Livewire;

use App\Models\Technology;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Technologies extends Component
{
    #[Layout('layouts.user')]

    public $search = '';

    public function render()
    {

        $technologies = Technology::when($this->search, function ($query){
            $query->where('title', 'LIKE', '%'.$this->search. '%');
        })->simplePaginate(10);

        return view('livewire.technologies', ['technologies' => $technologies]);
    }
}
