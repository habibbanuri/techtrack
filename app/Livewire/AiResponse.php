<?php

namespace App\Livewire;

use Exception;
use GeminiAPI\Laravel\Facades\Gemini;
use Livewire\Attributes\Layout;
use Livewire\Component;

class AiResponse extends Component
{

    #[Layout('layouts.user')]

    public $aiResponse, $interest, $level_of_education, $experience, $career_goal,  $interested_in_new_technologies;


    public function AiSuggestions()
    {
        if (session()->has('ai_suggestions_generated')) {
            $this->aiResponse = session('ai_suggestions');
            return;
        }
        $user = auth()->user();
        $this->interest = $user->interest;
        $this->level_of_education = $user->level_of_education;
        $this->experience = $user->experience;
        $this->career_goal = $user->career_goal;
        $this->interested_in_new_technologies = $user->interested_in_new_technologies;
        // - Main Heading: `<h1 class=\"text-xl text-center font-bold text-gray-800 mb-6\">Recommended Field and Technologies for Your Career</h1>` their level of education (" . $this->level_of_education . "), their experience with technologies such as " . $this->experience . ",
        $prompt = "Based on your interest in <b>" . $this->interest . "</b> and your previous experience with <b>" . $this->experience . "</b>, generate a suggestion of the latest technology for the user by which they can pursue their <b>" . $this->interest . "</b> efficiently and in less time to start their career. Avoid suggesting multiple technologies that might confuse the user. Generate just one technology or a stack of technologies that will help them pursue their career efficiently and in less time. The suggested technology should be more suitable for them according to <b>" . $this->experience . "</b>, so they are not confused about their career. For example, if a user knows a little PHP, suggest Laravel as they will be better at Laravel. Similarly, if they have some knowledge of JavaScript, suggest MERN stack or MEAN. If they know Python and want to pursue web development, suggest Django and React, etc. These are just examples, so suggest like this with provided justification.

        Provide a clear and concise recommendation, explaining the reason for each suggestion. Format the response in HTML with the following Tailwind CSS styles:
        - Container: `<div class=\" p-4 bg-gray-50 text-gray-500 font-normal text-sm\">...</div>`
        - Section Headings: `<h2 class=\"text-base font-semibold text-gray-700 mt-4 mb-2\">Field Recommendation</h2>`, `<h2 class=\"text-base font-semibold text-gray-700 mt-4 mb-2\">Suggested Technologies</h2>`
        - Suggestions: `<li class=\"mb-3 px-2 py-1 bg-white border-l-4 border-blue-500 shadow-sm text-sm\">
            <span class=\"text-sm text-gray-800\">Suggestion Name</span>
        </li>`

        End the response with a note with mt-4: 'You can generate detailed roadmaps for these technologies and follow your path on the link <a href=\"/roadmaps\" class=\"text-sm text-blue-600 mt-4\" wire:navigate>Roadmaps</a>'

        Generate the output in HTML format only, use some margins on the y-axis for clarification, and apply all the styles.";


        try {
            $response = Gemini::generateText($prompt);

            $this->aiResponse = $response;
            session()->put('ai_suggestions_generated', true);
            session()->put('ai_suggestions', $response);
        } catch (Exception $e) {
            $this->aiResponse = 'There was an error generating your response. Please try again later.';
        }
    }

    public function regenerateAiSuggestions()
    {
        session()->forget(['ai_suggestions_generated', 'ai_suggestions']);
        $this->AiSuggestions();
    }

    public function mount()
    {
        if (!session()->has('ai_suggestions_generated')) {
            $this->AiSuggestions();
        } else {
            $this->aiResponse = session('ai_suggestions');
        }
    }

    public function render()
    {
        return view('livewire.ai-response');
    }
}
