<!-- Main Content -->
<div class="px-8 pt-8 pb-20 max-h-screen overflow-x-auto h-full soft-scrollbar">
    <div class=" grid grid-cols-3 gap-4">
        <div class="text-xl mb-5 font-bold text-gray-700 col-span-2">
            <div class="text-xl mb-5 font-bold text-gray-700"><span
                    class="text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3">AI Suggestions</span>
                for you! </div>
            <livewire:ai-response />
        </div>

        <div class="">
            <div class="text-xl mb-5 font-bold text-gray-700">Your generated roadmaps</div>

            <div class="grid grid-cols-1 gap-y-6  p-4 ">
                @if ($userRoadmaps)
                    @foreach ($userRoadmaps as $userRoadmap)
                        <div
                            class="px-5 py-4 rounded-xl shadow-[rgba(149,157,165,0.2)_0px_8px_24px] flex justify-between items-center gap-5 ">
                            <h1 class="text-base font-bold text-gray-700">{{ $userRoadmap->technology }} </h1>
                            <div class="flex flex-col items-end gap-y-4 w-1/3">
                                @php
                                    $progress = 0;
                                    $sections = '0/3';
                                    if ($userRoadmap->beginner_completed == true) {
                                        $progress += 30;
                                        $sections = '1/3';
                                    }
                                    if ($userRoadmap->intermediate_completed == true) {
                                        $progress += 40;
                                        $sections = '2/3';
                                    }
                                    if ($userRoadmap->advanced_completed == true) {
                                        $progress += 30;
                                        $sections = '3/3';
                                    }
                                @endphp

                                <div class="w-full bg-gray-200 rounded-full ">
                                    <div class="bg-blue-500 text-xs font-medium text-blue-100 text-center p-0.5 leading-none rounded-full"
                                        style="width: {{ $progress }}%"> {{ $sections }}</div>
                                </div>

                                <a href="/roadmaps" wire:navigate
                                    class="text-xs font-medium px-4 py-1.5 bg-gray-200 rounded-lg hover:bg-gray-300 transition">
                                    View
                                </a>
                            </div>
                        </div>
                    @endforeach
                    {{-- @else --}}
                    @if ($userRoadmaps->isEmpty())
                        <div class="text-sm text-blue-500 text-center">No roadmaps generated yet!</div>
                    @endif
                @endif
            </div>
        </div>
        {{-- <livewire:chart-component /> --}}

    </div>
    <!-- Companies hiring section start here -->
    <div class="pb-16 pt-5">
        <div class="flex items-center justify-between mb-5">
            <h3 class="text-xl font-bold text-gray-700"><span
                    class="text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3">Companies</span>
                you may want to apply</h3>
            <a href="/companies" class="text-gray-800 font-bold text-sm hover:text-blue-500 transition"
                wire:navigate>See
                all</a>
        </div>
        <div class="grid grid-cols-2 gap-x-16 gap-y-8 pb-8 ">
            @foreach ($companies as $company)
                <div
                    class="p-6 rounded-xl shadow-[rgba(149,157,165,0.2)_0px_8px_24px] flex justify-between items-center gap-5 ">
                    <div class="flex flex-col items-start space-y-2">
                        <h1 class="text-lg font-semibold">{{ $company->company }}</h1>
                        <h1 class="text-sm">{{ str_replace('"', '', $company->location) }}</h1>
                    </div>
                    <a href="{{ $company->company_url }}" target="_blank"
                        class="text-sm font-medium px-4 py-1.5 bg-gray-200 rounded-lg hover:shadow-md transition">LinkedIn</a>
                </div>
            @endforeach

        </div>
    </div>
</div>
