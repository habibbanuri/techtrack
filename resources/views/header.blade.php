<header class="px-24">
    <nav
        class=" z-24 w-full bg-white/90  backdrop-blur navbar shadow-2xl shadow-gray-600/5 border-b border-gray-100  peer-checked:navbar-active">
        <div class="xl:container m-auto px-6 md:px-24 lg:px-6">
            <div class="flex flex-wrap items-center justify-between gap-6 md:py-3 md:gap-0 lg:py-5">
                <a class="w-[15rem] relative z-10" href="/" wire:navigate>
                    <img class="" src="logo.png" alt="logo">
                </a>
                <div class="text-gray-600  lg:pr-4">
                    <ul class="space-y-6 tracking-wide font-medium text-base lg:text-sm lg:flex lg:space-y-0">
                        <li>
                            <a href="/" class="block md:px-4 transition hover:text-primary ">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="/#faq" class="block md:px-4 transition hover:text-primary ">
                                <span>FAQ's</span>
                            </a>
                        </li>
                        <li>
                            <a href="/about" class="block md:px-4 transition hover:text-primary " wire:navigate>
                                <span>About</span>
                            </a>
                        </li>
                        {{-- <li>
                            <a href="/contact-us" class="block md:px-4 transition hover:text-primary ">
                                <span>Contact</span>
                            </a>
                        </li> --}}
                        {{-- <li>
                            <a href="#" class="block md:px-4 transition hover:text-primary ">
                                <span>Help</span>
                            </a>
                        </li> --}}
                    </ul>
                </div>
                <div
                    class="w-full space-y-2 border-primary/10  flex flex-col -ml-1 sm:flex-row lg:space-y-0 md:w-max lg:border-l">
                    <a href="/register" wire:navigate
                        class="relative flex h-9 ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full before:bg-gradient-to-r from-blue-600 to-cyan-500 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                        <span class="relative text-sm font-semibold text-white ">Get
                            started</span>
                    </a>
                </div>


            </div>
        </div>
    </nav>
</header>
