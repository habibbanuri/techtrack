<!-- Main Content -->
<div class="px-8 pt-8 pb-24 max-h-screen overflow-x-auto soft-scrollbar">
    <div class="flex items-center justify-between my-2 mb-8">
        <div class="text-xl  font-bold text-gray-700">Trending
            <span class="text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3">Technologies</span>
        </div>
        <div
            class="px-2 py-1.5 rounded-xl border border-gray-300  bg-gray-50 w-2/5 transition-all duration-300 focus-within:border-blue-500 flex items-center justify-between">
            <input type="text" wire:model.live="search" id="tech"
                placeholder="Search for any technology..." autocomplete="off"
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
        </div>
    </div>

    <div class="relative overflow-x-auto shadow-[rgba(149,157,165,0.2)_0px_8px_24px] sm:rounded-lg ">
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                <tr>
                    <th scope="col" class="px-4 py-3">
                        S.No
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Technology
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Rank
                    </th>

                    <th scope="col" class="px-4 py-3">
                        Change in rank
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Salary
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Change in salary
                    </th>
                    <th scope="col" class="px-4 py-3">
                        Live jobs
                    </th>
                </tr>
            </thead>
            @foreach ($technologies as $tech)
                <tbody>
                    <tr class="bg-white border-b  hover:bg-gray-50">
                        <td class="p-4">
                            {{ $tech->id }}
                        </td>
                        <th class="px-4 py-4 font-medium text-gray-900  ">
                            <h1>{{ $tech->title }}</h1>
                        </th>

                        <td class="p-4">
                            {{ $tech->job_rank }}
                        </td>
                        <td class="p-4 {{ $tech->change_in_rank < 0 ? 'text-red-500' : 'text-green-500' }}">
                            {{ $tech->change_in_rank }}
                        </td>
                        <td class="p-4">
                            {{ $tech->salary }}
                        </td>
                        <td class="p-4 {{$tech->change_in_salary < 0 ? 'text-red-500' : 'text-green-500'}}">
                            {{ $tech->change_in_salary }}
                        </td>
                        <td class="p-4">
                            {{ $tech->live_jobs }}
                        </td>
                    </tr>
            @endforeach
            </tbody>
        </table>

    </div>

    <div class="py-4">
        {{ $technologies->links() }}
    </div>
</div>
