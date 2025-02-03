<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio DIP</title>
    <link rel="icon" type="image/x-icon" href="{{asset('img/logo.ico')}}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <!-- Header Start -->
    <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
     <div class="container mx-auto">
         <div class="flex items-center justify-between relative">
             <div class="px-4">
                 <a href="#home" class="font-bold text-lg text-cyan-500 block py-6">DIPZ</a>
             </div>
             <div class="flex items-center px-4">
                 <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
                     <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
                     <span class="hamburger-line transition duration-300 ease-in-out"></span>
                     <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left "></span>
                 </button>

                 <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
                     <ul class="block lg:flex">
                         <li class="group">
                             <a href="#home" class="text-base text-slate-800 py-2 mx-8 flex group-hover:text-cyan-500">Home</a>
                         </li>
                         <li class="group">
                             <a href="#about" class="text-base text-slate-800 py-2 mx-8 flex group-hover:text-cyan-500">About Me</a>
                         </li>
                         <li class="group">
                             <a href="#portfolio" class="text-base text-slate-800 py-2 mx-8 flex group-hover:text-cyan-500">Portfolio</a>
                         </li>
                         {{-- <li class="group">
                             <a href="#contact" class="text-base text-slate-800 py-2 mx-8 flex group-hover:text-cyan-500">Contact</a>
                         </li> --}}
                     </ul>
                 </nav>

             </div>
         </div>
     </div>
    </header>
    <!-- Header End -->

     <!-- Hero Section Start -->
     <section id="home" class="pt-36">
         <div class="container mx-auto">
             <div class="flex flex-wrap">
                 <div class="w-full self-center px-4 lg:w-1/2">
                     <h1 class="text-base font-semibold text-cyan-500 md:text-xl">
                     {{ $portfolio->greetings }}
                     <span class="block font-bold text-slate-800 text-4xl mt-1 lg:text-5xl">
                     {{ $portfolio->name }}
                     </span>
                     </h1>
                     <h2 class="font-medium text-slate-500 text-lg my-3 lg:text-2xl">{{ $portfolio->jobTitle }}</h2>
                     <p class="font-semibold text-slate-500 mb-10 leading-relaxed">
                         {{ $portfolio->motto }}
                     </p>
                     <a href="mailto:donnyindra7428.dip@gmail.com" class="text-base font-semibold text-white bg-cyan-500 py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out">Contact Me</a>
                 </div>
                 <div class="w-full self-end px-4 lg:w-1/2">
                     <div class="relative mt-10 lg:mt-9 lg:right-0">
                         <img src="{{asset('storage/'.$portfolio->picture)}}" alt="Donny Indra" class="max-w-full mx-auto md:w-3/5" />
                         <span class="absolute bottom-0 -z-10 left-1/2 -translate-x-1/2 md:scale-125">
                             <svg width="450" height="450" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                                 <path fill="#06b6d4" d="M30.8,-43C44.7,-39.1,63.9,-38.5,67.1,-30.9C70.3,-23.2,57.5,-8.4,47.1,1C36.8,10.4,29,14.4,24.3,22.5C19.6,30.7,17.9,42.9,11.7,48.7C5.6,54.5,-5,53.9,-17.9,53.5C-30.8,53.1,-45.9,53,-58.5,46.3C-71.2,39.6,-81.3,26.4,-76.1,15.4C-70.8,4.3,-50,-4.5,-42,-17.9C-33.9,-31.3,-38.6,-49.3,-33.7,-57.3C-28.8,-65.3,-14.4,-63.3,-3,-58.7C8.5,-54.1,17,-46.9,30.8,-43Z" transform="translate(100 100) scale(1.1)" />
                             </svg>
                         </span>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- Hero Section End -->

     <!-- About Section Start -->
     <section id="about" class="pt-36 pb-32">
         <div class="container mx-auto">
             <div class="flex flex-wrap">
                 <div class="w-full px-4 mb-10 lg:w-1/2">
                     <h4 class="font-bold uppercase text-cyan-500 text-lg mb-3">About Me</h4>
                     <h2 class="font-bold text-slate-800 text-3xl mb-5 max-w-md lg:text-4xl">{{ $portfolio->aboutHeader }}</h2>
                     <p class="font-medium text-base text-slate-500 max-w-xl lg:text-lg">{{ $portfolio->aboutContent }}</p>
                 </div>
                 <div class="w-full px-4 lg:w-1/2">
                     <h3 class="font-semibold text-slate-800 text-2xl mb-4 lg:text-3xl lg:pt-10">Let's Make Connection</h3>
                     <p class="font-medium text-base text-slate-500 mb-6 lg:text-lg">My Social Media</p>
                     <div class="flex items-center">
                         <!-- YT -->
                         <a href="https://youtube.com/DonnyDIP" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                             <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>YouTube</title>
                                 <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                             </svg>
                         </a>
                         <!-- IG -->
                         <a href="https://www.instagram.com/donny.d1pz" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                             <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>Instagram</title>
                                 <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                             </svg>
                         </a>
                         <!-- Twitter -->
                         <a href="https://twitter.com/DonnyIndra74" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                             <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>X</title>
                                 <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                             </svg>
                         </a>
                         <!-- Tiktok -->
                         <a href="https://www.tiktok.com/@donnyd1pz" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                             <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>TikTok</title>
                                 <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                             </svg>
                         </a>
                         <!-- Linkedin -->
                         <a href="https://www.linkedin.com/in/donnyindra/" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                             <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>LinkedIn</title>
                                 <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                             </svg>
                         </a>
                         <!-- Github -->
                         <a href="https://github.com/donnydip" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
                                <path d="M 25 2 C 12.311335 2 2 12.311335 2 25 C 2 37.688665 12.311335 48 25 48 C 37.688665 48 48 37.688665 48 25 C 48 12.311335 37.688665 2 25 2 z M 25 4 C 36.607335 4 46 13.392665 46 25 C 46 25.071371 45.994849 25.141688 45.994141 25.212891 C 45.354527 25.153853 44.615508 25.097776 43.675781 25.064453 C 42.347063 25.017336 40.672259 25.030987 38.773438 25.125 C 38.843852 24.634651 38.893205 24.137377 38.894531 23.626953 C 38.991361 21.754332 38.362521 20.002464 37.339844 18.455078 C 37.586913 17.601352 37.876747 16.515218 37.949219 15.283203 C 38.031819 13.878925 37.910599 12.321765 36.783203 11.269531 L 36.494141 11 L 36.099609 11 C 33.416539 11 31.580023 12.12321 30.457031 13.013672 C 28.835529 12.386022 27.01222 12 25 12 C 22.976367 12 21.135525 12.391416 19.447266 13.017578 C 18.324911 12.126691 16.486785 11 13.800781 11 L 13.408203 11 L 13.119141 11.267578 C 12.020956 12.287321 11.919778 13.801759 11.988281 15.199219 C 12.048691 16.431506 12.321732 17.552142 12.564453 18.447266 C 11.524489 20.02486 10.900391 21.822018 10.900391 23.599609 C 10.900391 24.111237 10.947969 24.610071 11.017578 25.101562 C 9.2118173 25.017808 7.6020996 25.001668 6.3242188 25.046875 C 5.3845143 25.080118 4.6454422 25.135713 4.0058594 25.195312 C 4.0052628 25.129972 4 25.065482 4 25 C 4 13.392665 13.392665 4 25 4 z M 14.396484 13.130859 C 16.414067 13.322043 17.931995 14.222972 18.634766 14.847656 L 19.103516 15.261719 L 19.681641 15.025391 C 21.263092 14.374205 23.026984 14 25 14 C 26.973016 14 28.737393 14.376076 30.199219 15.015625 L 30.785156 15.273438 L 31.263672 14.847656 C 31.966683 14.222758 33.487184 13.321554 35.505859 13.130859 C 35.774256 13.575841 36.007486 14.208668 35.951172 15.166016 C 35.883772 16.311737 35.577304 17.559658 35.345703 18.300781 L 35.195312 18.783203 L 35.494141 19.191406 C 36.483616 20.540691 36.988121 22.000937 36.902344 23.544922 L 36.900391 23.572266 L 36.900391 23.599609 C 36.900391 26.095064 36.00178 28.092339 34.087891 29.572266 C 32.174048 31.052199 29.152663 32 24.900391 32 C 20.648118 32 17.624827 31.052192 15.710938 29.572266 C 13.797047 28.092339 12.900391 26.095064 12.900391 23.599609 C 12.900391 22.134903 13.429308 20.523599 14.40625 19.191406 L 14.699219 18.792969 L 14.558594 18.318359 C 14.326866 17.530484 14.042825 16.254103 13.986328 15.101562 C 13.939338 14.14294 14.166221 13.537027 14.396484 13.130859 z M 8.8847656 26.021484 C 9.5914575 26.03051 10.40146 26.068656 11.212891 26.109375 C 11.290419 26.421172 11.378822 26.727898 11.486328 27.027344 C 8.178972 27.097092 5.7047309 27.429674 4.1796875 27.714844 C 4.1152068 27.214494 4.0638483 26.710021 4.0351562 26.199219 C 5.1622058 26.092262 6.7509972 25.994233 8.8847656 26.021484 z M 41.115234 26.037109 C 43.247527 26.010033 44.835728 26.108156 45.962891 26.214844 C 45.934234 26.718328 45.883749 27.215664 45.820312 27.708984 C 44.24077 27.41921 41.699674 27.086688 38.306641 27.033203 C 38.411945 26.739677 38.499627 26.438219 38.576172 26.132812 C 39.471291 26.084833 40.344564 26.046896 41.115234 26.037109 z M 11.912109 28.019531 C 12.508849 29.215327 13.361516 30.283019 14.488281 31.154297 C 16.028825 32.345531 18.031623 33.177838 20.476562 33.623047 C 20.156699 33.951698 19.86578 34.312595 19.607422 34.693359 L 19.546875 34.640625 C 19.552375 34.634325 19.04975 34.885878 18.298828 34.953125 C 17.547906 35.020374 16.621615 35 15.800781 35 C 14.575781 35 14.03621 34.42121 13.173828 33.367188 C 12.696283 32.72356 12.114101 32.202331 11.548828 31.806641 C 10.970021 31.401475 10.476259 31.115509 9.8652344 31.013672 L 9.7832031 31 L 9.6992188 31 C 9.2325521 31 8.7809835 31.03379 8.359375 31.515625 C 8.1485707 31.756544 8.003277 32.202561 8.0976562 32.580078 C 8.1920352 32.957595 8.4308563 33.189581 8.6445312 33.332031 C 10.011254 34.24318 10.252795 36.046511 11.109375 37.650391 C 11.909298 39.244315 13.635662 40 15.400391 40 L 18 40 L 18 44.802734 C 10.967811 42.320535 5.6646795 36.204613 4.3320312 28.703125 C 5.8629338 28.414776 8.4265387 28.068108 11.912109 28.019531 z M 37.882812 28.027344 C 41.445538 28.05784 44.08105 28.404061 45.669922 28.697266 C 44.339047 36.201504 39.034072 42.31987 32 44.802734 L 32 39.599609 C 32 38.015041 31.479642 36.267712 30.574219 34.810547 C 30.299322 34.368135 29.975945 33.949736 29.615234 33.574219 C 31.930453 33.11684 33.832364 32.298821 35.3125 31.154297 C 36.436824 30.284907 37.287588 29.220424 37.882812 28.027344 z M 23.699219 34.099609 L 26.5 34.099609 C 27.312821 34.099609 28.180423 34.7474 28.875 35.865234 C 29.569577 36.983069 30 38.484177 30 39.599609 L 30 45.398438 C 28.397408 45.789234 26.72379 46 25 46 C 23.27621 46 21.602592 45.789234 20 45.398438 L 20 39.599609 C 20 38.508869 20.467828 37.011307 21.208984 35.888672 C 21.950141 34.766037 22.886398 34.099609 23.699219 34.099609 z M 12.308594 35.28125 C 13.174368 36.179258 14.222525 37 15.800781 37 C 16.579948 37 17.552484 37.028073 18.476562 36.945312 C 18.479848 36.945018 18.483042 36.943654 18.486328 36.943359 C 18.36458 37.293361 18.273744 37.645529 18.197266 38 L 15.400391 38 C 14.167057 38 13.29577 37.55443 12.894531 36.751953 L 12.886719 36.738281 L 12.880859 36.726562 C 12.716457 36.421191 12.500645 35.81059 12.308594 35.28125 z"></path>
                                </svg>
                         </a>
                     </div>
                 </div>
             </div>
         </div>
     </section>
     <!-- About Section End -->

     <!-- Portfolio Start -->
     <section id="portfolio" class="pt-36 pb-16 bg-slate-100">
         <div class="container mx-auto">
             <div class="w-full px-4">
                 <div class="max-w-xl mx-auto text-center mb-16">
                     <h4 class="font-semibold text-lg text-cyan-500 mb-2">Portfolio</h4>
                     <h2 class="font-bold text-slate-800 text-3xl mb-4">Lastest Project</h2>
                     <p class="font-medium text-base text-slate-500">Here are the projects that I have developed.</p>
                 </div>
             </div>
             <div class="w-full px-4 flex flex-wrap justify-center">
                @foreach ($projects as $project)
                 <div class="mb-12 p-4 md:w-1/2">
                     <div class="flex justify-center rounded-lg shadow-md overflow-hidden">
                         <img src="{{ asset('storage/' . $project->picture) }}" alt="Landing Page" class="object-contain h-96 w-48">
                     </div>
                     <h3 class="font-semibold text-xl text-slate-800 mt-5 mb-3">{{ $project->title }}</h3>
                     <p class="font-medium text-base text-slate-500">{{ $project->description }}.</p>
                     <ul class="font-medium text-base text-slate-500 ">
                         <li>Tech used :</li>
                         @foreach ( explode(',', $project->technologies) as $tech)
                            <li>• {{ $tech }}</li>
                         @endforeach
                     </ul>
                 </div>
                @endforeach
             </div>
         </div>
     </section>
     <!-- Portfolio End -->

     {{-- <!-- Contact Start -->
     <section id="contact" class="pt-36 pb-32">
         <div class="container mx-auto">
             <div class="w-full px-4">
                 <div class="max-w-xl mx-auto text-center mb-16">
                     <h4 class="font-semibold text-lg text-cyan-500 mb-2">Contact</h4>
                     <h2 class="font-bold text-slate-800 text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Me</h2>
                     <p class="font-medium text-base text-slate-500 md:text-lg">For Further Information Please Contact Us.</p>
                 </div>
             </div>
             <form action="">
                 <div class="w-full lg:w-2/3 lg:mx-auto">
                     <div class="w-full px-4 mb-8">
                         <label for="name" class="text-base text-cyan-500 font-bold">Name</label>
                         <input type="text" id="name" class="w-full bg-slate-200 text-slate-800 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                     </div>
                     <div class="w-full px-4 mb-8">
                         <label for="email" class="text-base text-cyan-500 font-bold">Email</label>
                         <input type="email" id="email" class="w-full bg-slate-200 text-slate-800 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary">
                     </div>
                     <div class="w-full px-4 mb-8">
                         <label for="message" class="text-base text-cyan-500 font-bold">Message</label>
                         <textarea type="text" id="message" class="w-full h-32 bg-slate-200 text-slate-800 p-3 rounded-md focus:outline-none focus:ring-primary focus:ring-1 focus:border-primary"></textarea>
                     </div>
                     <div class="w-full px-4">
                         <button class="text-base font-semibold text-white bg-cyan-500 py-3 px-8 rounded-full w-full hover:opacity-80 hover:shadow-lg transition duration-500 ">
                             Send
                         </button>
                     </div>
                 </div>
             </form>
         </div>
     </section>
     <!-- Contact End --> --}}

     <!-- Footer Start -->
     <footer class="bg-slate-800 pt-24 pb-12">
         <div class="container mx-auto">
             <div class="w-full pt-10 border-t border-slate-700">
                 <div class="flex items-center justify-center mb-5">
                     <!-- YT -->
                     <a href="https://youtube.com/DonnyDIP" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                         <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>YouTube</title>
                             <path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/>
                         </svg>
                     </a>
                     <!-- IG -->
                     <a href="https://www.instagram.com/donny.d1pz" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                         <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>Instagram</title>
                             <path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/>
                         </svg>
                     </a>
                     <!-- Twitter -->
                     <a href="https://twitter.com/DonnyIndra74" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                         <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>X</title>
                             <path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/>
                         </svg>
                     </a>
                     <!-- Tiktok -->
                     <a href="https://www.tiktok.com/@donnyd1pz" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                         <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>TikTok</title>
                             <path d="M12.525.02c1.31-.02 2.61-.01 3.91-.02.08 1.53.63 3.09 1.75 4.17 1.12 1.11 2.7 1.62 4.24 1.79v4.03c-1.44-.05-2.89-.35-4.2-.97-.57-.26-1.1-.59-1.62-.93-.01 2.92.01 5.84-.02 8.75-.08 1.4-.54 2.79-1.35 3.94-1.31 1.92-3.58 3.17-5.91 3.21-1.43.08-2.86-.31-4.08-1.03-2.02-1.19-3.44-3.37-3.65-5.71-.02-.5-.03-1-.01-1.49.18-1.9 1.12-3.72 2.58-4.96 1.66-1.44 3.98-2.13 6.15-1.72.02 1.48-.04 2.96-.04 4.44-.99-.32-2.15-.23-3.02.37-.63.41-1.11 1.04-1.36 1.75-.21.51-.15 1.07-.14 1.61.24 1.64 1.82 3.02 3.5 2.87 1.12-.01 2.19-.66 2.77-1.61.19-.33.4-.67.41-1.06.1-1.79.06-3.57.07-5.36.01-4.03-.01-8.05.02-12.07z"/>
                         </svg>
                     </a>
                     <!-- Linkedin -->
                     <a href="https://www.linkedin.com/in/donnyindra/" target="_blank" class="w-9 h-9 mr-3 text-slate-300 rounded-full flex justify-center items-center border border-slate-300 hover:border-primary hover:bg-cyan-500 hover:text-white">
                         <svg role="img" width="20" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" class="fill-current"><title>LinkedIn</title>
                             <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                         </svg>
                     </a>
                 </div>
                 <p class="font-medium text-xs text-slate-500 text-center">Build with <span class="text-pink-500">❤️</span> by <a href="https://www.instagram.com/donny.d1pz" target="_blank" class="font-bold text-cyan-500">Donny Indra Purnama</a></p>
             </div>
         </div>
     </footer>
     <!-- Footer End -->
 </body>
</html>
