<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Techtrack') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <wireui:scripts />
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-poppins">
    <div class="flex w-full min-h-screen bg-gray-100">
        <!-- Sidebar -->
        <div class=" flex flex-col border-r-2 justify-between items-start text-gray-700 w-1/5">
            <div class="p-4 w-full">
                <img class="mx-auto mb-5" src="{{ asset('images/logo-2.png') }}" width="200px" height="auto"
                    alt="">
                <a href="/dashboard"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('dashboard') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        id="desktop">
                        <g>
                            <path
                                d="M19,19H5a4,4,0,0,1-4-4V5A4,4,0,0,1,5,1H19a4,4,0,0,1,4,4V15A4,4,0,0,1,19,19ZM5,3A2,2,0,0,0,3,5V15a2,2,0,0,0,2,2H19a2,2,0,0,0,2-2V5a2,2,0,0,0-2-2Z">
                            </path>
                            <path d="M15,23H9V17h6Zm-4-2h2V19H11Z"></path>
                            <rect width="12" height="2" x="6" y="21" rx="1"></rect>
                            <rect width="20" height="2" x="2" y="13"></rect>
                        </g>
                    </svg>
                    Dashboard
                </a>
                <a href="/roadmaps"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('roadmaps') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path
                            d="M19.447 3.718l-6-3a1 1 0 0 0-.895 0l-5.63 2.815-5.606-1.869A1 1 0 0 0 0 2.613v13.001c0 .379.214.725.553.894l6 3a1.006 1.006 0 0 0 .894 0l5.63-2.814 5.606 1.869a.999.999 0 0 0 1.316-.949V4.612a.996.996 0 0 0-.552-.894zM8 5.231l4-2v11.763l-4 2V5.231zM2 4l4 1.333v11.661l-4-2V4zm16 12.227l-4-1.334V3.231l4 2v10.996z">
                        </path>
                    </svg>
                    My Roadmaps
                </a>
                <a href="/technologies"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('technologies') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd"
                        stroke-linejoin="round" stroke-miterlimit="2" clip-rule="evenodd" viewBox="0 0 1069 1069"
                        id="chip">
                        <rect width="1066.67" height="1066.67" x=".313" y="1.665" fill="none"></rect>
                        <path
                            d="M637.617,80.048c0,0 -201.661,0 -353.97,0c-109.306,0 -197.917,88.61 -197.917,197.916c0,146.98 0,360.055 0,507.035c0,109.306 88.61,197.916 197.916,197.916c146.98,0 360.055,0 507.035,0c109.306,-0 197.916,-88.61 197.916,-197.916c0,-167.16 0,-399.958 0,-399.958c0,-17.248 -14.003,-31.25 -31.25,-31.25c-17.247,-0 -31.25,14.002 -31.25,31.25l0,399.956c-0.001,74.79 -60.628,135.417 -135.414,135.418c-0.004,0 -507.036,0 -507.036,0c-74.789,-0.001 -135.416,-60.628 -135.417,-135.414c0,-0.004 0,-507.036 0,-507.036c0.001,-74.79 60.629,-135.417 135.417,-135.417c152.309,0 353.97,0 353.97,0c17.247,0 31.25,-14.003 31.25,-31.25c0,-17.247 -14.003,-31.25 -31.25,-31.25Zm-381.703,618.1c-0,63.283 51.3,114.584 114.583,114.584c90.867,-0 235.433,-0 326.3,-0c63.282,-0 114.583,-51.301 114.583,-114.584c-0,-90.867 -0,-235.433 -0,-326.299c-0,-63.283 -51.301,-114.584 -114.583,-114.584c-90.867,0 -235.433,0 -326.3,0c-63.283,0 -114.583,51.301 -114.583,114.583c-0,90.867 -0,235.433 -0,326.3Zm62.5,0.002l-0,-326.301c-0,-28.765 23.318,-52.084 52.083,-52.084c90.867,0 235.433,0 326.3,0c28.764,0 52.083,23.319 52.083,52.084c-0,90.866 -0,235.432 -0,326.299c-0,28.765 -23.319,52.084 -52.083,52.084c-90.867,-0 -235.433,-0 -326.3,-0c-28.764,-0 -52.082,-23.318 -52.083,-52.082Zm123.824,-52.327l0,51.159c0,17.247 14.003,31.25 31.25,31.25c17.248,-0 31.25,-14.003 31.25,-31.25l0,-29.034c1.778,0.084 3.564,0.126 5.354,0.125c13.721,0 27.945,0 41.666,0c5.209,0.001 10.381,-0.354 15.48,-1.05l0,29.959c0,17.247 14.003,31.25 31.25,31.25c17.248,-0 31.25,-14.003 31.25,-31.25l0,-59.537c1.032,-0.958 2.046,-1.935 3.043,-2.932c2.593,-2.594 5.05,-5.299 7.366,-8.106l60.166,-0c17.248,-0 31.25,-14.003 31.25,-31.25c0,-17.248 -14.002,-31.25 -31.25,-31.25l-34.446,-0c0.315,-3.45 0.474,-6.925 0.474,-10.417l0,-41.666c0,-3.492 -0.159,-6.967 -0.474,-10.417l34.446,-0c17.248,-0 31.25,-14.003 31.25,-31.25c0,-17.248 -14.002,-31.25 -31.25,-31.25l-60.166,-0c-2.316,-2.807 -4.773,-5.512 -7.366,-8.106c-0.997,-0.997 -2.011,-1.974 -3.043,-2.932l0,-59.537c0,-17.248 -14.002,-31.25 -31.25,-31.25c-17.247,-0 -31.25,14.002 -31.25,31.25l0,29.958c-5.099,-0.695 -10.272,-1.05 -15.48,-1.05c-13.721,0 -27.945,0 -41.666,0c-1.79,0 -3.576,0.042 -5.354,0.125l0,-29.033c0,-17.248 -14.002,-31.25 -31.25,-31.25c-17.247,-0 -31.25,14.002 -31.25,31.25l0,51.158c-4.64,3.41 -9.046,7.187 -13.169,11.311c-2.594,2.594 -5.05,5.299 -7.366,8.106l-50.04,-0c-17.247,-0 -31.25,14.002 -31.25,31.25c0,17.247 14.003,31.25 31.25,31.25l24.319,-0c-0.315,3.45 -0.474,6.925 -0.474,10.417c0,13.721 0,27.945 0,41.666c-0,3.492 0.159,6.967 0.474,10.417l-24.319,-0c-17.247,-0 -31.25,14.002 -31.25,31.25c0,17.247 14.003,31.25 31.25,31.25l50.04,-0c2.316,2.807 4.772,5.512 7.366,8.106c4.123,4.123 8.529,7.9 13.169,11.31Zm161.603,-133.999l0,41.666c0,13.813 -5.487,27.061 -15.255,36.829c-9.767,9.767 -23.015,15.255 -36.828,15.254l-41.667,0c-13.813,0.001 -27.061,-5.487 -36.828,-15.254c-9.768,-9.768 -15.255,-23.016 -15.255,-36.829l0,-41.666c-0,-13.814 5.487,-27.061 15.255,-36.829c9.767,-9.768 23.015,-15.255 36.828,-15.255l41.667,0c13.813,0 27.061,5.487 36.828,15.255c9.768,9.768 15.255,23.015 15.255,36.829Z">
                        </path>
                        <path fill-opacity=".5"
                            d="M988.597,277.964c-0,-109.306 -88.61,-197.916 -197.916,-197.916c-146.98,0 -360.055,0 -507.035,0c-109.306,0 -197.916,88.61 -197.916,197.916c0,146.98 0,360.055 0,507.035c0,109.306 88.61,197.916 197.916,197.916c146.98,0 360.055,0 507.035,0c109.306,-0 197.916,-88.61 197.916,-197.916l0,-507.035Zm-62.5,392.451l0,-392.452c-0.001,-74.787 -60.628,-135.414 -135.416,-135.415c-0,0 -507.033,0 -507.036,0c-74.787,0.001 -135.414,60.628 -135.415,135.417l0,392.45l52.083,0c17.248,0 31.25,14.003 31.25,31.25c0,17.247 -14.002,31.25 -31.25,31.25l-52.083,0l0,52.086c0.001,74.786 60.628,135.413 135.417,135.414c-0,0 507.032,0 507.036,0c74.786,-0.001 135.413,-60.628 135.414,-135.416l0,-52.084l-59.117,0c-17.247,0 -31.25,-14.003 -31.25,-31.25c0,-17.247 14.003,-31.25 31.25,-31.25l59.117,0Z">
                        </path>
                    </svg>
                    Technologies
                </a>
                <a href="/career"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg"
                        enable-background="new 0 0 100 100" viewBox="0 0 100 100">
                        <path
                            d="M90,36.5h-4.5V14c0-0.83-0.67-1.5-1.5-1.5c-0.65,0-1.2,0.42-1.41,1H68c-0.18,0-0.35,0.1-0.44,0.26s-0.08,0.36,0.02,0.51
                        L71.4,20l-3.81,5.72c-0.1,0.15-0.11,0.35-0.02,0.51S67.82,26.5,68,26.5h14.5v10H70c-0.83,0-1.5,0.67-1.5,1.5v10.5H50
                        c-0.83,0-1.5,0.67-1.5,1.5v10.5H30c-0.83,0-1.5,0.67-1.5,1.5v10.5H10c-0.83,0-1.5,0.67-1.5,1.5v12c0,0.83,0.67,1.5,1.5,1.5h80
                        c0.83,0,1.5-0.67,1.5-1.5V38C91.5,37.17,90.83,36.5,90,36.5z M88.5,84.5h-77v-9H30c0.83,0,1.5-0.67,1.5-1.5V63.5H50
                        c0.83,0,1.5-0.67,1.5-1.5V51.5H70c0.83,0,1.5-0.67,1.5-1.5V39.5h17V84.5z M9.57,45.94c-0.14-0.24-0.06-0.54,0.17-0.68l30.43-18.28
                        l-2.83-4.71c-0.1-0.17-0.09-0.38,0.02-0.54c0.11-0.16,0.3-0.24,0.5-0.21l18.18,3.08c0.14,0.02,0.27,0.11,0.35,0.24
                        c0.08,0.13,0.09,0.28,0.05,0.42l-5.82,17.5c-0.06,0.19-0.23,0.32-0.42,0.34c-0.19,0.02-0.38-0.07-0.48-0.24l-2.83-4.71L16.26,56.43
                        c-0.08,0.05-0.17,0.07-0.26,0.07c-0.04,0-0.08-0.01-0.13-0.02c-0.13-0.03-0.24-0.12-0.31-0.23L9.57,45.94z">
                        </path>
                    </svg>
                    My Career
                </a>
                <a href="/companies"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" width="39.004"
                        height="42" enable-background="new 0 0 39.004 42" overflow="visible" viewBox="0 0 39.004 42"
                        id="organization">
                        <path
                            d="M19.508 0c-2.477 0-4.504 2.023-4.504 4.5 0 1.453.699 2.75 1.777 3.574C14.41 9.125 12.75 11.5 12.75 14.25c0 .418.336.754.754.754h5.25V22.5H8.258c-2.063 0-3.754 1.691-3.754 3.754v5.996C4.5 32.664 4.84 33.004 5.254 33c.414 0 .75-.336.75-.75v-5.996C6.004 25 7.004 24 8.258 24h10.496v8.25c0 .414.336.754.754.75.414 0 .746-.336.746-.75V24h10.504c1.25 0 2.246 1 2.246 2.254v5.996c0 .414.332.75.746.75.418.004.754-.336.754-.75v-5.996c0-2.063-1.684-3.754-3.746-3.754H20.254v-7.496h5.25c.414 0 .754-.336.75-.754 0-2.75-1.656-5.125-4.023-6.176C23.305 7.25 24 5.953 24 4.5 24 2.023 21.984 0 19.508 0zM5.254 37.504c1.785 0 3.301 1.266 3.676 2.992H1.574C1.945 38.773 3.469 37.504 5.254 37.504zM5.254 36.004C2.363 36.004 0 38.359 0 41.25.004 41.664.34 42 .754 42h9.004c.41-.004.746-.336.746-.75C10.504 38.359 8.145 36.004 5.254 36.004z">
                        </path>
                        <path
                            d="M5.254 33c.84 0 1.5.664 1.5 1.504 0 .836-.66 1.5-1.5 1.5-.836 0-1.5-.664-1.5-1.5C3.754 33.664 4.418 33 5.254 33zM5.254 31.5c-1.645 0-3 1.355-3 3.004 0 1.645 1.355 3 3 3 1.648 0 3.004-1.355 3.004-3C8.258 32.855 6.902 31.5 5.254 31.5zM19.508 37.504c1.785 0 3.297 1.266 3.676 2.992h-7.36C16.199 38.773 17.723 37.504 19.508 37.504zM19.508 36.004c-2.891 0-5.254 2.355-5.254 5.246 0 .414.336.75.75.75h9.004c.414-.004.746-.336.746-.75C24.754 38.359 22.398 36.004 19.508 36.004z">
                        </path>
                        <path
                            d="M19.508 33c.836 0 1.5.664 1.5 1.504 0 .836-.664 1.5-1.5 1.5-.84 0-1.504-.664-1.504-1.5C18.004 33.664 18.668 33 19.508 33zM19.508 31.5c-1.649 0-3.004 1.355-3.004 3.004 0 1.645 1.355 3 3.004 3 1.645 0 2.992-1.355 2.992-3C22.5 32.855 21.152 31.5 19.508 31.5zM33.758 37.504c1.785 0 3.297 1.266 3.676 2.992h-7.359C30.449 38.773 31.973 37.504 33.758 37.504zM33.758 36.004c-2.891 0-5.254 2.355-5.254 5.246 0 .414.336.75.75.75h9.004c.414-.004.746-.336.746-.75C39.004 38.359 36.648 36.004 33.758 36.004z">
                        </path>
                        <path d="M33.75,33 M33.75,33c0.84,0,1.5,0.664,1.5,1.504c0,0.836-0.66,1.5-1.5,1.5c-0.836,0-1.492-0.664-1.492-1.5
                            C32.258,33.664,32.914,33,33.75,33z M33.75,31.5c-1.648,0-2.992,1.355-2.992,3.004c0,1.645,1.344,3,2.992,3s3.004-1.355,3.004-3
                            C36.754,32.855,35.398,31.5,33.75,31.5z">
                        </path>
                    </svg>
                    Companies
                </a>

            </div>
            <div class="p-4 w-full">
                <a href="/faq"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:text-black transition hover:bg-gray-200  cursor-pointer flex items-center w-full {{ request()->routeIs('') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        id="faq">
                        <path
                            d="M15 22a1 1 0 0 1-1-1c0-2.32 1.09-3.42 2.47-4.81l.69-.7c2.12-2.22 2.78-3.39 1.33-4.84a3.76 3.76 0 0 0-4.18-.94c-.85.35-1.31.93-1.31 1.29a1 1 0 0 1-2 0 3.69 3.69 0 0 1 2.54-3.14 5.78 5.78 0 0 1 6.36 1.38c3.07 3.06.23 6-1.3 7.63-.24.26-.48.5-.71.73C16.63 18.87 16 19.51 16 21a1 1 0 0 1-1 1Zm.71 2.71A1 1 0 0 0 16 24a1 1 0 1 0-2 0 1 1 0 0 0 1.71.71ZM30 16a14 14 0 1 0-14 14 14 14 0 0 0 14-14Zm-2 0A12 12 0 1 1 16 4a12 12 0 0 1 12 12Z">
                        </path>
                    </svg>
                    FAQ's
                </a>
                <a href="{{route('logout')}}"
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200   cursor-pointer flex items-center w-full ">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                        <path fill="#2b3344"
                            d="M20,5.5v14A2.5,2.5,0,0,1,17.5,22h-8A2.5,2.5,0,0,1,7,19.5v-1a.5.5,0,0,1,1,0v1A1.5,1.5,0,0,0,9.5,21h8A1.5,1.5,0,0,0,19,19.5V5.5A1.5,1.5,0,0,0,17.5,4h-8A1.5,1.5,0,0,0,8,5.5v1a.5.5,0,0,1-1,0v-1A2.5,2.5,0,0,1,9.5,3h8A2.5,2.5,0,0,1,20,5.5ZM10.5,18a.433.433,0,0,0,.19-.04A.5.5,0,0,0,11,17.5V15h5.5a.5.5,0,0,0,.5-.5v-4a.5.5,0,0,0-.5-.5H11V7.5a.5.5,0,0,0-.31-.46.474.474,0,0,0-.54.11l-5,5a.483.483,0,0,0,0,.7l5,5A.469.469,0,0,0,10.5,18Z">
                        </path>
                    </svg>
                    Logout
                </a>
            </div>
        </div>
        <!-- Page Content -->
        {{ $slot }}
    </div>
</body>

</html>
