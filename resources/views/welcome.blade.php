<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Techtrack Advisor</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{-- <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
    <div class="flex lg:justify-center lg:col-start-2">
        <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
                d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z"
                fill="currentColor" />
        </svg>
    </div>
    @if (Route::has('login'))
        <livewire:welcome.navigation />
    @endif
</header> --}}

<body class="antialiased font-poppins ">

    <header class="px-12">
        <nav
            class=" z-20 w-full bg-white/90  backdrop-blur navbar shadow-2xl shadow-gray-600/5 border-b border-gray-100  peer-checked:navbar-active">
            <div class="xl:container m-auto px-6 md:px-12 lg:px-6">
                <div class="flex flex-wrap items-center justify-between gap-6 md:py-3 md:gap-0 lg:py-5">
                    {{-- <div class="w-full items-center flex justify-between lg:w-auto"> --}}
                    <a class="w-[15rem] relative z-10" href="/" wire:navigate>
                        <img class="" src="{{ asset('images/logo-2.png') }}" alt="logo">
                    </a>
                    {{-- </div> --}}
                    <div class="text-gray-600  lg:pr-4">
                        <ul class="space-y-6 tracking-wide font-medium text-base lg:text-sm lg:flex lg:space-y-0">
                            <li>
                                <a href="#"
                                    class="block md:px-4 transition hover:text-primary ">
                                    <span>Home</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block md:px-4 transition hover:text-primary ">
                                    <span>Portfolio</span>
                                </a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block md:px-4 transition hover:text-primary ">
                                    <span>Services</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div
                        class="w-full space-y-2 border-primary/10  flex flex-col -ml-1 sm:flex-row lg:space-y-0 md:w-max lg:border-l">

                        <a href="/register" wire:navigate
                            class="relative flex h-9 ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full before:bg-blue-600 -400 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                            <span class="relative text-sm font-semibold text-white ">Get
                                started</span>
                        </a>
                    </div>

                </div>
            </div>
        </nav>
    </header>

    <div class="bg-white relative pt-10 pb-36  px-12">
        <div class="relative xl:container m-auto px-6 md:px-12 lg:px-6">
            <h1
                class="sm:mx-auto sm:w-10/12 md:w-2/3 font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-7xl">
                Your career in Pakistan's <br class="lg:block hidden"> <span
                    class="relative text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500  ">Tech Industry</span>.</h1>
            <div class="lg:flex">
                <div
                    class="relative mt-8 md:mt-16 space-y-8 sm:w-10/12 md:w-2/3 lg:ml-0 sm:mx-auto text-center lg:text-left lg:mr-auto lg:w-7/12">
                    <p class="sm:text-lg text-gray-700  lg:w-11/12">
                        Discover TechTrack Advisor – your friendly tech career navigator. Stay updated on trends, get a
                        personalized learning plan, and find local job opportunities. Your journey in tech, made simple
                        and exciting.
                    </p>
                    <span class="block font-semibold text-gray-500 ">The best companion bot for your
                        chat app.</span>
                    {{-- <div class="grid grid-cols-3 space-x-4 md:space-x-6 md:flex md:justify-center lg:justify-start">
                        <a aria-label="add to slack" href="#"
                            class="p-4 border border-gray-200   rounded-full duration-300 hover:border-cyan-400 hover:shadow-lg hover:shadow-cyan-600/20 -300/30">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6 h-6"
                                    src="https://tailus.io/sources/blocks/tech-startup/preview/images/slack.png"
                                    alt="slack logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block Slack</span>
                            </div>
                        </a>
                        <a aria-label="add to chat" href="#"
                            class="p-4 border border-gray-200    rounded-full duration-300 hover:border-green-400 hover:shadow-lg hover:shadow-lime-600/20 -300/30">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6 h-6"
                                    src="https://tailus.io/sources/blocks/tech-startup/preview/images/chat.png"
                                    alt="chat logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block Google Chat</span>
                            </div>
                        </a>
                        <a aria-label="add to zoom" href="#"
                            class="p-4 border border-gray-200    rounded-full duration-300 hover:border-blue-400 hover:shadow-lg hover:shadow-blue-600/20 -300/30">
                            <div class="flex justify-center space-x-4">
                                <img class="w-6 h-6"
                                    src="https://tailus.io/sources/blocks/tech-startup/preview/images/zoom.png"
                                    alt="chat logo" loading="lazy" width="128" height="128">
                                <span class="hidden font-medium md:block Zoom</span>
                            </div>
                        </a>
                    </div> --}}

                    {{-- <div class="">
                        🔥🌟
                        <span>Other integrations :</span>
                        <a href="#" class="font-semibold text-gray-700 ">Discord,</a>
                        <a href="#" class="font-semibold text-gray-700 ">Telegram</a>
                    </div>

                    <div class="pt-12 flex gap-6 lg:gap-12 justify-between grayscale lg:w-2/3">
                        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/airbnb.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/ge.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/coty.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/clients/microsoft.svg"
                            class="h-8 sm:h-10 w-auto lg:h-12" alt="" />
                    </div> --}}
                </div>
                <div class="mt-12 md:mt-0 lg:absolute -right-10 lg:w-1/2 top-12">
                    <div class="relative w-full">
                        <div aria-hidden="true"
                            class="absolute scale-75 md:scale-110 inset-0 m-auto w-full h-full md:w-96 md:h-96 rounded-full rotate-45 bg-gradient-to-r from-sky-500 to-cyan-300 blur-3xl">
                        </div>
                        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/globalization-cuate.svg"
                            class="relative w-full" alt="wath illustration" loading="lazy" width="320"
                            height="280">
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- Persolalized Guidnes section start here -->
    <section class='w-full h-[50%] mt-28 px-16'>
        <div class='flex justify-start items-center'>
            <div class='mr-14 w-[50%]'>
                <p class='font-bold text-[40px]'>Your Personalized <br /> Tech Career Journey<br /> Starts Here </p>
            </div>
            {{-- <div class='w-[50%] '>
                <p class='mb-5'>TechTrack Advisor is your friendly guide in the world of technology, providing
                    personalized guidance and real-time updates on the latest tech trends. Start your journey today and
                    unlock endless possibilities.</p>
                <!-- <button class='px-6 py-3 bg-primary-blueColor text-white mr-5 hover:bg-white hover:text-black hover:border-2 border-black hover:duration-400  mt-5 '>Get Started</button>  -->
                <button type="button"
                    class="px-6 py-3 rounded-sm text-white text-sm tracking-wider font-medium outline-none hover:border-2  hover:border-blue-600   bg-blue-600 hover:bg-transparent hover:text-black transition-all duration-100 mr-3 ">Get
                    Started</button>
                <button type="button"
                    class="px-6 py-3 rounded-sm text-black text-sm tracking-wider font-medium outline-none border-2 border-blue-600  hover:text-black transition-all duration-100 ">Learn
                    More</button>
            </div> --}}
        </div>
    </section>
    <!-- Career Guide Section start here -->
    <section class='w-full h-[70%]   py-10 px-16'>
        <div class='grid grid-cols-1 md:grid-cols-2 gap-2 items-center'>
            <div class='mr-10'>
                <div class='w-[500px] mb-5'>
                    <p class='text-[30px] font-bold'>Create Your Personalized Tech<br /> Career Plan and
                        Achieve Your <br />Goals</p>
                </div>
                <div class='w-[500px]'>
                    <p>Our platform allows you to easily create a personalized plan based on your likes and career
                        goals. With our interactive elements and algorithm-driven suggestions, you'll be on the right
                        path to success.</p>
                </div>

            </div>
            <div class=''>
                <img src="student-library.jpg" alt="" class='w-[400px] h-[500px]' />
            </div>
        </div>
    </section>
    <!-- Find Companies section start here -->
    <section class='px-16 pt-16 h-[450px] '>
        <div class='grid grid-cols-1 grid-rows-2 md:grid-cols-2  items-center'>
            <div class='w-full h-[400px] '>
                <p class='text-start'>Discover</p>
                <p class='text-start text-[30px] font-bold'>Find local companies and <br /> Oportunities</p>
            </div>
            <div class='w-full h-[400px] '>
                <p class='mb-10'>TechTrack Advisor helps you discover local companies and opportunities that align
                    with
                    your career path. Explore a personalized tech career journey with us..</p>
                <div class='flex justify-center items-center mb-10 '>
                    <div>
                        <p class='text-[30px] mb-3 text-blue-600'><i class="fa-solid fa-parachute-box"></i></p>
                        <p class='font-bold'>Asist</p>
                        <p class=''>Discover local companies and job opportunities that match your career goals.
                        </p>
                        <div class='flex justify-start items-center mt-5 '>
                            <button
                                class='relative group overflow-hidden text-sm font-medium px-6 py-[10px] rounded-sm flex space-x-2 items-center hover:border-2  hover:border-blue-600 border-2 border-blue-600 mr-4 bg-blue-600 text-white hover:bg-white hover:text-black
                            duration-100 '>Sign
                                Up</button>

                            <button
                                class="relative group overflow-hidden text-sm font-medium px-3 py-[10px] rounded-sm flex space-x-2 items-center hover:border-2  hover:border-blue-600 border-2 border-blue-600">
                                <span class="relative text-sm text-black ">Learn More</span>
                                <div class="flex items-center -space-x-3 translate-x-3">
                                    <div
                                        class="w-2.5 h-[1.6px] rounded-sm bg-black origin-left scale-x-0 transition duration-300 group-hover:scale-x-100">
                                    </div>
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-5 w-5 stroke-black -translate-x-2 transition duration-300 group-hover:translate-x-0"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class='ml-5'>
                        <p class='text-[30px] mb-3 text-blue-600'><i class="fa-solid fa-parachute-box"></i></p>
                        <p class='font-bold'>Align</p>
                        <p class='mb-10'>Explore company profiles and job opportunities that align with
                            your career goals.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="overflow-hidden relative">
        <div class='absolute inset-0 bg-black opacity-30'></div>
        <div class='flex justify-center items-center absolute top-[300px] left-[15rem] '>
            <p class='text-2xl p-10 text-white font-medium'><span
                    class='text-[3rem] font-medium text-blue-600 shadow-md'>Now</span> Successfully Completed new
                Course
                and Still Waiting new Courses</p>
        </div>
        <img src="successful-happy-business-team.jpg" alt=""
            class='w-screen h-screen bg-center bg-no-repeat bg-fixed' />
    </div>
    <!-- Testimonial section start here -->
    <div class="my-6 font-[sans-serif] w-full h-screen mt-20">
        <div class="mb-20 text-center max-w-3xl mx-auto">
            <h2 class="text-3xl font-extrabold">Testimonials</h2>
            <p class="text-sm text-[#333] mt-4 leading-relaxed">Veniam proident aute magna anim excepteur et ex
                consectetur velit ullamco veniam minim aute sit. Elit occaecat officia et laboris Lorem minim. Officia
                do aliqua adipisicing ullamco in</p>
        </div>
        <div class="grid md:grid-cols-3 md:gap-6 max-md:gap-10 max-w-6xl mx-auto">
            <div
                class="max-w-[350px] h-auto sm:p-8 p-4 rounded-md mx-auto shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] bg-white relative">
                <img src="https://readymadeui.com/profile_2.webp"
                    class="w-14 h-14 rounded-full absolute right-0 left-0 mx-auto -top-7" />
                <div class="mt-8 text-center">
                    <p class="text-sm text-[#333] leading-relaxed">The service was amazing. I never had to wait that
                        long for my food. The staff was friendly and attentive, and the delivery was impressively
                        prompt.</p>
                    <h4 class="text-base whitespace-nowrap font-extrabold mt-8">( John Doe )</h4>
                </div>
            </div>
            <div
                class="max-w-[350px] h-auto sm:p-8 p-4 rounded-md mx-auto shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] bg-white relative">
                <img src="https://readymadeui.com/profile_3.webp"
                    class="w-14 h-14 rounded-full absolute right-0 left-0 mx-auto -top-7" />
                <div class="mt-8 text-center">
                    <p class="text-sm text-[#333] leading-relaxed">The service was amazing. I never had to wait that
                        long for my food. The staff was friendly and attentive, and the delivery was impressively
                        prompt.</p>
                    <h4 class="text-base whitespace-nowrap font-extrabold mt-8">( Mark Adair )</h4>
                </div>
            </div>
            <div
                class="max-w-[350px] h-auto sm:p-8 p-4 rounded-md mx-auto shadow-[0_2px_22px_-4px_rgba(93,96,127,0.2)] bg-white relative">
                <img src="https://readymadeui.com/profile_4.webp"
                    class="w-14 h-14 rounded-full absolute right-0 left-0 mx-auto -top-7" />
                <div class="mt-8 text-center">
                    <p class="text-sm text-[#333] leading-relaxed">The service was amazing. I never had to wait that
                        long for my food. The staff was friendly and attentive, and the delivery was impressively
                        prompt.</p>
                    <h4 class="text-base whitespace-nowrap font-extrabold mt-8">( Simon Konecki )</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- Start jouney start here -->
    <section class='w-full h-[80%] py-10 '>
        <div class='flex justify-center items-start '>
            <div class='w-[50%]'>
                <p class='text-center font-bold text-[30px]'>Start your Tech career<br /> Journey</p>
            </div>
            <div class='w-[50%]'>
                <p class='w-[500px] mb-5'>
                    Join TechTrack Advisor today and receive a personalized tech career plan tailored just for you.
                    Explore trending technologies, discover recommended skills, and find software houses that align
                    with your goals. </p>
                <div class='mt-7'>
                    <button
                        class='px-6 py-2 bg-blue-600 hover:bg-white hover:text-black hover:border-2 hover:border-black text-white mr-3'>SignUp</button>
                    <button class='px-6 py-2 border-2 border-gray-400'>Learn more</button>
                </div>
            </div>
        </div>
    </section>
    <!-- NewLetter Section start here-->
    <section class='bg-blue-400 w-full py-14  bg-desktop  '>
        <div class='text-center'>
            <p class='text-[40px] text-white font-bold'>Subscribe to our Newsletter<br />Today</p>
            <p class='text-white py-4'>Lorem ipsum dolor sit amet consectetur adipisicing voluptates.</p>
            <div class=''>
                <input type="email" placeholder='Your Email Address' name="" id=""
                    class='w-[260px] h-[42px] px-2  outline-none rounded-md mr-3 placeholder:text-gray-500 placeholder:text-[14px] mt-5 mb-3' />
                <button
                    class='px-8 py-[8px] border-2 border-white text-white rounded-md bg-blue-600 hover:bg-white hover:text-black hover:border-2'>Join
                    Now</button>
            </div>
            <p class='text-white'>Lorem ipsum dolor, sit amet .</p>
        </div>
    </section>
    <!-- FAQ section start here -->
    <!-- <div
    class="relative w-full bg-red-400 px-6 pt-10 pb-8 mt-8 shadow-xl ring-1 ring-gray-900/5 sm:mx-auto sm:max-w-2xl sm:rounded-lg sm:px-10"> -->
    <section class="bg-white w-full lg:mx-auto  sm:rounded-lg sm:px-10" id="faq">
        <div class=" px-5">
            <div class="flex flex-col items-center">
                <h2 class="mt-5 text-center text-3xl font-bold tracking-tight md:text-5xl ">FAQ</h2>
                <p class="mt-3 text-lg text-neutral-500 md:text-xl ">Find answers to frequently asked questions about
                    TechTrack Advisor and its services.
                </p>
            </div>
            <div class="w-full  mx-auto mt-8 grid max-w-xl divide-y divide-neutral-200">
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> What is TechTrack Advisor?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">Springerdata offers a variety of
                            TechTrack Advisor is a platform that serves as a friendly guide to a tech career. It offers
                            personalized skill development and career planning to help individuals navigate the
                            world of technology.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How does it work?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">We offer a 30-day money-back
                            TechTrack Advisor uses algorithms to provide personalized suggestions for skills to learn,
                            classes to take, and certificates to pursue. It also offers sample roadmaps for different
                            tech career paths that users can explore and customize.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> Is it free?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                            Yes, TechTrack Advisor is free to use. However, some learning resources, courses, and
                            certifications may have associated costs.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> How can I sign up?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                            To sign up for TechTrack Advisor, simply visit our website and click on the 'Sign Up'
                            button. Fill in your details and start your personalized tech career journey.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> Can I customize my roadmap?</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                            Yes, TechTrack Advisor allows users to customize their roadmaps based on their interests and
                            preferences. You can explore different tech career paths and track your progress
                            and achievements.
                        </p>
                    </details>
                </div>
                <div class="py-5">
                    <details class="group">
                        <summary class="flex cursor-pointer list-none items-center justify-between font-medium">
                            <span> Start Your Tech Career Journey</span>
                            <span class="transition group-open:rotate-180">
                                <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                    stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                    <path d="M6 9l6 6 6-6"></path>
                                </svg>
                            </span>
                        </summary>
                        <p class="group-open:animate-fadeIn mt-3 text-neutral-600">
                            Join TechTrack Advisor today and receive a personalized tech career plan tailored just for
                            you. Explore trending technologies, discover recommended skills, and find software houses
                            that align with your goals.
                        </p>
                    </details>
                </div>
            </div>
        </div>
        <div class='mt-5 bg-blue-400 text-white p-5 rounded-sm'>
            <p class='text-[25px] font-bold'>Still have any question ?</p>
            <p class='text-[14px]'>Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
            <button
                class='px-6 py-2 bg-blue-600 text-white text-sm mt-5 rounded-sm border-2 border-white hover:bg-white hover:text-black'>Contact</button>
        </div>
    </section>
    <!-- Footer section start here -->
    <footer class='w-full py-10 '>
        <div class='flex justify-around items-center'>
            <div><img src="logo.png" alt="" class='w-[200px] h-auto' /></div>
            <div class='list-none flex gap-5'>
                <nav>
                    <ul class="flex gap-4 text-base">
                        <li class=" border-b-2 pb-1 border-blue-400 hover:border-b-2 hover:border-blue-400"><a
                                href="">Home</a></li>
                        <li class=" hover:border-b-2 hover:pb-1 hover:border-blue-400"><a href="">About</a>
                        </li>
                        <li class=" hover:border-b-2 hover:pb-1 hover:border-blue-400"><a href="">Blog</a></li>
                        <li class=" hover:border-b-2 hover:pb-1 hover:border-blue-400"><a href="">Contact</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class='flex gap-5 text-[25px] cursor-pointer text-blue-500'>
                <i class="fa-brands fa-facebook "></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-square-instagram"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>
        </div>
    </footer>
    <!-- Footer section end here -->
</body>

</html>
