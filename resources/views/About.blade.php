<!DOCTYPE html>
<html lang="en" class="soft-scrollbar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TechTrack | About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>
<body>
    @include('header')

    <div class="flex gap-3 items-center px-4">
        <img src="https://i.imgur.com/WbQnbas.png" class="w-1/2 ">
        <div class=" px-4 py-8 w-full  font-poppins my-5 rounded-xl">

            <h1 class="text-3xl font-bold mb-6 text-blue-500">About TechTrack Advisor</h1>

            <!-- Mission Section -->
            <div class="bg-white px-8 py-4">
                <h2 class="text-2xl font-bold mb-2 text-gray-700">Our Mission</h2>
                <p class="text-base leading-relaxed text-gray-500">
                    TechTrack Advisor aims to simplify the journey for newcomers in the tech industry by helping them discover the best technology suited to their interests and career aspirations.
                </p>
            </div>

            <!-- What We Do Section -->
            <div class="bg-white px-8 py-4">
                <h2 class="text-2xl font-bold mb-2 text-gray-700">What We Do</h2>
                <p class="text-base leading-relaxed text-gray-500">
                    Our application generates personalized roadmaps for various technologies, guiding users through their learning journey. Whether you're interested in programming languages, frameworks, or tools, we provide curated paths tailored to your goals.
                </p>
            </div>

            <!-- Meet the Team Section -->
            <div class="bg-white px-8 py-4">
                <h2 class="text-2xl font-bold mb-2 text-gray-700">Meet the Team</h2>
                <p class="text-base leading-relaxed text-gray-500">
                    TechTrack Advisor is the brainchild of:
                    <ul class="list-disc list-inside p-3 gap-y-2">
                        <li><a class="italic text-blue-500" href="https://www.linkedin.com/in/waleed-inayat-w97/">Waleed</a></li>
                        <li><a class="italic text-blue-500" href="#">Habib</a></li>
                    </ul>
                    Passionate developers committed to making technology accessible and understandable for everyone. With expertise in Laravel Livewire, Tailwind CSS, and a deep understanding of user experience, we've crafted TechTrack Advisor to be intuitive and effective.
                </p>
            </div>



        </div>
    </div>
    @include('footer')
</body>
</html>
