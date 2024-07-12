<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="/css/style.css">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- Flaticon --}}
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>

    {{-- Animate On Scroll JS Library --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <header class="sm:justify-start sm:flex-nowrap z-50 w-full bg-white text-sm dark:bg-neutral-800 mb-8">
        <nav class="relative max-w-[85rem] mx-auto px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-10 my-4 backdrop-blur-sm"
            aria-label="Global">
            <div class="flex items-center justify-between">
                <a class="flex-none text-xl font-semibold dark:text-white" href="#" aria-label="Brand">Brand</a>
                <div class="sm:hidden">
                    <button type="button"
                        class="hs-collapse-toggle size-9 flex justify-center items-center text-sm font-semibold rounded-lg border border-gray-200 text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700"
                        data-hs-collapse="#navbar-collapse-with-animation"
                        aria-controls="navbar-collapse-with-animation" aria-label="Toggle navigation">
                        <svg class="hs-collapse-open:hidden size-4" width="16" height="16" fill="currentColor"
                            viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                        </svg>
                        <svg class="hs-collapse-open:block flex-shrink-0 hidden size-4" width="16" height="16"
                            fill="currentColor" viewBox="0 0 16 16">
                            <path
                                d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div id="navbar-collapse-with-animation"
                class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow sm:block">
                <div class="flex flex-col sm:flex-row sm:items-center justify-center sm:ps-7">
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#" aria-current="page">Home</a>
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#">About</a>
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#">Services</a>
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#">Experiences</a>
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#">Projects</a>
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#">Testimonials</a>
                    <a class="py-3 ps-px sm:px-8 font-medium text-gray-500 lg:hover:text-bluedark lg:hover:bg-slate-100 rounded-full"
                        href="#">Contact</a>
                </div>
            </div>
        </nav>

        <div class="w-full mx-auto">
            <div class="overflow-hidden">
                <div class="w-auto mx-auto py-36">
                    <div class="relative mx-auto max-w-4xl grid space-y-5 sm:space-y-10">
                        <!-- Title -->
                        <div class="px-8 text-center">
                            {{-- <p class="text-xl font-semibold text-gray-500 tracking-wide mb-2">
                                    Hey there!
                                </p> --}}
                            <h1 class="text-gray-800 font-bold text-8xl lg:leading-tight">
                                <span class="text-bluedark">Hazel Cordella.</span>
                            </h1>
                            <p class="text-lg font-normal text-gray-500 tracking-wide mt-2 px-16">
                                A graphic designer with a passion for storytelling through design. I’m passionate
                                about creating designs that are not only visually stunning but also communicate a
                                message effectively.
                            </p>
                        </div>
                        <!-- End Title -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-2/4 start-0 transform -translate-y-2/4 -translate-x-40 sm:block md:block lg:-translate-x-80 px-15"
                            aria-hidden="true">
                            <svg class="w-52 h-auto" width="717" height="653" viewBox="0 0 717 653" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M170.176 228.357C177.176 230.924 184.932 227.329 187.498 220.329C190.064 213.329 186.47 205.574 179.47 203.007L170.176 228.357ZM98.6819 71.4156L85.9724 66.8638L85.8472 67.2136L85.7413 67.5698L98.6819 71.4156ZM336.169 77.9736L328.106 88.801L328.288 88.9365L328.475 89.0659L336.169 77.9736ZM616.192 128.685C620.658 122.715 619.439 114.254 613.469 109.788L516.183 37.0035C510.213 32.5371 501.753 33.756 497.286 39.726C492.82 45.696 494.039 54.1563 500.009 58.6227L586.485 123.32L521.788 209.797C517.322 215.767 518.541 224.227 524.511 228.694C530.481 233.16 538.941 231.941 543.407 225.971L616.192 128.685ZM174.823 215.682C179.47 203.007 179.475 203.009 179.48 203.011C179.482 203.012 179.486 203.013 179.489 203.014C179.493 203.016 179.496 203.017 179.498 203.018C179.501 203.019 179.498 203.018 179.488 203.014C179.469 203.007 179.425 202.99 179.357 202.964C179.222 202.912 178.991 202.822 178.673 202.694C178.035 202.437 177.047 202.026 175.768 201.456C173.206 200.314 169.498 198.543 165.106 196.099C156.27 191.182 144.942 183.693 134.609 173.352C114.397 153.124 97.7311 122.004 111.623 75.2614L85.7413 67.5698C68.4512 125.748 89.856 166.762 115.51 192.436C128.11 205.047 141.663 213.953 151.976 219.692C157.158 222.575 161.591 224.698 164.777 226.118C166.371 226.828 167.659 227.365 168.578 227.736C169.038 227.921 169.406 228.065 169.675 228.168C169.809 228.22 169.919 228.261 170.002 228.293C170.044 228.309 170.08 228.322 170.109 228.333C170.123 228.338 170.136 228.343 170.147 228.347C170.153 228.349 170.16 228.352 170.163 228.353C170.17 228.355 170.176 228.357 174.823 215.682ZM111.391 75.9674C118.596 55.8511 137.372 33.9214 170.517 28.6833C204.135 23.3705 255.531 34.7533 328.106 88.801L344.233 67.1462C268.876 11.0269 210.14 -4.91361 166.303 2.01428C121.993 9.01681 95.9904 38.8917 85.9724 66.8638L111.391 75.9674ZM328.475 89.0659C398.364 137.549 474.018 153.163 607.307 133.96L603.457 107.236C474.34 125.837 406.316 110.204 343.864 66.8813L328.475 89.0659Z"
                                    fill="currentColor" class="fill-yellowlight" />
                                <path
                                    d="M17.863 238.22C10.4785 237.191 3.6581 242.344 2.62917 249.728C1.60024 257.113 6.75246 263.933 14.137 264.962L17.863 238.22ZM117.548 265.74L119.421 252.371L119.411 252.37L117.548 265.74ZM120.011 466.653L132.605 471.516L132.747 471.147L132.868 470.771L120.011 466.653ZM285.991 553.767C291.813 549.109 292.756 540.613 288.098 534.792L212.193 439.92C207.536 434.098 199.04 433.154 193.218 437.812C187.396 442.47 186.453 450.965 191.111 456.787L258.582 541.118L174.251 608.589C168.429 613.247 167.486 621.742 172.143 627.564C176.801 633.386 185.297 634.329 191.119 629.672L285.991 553.767ZM14.137 264.962L115.685 279.111L119.411 252.37L17.863 238.22L14.137 264.962ZM115.675 279.11C124.838 280.393 137.255 284.582 145.467 291.97C149.386 295.495 152.093 299.505 153.39 304.121C154.673 308.691 154.864 314.873 152.117 323.271L177.779 331.665C181.924 318.993 182.328 307.301 179.383 296.818C176.451 286.381 170.485 278.159 163.524 271.897C149.977 259.71 131.801 254.105 119.421 252.371L115.675 279.11ZM152.117 323.271C138.318 365.454 116.39 433.697 107.154 462.535L132.868 470.771C142.103 441.936 164.009 373.762 177.779 331.665L152.117 323.271ZM107.417 461.79C103.048 473.105 100.107 491.199 107.229 508.197C114.878 526.454 132.585 539.935 162.404 543.488L165.599 516.678C143.043 513.99 135.175 505.027 132.132 497.764C128.562 489.244 129.814 478.743 132.605 471.516L107.417 461.79ZM162.404 543.488C214.816 549.734 260.003 554.859 276.067 556.643L279.047 529.808C263.054 528.032 217.939 522.915 165.599 516.678L162.404 543.488Z"
                                    fill="currentColor" class="fill-yellowlight" />
                                <path
                                    d="M229.298 165.61C225.217 159.371 216.85 157.621 210.61 161.702C204.371 165.783 202.621 174.15 206.702 180.39L229.298 165.61ZM703.921 410.871C711.364 410.433 717.042 404.045 716.605 396.602L709.47 275.311C709.032 267.868 702.643 262.189 695.2 262.627C687.757 263.065 682.079 269.454 682.516 276.897L688.858 384.71L581.045 391.052C573.602 391.49 567.923 397.879 568.361 405.322C568.799 412.765 575.187 418.444 582.63 418.006L703.921 410.871ZM206.702 180.39C239.898 231.14 343.567 329.577 496.595 322.758L495.394 295.785C354.802 302.049 259.09 211.158 229.298 165.61L206.702 180.39ZM496.595 322.758C567.523 319.598 610.272 335.61 637.959 353.957C651.944 363.225 662.493 373.355 671.17 382.695C675.584 387.447 679.351 391.81 683.115 396.047C686.719 400.103 690.432 404.172 694.159 407.484L712.097 387.304C709.691 385.166 706.92 382.189 703.298 378.113C699.837 374.217 695.636 369.362 690.951 364.319C681.43 354.07 669.255 342.306 652.874 331.451C619.829 309.553 571.276 292.404 495.394 295.785L496.595 322.758Z"
                                    fill="currentColor" class="fill-bluedark" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->

                        <!-- SVG Element -->
                        <div class="hidden absolute top-2/4 end-0 transform -translate-y-2/4 translate-x-40 sm:block md:block lg:translate-x-80 px-15"
                            aria-hidden="true">
                            <svg class="w-72 h-auto" width="1115" height="636" viewBox="0 0 1115 636" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0.990203 279.321C-1.11035 287.334 3.68307 295.534 11.6966 297.634L142.285 331.865C150.298 333.965 158.497 329.172 160.598 321.158C162.699 313.145 157.905 304.946 149.892 302.845L33.8132 272.418L64.2403 156.339C66.3409 148.326 61.5475 140.127 53.5339 138.026C45.5204 135.926 37.3213 140.719 35.2207 148.733L0.990203 279.321ZM424.31 252.289C431.581 256.26 440.694 253.585 444.664 246.314C448.635 239.044 445.961 229.931 438.69 225.96L424.31 252.289ZM23.0706 296.074C72.7581 267.025 123.056 230.059 187.043 212.864C249.583 196.057 325.63 198.393 424.31 252.289L438.69 225.96C333.77 168.656 249.817 164.929 179.257 183.892C110.144 202.465 54.2419 243.099 7.92943 270.175L23.0706 296.074Z"
                                    fill="currentColor" class="fill-yellowlight" />
                                <path
                                    d="M451.609 382.417C446.219 388.708 446.95 398.178 453.241 403.567L555.763 491.398C562.054 496.788 571.524 496.057 576.913 489.766C582.303 483.474 581.572 474.005 575.281 468.615L484.15 390.544L562.222 299.413C567.612 293.122 566.881 283.652 560.59 278.263C554.299 272.873 544.829 273.604 539.44 279.895L451.609 382.417ZM837.202 559.655C841.706 566.608 850.994 568.593 857.947 564.09C864.9 559.586 866.885 550.298 862.381 543.345L837.202 559.655ZM464.154 407.131C508.387 403.718 570.802 395.25 638.136 410.928C704.591 426.401 776.318 465.66 837.202 559.655L862.381 543.345C797.144 442.631 718.724 398.89 644.939 381.709C572.033 364.734 504.114 373.958 461.846 377.22L464.154 407.131Z"
                                    fill="currentColor" class="fill-bluedark" />
                                <path
                                    d="M447.448 0.194357C439.203 -0.605554 431.87 5.43034 431.07 13.6759L418.035 148.045C417.235 156.291 423.271 163.623 431.516 164.423C439.762 165.223 447.095 159.187 447.895 150.942L459.482 31.5025L578.921 43.0895C587.166 43.8894 594.499 37.8535 595.299 29.6079C596.099 21.3624 590.063 14.0296 581.818 13.2297L447.448 0.194357ZM1086.03 431.727C1089.68 439.166 1098.66 442.239 1106.1 438.593C1113.54 434.946 1116.62 425.96 1112.97 418.521L1086.03 431.727ZM434.419 24.6572C449.463 42.934 474.586 81.0463 521.375 116.908C568.556 153.07 637.546 187.063 742.018 200.993L745.982 171.256C646.454 157.985 582.444 125.917 539.625 93.0974C496.414 59.978 474.537 26.1903 457.581 5.59138L434.419 24.6572ZM742.018 200.993C939.862 227.372 1054.15 366.703 1086.03 431.727L1112.97 418.521C1077.85 346.879 956.138 199.277 745.982 171.256L742.018 200.993Z"
                                    fill="currentColor" class="fill-yellowlight" />
                            </svg>
                        </div>
                        <!-- End SVG Element -->
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="content">

        <!-- About & Stats -->
        <div class="w-full mx-auto py-4 bg-bluedark">
            <div class="max-w-6xl px-4 lg:py-20 mx-auto">
                <!-- Grid -->
                <div class="grid grid-cols-2 gap-16 items-center justify-between">
                    <div class="">
                        <div class="">

                        </div>
                    </div>
                    <div class="">
                        <!-- Title -->
                        <div class="">
                            <h2 class="mb-4 text-3xl text-yellowlight font-bold">
                                About me.
                            </h2>
                            <p class="text-white text-sm font-normal">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam ullam explicabo
                                pariatur at magnam esse sit, error eaque est impedit aut quaerat voluptatem quam
                                consequatur non possimus? Neque, similique recusandae. Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Ducimus, blanditiis.
                            </p>
                        </div>
                        <!-- End Title -->
                    </div>
                </div>
                <!-- End Grid -->
            </div>
        </div>
        <hr>

        {{-- <div class="w-full mx-auto py-8">
            <div class="max-w-6xl px-4 lg:px-8 lg:py-4 mx-auto">
                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">
                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                        <div class="p-8">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500">
                                    Total Client
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-3xl font-medium text-gray-800">
                                    72,540
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                        <div class="p-8">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500">
                                    Total Client
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-3xl font-medium text-gray-800">
                                    72,540
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                        <div class="p-8">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500">
                                    Total Client
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-3xl font-medium text-gray-800">
                                    72,540
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                    <!-- Card -->
                    <div class="flex flex-col bg-white border shadow-sm rounded-xl">
                        <div class="p-8">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500">
                                    Total Client
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-3xl font-medium text-gray-800">
                                    72,540
                                </h3>
                            </div>
                        </div>
                    </div>
                    <!-- End Card -->
                </div>
            </div>
        </div>
        <hr> --}}

        {{-- Service --}}
        <div class="w-full mx-auto py-8">
            <div class="max-w-6xl px-4 mx-auto mt-8 items-center">
                <div class="grid grid-cols-5">
                    <div></div>
                    <div class="text-center col-span-3">
                        <h2 class="text-3xl text-gray-800 font-bold">
                            Services.
                        </h2>
                        <p class="mt-1 text-gray-800 font-meidum text-ml">
                            Here are the services I am providing to you.
                        </p>
                    </div>
                    <div></div>
                </div>
                <div class="grid grid-cols-3 gap-3 py-8 mt-2">
                    <!-- Icon Block -->
                    <div class="flex hover:bg-bluedark/5 rounded-lg p-6 group">
                        <!-- Icon -->
                        <div class="">
                            <div
                                class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full bg-bluedark text-gray-800 shadow-sm mx-auto mb-4">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z" />
                                    <path d="M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Industry-leading documentation
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400 text-sm mb-4">
                                From boarding passes to movie tickets, there's pretty much nothing you can't
                                store with Preline.
                            </p>
                            <a class="hover:underline text-xs font-semibold text-blue-700" href="#">Learn
                                more &rarr;</a>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex hover:bg-bluedark/5 rounded-lg p-6">
                        <!-- Icon -->
                        <div class="">
                            <div
                                class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full bg-bluedark text-gray-800 shadow-sm mx-auto mb-4">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M14 9a2 2 0 0 1-2 2H6l-4 4V4c0-1.1.9-2 2-2h8a2 2 0 0 1 2 2v5Z" />
                                    <path d="M18 9h2a2 2 0 0 1 2 2v11l-4-4h-6a2 2 0 0 1-2-2v-1" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800">
                                Developer community support
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400 text-sm mb-4">
                                From boarding passes to movie tickets, there's pretty much nothing you can't
                                store with Preline.
                            </p>
                            <a class="hover:underline text-xs font-semibold text-blue-700" href="#">Learn
                                more &rarr;</a>
                        </div>
                    </div>
                    <!-- End Icon Block -->

                    <!-- Icon Block -->
                    <div class="flex hover:bg-bluedark/5 rounded-lg p-6">
                        <!-- Icon -->
                        <div class="">
                            <div
                                class="flex-shrink-0 inline-flex justify-center items-center size-[46px] rounded-full bg-bluedark text-gray-800 shadow-sm mx-auto dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-200 mb-4">
                                <svg class="flex-shrink-0 size-5" xmlns="http://www.w3.org/2000/svg" width="24"
                                    height="24" viewBox="0 0 24 24" fill="none" stroke="white"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M7 10v12" />
                                    <path
                                        d="M15 5.88 14 10h5.83a2 2 0 0 1 1.92 2.56l-2.33 8A2 2 0 0 1 17.5 22H4a2 2 0 0 1-2-2v-8a2 2 0 0 1 2-2h2.76a2 2 0 0 0 1.79-1.11L12 2h0a3.13 3.13 0 0 1 3 3.88Z" />
                                </svg>
                            </div>
                            <h3 class="text-base sm:text-lg font-semibold text-gray-800 dark:text-neutral-200">
                                Simple and affordable
                            </h3>
                            <p class="mt-1 text-gray-600 dark:text-neutral-400 text-sm mb-4">
                                From boarding passes to movie tickets, there's pretty much nothing you can't
                                store with Preline.
                            </p>
                            <a class="hover:underline text-xs font-semibold text-blue-700" href="#">Learn
                                more &rarr;</a>
                        </div>
                    </div>
                    <!-- End Icon Block -->
                </div>
            </div>
        </div>

        {{-- Education Experience --}}
        <div class="w-full mx-auto py-8 bg-bluedark">
            <div class="max-w-6xl px-4 mx-auto my-16">
                <div class="lg:grid lg:grid-cols-2 lg:gap-16 lg:items-center lg:justify-between">
                    {{-- Educations --}}
                    <div class="px-6">
                        <!-- Title -->
                        <div class="">
                            <h2 class="mb-2 text-3xl text-yellowlight font-bold">
                                Educations.
                            </h2>
                            <p class="text-white text-ml">
                                We provide you with a test account that can be set up in seconds. Our main focus is
                                getting responses to you as soon as we can.
                            </p>
                        </div>

                    </div>

                    {{-- Experiences --}}
                    <div class="px-6">
                        <!-- Title -->
                        <div class="">
                            <h2 class="mb-2 text-3xl text-yellowlight font-bold">
                                Experiences.
                            </h2>
                            <p class="text-ml text-white">
                                We provide you with a test account that can be set up in seconds. Our main focus
                                is getting responses to you as soon as we can.
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        {{-- Projects --}}
        <div class="w-full mx-auto py-8">
            <div class="max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto mb-8">
                <div class="text-center my-8">
                    <h2 class="text-3xl text-gray-800 font-bold lg:text-4xl">
                        Projects.
                    </h2>
                    <p class="mt-1 text-gray-800 font-meidum text-ml">
                        Here are the services we are providing to you.
                    </p>
                    <div class="flex flex-row gap-4 mt-6 justify-center">
                        <a href="#" class="px-4 py-3 bg-slate-50 font-semibold text-xs rounded-full">Mobile
                            App</a>
                        <a href="#" class="px-4 py-3 bg-slate-50 font-semibold text-xs rounded-full">Web
                            Development</a>
                        <a href="#"
                            class="px-4 py-3 bg-slate-50 font-semibold text-xs rounded-full">Advertisement</a>
                        <a href="#"
                            class="px-4 py-3 bg-slate-50 font-semibold text-xs rounded-full">Programming</a>
                    </div>
                </div>

                <!-- Grid -->
                <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    {{-- <div class="flex flex-col hover:bg-slate-200 p-4 rounded-xl">
                        <a class="group" href="#">
                            <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                    src="https://images.unsplash.com/photo-1586232702178-f044c5f4d4b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80"
                                    alt="Image Description">
                                <span
                                    class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-gray-800 text-white py-1.5 px-3 dark:bg-neutral-900">
                                    Freelance
                                </span>
                            </div>

                            <div class="mt-3">
                                <div class="grid grid-cols-2 justify-between items-center">
                                    <h3 class="text-xl font-semibold">
                                        Studio by Preline
                                    </h3>
                                    <div class="flex justify-end">
                                        <a href="#">
                                            <span
                                                class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full dark:bg-bluedark dark:text-blue-300">Default</span>
                                        </a>
                                    </div>
                                </div>
                                <p class="mt-1 text-gray-800 dark:text-neutral-200 text-ml">
                                    Produce professional, reliable streams easily leveraging Preline's innovative
                                    broadcast
                                    studio
                                </p>
                                <a href="#"
                                    class="mt-4 inline-flex items-center gap-x-1 text-blue-600 decoration-2 group-hover:underline font-medium text-xs hover:underline">
                                    View Project
                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="m9 18 6-6-6-6" />
                                    </svg>
                                </a>
                            </div>
                        </a>
                    </div> --}}
                    <!-- End Card 1 -->

                    <div class="flex flex-col hover:bg-slate-200 p-4 rounded-xl">
                        <a class="group" href="#">
                            <div class="relative pt-[50%] sm:pt-[70%] rounded-xl overflow-hidden">
                                <img class="size-full absolute top-0 start-0 object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out rounded-xl"
                                    src="https://images.unsplash.com/photo-1586232702178-f044c5f4d4b7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1035&q=80"
                                    alt="Image Description">
                                <span
                                    class="absolute top-0 end-0 rounded-se-xl rounded-es-xl text-xs font-medium bg-yellowlight text-bluedark py-1.5 px-3 dark:bg-neutral-900">
                                    Freelance
                                </span>
                            </div>

                            <div class="mt-3">
                                <div class="grid grid-cols-2 justify-between items-center">
                                    <h3 class="text-xl font-semibold">
                                        Studio by Preline
                                    </h3>
                                    <div class="flex justify-end">
                                        <a href="#">
                                            <span
                                                class="bg-bluedark text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded-full">Default</span>
                                        </a>
                                    </div>
                                </div>
                                <p class="mt-1 text-gray-800 text-ml">
                                    Produce professional, reliable streams easily leveraging Preline's innovative
                                    broadcast studio
                                </p>
                                <div class="flex mt-4 gap-2">
                                    <a class="" href="#"><i class="fi fi-brands-github"></i></a>
                                    <a href="#"><i class="fi fi-brands-dribbble"></i></a>
                                    <a href="#"><i class="fi fi-brands-unity"></i></a>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
                <!-- End Grid -->

            </div>
        </div>

        {{-- Infinite Scroll logo --}}
        <div class="w-full mx-auto py-16 bg-yellowlight">
            <div x-data="{}" x-init="$nextTick(() => {
                let ul = $refs.logos;
                ul.insertAdjacentHTML('afterend', ul.outerHTML);
                ul.nextSibling.setAttribute('aria-hidden', 'true');
            })"
                class="relative mx-auto max-w-6xl overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_128px,_black_calc(100%-128px),transparent_100%)]">
                <div class="w-full inline-flex flex-nowrap">
                    <ul
                        class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/instagram.png" alt="instagram-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/adobe.png" alt="adobe-creative-suite">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/discord.png" alt="discord-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/github.png" alt="github-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/xd.png" alt="xd-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/photoshop.png" alt="ps-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/linkedin.png" alt="linkedin-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/behance.png" alt="behance-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/after-effects.png" alt="after-effects-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/dribbble.png" alt="dribble-icon">
                            </a>
                        </li>
                    </ul>
                    <ul class="flex items-center justify-center md:justify-start [&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll"
                        aria-hidden="true">
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/instagram.png" alt="instagram-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/adobe.png" alt="adobe-creative-suite">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/discord.png" alt="discord-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/github.png" alt="github-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/xd.png" alt="xd-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/photoshop.png" alt="ps-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/linkedin.png" alt="linkedin-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/behance.png" alt="behance-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/after-effects.png" alt="after-effects-icon">
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <img class="w-[36px]" src="img/icon/dribbble.png" alt="dribble-icon">
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Infinite Scroll Testimonial --}}
        <div class="w-full mx-auto py-16 bg-bluedark">
            <div class="max-w-6xl px-4 mx-auto items-center mb-10">
                <div class="grid grid-cols-5">
                    <div></div>
                    <div class="text-center col-span-3">
                        <h2 class="text-3xl text-yellowlight font-bold lg:text-4xl">
                            Testimonials.
                        </h2>
                        <p class="mt-1 text-white font-meidum text-lg">
                            Hearing from those I've worked with is always a joy. Here’s what some of my clients and
                            colleagues have to say
                        </p>
                    </div>
                    <div></div>
                </div>
            </div>
        </div>

        {{-- <div class="w-full mx-auto py-8">
            <div class="max-w-6xl px-4 sm:px-6 lg:px-8 mx-auto">
                
            </div>
        </div> --}}

        <style>
            @keyframes infinite-scroll {
                0% {
                    transform: translateX(0);
                }

                100% {
                    transform: translateX(-100%);
                }
            }

            .animate-infinite-scroll {
                display: flex;
                width: 200%;
                animation: infinite-scroll 20s linear infinite;
            }
        </style>

    </main>

    {{-- Action on Scroll - AOS JS --}}
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>
