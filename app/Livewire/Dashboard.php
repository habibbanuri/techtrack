<?php

namespace App\Livewire;

use App\Livewire\Actions\Logout;
use App\Models\AllJobs;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Dashboard extends Component
{
    #[Layout('layouts.user')]


    public function render()
    {

        $user = auth()->user();

        $interest = $user->interest;
        $keywords = [];

        switch ($interest) {
            case 'web_development':
                $keywords = [
                    'web developer', 'wordpress developer', 'laravel', 'frontend developer',
                    'backend developer', 'vue js', 'react js', 'angular', 'node js', 'full stack developer'
                ];
                break;
            case 'app_development':
                $keywords = [
                    'mobile developer', 'android developer', 'ios developer', 'react native',
                    'flutter', 'swift', 'kotlin', 'java', 'mobile app developer'
                ];
                break;
            case 'artificial_intelligence':
                $keywords = [
                    'machine learning', 'data scientist', 'ai engineer', 'deep learning',
                    'natural language processing', 'neural networks', 'computer vision', 'reinforcement learning'
                ];
                break;
            case 'graphic_designing':
                $keywords = [
                    'graphic designer', 'illustrator', 'photoshop', 'ux designer', 'ui designer',
                    'adobe xd', 'sketch', 'figma', 'visual designer', 'creative designer', 'ui/ux'
                ];
                break;
            default:
                return;
        }

        $query = AllJobs::query()->where(function ($query) use ($keywords) {
            foreach ($keywords as $keyword) {
                $query->orWhere('title', 'LIKE', "%{$keyword}%");
            }
        });

        $result = $query->take(4)->get();
        $userRoadmaps = auth()->user()->roadmaps()->take(4)->latest()->get();

        return view('livewire.dashboard', [
            'companies' => $result,
            'userRoadmaps' => $userRoadmaps
        ]);
    }

}
