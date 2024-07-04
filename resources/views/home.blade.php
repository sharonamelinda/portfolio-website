<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Tailwind CSS --}}
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    {{-- Alpine JS --}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body>
    <div class="bg-white font-inter">

        {{-- BODY --}}
        <div class="relative isolate px-2 pt-8 lg:px-4 sm:mx-8 xs:mx-8">

            <x-polygon-one></x-polygon-one>

            {{-- About --}}
            <div class="mx-auto max-w-4xl py-4 my-2">
                <div class="pl-12 bg-blacky border rounded-lg flex items-center justify-between mb-2">
                    <div class="p-8">
                        <p class="text-brokenw font-semibold">Hello.</p>
                        <div class="mb-1 mt-3 text-5xl font-bold tracking-tight">
                            <span class="text-brokenw">I'm </span>
                            <span class="text-oren">Adam Smith.</span>
                        </div>
                        <p class="font-semibold text-xl text-brokenw mb-4">A Graphic Designer.</p>
                        <div class="mt-8">
                            <button type="button"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-brokenw bg-oren rounded-full border border-oren hover:bg-transparent hover:text-brokenw focus:z-10 focus:ring-4 focus:ring-gray-100">Contact
                                me</button>
                            <button type="button"
                                class="py-2.5 px-5 me-2 mb-2 text-sm font-medium text-oren rounded-full border border-oren hover:bg-oren hover:text-brokenw focus:z-10 focus:ring-4 focus:ring-gray-100">Projects</button>
                        </div>
                    </div>
                    <div class="flex justify-end px-12">
                        <img src="/img/profile.png" alt="profile">
                    </div>
                </div>

                <div class="grid grid-cols-3 gap-3">
                    {{-- Skills --}}
                    <div class="bg-blacky border rounded-lg px-8 py-6">
                        <p class="text-lg text-brokenw font-bold">Skills</p>
                        <div class="my-2 py-3 place-self-center">
                            <span
                                class="inline-block px-3 py-1 my-1 mb-1 text-xs font-semibold text-brokenw bg-oren rounded-xl">HTML</span>
                            <span
                                class="inline-block px-3 py-1 my-1 mb-1 text-xs font-semibold text-brokenw bg-oren rounded-xl">Adobe
                                Photoshop</span>
                            <span
                                class="inline-block px-3 py-1 my-1 mb-1 text-xs font-semibold text-brokenw bg-oren rounded-xl">Javascript</span>
                            <span
                                class="inline-block px-3 py-1 my-1 mb-1 text-xs font-semibold text-brokenw bg-oren rounded-xl">Design</span>
                            <span
                                class="inline-block px-3 py-1 my-1 mb-1 text-xs font-semibold text-brokenw bg-oren rounded-xl">PHP</span>
                            <span
                                class="inline-block px-3 py-1 my-1 mb-1 text-xs font-semibold text-brokenw bg-oren rounded-xl">AdobeIllustration</span>
                        </div>
                    </div>

                    {{-- Software --}}
                    <div class="bg-blacky border rounded-xl px-8 py-6">
                        <p class="text-lg text-brokenw font-bold mb-2">Software I use</p>
                        <div class="grid grid-cols-3 gap-3 py-2">
                            <div class="bg-greyi rounded-lg p-2">
                                <img class="place-self-center" src="/img/logo/adobe_ps.png" alt="">
                            </div>
                            <div class="bg-greyi rounded-lg p-2">
                                <img class="place-self-center" src="/img/logo/adobe_ai.png" alt="">
                            </div>
                            <div class="bg-greyi rounded-lg p-2">
                                <img class="place-self-center" src="/img/logo/adobe_xd.png" alt="">
                            </div>
                            <div class="bg-greyi rounded-lg p-2">
                                <img class="place-self-center" src="/img/logo/figma.png" alt="">
                            </div>
                            <div class="bg-greyi rounded-lg p-2">
                                <img class="place-self-center" src="/img/logo/adobe_lr.png" alt="">
                            </div>
                            <div class="bg-greyi rounded-lg p-2">
                                <img class="place-self-center" src="/img/logo/adobe_ae.png" alt="">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col">
                        {{-- Socmed --}}
                        <div class="bg-blacky p-4 rounded-lg my-1 flex justify-between">
                            <div class="bg-greyi rounded-lg p-2 mx-2">
                                <img class="place-self-center" src="/img/logo/linkedin.png" alt="Linked In">
                            </div>
                            <div class="bg-greyi rounded-lg p-2 mx-2">
                                <img class="place-self-center" src="/img/logo/github.png" alt="Github">
                            </div>
                            <div class="bg-greyi rounded-lg p-2 mx-2">
                                <img class="place-self-center" src="/img/logo/instagram.png" alt="Instagram">
                            </div>
                            <div class="bg-greyi rounded-lg p-2 mx-2">
                                <img class="place-self-center" src="/img/logo/facebook.png" alt="Facebook">
                            </div>
                        </div>

                        {{-- Years --}}
                        <div class="bg-blacky px-4 py-12 rounded-lg flex justify-center my-1">
                            <div class="font-bold text-brokenw text-6xl px-4">5+</div>
                            <div class="font-bold text-brokenw px-4">YEARS OF DESIGN EXPERIENCE</div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Services --}}
            <div class="mx-auto max-w-4xl py-6">
                <div class="text-center font-bold text-4xl text-blacky my-4">
                    Services
                </div>
                <div class="py-4 grid grid-cols-3 gap-3">
                    <div class="bg-blacky p-8 rounded-lg text-brokenw">
                        <div class="bg-oren rounded-full p-2" style="width: 42px">
                            <img src="/img/services/star.png" alt="Star">
                        </div>
                        <p class="text-lg text-brokenw font-bold mt-4">Illustration Design</p>
                        <p class="font-light text-sm text-brokenw mt-2 mb-3">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Similique excepturi culpa pariatur.</p>
                        <a class="text-xs hover:underline" href="#">Learn more &nearr;</a>
                    </div>
                    <div class="bg-blacky p-8 rounded-lg text-brokenw">
                        <div class="bg-oren rounded-full p-2" style="width: 42px">
                            <img src="/img/services/moon.png" alt="Moon">
                        </div>
                        <p class="text-lg text-brokenw font-bold mt-4">Illustration Design</p>
                        <p class="font-light text-sm text-brokenw mt-2 mb-3">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Similique excepturi culpa pariatur.</p>
                        <a class="text-xs hover:underline" href="#">Learn more &nearr;</a>
                    </div>
                    <div class="bg-blacky p-8 rounded-lg text-brokenw">
                        <div class="bg-oren rounded-full p-2" style="width: 42px">
                            <img src="/img/services/bubble.png" alt="Bubble">
                        </div>
                        <p class="text-lg text-brokenw font-bold mt-4">Illustration Design</p>
                        <p class="font-light text-sm text-brokenw mt-2 mb-3">Lorem ipsum dolor, sit amet consectetur
                            adipisicing elit. Similique excepturi culpa pariatur.</p>
                        <a class="text-xs hover:underline" href="#">Learn more &nearr;</a>
                    </div>
                </div>
            </div>

            {{-- Project Showcase --}}
            <div class="mx-auto max-w-4xl py-6">
                <div class="text-center font-bold text-4xl text-blacky my-4">
                    Project Showcase
                </div>
                <div class="grid grid-cols-3 gap-2 py-4">
                    <div class="bg-blacky rounded-lg p-4">
                        <div>
                            <a href="#">
                                <span class="bg-oren text-brokenw text-xs font-medium me-2 px-2.5 py-0.5 rounded-full hover:bg-transparent border border-oren">Advertisement</span>
                            </a>
                        </div>
                        <p class="text-brokenw font-bold text-lg mt-4 mb-3 px-1">Product Design</p>
                        <img class="rounded-lg h-48 w-96" src="/img/projects/prod_design.jpg" alt="Product Design">
                    </div>
                    <div class="bg-blacky rounded-lg p-4">
                        <div>
                            <a href="#">
                                <span class="bg-oren text-brokenw text-xs font-medium me-2 px-2.5 py-0.5 rounded-full hover:bg-transparent border border-oren">Advertisement</span>
                            </a>
                        </div>
                        <p class="text-brokenw font-bold text-lg mt-4 mb-3 px-1">Product Design</p>
                        <img class="rounded-lg h-48 w-96" src="/img/projects/prod_design.jpg" alt="Product Design">
                    </div>
                    <div class="bg-blacky rounded-lg p-4">
                        <div>
                            <a href="#">
                                <span class="bg-oren text-brokenw text-xs font-medium me-2 px-2.5 py-0.5 rounded-full hover:bg-transparent border border-oren">Advertisement</span>
                            </a>
                        </div>
                        <p class="text-brokenw font-bold text-lg mt-4 mb-3 px-1">Product Design</p>
                        <img class="rounded-lg h-48 w-96" src="/img/projects/prod_design.jpg" alt="Product Design">
                    </div>
                    <div class="bg-blacky rounded-lg p-4">
                        <div>
                            <a href="#">
                                <span class="bg-oren text-brokenw text-xs font-medium me-2 px-2.5 py-0.5 rounded-full hover:bg-transparent border border-oren">Advertisement</span>
                            </a>
                        </div>
                        <p class="text-brokenw font-bold text-lg mt-4 mb-3 px-1">Product Design</p>
                        <img class="rounded-lg h-48 w-96" src="/img/projects/prod_design.jpg" alt="Product Design">
                    </div>
                    <div class="bg-blacky rounded-lg p-4">
                        <div>
                            <a href="#">
                                <span class="bg-oren text-brokenw text-xs font-medium me-2 px-2.5 py-0.5 rounded-full hover:bg-transparent border border-oren">Advertisement</span>
                            </a>
                        </div>
                        <p class="text-brokenw font-bold text-lg mt-4 mb-3 px-1">Product Design</p>
                        <img class="rounded-lg h-48 w-96" src="/img/projects/prod_design.jpg" alt="Product Design">
                    </div>
                    <div class="bg-blacky rounded-lg p-4">
                        <div>
                            <a href="#">
                                <span class="bg-oren text-brokenw text-xs font-medium me-2 px-2.5 py-0.5 rounded-full hover:bg-transparent border border-oren">Advertisement</span>
                            </a>
                        </div>
                        <p class="text-brokenw font-bold text-lg mt-4 mb-3 px-1">Product Design</p>
                        <img class="rounded-lg h-48 w-96" src="/img/projects/prod_design.jpg" alt="Product Design">
                    </div>
                </div>
            </div>

            <div class="mx-auto max-w-4xl py-6">
                <div class="text-center font-bold text-4xl text-blacky my-4">
                    Project Showcase
                </div>
            </div>

            <x-polygon-two></x-polygon-two>
        </div>
    </div>
</body>

</html>
