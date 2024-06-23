<?php

namespace App\Livewire;

use App\Models\AllJobs;
use Livewire\Component;

class SearchComponent extends Component
{

    public $search = '';
    // public $companies;
    // public $technologies;

    // public function mount()
    // {
    //     if ($this->search !== '') {
    //         $this->companies = AllJobs::where('company', 'LIKE', "%{$this->search}%")->get();

    //         $this->technologies = AllJobs::where('title', 'LIKE', "%{$this->search}%")->get();
    //     }
    // }

    public $companies = [];
    public $technologies = [];

    public function mount()
    {
        $this->companies = [];
        $this->technologies = [];
    }

    public function updatedSearch()
    {
        $this->updateSearchResults();
    }

    private function updateSearchResults()
    {
        if ($this->search !== '') {
            $this->companies = AllJobs::where('company', 'LIKE', "%{$this->search}%")->get();
            $this->technologies = AllJobs::where('title', 'LIKE', "%{$this->search}%")->distinct()->get();
        } else {
            $this->companies = [];
            $this->technologies = [];
        }
    }

    public function render()
    {

        return view('livewire.search-component');
    }
}
