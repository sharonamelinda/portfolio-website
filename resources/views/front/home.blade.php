<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  @vite('resources/css/app.css')

  {{-- <link rel="icon" href="src/assets/images/profile/3d-avatar-profile.jpg" class="rounded-full"> --}}
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display+SC:ital,wght@0,400;0,700;0,900;1,400;1,700;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('customcss/main.css') }}">

</head>
<body class="font-poppins">

    <main class="mx-auto min-h-screen flex flex-col items-center">

        <!-- ========== HEADER ========== -->
        <header class="bg-white/60 backdrop-blur-lg flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full lg:mt-4">
          <nav class="relative max-w-7xl w-full md:flex md:items-center md:justify-between md:gap-3 mx-auto px-4 sm:px-6 lg:px-8 py-4 lg:py-2">
            <!-- Logo w/ Collapse Button -->
            <div class="flex items-center justify-between">
              <a class="flex-none font-semibold lg:text-4xl text-3xl font-playfair text-gray-700 focus:outline-none focus:opacity-80 uppercase" href="#" aria-label="Brand">gracie abrahams</a>

              <!-- Collapse Button -->
              <div class="md:hidden">
                <button type="button" class="hs-collapse-toggle relative size-9 flex justify-center items-center text-sm font-semibold rounded-lg text-gray-800 focus:outline-none disabled:opacity-50 disabled:pointer-events-none" id="hs-header-classic-collapse" aria-expanded="false" aria-controls="hs-header-classic" aria-label="Toggle navigation" data-hs-collapse="#hs-header-classic">
                  <svg class="hs-collapse-open:hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
                  <svg class="hs-collapse-open:block shrink-0 hidden size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                  <span class="sr-only">Toggle navigation</span>
                </button>
              </div>
              <!-- End Collapse Button -->
            </div>
            <!-- End Logo w/ Collapse Button -->

            <!-- Collapse -->
            <div id="hs-header-classic" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow md:block" aria-labelledby="hs-header-classic-collapse">
              <div class="overflow-hidden overflow-y-auto max-h-[75vh] [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-gray-100 [&::-webkit-scrollbar-thumb]:bg-gray-300">
                <div class="py-2 md:py-0 flex flex-col md:flex-row md:items-center md:justify-end md:gap-4 sm:gap-1 justify-items-center">
                    <!-- Navlist -->
                    <a class="p-2 flex items-center text-sm text-gray-800 hover:text-gray-600 focus:text-gray-500 md:py-4" href="#" aria-current="page">Home</a>
                    <a class="p-2 flex items-center text-sm text-gray-800 hover:text-gray-600 focus:text-gray-500 md:py-4" href="#latest-project">Projects</a>
                    <a class="p-2 flex items-center text-sm text-gray-800 hover:text-gray-600 focus:text-gray-500 md:py-4" href="#form-contact">Contact</a>
                    
                    <div class="my-2 md:my-0 md:mx-2">
                        <div class="w-full h-px md:w-px md:h-4 bg-gray-100 md:bg-gray-300"></div>
                    </div>
                    
                    <a class="p-3 flex items-center text-xs md:py-2.5 rounded-lg bg-dark-screen text-white" href="{{ route('resume.download') }}">
                        <span>
                            <svg class="shrink-0 size-3 mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5M16.5 12 12 16.5m0 0L7.5 12m4.5 4.5V3" />
                              </svg>
                        </span>
                        Download CV
                    </a>
                
                </div>
              </div>
            </div>
            <!-- End Collapse -->
          </nav>
        </header>
        <!-- ========== END HEADER ========== -->

        <!-- ========== HERO SECTION ========== -->
        <section class="max-w-[960px] flex flex-col gap-4 p-8 mt-2 min-h-screen justify-center">
          <!-- Profile Image -->
          <div class="py-2 flex justify-center">
            <img src="{{ asset('assets/images/3d-avatar-profile.jpg') }}" alt="profile-photo" class="rounded-full w-48 p-1 border">
          </div>

          <!-- Introduction -->
          <div class="py-4 flex flex-col gap-3">
            {{-- <p class="font-medium lg:text-3xl text-2xl">Hello! I'm Gracie Abrahams.</p> --}}
            <p class="font-medium lg:text-3xl text-2xl">Hello! I'm <span id="typed-text"></span></p>
            <p class="font-bold lg:text-5xl text-3xl">I'm a freelance Graphic Designer that interest in advertising, branding, photography, and visual editing.</p>
          </div>

          <!-- Link -->
          <div class="py-4 mb-4">
            <ol class="flex items-center whitespace-nowrap">
              <li class="inline-flex items-center truncate" aria-current="page">
                <a class="flex items-center lg:text-lg md:text-ml text-gray-400 hover:text-gray-600 hover:underline" href="#">
                  linkedin
                </a>
                <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                </svg>
              </li>
              <li class="inline-flex items-center">
                <a class="flex items-center lg:text-lg md:text-ml text-gray-400 hover:text-gray-600 hover:underline" href="#">
                  behance
                  <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                  </svg>
                </a>
              </li>
              <li class="inline-flex items-center">
                <a class="flex items-center lg:text-lg md:text-ml text-gray-400 hover:text-gray-600 hover:underline" href="#">
                  dribble
                </a>
              </li>
            </ol>
          </div>
        </section>
        <!-- ========== END HERO SECTION ========== -->

        <!-- Infinite Scroll - Open to work -->
        <div class="max-w-full overflow-hidden px-12 bg-dark-screen">
          <div class="infinite-scroll-horizontal flex space-x-4">
            
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>

            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>

            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>
            
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>

            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>

            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>
            
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>

            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>

            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">Open to work</p>
            <p class="font-semibold text-sm p-4 text-white whitespace-nowrap">
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
                <path d="M16.881 4.345A23.112 23.112 0 0 1 8.25 6H7.5a5.25 5.25 0 0 0-.88 10.427 21.593 21.593 0 0 0 1.378 3.94c.464 1.004 1.674 1.32 2.582.796l.657-.379c.88-.508 1.165-1.593.772-2.468a17.116 17.116 0 0 1-.628-1.607c1.918.258 3.76.75 5.5 1.446A21.727 21.727 0 0 0 18 11.25c0-2.414-.393-4.735-1.119-6.905ZM18.26 3.74a23.22 23.22 0 0 1 1.24 7.51 23.22 23.22 0 0 1-1.41 7.992.75.75 0 1 0 1.409.516 24.555 24.555 0 0 0 1.415-6.43 2.992 2.992 0 0 0 .836-2.078c0-.807-.319-1.54-.836-2.078a24.65 24.65 0 0 0-1.415-6.43.75.75 0 1 0-1.409.516c.059.16.116.321.17.483Z" />
              </svg>
            </p>

          </div>
        </div>

        <!-- Hard Skill -->
        <div class="w-full px-8 py-16 sm:px-6 mx-auto flex flex-col items-center justify-center bg-dark-screen text-white">

          <!-- Title Header -->
          <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-3xl md:leading-tight">Hard Skill Proficiency</h2>
          </div>
          <!-- End Title -->

          <!-- Grid -->
          <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 my-2 content-center">

            @forelse ($hardskill as $hardskill)

            <!-- Icon Block -->
            <div class="flex flex-col justify-center bg-[#363636] rounded-xl text-center px-8 py-10 dark:border-neutral-700">
              <!-- Icon -->
              <div class="flex justify-center items-center rounded-lg mx-auto">
                <img class="size-12" src="{{ Storage::url($hardskill->icon) }}" alt="{{ $hardskill->slug }}">
              </div>
              <!-- End Icon -->
              <div class="mt-3">
                <h3 class="text-sm sm:text-ml font-semibold">
                  {{ $hardskill->name }}
                </h3>
              </div>
            </div>

            @empty
              <p>No Hard Skill Found.</p>
            @endforelse
            
          </div>
          <!-- End Grid -->
        </div>
        <!-- Hard Skill -->

        {{-- Work Edu --}}
        <div class="w-full py-16 my-4">
          <div class="grid lg:grid-cols-3 gap-16 px-16 mx-auto">

            {{-- Work Experience --}}
            <div class="lg:col-span-2">
              <!-- Title -->
              <div class="mx-auto mb-6 lg:mb-8">
                  <h2 class="text-2xl font-bold md:text-3xl md:leading-tight">Work Experience</h2>
              </div>
              <!-- End Title -->

              <div class="grid lg:grid-cols-2 sm:grid-cols-1 gap-6">

                {{-- Work Experience List --}}
                @forelse ($experience as $exp)

                <div class="p-6 rounded-lg hover:bg-gray-100 bg-white drop-shadow-lg">
                  <div class="flex justify-between">
                    <img class="size-8 w-auto mb-4" src="{{ Storage::url($exp->logo) }}" alt="Company Logo">
                    <p class="text-xs text-gray-600 dark:text-neutral-400 text-right">
                      {{ $exp->start_month ? $exp->start_month->abbr_name : 'No Month' }} {{ \Carbon\Carbon::parse($exp->start_year)->format('Y') }} - {{ $exp->end_month ? $exp->end_month->abbr_name : 'No Month' }} {{ \Carbon\Carbon::parse($exp->end_year)->format('Y') }}
                      <br>
                      <span>{{ $exp->work_type->name }}</span>
                    </p>
                  </div>
                  <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">{{ $exp->role }}</p>
                  <p class="mt-1 text-xs text-gray-600 dark:text-neutral-400">{{ $exp->company_name }}</p>
                  <p class="mt-4 text-xs text-gray-700 dark:text-neutral-400">{{ Str::limit($exp->job_description, 150) }}</p>
                </div>

                @empty
                  <p>No Experience Found.</p>
                @endforelse

              </div>
            </div>

            {{-- Educations --}}
            <div>
              <!-- Title -->
              <div class="max-w-2xl mx-auto mb-6 lg:mb-8">
                  <h2 class="text-2xl font-bold md:text-3xl md:leading-tight">Education</h2>
              </div>
              <!-- End Title -->
              <div class="flex flex-col space-y-6">

                @forelse ($education as $education)
                <div class="p-6 rounded-lg hover:bg-gray-100 bg-white drop-shadow-lg">
                  <div class="flex justify-between">
                    <img class="size-10 mb-4" src="{{ Storage::url($education->logo) }}" alt="Company Logo">
                    <p class="text-xs text-gray-600 dark:text-neutral-400 text-right">
                      {{ $exp->start_month ? $exp->start_month->abbr_name : 'No Month' }} {{ \Carbon\Carbon::parse($exp->start_year)->format('Y') }} - {{ $exp->end_month ? $exp->end_month->abbr_name : 'No Month' }} {{ \Carbon\Carbon::parse($exp->end_year)->format('Y') }}
                      {{-- <br>
                      <span>GPA: {{ $education->grade }}</span> --}}
                    </p>
                  </div>
                  <p class="font-semibold text-sm text-gray-800 dark:text-neutral-200">
                    {{ $education->institution_name }}
                  </p>
                  <p class="mt-1 text-xs text-gray-600 dark:text-neutral-400">
                    {{ $education->degree }}, {{ $education->major }}
                  </p>
                  <p class="mt-3 text-xs text-gray-600 dark:text-neutral-400">
                    Grade: {{ $education->grade }}
                  </p>
                </div>
                @empty
                  <p>No Education History</p>
                @endforelse

              </div>
            </div>

          </div>
        </div>

        <!-- Latest Project -->
        <div class="w-full px-8 py-16 sm:px-6 mx-auto flex flex-col items-center min-h-screen bg-dark-screen justify-center project-container" id="latest-project">

          <!-- Title Header -->
          <div class="max-w-2xl mx-auto text-center mb-10 lg:mb-14">
            <h2 class="text-2xl font-bold md:text-3xl md:leading-tight text-white">Latest Projects.</h2>

            {{-- Project Category --}}
            {{-- <ul class="grid grid-cols-3 lg:flex lg:flex-row gap-2 mt-4 text-white text-xs" id="project-section">
              @forelse ($project_category as $category)
              <li class="px-2 py-1 border rounded-full hover:bg-white hover:text-black">
                <a href="{{ route('front.index', ['category_id' => $category->id]) }}" class="category-link">
                  {{ $category->name }}
                </a>
              </li>
              @empty
                <p class="w-full text-center">
                  No Category
                </p>
              @endforelse

            </ul> --}}
            {{-- End Project Category --}}
          </div>
          <!-- End Title -->

          <!-- Grid -->
          <div class="max-w-[960px] grid sm:grid-cols-2 lg:grid-cols-3 gap-6">

            @forelse ($latest_project as $latest)
            <!-- CARD -->
            <div class="flex flex-col bg-white border shadow-sm rounded-xl card">
              <img class="w-full h-1/2 object-cover rounded-t-xl" src="{{ Storage::url($latest->thumbnail) }}" alt="Card Image">
              <!-- Card Content -->
              <div class="p-3 md:p-4">
                <a class="inline-flex items-center py-1 px-4 rounded-full text-xs bg-gray-800 text-white mb-2" href="#">{{ $latest->project_category->name }}</a>
                <h3 class="text-lg font-bold text-gray-800">{{ $latest->name }}</h3>
                <p class="mt-1 text-gray-500 text-xs">{{ Str::limit($latest->description, 100) }}</p>
              </div>
            </div>
            <!-- END CARD -->
            @empty
              <p class="text-center text-white font-bold text-3xl">No Project</p>
            @endforelse

          </div>
          <!-- End Grid -->

          <!-- <div class="p-4 my-4">
            <a href="#" class="border py-2 px-4 text-white font-semibold rounded-md text-xs" id="loadMore">Load More</a>
          </div> -->

        </div>
        <!-- End Latest Project -->

        <!-- Contact -->
        <div class="w-full py-16" id="form-contact">
            <div class="max-w-[960px] md:flex lg:gap-4 mx-auto px-8 items-center">

                <div class="w-full flex flex-col">
                    <h2 class="text-3xl font-bold md:text-4xl md:leading-tight">
                        Have a project in mind?
                    </h2>
                    <p class="mt-1 text-gray-500 dark:text-neutral-400 text-sm">
                        Tell us your story and we’ll be in touch.
                    </p>

                    <hr class="my-4 mr-8">

                    <!-- Icon Block -->
                    <div class="flex gap-x-7 my-2 mt-2 mr-8">
                        <div class="grow flex-col flex gap-4">
                            <div class="flex gap-4 p-8 rounded-lg hover:bg-gray-100">
                                <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path><path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path></svg>
                                <div class="grow">
                                  <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Send me an email.
                                  </p>
                                  {{-- <hr class="w-1/2 my-2"> --}}
                                  <p>
                                    <a class="relative inline-block text-sm font-medium text-black" href="mailto:example@site.so">
                                      hello@example.so
                                    </a>
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex gap-x-7 my-2 mt-2 mr-8">
                        <div class="grow flex-col flex gap-4">
                            <div class="flex gap-4 p-8 rounded-lg hover:bg-gray-100">
                                <svg class="shrink-0 size-4 text-gray-500 dark:text-neutral-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
                                <div class="grow">
                                  <p class="text-sm text-gray-600 dark:text-neutral-400">
                                    Contact me
                                  </p>
                                  {{-- <hr class="w-1/2 my-2"> --}}
                                  <p>
                                    <a class="relative inline-block text-sm font-medium text-black" href="mailto:example@site.so">
                                      +6282118899102
                                    </a>
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                </div>

                <div class="w-full bg-white shadow-xl rounded-lg p-4 sm:p-6 md:p-8 border">
                    <form action="{{ route('contact.send') }}" method="POST" id="contact-form">
                        @csrf
                        <div class="flex flex-col gap-4">
                            <div>
                                <label for="name" class="sr-only">Name</label>
                                <input type="text" name="name" id="name" autocomplete="name" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm outline-none"  placeholder="Name">
                            </div>
                    
                            <div>
                                <label for="email" class="sr-only">Email</label>
                                <input type="email" name="email" id="email" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm outline-none"  placeholder="Email Address" autocomplete="email">
                            </div>
                    
                            <div>
                                <label for="messages" class="sr-only">Messages</label>
                                <textarea id="messages" name="message" rows="4" class="py-3 px-4 block w-full border border-gray-200 rounded-lg text-sm outline-none"  placeholder="Messages"></textarea>
                            </div>
                    
                            <div class="mt-4 flex justify-center sm:mb-4">
                                <button type="submit" id="send-button" class="py-2 px-8 inline-flex justify-center items-center text-sm font-medium rounded-lg bg-gray-800 hover:border-none text-white">
                                Send
                                </button>                    
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
        
        <footer class="mt-auto w-full py-8 px-4 sm:px-6 lg:px-8 mx-auto bg-dark-screen">
          <!-- Grid -->
          <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-5">
            
            <!-- Social Brands -->
            <div class="flex justify-center md:justify-end gap-2 mt-4 md:mt-0">
              <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-gray-600 p-2" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0,0,255.99609,255.99609">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M41,4h-32c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM17,20v19h-6v-19zM11,14.47c0,-1.4 1.2,-2.47 3,-2.47c1.8,0 2.93,1.07 3,2.47c0,1.4 -1.12,2.53 -3,2.53c-1.8,0 -3,-1.13 -3,-2.53zM39,39h-6c0,0 0,-9.26 0,-10c0,-2 -1,-4 -3.5,-4.04h-0.08c-2.42,0 -3.42,2.06 -3.42,4.04c0,0.91 0,10 0,10h-6v-19h6v2.56c0,0 1.93,-2.56 5.81,-2.56c3.97,0 7.19,2.73 7.19,8.26z"></path></g></g>
                </svg>
              </a>
              <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-gray-600 p-2" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0,0,255.99609,255.99609">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(4,4)"><path d="M32,6c-14.359,0 -26,11.641 -26,26c0,12.277 8.512,22.56 19.955,25.286c-0.592,-0.141 -1.179,-0.299 -1.755,-0.479v-5.957c0,0 -0.975,0.325 -2.275,0.325c-3.637,0 -5.148,-3.245 -5.525,-4.875c-0.229,-0.993 -0.827,-1.934 -1.469,-2.509c-0.767,-0.684 -1.126,-0.686 -1.131,-0.92c-0.01,-0.491 0.658,-0.471 0.975,-0.471c1.625,0 2.857,1.729 3.429,2.623c1.417,2.207 2.938,2.577 3.721,2.577c0.975,0 1.817,-0.146 2.397,-0.426c0.268,-1.888 1.108,-3.57 2.478,-4.774c-6.097,-1.219 -10.4,-4.716 -10.4,-10.4c0,-2.928 1.175,-5.619 3.133,-7.792c-0.2,-0.567 -0.533,-1.714 -0.533,-3.583c0,-1.235 0.086,-2.751 0.65,-4.225c0,0 3.708,0.026 7.205,3.338c1.614,-0.47 3.341,-0.738 5.145,-0.738c1.804,0 3.531,0.268 5.145,0.738c3.497,-3.312 7.205,-3.338 7.205,-3.338c0.567,1.474 0.65,2.99 0.65,4.225c0,2.015 -0.268,3.19 -0.432,3.697c1.898,2.153 3.032,4.802 3.032,7.678c0,5.684 -4.303,9.181 -10.4,10.4c1.628,1.43 2.6,3.513 2.6,5.85v8.557c-0.576,0.181 -1.162,0.338 -1.755,0.479c11.443,-2.726 19.955,-13.009 19.955,-25.286c0,-14.359 -11.641,-26 -26,-26zM33.813,57.93c-0.599,0.042 -1.203,0.07 -1.813,0.07c0.61,0 1.213,-0.029 1.813,-0.07zM37.786,57.346c-1.164,0.265 -2.357,0.451 -3.575,0.554c1.218,-0.103 2.411,-0.29 3.575,-0.554zM32,58c-0.61,0 -1.214,-0.028 -1.813,-0.07c0.6,0.041 1.203,0.07 1.813,0.07zM29.788,57.9c-1.217,-0.103 -2.411,-0.289 -3.574,-0.554c1.164,0.264 2.357,0.451 3.574,0.554z"></path></g></g>
                </svg>
              </a>
              <a class="size-8 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-white hover:bg-gray-600 p-2" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="36" height="36" viewBox="0,0,255.99609,255.99609">
                    <g fill="#ffffff" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><g transform="scale(5.12,5.12)"><path d="M9,4c-2.76,0 -5,2.24 -5,5v32c0,2.76 2.24,5 5,5h32c2.76,0 5,-2.24 5,-5v-32c0,-2.76 -2.24,-5 -5,-5zM12,18h6.73047c0.73,0 4.67969,-0.04969 4.67969,3.57031c0,1.92 -1.31039,2.56938 -1.90039,2.85938c0.88,0.28 2.49023,1.09031 2.49023,3.57031c0,3.83 -4.39047,4 -4.98047,4h-7.01953zM29,18h7v2h-7zM15,20.42969v3.28125h3.2207c0.44,0 1.89844,-0.24094 1.89844,-1.71094c0,-1.47 -1.89945,-1.57031 -2.18945,-1.57031zM32.73047,21c3.9,0 4.95914,3.03977 5.11914,3.75977c0.15,0.73 0.15039,1.37023 0.15039,2.24023h-7.90039c0,0.87 0.46102,2.83008 2.79102,2.83008c0.62,0 1.07883,-0.14945 1.54883,-0.43945c0.46,-0.29 0.62148,-0.57133 0.77148,-0.86133h2.62891c-0.46,1.15 -1.07977,2.02156 -2.00977,2.60156c-0.93,0.58 -2.01,0.86914 -3.25,0.86914c-0.78,0 -1.55008,-0.14945 -2.33008,-0.43945c-0.62,-0.29 -1.23922,-0.72039 -1.69922,-1.15039c-0.46,-0.44 -0.77008,-1.02023 -1.08008,-1.74023c-0.31,-0.58 -0.4707,-1.44992 -0.4707,-2.16992c0,-0.72 0.29047,-5.5 5.73047,-5.5zM32.73047,23.0293c-2.26,0 -2.63086,2.17055 -2.63086,2.31055h4.96094c-0.16,-0.72 -0.81008,-2.31055 -2.33008,-2.31055zM15,25.71094v3.85937h3.35156c0.289,0 2.32813,-0.08938 2.32813,-1.85937c0,-1.76 -1.60213,-2 -2.32813,-2z"></path></g></g>
                </svg>
              </a>
            </div>
        
            <!-- Navigation Links -->
            <ol class="flex items-center whitespace-nowrap">
                <li class="inline-flex items-center">
                  <a class="flex items-center text-sm text-gray-300 hover:text-white" href="#">
                    Home
                  </a>
                  <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                  </svg>
                </li>
                <li class="inline-flex items-center">
                  <a class="flex items-center text-sm text-gray-300 hover:text-white" href="#">
                    Projects
                    <svg class="shrink-0 size-5 text-gray-400 mx-2" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                      <path d="M6 13L10 3" stroke="currentColor" stroke-linecap="round"></path>
                    </svg>
                  </a>
                </li>
                <li class="inline-flex items-center">
                  <a class="flex items-center text-sm text-gray-300 hover:text-white" href="#">
                    Contact
                  </a>
                </li>
            </ol>
        
            <!-- Brand -->
            <div class="text-center md:text-left">
              <a class="text-sm text-gray-300" href="#" aria-label="Brand">&copy; 2024 All rights reserved.</a>
            </div>

          </div>
          <!-- End Grid -->
        </footer>

    </main>

    <script src="https://unpkg.com/preline/dist/preline.js"></script>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
      const typed = new Typed('#typed-text', {
        strings: ['Gracie Abrahams'],
        typeSpeed: 50,
      });
    </script>

    <script src="{{ asset('customjs/fetch.js') }}"></script>

</body>
</html>