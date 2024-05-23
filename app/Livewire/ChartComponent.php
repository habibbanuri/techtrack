<?php

namespace App\Livewire;

use App\Models\AllJobs;
use Livewire\Component;

class ChartComponent extends Component
{

    // public $technologies = [];

    // public function mount()
    // {
        // Initialize an empty array to store technology counts
        // $technologyCounts = [];

        // // Define web development technologies you want to count
        // $webDevTechnologies = ['Laravel', 'React.js', 'Vue', '.NET', 'Django', 'PHP']; // Ensure consistent naming conventions

        // // Loop through each web development technology
        // foreach ($webDevTechnologies as $technology) {
        //     // Count the occurrences of the technology in the jobs table
        //     $count = AllJobs::where('title', 'like', '%' . $technology . '%')->count();

        //     // Add the technology count to the array
        //     $technologyCounts[$technology] = $count;
        // }

        // // Pass the technology counts to the Livewire component property
        // $this->technologies = json_encode($technologyCounts);

        public $data = [
            ['Tech' => 'Laravel', 'Rating' => 23],
            ['Tech' => 'React.js', 'Rating' => 64],
            ['Tech' => 'Vue.js', 'Rating' => 86],
            ['Tech' => '.NET', 'Rating' => 43],
            ['Tech' => 'Django', 'Rating' => 31],
            ['Tech' => 'PHP', 'Rating' => 66]
        ];

    // }




    public function render()
    {
        return view('livewire.chart-component');
    }
}
