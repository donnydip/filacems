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
