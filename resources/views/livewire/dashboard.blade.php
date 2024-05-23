<!-- Main Content -->
<div class="flex-1 text-gray-700">
    <div class="flex justify-between items-center border-b-2 px-8 py-4">
        <div class="flex items-center">
            <div class="p-3 border-2 rounded-full border-blue-200 mr-2">
                <svg class="fill-blue-500 size-10 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" id="user">
                    <defs>
                        <linearGradient id="a" x1="9.973" x2="25.477" y1="33.089" y2="6.236"
                            gradientUnits="userSpaceOnUse">
                            <stop offset="0" stop-color="#4c46c8"></stop>
                            <stop offset="1" stop-color="#87bfff"></stop>
                        </linearGradient>
                    </defs>
                    <path fill="url(#a)"
                        d="M29.446 26.135a14.05 14.05 0 0 0-9.1-9.429 8 8 0 1 0-8.7 0 14.053 14.053 0 0 0-9.1 9.429 3.027 3.027 0 0 0 .493 2.678A2.96 2.96 0 0 0 5.43 30h21.14a2.96 2.96 0 0 0 2.384-1.187 3.023 3.023 0 0 0 .492-2.678ZM10 10a6 6 0 1 1 6 6 6.006 6.006 0 0 1-6-6Zm17.357 17.608a.963.963 0 0 1-.787.392H5.43a.963.963 0 0 1-.787-.392 1.04 1.04 0 0 1-.167-.922 11.987 11.987 0 0 1 23.047 0 1.037 1.037 0 0 1-.166.922Z">
                    </path>
                </svg>
            </div>
            <h2 class="text-xl font-medium capitalize">Hi,{{ auth()->user()->name }}</h2>
        </div>
        {{-- <button class="px-3 py-1 text-black bg-gray-200 text-sm rounded-md font-medium">New Roadmap </button> --}}
        <div
            class="px-3 py-1.5 rounded-xl border border-gray-300 bg-gray-50 w-1/2 focus-within:border-blue-500 flex items-center justify-between">
            <input type="search" name="tech" id="tech"
                placeholder="Search Companies & Tech stack in Pakistan..."
                class="focus:ouline-0 border-0 focus:ring-0 bg-transparent w-full text-gray-500 placeholder:text-gray-400">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                style="fill: rgb(107, 107, 107);transform: ;msFilter:;">
                <path
                    d="M10 18a7.952 7.952 0 0 0 4.897-1.688l4.396 4.396 1.414-1.414-4.396-4.396A7.952 7.952 0 0 0 18 10c0-4.411-3.589-8-8-8s-8 3.589-8 8 3.589 8 8 8zm0-14c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6z">
                </path>
                <path
                    d="M11.412 8.586c.379.38.588.882.588 1.414h2a3.977 3.977 0 0 0-1.174-2.828c-1.514-1.512-4.139-1.512-5.652 0l1.412 1.416c.76-.758 2.07-.756 2.826-.002z">
                </path>
            </svg>
        </div>
    </div>
    <div class="p-8 grid grid-cols-2 gap-4">
        <div class="text-xl mb-5 font-bold text-gray-700">AI Response for
            <span class="text-gray-100 bg-blue-500 p-1 capitalize inline-block -skew-y-3">{{ str_replace('_', ' ', auth()->user()->interest) }}</span>
        </div>

        <livewire:chart-component />

    </div>
    <!-- Companies hiring section start here -->
    <div class="p-8">

        <h3 class="text-xl mb-5 font-bold text-gray-700">Companies you may want to apply</h3>
        <div class="flex justify-between items-center mb-2">
            <div class="w-52 h-14  rounded-md  shadow-md flex justify-start items-center gap-5 ">
                <div>
                    <img src="google.png" width="40px" height="auto" alt="">
                </div>
                <div>
                    <p class="text-base font-medium">Google</p>
                    <p class="text-xs text-gray-500 font-medium">Software engineer</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-3">
                <button class="px-3 py-1 text-sm font-medium bg-gray-200 rounded-md">Contact</button>
            </div>
        </div>
        <div class="flex justify-between items-center">
            <div class="w-52 h-14  rounded-md  shadow-md flex justify-start items-center gap-5 mb-2 ">
                <div>
                    <img src="netflix.webp" width="40px" height="auto" alt="">
                </div>
                <div>
                    <p class="text-base font-medium">Netflix</p>
                    <p class="text-xs text-gray-500 font-medium">Seo Expert</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-3">
                <button class="px-3 py-1 text-sm font-medium bg-gray-200 rounded-md">Contact</button>
            </div>
        </div>
        <div class="flex justify-between items-center">
            <div class=" w-52 h-14 rounded-md  shadow-md flex justify-start items-center gap-5 ">
                <div>
                    <img src="microsoft-logo.webp" class="pl-1" width="45px" height="auto" alt="">
                </div>
                <div>
                    <p class="text-base font-medium">AliBaba</p>
                    <p class="text-xs text-gray-500 font-medium">Web Developer</p>
                </div>
            </div>
            <div class="flex justify-center items-center gap-3">
                <button class="px-3 py-1 text-sm font-medium bg-gray-200 rounded-md">Contact</button>
            </div>
        </div>
    </div>
</div>
