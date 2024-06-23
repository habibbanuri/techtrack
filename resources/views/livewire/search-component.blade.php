<div
    class="relative px-2 py-1.5 rounded-xl border border-gray-300  bg-gray-50 w-2/5 transition-all duration-300 focus-within:border-blue-500 flex items-center justify-between">
    <input type="text" wire:model.live="search" id="tech" placeholder="Search Companies & Tech stack in Pakistan..."
        autocomplete="off"
        class="px-2 peer focus:ouline-0 border-0 focus:ring-0 bg-transparent text-sm w-full text-gray-500 placeholder:text-gray-400">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
        style="fill: rgb(107, 107, 107);">
        <path
            d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
        </path>
        <path
            d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z">
        </path>
    </svg>

    <div
        class="hidden z-40 peer-focus:block hover:block justify-center p-4 max-h-80 overflow-x-auto soft-scrollbar absolute top-[3.2rem] shadow-[rgba(149,157,165,0.2)_0px_8px_24px] left-0 text-sm bg-white  w-full rounded-xl ">
        @if (!$search)
            <span class="text-center block my-5 leading-6">Search any company name or Technology...</span>
        @endif
        @if ($companies)
            <div class="my-2  flex flex-col justify-center p-2 space-y-2">
                <h1 class="font-semibold mb-2">Companies</h1>
                @foreach ($companies as $company)
                    <div
                        class="p-4 rounded-xl shadow-[rgba(149,157,165,0.2)_0px_8px_24px] flex justify-between items-center ">
                        <div class="flex flex-col items-start space-y-1">
                            <h1 class="text-sm font-medium">{{ $company->company }}</h1>
                            <h1 class="text-xs">{{ str_replace('"', '', $company->location) }}</h1>
                        </div>
                        <a href="{{ $company->company_url }}" target="_blank"
                            class="text-xs font-medium px-2 py-1 bg-gray-200 rounded-lg hover:bg-gray-300 transition">LinkedIn</a>
                    </div>
                @endforeach
            </div>
            @if ($companies->isEmpty())
                <span class="text-center my-2 block text-warning-400">No companies found!</span>
            @endif
        @endif
        @if ($technologies)
            <div class="my-2 border-t border-gray-300 flex flex-col justify-center p-2 space-y-2">
                <h1 class="font-semibold mb-2">Technolgies</h1>
                @foreach ($technologies as $t)
                    <div
                        class="p-4 rounded-xl shadow-[rgba(149,157,165,0.2)_0px_8px_24px] flex justify-between items-center ">
                        <h1 class="text-sm font-medium">{{ $t->title }}</h1>
                        <a href="{{ $t->link }}" target="_blank"
                            class="text-xs font-medium px-2 py-1 bg-gray-200 rounded-lg hover:bg-gray-300 transition">LinkedIn</a>
                    </div>
                @endforeach
            </div>
            @if ($technologies->isEmpty())
                <span class="text-center my-2 block text-warning-400">No technologies found!</span>
            @endif
        @endif
    </div>
</div>
