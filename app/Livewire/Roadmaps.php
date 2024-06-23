<?php

namespace App\Livewire;

use App\Models\TrendingTechnology;
use App\Models\UserRoadmaps;
use Exception;
use GeminiAPI\Laravel\Facades\Gemini;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Roadmaps extends Component
{
    #[Layout('layouts.user')]

    public $modalOpen = false;
    public $roadmapContent = '';
    public $viewRoadmapContent = '';
    public $viewRoadmapId;
    public $roadmaps;
    public $userRoadmaps;
    public $tech;
    public $beginner_completed;
    public $intermediate_completed;
    public $advanced_completed;


    public function mount()
    {
        $interest = auth()->user()->interest;

        $trendingTechnologies = TrendingTechnology::where('category', $interest)->get();
        $this->roadmaps = $trendingTechnologies;

        $this->userRoadmaps = auth()->user()->roadmaps()->get();
    }


    public function generateRoadmap($tech)
    {
        $this->modalOpen = true;
        $this->tech = $tech;

        $prompt = "Generate a detailed roadmap for learning " . $tech . " from beginner to advanced levels. Ensure the roadmap covers all essential topics and concepts related to " . $tech . ". Use `<ul>` and `<li>` HTML elements with beautiful Tailwind CSS styling. Distinguish beginner, intermediate, and advanced sections with margins and headings.
        Use the following styles:
        - Container: `<div class=\"max-w-4xl mx-auto p-6 bg-gray-50 shadow-lg rounded-xl\">...</div>`
        - Main Heading: `<h1 class=\"text-2xl text-center font-bold text-gray-900 mb-6\">Roadmap for <span class=\"text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3\">" . $tech . "</span></h1>`
        - Section Headings: `<h2 class=\"text-xl font-bold text-gray-700 mt-8 mb-4\">Beginner</h2>`, `<h2 class=\"text-xl font-bold text-gray-700 mt-8 mb-4\">Intermediate</h2>`, `<h2 class=\"text-xl font-bold text-gray-700 mt-8 mb-4\">Advanced</h2>`
        - Topics: `<li class=\"mb-1 px-4 py-2 bg-white border-l-4 border-blue-500 shadow-sm flex justify-between items-center\">
            <span class=\"text-base font-semibold text-gray-800\">Topic Name</span>
            <a href=\"URL\" target=\"_blank\" class=\"text-blue-500 hover:text-blue-700 underline ml-2\">Resource link</a>
        </li>`
        Provide various resources (articles, tutorials, videos) alongside each topic. Ensure links work correctly and lead to appropriate resources. Generate the output in HTML format only.";


        try {
            $response = Gemini::generateText($prompt);

            $this->roadmapContent = $response;
        } catch (Exception $e) {
            $this->roadmapContent = 'There was an error generating roadmap. Please try again later.';
        };
    }

    public function saveRoadmap()
    {
        $user = auth()->user();

        $user->roadmaps()->create([
            'technology' => $this->tech,
            'roadmap' => $this->roadmapContent
        ]);

        return redirect('/roadmaps');

    }

    public function viewRoadmap($id)
    {
        $roadmap = UserRoadmaps::where('id', $id)->first();

        $this->viewRoadmapId = $roadmap->id;
        $this->viewRoadmapContent = $roadmap->roadmap;
        $this->beginner_completed = $roadmap->beginner_completed;
        $this->intermediate_completed = $roadmap->intermediate_completed;
        $this->advanced_completed = $roadmap->advanced_completed;
        $this->modalOpen = true;
    }

    public function updateStatus($section)
    {
        $column = $section . '_completed';
        $roadmap = UserRoadmaps::find($this->viewRoadmapId);
        $roadmap->$column = !$roadmap->$column; // Toggle the status
        $roadmap->save();

        // Update the local property as well
        $this->{$section . 'Completed'} = $roadmap->$column;

        return redirect()->route('roadmaps');
    }

    public function render()
    {
        return view('livewire.roadmaps');
    }
}
