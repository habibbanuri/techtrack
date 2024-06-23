<?php

namespace App\Livewire;

use App\Models\AllJobs;
use App\Models\TrendingTechnology;
use Livewire\Component;

class ChartComponent extends Component
{

    public $data = [];

    public function mount()
    {
        $interest = auth()->user()->interest;

        $trendingTechnologies = TrendingTechnology::where('category', $interest)->get();

        // Format the data for chart
        foreach ($trendingTechnologies as $technology) {
            $title = str_replace(['_', 'developer'],[' ',''],$technology->job_title);
            $this->data[] = ['Tech' => strtoupper($title), 'Rating' => $technology->count];
        }
    }





    public function render()
    {
        return view('livewire.chart-component');
    }
}
