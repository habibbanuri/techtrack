<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Techtrack') }}</title>

    <!-- Fonts -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <wireui:scripts />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="antialiased font-poppins" x-data="{ modelOpen: false }">
    <div class="flex w-full min-h-screen bg-gray-100 fixed">
        <!---------------------------- Sidebar start here----------------------------- -->
        <div class=" flex flex-col border-r-2 justify-between items-start text-gray-700 w-1/5 max-h-screen">
            {{-- <div class="fixed"> --}}

            <div class="p-4 w-full">
                <img class="mx-auto mb-5" src="{{ asset('images/logo-2.png') }}" width="200px" height="auto"
                    alt="">
                <a href="/dashboard" wire:navigate
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
                <a href="/technologies" wire:navigate
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('technologies') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                        class="">
                        <g>
                            <path
                                d="M75 181c27.646 0 52.965-15.134 66.077-39.496C147.678 129.24 163.237 121 179.794 121h32.411c16.208 0 31.013 8.048 37.717 20.504C263.035 165.866 288.354 181 316 181c41.355 0 75-33.645 75-75s-33.645-75-75-75c-27.646 0-52.965 15.134-66.077 39.496C243.219 82.952 228.414 91 212.206 91h-32.411c-16.557 0-32.116-8.24-38.717-20.504C127.965 46.134 102.646 31 75 31 33.645 31 0 64.645 0 106s33.645 75 75 75zm201.34-96.286A44.99 44.99 0 0 1 316 61c24.813 0 45 20.187 45 45s-20.187 45-45 45a44.99 44.99 0 0 1-39.66-23.714c-4.51-8.379-10.775-15.568-18.293-21.286 7.517-5.718 13.783-12.908 18.293-21.286zM75 61a44.99 44.99 0 0 1 39.66 23.714c4.48 8.324 10.917 15.534 18.682 21.286-7.766 5.753-14.202 12.962-18.682 21.286A44.99 44.99 0 0 1 75 151c-24.813 0-45-20.187-45-45s20.187-45 45-45z"
                                opacity="1" data-original="#000000"></path>
                            <path
                                d="M301 91h30v30h-30zM75 481c27.646 0 52.965-15.134 66.077-39.496C147.781 429.049 162.586 421 178.794 421h33.411c16.208 0 31.013 8.049 37.717 20.504C263.035 465.866 288.354 481 316 481c41.355 0 75-33.645 75-75s-33.645-75-75-75c-27.646 0-52.965 15.134-66.077 39.496C243.219 382.951 228.414 391 212.206 391h-33.411c-16.208 0-31.013-8.049-37.717-20.504C127.965 346.134 102.646 331 75 331c-41.355 0-75 33.645-75 75s33.645 75 75 75zm201.34-96.286A44.989 44.989 0 0 1 316 361c24.813 0 45 20.187 45 45s-20.187 45-45 45a44.989 44.989 0 0 1-39.66-23.714c-4.51-8.379-10.775-15.568-18.293-21.286 7.517-5.718 13.783-12.908 18.293-21.286zM75 361a44.989 44.989 0 0 1 39.66 23.714c4.51 8.379 10.775 15.568 18.293 21.286-7.518 5.718-13.783 12.908-18.293 21.286A44.989 44.989 0 0 1 75 451c-24.813 0-45-20.187-45-45s20.187-45 45-45z"
                                opacity="1" data-original="#000000"></path>
                            <path
                                d="M301 391h30v30h-30zM369.923 220.496C363.219 232.952 348.414 241 332.206 241h-32.412c-16.208 0-31.013-8.049-37.717-20.504C248.965 196.134 223.646 181 196 181c-41.355 0-75 33.645-75 75s33.645 75 75 75c27.646 0 52.965-15.134 66.077-39.496C268.781 279.049 283.586 271 299.794 271h32.412c16.208 0 31.013 8.048 37.717 20.504C383.035 315.866 408.354 331 436 331c41.457 0 76-33.534 76-75 0-41.457-34.534-75-76-75-27.646 0-52.965 15.134-66.077 39.496zm-134.263 56.79A44.989 44.989 0 0 1 196 301c-24.813 0-45-20.187-45-45s20.187-45 45-45a44.989 44.989 0 0 1 39.66 23.714c4.51 8.379 10.775 15.568 18.293 21.286-7.518 5.718-13.783 12.908-18.293 21.286zm160.679-42.572A44.994 44.994 0 0 1 436 211c24.935 0 46 20.607 46 45s-21.065 45-46 45a44.994 44.994 0 0 1-39.661-23.714c-4.509-8.379-10.775-15.569-18.292-21.286 7.517-5.718 13.783-12.908 18.292-21.286z"
                                opacity="1" data-original="#000000"></path>
                            <path d="M181 241h30v30h-30z" opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    Technologies
                </a>
                <a href="/roadmaps" wire:navigate
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('roadmaps') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve"
                        class="hovered-paths">
                        <g>
                            <path
                                d="M353.12 395.46a89.516 89.516 0 0 0-2.98 22.9c0 7.91 1.05 15.59 2.98 22.9h-94.56c9.78-13.66 9.78-32.17 0-45.81h94.56zm-161.38-44.22c-8.93-8.96-23.44-8.96-32.4 0-8.96 8.93-8.96 23.44 0 32.4l11.82 11.82h-67.04c-16.02 0-30.59-6.58-41.16-17.15s-17.12-25.14-17.12-41.13c0-16.02 6.55-30.56 17.12-41.13s25.14-17.15 41.16-17.15h39.34c-9.78-13.66-9.78-32.17 0-45.84h-39.34c-28.66 0-54.71 11.71-73.56 30.59C11.71 282.5 0 308.53 0 337.18c0 28.66 11.71 54.68 30.56 73.53s44.9 30.56 73.56 30.56h67.04l-11.82 11.82c-8.96 8.96-8.96 23.44 0 32.4s23.47 8.96 32.4 0l50.94-50.94c8.93-8.93 8.93-23.44 0-32.4zm39.12-72.34h67.04c28.66 0 54.68-11.71 73.56-30.56 18.85-18.85 30.56-44.87 30.56-73.53s-11.71-54.68-30.56-73.56c-18.88-18.85-44.9-30.56-73.56-30.56h-39.34c9.78 13.66 9.78 32.17 0 45.84h39.34c16.02 0 30.59 6.58 41.13 17.15 10.57 10.57 17.15 25.11 17.15 41.13 0 15.99-6.58 30.56-17.15 41.13-10.54 10.57-25.11 17.12-41.13 17.12h-67.04l11.82-11.79c8.93-8.96 8.93-23.47 0-32.4-8.96-8.96-23.47-8.96-32.4 0l-50.94 50.91c-8.96 8.96-8.96 23.47 0 32.4l50.94 50.94c8.93 8.96 23.44 8.96 32.4 0 8.93-8.96 8.93-23.47 0-32.4zM22.91 116.54h148.25l-11.82 11.82c-8.96 8.93-8.96 23.44 0 32.4 8.96 8.93 23.47 8.93 32.4 0l50.94-50.94c8.93-8.93 8.93-23.44 0-32.4l-50.94-50.91c-8.93-8.96-23.44-8.96-32.4 0-8.96 8.93-8.96 23.44 0 32.4l11.82 11.79H22.91C10.26 70.7 0 80.96 0 93.63c0 12.64 10.26 22.91 22.91 22.91zM512 418.37c0 40.02-32.63 72.68-72.65 72.68-40.05 0-72.68-32.66-72.68-72.68 0-40.03 32.63-72.68 72.68-72.68 40.02 0 72.65 32.65 72.65 72.68zm-33.08-25.74c-3.2-3.2-8.45-3.2-11.68 0l-33.93 33.96-21.88-21.91c-3.23-3.23-8.48-3.23-11.68 0a8.25 8.25 0 0 0 0 11.68l27.72 27.75c3.23 3.2 8.45 3.2 11.68 0l39.77-39.8a8.25 8.25 0 0 0 0-11.68z"
                                opacity="1" data-original="#000000" class="hovered-path"></path>
                        </g>
                    </svg>
                    My Roadmaps
                </a>
                {{-- <a href="/career" wire:navigate
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
                </a> --}}
                <a href="/companies" wire:navigate
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200 hover:text-black transition  cursor-pointer flex items-center w-full {{ request()->routeIs('companies') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" version="1.1"
                        xmlns:xlink="http://www.w3.org/1999/xlink" width="25" height="25" x="0" y="0"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512" xml:space="preserve">
                        <g>
                            <path
                                d="m498.798 435.272-58.963-58.847c26.356-73.317-34.136-149.261-111.841-139.621-12.843-10.532-28.23-17.267-44.804-19.534l-42.194-5.771v-6.57c21.504-16.305 34.729-40.107 37.882-65.799l3.523-28.715C289.588 51.826 243.749 0 184.52 0h-7.047C118.208 0 72.41 51.866 79.592 110.416l3.523 28.715c3.156 25.713 16.394 49.507 37.882 65.799v6.562l-43.09 5.842C33.255 223.387 0 261.539 0 306.519V497c0 8.284 6.716 15 15 15h330.993c8.284 0 15-6.716 15-15v-52.919a104.065 104.065 0 0 0 15.162-4.144l59.028 58.91c17.538 17.503 46.077 17.504 63.616 0 17.6-17.564 17.603-46.007-.001-63.575zM415.991 341c0 41.355-33.644 75-74.998 75s-74.998-33.645-74.998-75 33.644-75 74.998-75 74.998 33.645 74.998 75zM150.997 220.423a99.864 99.864 0 0 0 59.999 0V226c0 16.542-13.458 30-29.999 30s-29.999-13.458-29.999-30v-5.577zM177.473 30h7.047c34.755 0 64.333 26.022 68.181 61h-39.68l-20.502-24.603c-6.426-7.71-18.453-7.043-24.003 1.282L152.97 91h-43.678c3.849-34.983 33.431-61 68.181-61zm-64.581 105.477L111.116 121h49.881c5.016 0 9.699-2.507 12.48-6.68l8.856-13.285 12.139 14.567a14.998 14.998 0 0 0 11.523 5.397h44.881l-1.776 14.477c-4.166 33.954-33.444 59.559-68.104 59.559s-63.938-25.604-68.104-59.558zM29.999 306.519c0-29.882 22.329-55.442 51.938-59.456l41.098-5.572C129.883 267.09 153.268 286 180.995 286c27.724 0 51.107-18.907 57.958-44.501 44.047 6.024 43.997 5.725 50.727 7.922-55.937 31.467-70.432 104.253-32.687 154.509V482H105.998V361.272c0-8.284-6.716-15-15-15s-15 6.716-15 15V482H29.999zM286.994 482v-50.983a104.253 104.253 0 0 0 43.999 14.504V482zm190.613-4.387c-5.855 5.842-15.379 5.842-21.234 0l-52.602-52.497a105.913 105.913 0 0 0 21.193-21.149l52.644 52.54a14.889 14.889 0 0 1-.001 21.106z"
                                opacity="1" data-original="#000000"></path>
                        </g>
                    </svg>
                    Companies
                </a>

            </div>
            <div class="p-4 w-full">
                <a href="/#faq" wire:navigate
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:text-black transition hover:bg-gray-200  cursor-pointer flex items-center w-full {{ request()->routeIs('') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                        id="faq">
                        <path
                            d="M15 22a1 1 0 0 1-1-1c0-2.32 1.09-3.42 2.47-4.81l.69-.7c2.12-2.22 2.78-3.39 1.33-4.84a3.76 3.76 0 0 0-4.18-.94c-.85.35-1.31.93-1.31 1.29a1 1 0 0 1-2 0 3.69 3.69 0 0 1 2.54-3.14 5.78 5.78 0 0 1 6.36 1.38c3.07 3.06.23 6-1.3 7.63-.24.26-.48.5-.71.73C16.63 18.87 16 19.51 16 21a1 1 0 0 1-1 1Zm.71 2.71A1 1 0 0 0 16 24a1 1 0 1 0-2 0 1 1 0 0 0 1.71.71ZM30 16a14 14 0 1 0-14 14 14 14 0 0 0 14-14Zm-2 0A12 12 0 1 1 16 4a12 12 0 0 1 12 12Z">
                        </path>
                    </svg>
                    FAQ's
                </a>
                <a href="/profile" wire:navigate
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:text-black transition hover:bg-gray-200  cursor-pointer flex items-center w-full {{ request()->routeIs('profile') ? 'bg-gray-200 text-black' : '' }}">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                        id="edit">
                        <path
                            d="M15 4c0-.6-.4-1-1-1H7C4.8 3 3 4.8 3 7v10c0 2.2 1.8 4 4 4h10c2.2 0 4-1.8 4-4v-6c0-.6-.4-1-1-1s-1 .4-1 1v6c0 1.1-.9 2-2 2H7c-1.1 0-2-.9-2-2V7c0-1.1.9-2 2-2h7c.6 0 1-.4 1-1z">
                        </path>
                        <path
                            d="m20.3 2.3-8 8c-.4.4-.4 1 0 1.4.2.2.5.3.7.3s.5-.1.7-.3l8-8c.4-.4.4-1 0-1.4s-1-.4-1.4 0zM10 11H8c-.6 0-1 .4-1 1s.4 1 1 1h2c.6 0 1-.4 1-1s-.4-1-1-1zm-3 5c0 .6.4 1 1 1h8c.6 0 1-.4 1-1s-.4-1-1-1H8c-.6 0-1 .4-1 1z">
                        </path>
                    </svg>
                    Update profile
                </a>
                <a href="{{ route('logout') }}" wire:navigate
                    class="my-1 py-2 px-3 text-sm rounded-xl hover:bg-gray-200   cursor-pointer flex items-center w-full ">
                    <svg class="fill-blue-700 pr-3 size-8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                        <path fill="#2b3344"
                            d="M20,5.5v14A2.5,2.5,0,0,1,17.5,22h-8A2.5,2.5,0,0,1,7,19.5v-1a.5.5,0,0,1,1,0v1A1.5,1.5,0,0,0,9.5,21h8A1.5,1.5,0,0,0,19,19.5V5.5A1.5,1.5,0,0,0,17.5,4h-8A1.5,1.5,0,0,0,8,5.5v1a.5.5,0,0,1-1,0v-1A2.5,2.5,0,0,1,9.5,3h8A2.5,2.5,0,0,1,20,5.5ZM10.5,18a.433.433,0,0,0,.19-.04A.5.5,0,0,0,11,17.5V15h5.5a.5.5,0,0,0,.5-.5v-4a.5.5,0,0,0-.5-.5H11V7.5a.5.5,0,0,0-.31-.46.474.474,0,0,0-.54.11l-5,5a.483.483,0,0,0,0,.7l5,5A.469.469,0,0,0,10.5,18Z">
                        </path>
                    </svg>
                    Logout
                </a>
            </div>
            {{-- </div> --}}
        </div>

        <div class="flex-1 text-gray-700">
            <div class="flex justify-between items-center border-b-2 px-8 py-4">
                <div class="flex items-center">
                    <div class="p-3 border-2 rounded-full border-blue-200 mr-2">
                        <svg class="fill-blue-500 size-8 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"
                            id="user">
                            <defs>
                                <linearGradient id="a" x1="9.973" x2="25.477" y1="33.089"
                                    y2="6.236" gradientUnits="userSpaceOnUse">
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
                {{-- <livewire:search-component /> --}}
            </div>

            <!-- Page Content -->


            {{ $slot }}

        </div>
    </div>

    {{-- modal --}}

    {{-- <div x-show="modelOpen" class="fixed inset-0 z-50 overflow-y-auto" aria-labelledby="modal-title" role="dialog"
        aria-modal="true">
        <div class="flex items-end justify-center min-h-screen px-4 text-center md:items-center sm:block sm:p-0">
            <div x-cloak @click="modelOpen = false" x-show="modelOpen"
                x-transition:enter="transition ease-out duration-300 transform" x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100" x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0"
                class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-40" aria-hidden="true">
            </div>

            <div x-cloak x-show="modelOpen" x-transition:enter="transition ease-out duration-300 transform"
                x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave="transition ease-in duration-200 transform"
                x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                class="inline-block w-full p-8 my-20 overflow-y-auto text-left transition-all transform bg-white rounded-lg shadow-xl max-w-xl lg:max-w-3xl max-h-[80vh]">
                <div class="flex items-center justify-between space-x-4">
                    <h1 class="text-xl font-bold text-gray-800 ">Generate Roadmap</h1>

                    <button @click="modelOpen = false" class="text-gray-600 focus:outline-none hover:text-gray-700">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </button>
                </div>


                <livewire:generate-roadmap />


                <div class="modal-footer py-4 flex items-center justify-end">

                    <button wire:click="save" type="button"
                        class=" flex items-center bg-gradient-to-r from-indigo-500  to-blue-500  hover:bg-right hover:bg-cover hover:bg-no-repeat hover:bg-gradient-to-r hover:from-blue-500 hover:to-indigo-500 text-white hover:shadow-md rounded-2xl py-2 px-12 text-center transition-all duration-700 border border-indigo-500">
                        Save <span wire:loading class="mx-1 fill-current"><svg width="20" height="20"
                                fill="currentColor" class="mr-2 animate-spin" viewBox="0 0 1792 1792"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M526 1394q0 53-37.5 90.5t-90.5 37.5q-52 0-90-38t-38-90q0-53 37.5-90.5t90.5-37.5 90.5 37.5 37.5 90.5zm498 206q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-704-704q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm1202 498q0 52-38 90t-90 38q-53 0-90.5-37.5t-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-964-996q0 66-47 113t-113 47-113-47-47-113 47-113 113-47 113 47 47 113zm1170 498q0 53-37.5 90.5t-90.5 37.5-90.5-37.5-37.5-90.5 37.5-90.5 90.5-37.5 90.5 37.5 37.5 90.5zm-640-704q0 80-56 136t-136 56-136-56-56-136 56-136 136-56 136 56 56 136zm530 206q0 93-66 158.5t-158 65.5q-93 0-158.5-65.5t-65.5-158.5q0-92 65.5-158t158.5-66q92 0 158 66t66 158z">
                                </path>
                            </svg></span>
                    </button>
                </div>
            </div>
        </div>
    </div> --}}

    @livewireScripts
</body>

</html>
