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
<style>
        .newCouse{
            background-image: url(./images/TechCareer.jpg);
            /* width: 100%; */
            
            height: auto;
            background-repeat: no-repeat;
            background-size: cover;
            opacity: 0.4;
            /* filter: blur(8px); */
            background-attachment: fixed;

        }
        /* start flip card */
        .flip-card {
  background-color: transparent;
  width: 300px;
  height: 300px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: #bbb;
  color: black;
}

.flip-card-back {
  background-color: #2980b9;
  color: white;
  transform: rotateY(180deg);
}
        /* end flip card */
    </style>
</head>
<body>
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
                            <a href="#" class="block md:px-4 transition hover:text-primary ">
                                <span>Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition hover:text-primary ">
                                <span>About</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition hover:text-primary ">
                                <span>Blog</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition hover:text-primary ">
                                <span>Contact</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="block md:px-4 transition hover:text-primary ">
                                <span>Help</span>
                            </a>
                        </li>
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

<!-- start hero section  -->
<div class="grid grid-cols-1 md:grid-cols-2 px-24 items-center">
    <div class="-mt-4">
        <p
            class="font-black text-blue-900 text-4xl text-center sm:text-5xl md:text-6xl lg:w-auto lg:text-left xl:text-6xl">
            Your career in Pakistan's <br class="lg:block hidden"><span
                class="relative text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-cyan-500  ">Tech
                Industry</span>
        </p>
        <p class="my-16">
            Discover TechTrack Advisor – your friendly tech career navigator. Stay updated on trends, get a
            personalized learning plan, and find local job opportunities. Your journey in tech, made simple and
            exciting.
        <br>
            Join a community of like-minded professionals and gain insights from industry experts. Access exclusive resources to enhance your skills and stay ahead of the competition. Start your path to success with TechTrack Advisor today!</p>

        <!-- start button  -->
       <div class="flex gap-8">
        <button
        class="relative group overflow-hidden text-sm font-medium px-3 py-[10px] rounded-sm flex space-x-2 items-center hover:border-2  hover:border-blue-600 border-2 border-blue-600">
        <span  class="relative text-sm text-black  ">Learn More</span>
        <div class="flex items-center -space-x-3 translate-x-3">
            <div
                class="w-2.5 h-[1.6px] rounded-sm bg-black origin-left scale-x-0 transition duration-300 group-hover:scale-x-100">
            </div>
            <svg xmlns="http://www.w3.org/2400/svg"
                class="h-5 w-5 stroke-black -translate-x-2 transition duration-300 group-hover:translate-x-0"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </button>

    <div
    class="w-full space-y-2 border-primary/10  flex flex-col -ml-1 sm:flex-row lg:space-y-0 md:w-max lg:border-l">

    <a href="/register" wire:navigate
    class="relative flex ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full before:bg-gradient-to-r from-blue-600 to-cyan-500 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
    <span class="relative text-sm font-semibold text-white ">Get
        started</span>
</a>
</div>
       </div>
        <!-- end button  -->

    </div>

    <div class="flex justify-center relative">
        <div aria-hidden="true"
            class="absolute scale-75 md:scale-110 inset-0 m-auto w-full h-full md:w-96 md:h-96 rounded-full rotate-45 bg-gradient-to-r from-sky-500 to-cyan-300 blur-3xl">
        </div>
        <img src="https://tailus.io/sources/blocks/tech-startup/preview/images/globalization-cuate.svg"
            class="relative flex w-auto" alt="wath illustration" loading="lazy" width="424" height="180">
    </div>
</div>

<!-- end hero section  -->


<!-- start Your Personalized Tech Career  -->

<div class="grid grid-cols-2 px-24 gap-10 mt-24 " >
    <div class="pr-36 my-auto">
        <p class="text-4xl font-bold">Create Your Personalized Tech
            Career Plan and Achieve Your 
            Goals</p>
            <p class="mt-8">
                Our platform allows you to easily create a personalized plan based on your likes and career goals. With our interactive elements and algorithm-driven suggestions, you'll be on the right path to success.
            </p>
    </div>
    <div class="w-80 mx-auto ">
        <img src="./images/TechCareer.jpg" alt="" class="rounded-lg">
    </div>
</div>
<!-- end Your Personalized Tech Career  -->

<!-- start Discover -->
<div class="grid grid-cols-2 px-24 mt-28 gap-10">
    <div class="w-96">

        <p class="text-lg">Discover</p>
        <p class="text-4xl font-bold">Explore the Best Local IT Companies and Boost Your Career</p>

    </div>

    <div>
        <p>TechTrack Advisor helps you discover local companies and opportunities that align with your career path. Explore a personalized tech career journey with us..</p>
        <div class="grid grid-cols-2 mt-12">
            <div>
                <p class="font-bold ">Asist</p>
                <p>Discover local companies and job opportunities that match your career goals.</p>
            </div>
            <div>
                <p class="font-bold ">Align</p>
                <p>Discover local companies and job opportunities that match your career goals.</p>
            </div>
        </div>  
         <!-- start button  -->
       <div class="flex gap-8 mt-12 ">
        <button
        class="relative group overflow-hidden text-sm font-medium px-3 py-[10px] rounded-sm flex space-x-2 items-center hover:border-2  hover:border-blue-600 border-2 border-blue-600">
        <span class="relative text-sm text-black clickdown ">Learn More</span>
        <div class="flex items-center -space-x-3 translate-x-3">
            <div
                class="w-2.5 h-[1.6px] rounded-sm bg-black origin-left scale-x-0 transition duration-300 group-hover:scale-x-100">
            </div>
            <svg xmlns="http://www.w3.org/2400/svg"
                class="h-5 w-5 stroke-black -translate-x-2 transition duration-300 group-hover:translate-x-0"
                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
            </svg>
        </div>
    </button>

    <div
    class="w-full space-y-2 border-primary/10  flex flex-col -ml-1 sm:flex-row lg:space-y-0 md:w-max lg:border-l">

    <a href="/register" wire:navigate
                        class="relative flex ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full before:bg-gradient-to-r from-blue-600 to-cyan-500 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
                        <span class="relative text-sm font-semibold text-white ">Get
                            started</span>
                    </a>
</div>
       </div>
        <!-- end button  -->
        
    </div>

</div>
<!-- end Discover -->


<!-- start waiting for new course -->
<section class="bg-[lightblue] relative bg">
<div class=" bg-[url('./images/TechCareer.jpg')] bg-no-repeat bg-cover bg-center  my-24 h-[80vh] flex justify-center items-center"></div>
<p class="absolute top-[30%] left-[24%] cursor-pointer bg-gradient-to-r from-blue-600 to-cyan-500 h-[300px] w-[60%] rounded-3xl flex items-center justify-center text-xl">
    <span class="text-white pr-3 text-2xl">Now </span> Successfully Completed new Course and Still Waiting new Courses
</p>
    <!-- <div class="absolute top-[24%] left-[24%]  w-[60%] rounded-3xl">
    <p class="text-white ">Now Successfully Completed new Course and Still Waiting new Courses</p>
</div> -->
    

<!-- </div><h1>This is job Web application</h1> -->
</section>
<!-- end waiting for new course -->
<!-- start Testimonials -->
<div class="my-6 font-[sans-serif] w-full mt-24">
    <div class="mb-24 text-center max-w-3xl mx-auto">
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
<!-- end Testimonials -->


 <!-- Start jouney start here -->
 <section class='w-full mt-28 py-10 px-20 flex justify-center items-start gap-10'>
    <div class='w-[50%] text-center'>
        <div class=''>
            <p class=' font-bold text-[30px]'>Start your Tech career<br /> Journey</p>
        </div>
        <div class=''>
            <p class=' mb-5'>
                Join TechTrack Advisor today and receive a personalized tech career plan tailored just for you.
                Explore trending technologies, discover recommended skills, and find software houses that align
                with your goals. </p>
                 <!-- start button  -->
       <div class="flex justify-center gap-8">
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

    <div
    class="w-full space-y-2 border-primary/10  flex flex-col -ml-1 sm:flex-row lg:space-y-0 md:w-max lg:border-l">

    <a href="/register" wire:navigate
    class="relative flex ml-auto items-center justify-center sm:px-6 before:absolute before:inset-0 before:rounded-full before:bg-gradient-to-r from-blue-600 to-cyan-500 before:transition before:duration-300 hover:before:scale-105 active:duration-75 active:before:scale-95">
    <span class="relative text-sm font-semibold text-white ">Get
        started</span>
</a>
</div>
       </div>
        <!-- end button  -->
        </div>
    </div>
</section>
 <!-- end jouney start here -->

<!-- start FAQ section -->
<div class="bg-white w-full lg:mx-auto mt-20 sm:rounded-lg sm:px-10" id="/#faq">
<div class=" px-5">
    <div class="flex flex-col items-center">
        <h2 class="mt-5 text-center text-xl font-bold tracking-tight md:text-3xl ">FAQ</h2>
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
                    <span class="transition group-open:rotate-180 duration-500">
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

</div>
<!-- end FAQ section -->

<!-- start question  -->
<div class='mt-10 px-24 flex justify-between items-center bg-gradient-to-r from-blue-600 to-cyan-500  text-white py-10 rounded-sm'>
<div class="w-[30%]">
    <p class='text-[25px] font-bold'>Still have any question ?</p>
    <p class='text-[15px] py-8'> we're here to help! Reach out to our support team for personalized assistance and
        guidance on your tech career journey.</p>
        <button
        class='px-6 py-2 bg-blue-600 text-white text-sm mt-5 rounded-sm border-2 border-white hover:bg-white hover:text-black transition duration-500'>Contact</button>
        </div>
        <div class="h-96"> <img src="./images/questionICon.png" alt=""></div>
</div>
        
        <!-- start question  -->


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
                    <li class=" hover:border-b-2 hover:pb-1 hover:border-blue-400"><a href="">Contact</a></li>
                    <li class=" hover:border-b-2 hover:pb-1 hover:border-blue-400"><a href="">Help</a>
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
