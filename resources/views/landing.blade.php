<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M-Able | Home</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-xxx" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3108108d3f.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
</head>

<body>
    <x-navbar/>


    <!-- Start carousel -->
    <div class="max-w-4xl mx-auto mt-36 mb-4">

        <div id="default-carousel" class="relative" data-carousel="static">
            <!-- Carousel wrapper -->
            <div class="overflow-hidden relative h-96 rounded-lg sm:h-128 xl:h-160 2xl:h-192">
                <!-- Item 1 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <span
                        class="absolute top-1/2 left-1/2 text-2xl font-semibold text-white -translate-x-1/2 -translate-y-1/2 sm:text-3xl dark:text-gray-800">First
                        Slide</span>
                    <img src="{{ URL::to('/') }}/image/carousel-1.png"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 h-full object-contain"
                        alt="...">
                </div>
                <!-- Item 2 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ URL::to('/') }}/image/carousel-2.png"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 h-full object-contain"
                        alt="...">
                </div>
                <!-- Item 3 -->
                <div class="duration-700 ease-in-out" data-carousel-item>
                    <img src="{{ URL::to('/') }}/image/carousel-3.png"
                        class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2 h-full object-contain"
                        alt="...">
                </div>
            </div>
            <!-- Slider indicators -->
            <!-- <div class="flex absolute bottom-5 left-1/2 z-30 space-x-3 -translate-x-1/2">
                <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full bg-black" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
            </div> -->
            <!-- Slider controls -->
            <button type="button"
                class="flex absolute top-0 left-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-prev>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
                        </path>
                    </svg>
                    <span class="hidden">Previous</span>
                </span>
            </button>
            <button type="button"
                class="flex absolute top-0 right-0 z-30 justify-center items-center px-4 h-full cursor-pointer group focus:outline-none"
                data-carousel-next>
                <span
                    class="inline-flex justify-center items-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                    <svg class="w-5 h-5 text-black sm:w-6 sm:h-6 dark:text-gray-800" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                    <span class="hidden">Next</span>
                </span>
            </button>
        </div>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>
    <!-- End Slider -->
    <!-- End Carousel -->


    <div class="flex justify-center mt-6 mb-2">
        <div class="text-black text-2xl font-bold">LAYANAN KAMI</div>
    </div>


    <div class="flex flex-row justify-center mt-8 mb-14">
        <div
            class="flex flex-col w-80 h-36 bg-[#4D4239] text-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center ml-6 mr-6 font-semibold text-sm p-2">
            <img src="{{ URL::to('/') }}/image/icon-truck.png" class="object-contain mb-4" alt="...">
            <div>
                Kami bantu antar belanjaan anda ke rumah ataupun kantor
            </div>

        </div>
        <div
            class="flex flex-col w-80 h-36 bg-[#4D4239] text-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center mr-6 font-semibold text-sm p-2">
            <img src="{{ URL::to('/') }}/image/icon-location.png" class="object-contain mb-4" alt="...">
            <div>
                Lacak pengiriman barang anda dan tanggal rincian
            </div>
        </div>
        <div
            class="flex flex-col w-80 h-36 bg-[#4D4239] text-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center mr-6 font-semibold text-sm p-2">
            <img src="{{ URL::to('/') }}/image/icon-call.png" class="object-contain mb-4" alt="...">
            <div>
                Layanan konsultasi 24 jam
            </div>
        </div>
    </div>

    <div class="flex flex-row justify-center items-center mt-8 mb-8">
        <div
            class="flex flex-col w-56 h-80 bg-[#4D4239] text-white rounded-2xl text-center justify-center items-center ml- font-bold text-4xl p-2 z-0">
            BEST </br>SELLER
        </div>

        <div class="z-20 flex flex-row justify-center items-center -ml-10">
            <a
                href="{{ URL::route('product') }}"
                class="cursor-pointer flex flex-col w-48 h-72 bg-white text-black rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-start mr-6 font-bold text-base p-4">
                <img src="{{ URL::to('/') }}/image/sandsberg.png" class="z-20 object-contain mb-4" alt="...">
                <div>
                    SANDSBERG
                </div>
                <div class="flex flex-row mt-1 mb-1">
                    <img src="{{ URL::to('/') }}/image/slash-star.png" class="object-contain mr-2" alt="...">
                    <div><span class="">4.0/</span> <span class="text-xs">10rb terjual</span></div>
                </div>
                <div>
                    Rp. 10.000
                </div>
            </a>

            <div
                class="cursor-pointer flex flex-col w-48 h-72 bg-white text-black rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-start mr-6 font-bold text-base p-4">
                <img src="{{ URL::to('/') }}/image/sandsberg.png" class="object-contain mb-4" alt="...">
                <div>
                    SANDSBERG
                </div>
                <div class="flex flex-row mt-1 mb-1">
                    <img src="{{ URL::to('/') }}/image/slash-star.png" class="object-contain mr-2" alt="...">
                    <div><span class="">4.0/</span> <span class="text-xs">10rb terjual</span></div>
                </div>
                <div>
                    Rp. 10.000
                </div>
            </div>
            <div
                class="cursor-pointer flex flex-col w-48 h-72 bg-white text-black rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-start mr-6 font-bold text-base p-4">
                <img src="{{ URL::to('/') }}/image/sandsberg.png" class="object-contain mb-4" alt="...">
                <div>
                    SANDSBERG
                </div>
                <div class="flex flex-row mt-1 mb-1">
                    <img src="{{ URL::to('/') }}/image/slash-star.png" class="object-contain mr-2" alt="...">
                    <div><span class="">4.0/</span> <span class="text-xs">10rb terjual</span></div>
                </div>
                <div>
                    Rp. 10.000
                </div>
            </div>

            <div
                class="cursor-pointer flex flex-col w-48 h-72 bg-white text-black rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-start mr-6 font-bold text-base p-4">
                <img src="{{ URL::to('/') }}/image/sandsberg.png" class="object-contain mb-4" alt="...">
                <div>
                    SANDSBERG
                </div>
                <div class="flex flex-row mt-1 mb-1">
                    <img src="{{ URL::to('/') }}/image/slash-star.png" class="object-contain mr-2" alt="...">
                    <div><span class="">4.0/</span> <span class="text-xs">10rb terjual</span></div>
                </div>
                <div>
                    Rp. 10.000
                </div>
            </div>
        </div>

    </div>


    <div class="flex justify-center mt-2 mb-2">
        <div class="text-black text-2xl font-bold">Our Recommendation</div>
    </div>


    <div class="cursor-pointer flex flex-row justify-center items-center mt-8 mb-8">

        <div
            class="flex flex-col w-64 h-72 bg-[#fffff] text-black rounded-2xl text-center justify-center items-start mr-6 font-bold text-base p-4">

            <img src="{{ URL::to('/') }}/image/meja.png" class="mb-4" alt="...">
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 400.000
            </div>
        </div>

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black rounded-2xl text-center justify-center items-start mr-6 font-bold text-base p-4">
            <img src="{{ URL::to('/') }}/image/meja.png" class="mb-4" alt="...">
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 400.000
            </div>
        </div>

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black rounded-2xl text-center justify-center items-start mr-6 font-bold text-base p-4">
            <img src="{{ URL::to('/') }}/image/meja.png" class="mb-4" alt="...">
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 400.000
            </div>
        </div>

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black rounded-2xl text-center justify-center items-start mr-6 font-bold text-base p-4">
            <img src="{{ URL::to('/') }}/image/meja.png" class="mb-4" alt="...">
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 400.000
            </div>
        </div>

    </div>

    <div class="flex justify-center mt-2 mb-2">
        <div class="text-black text-2xl font-bold">On Sale!</div>
    </div>


    <div class="flex flex-row justify-center items-center mt-8 mb-8">

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black text-center justify-center items-start mr-6 font-bold text-base p-4">
            <div class="relative">
                <img src="{{ URL::to('/') }}/image/meja.png" class="" alt="Workplace" width="600" />
                <img class="absolute top-0 left-0" src="{{ URL::to('/') }}/image/discount.png" width="50" />
            </div>
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 300.000
            </div>
            <div class="line-through text-gray-600 font-normal">
                Rp. 400.000
            </div>
        </div>

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black text-center justify-center items-start mr-6 font-bold text-base p-4">
            <div class="relative">
                <img src="{{ URL::to('/') }}/image/meja.png" class="" alt="Workplace" width="600" />
                <img class="absolute top-0 left-0" src="{{ URL::to('/') }}/image/discount.png" width="50" />
            </div>
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 300.000
            </div>
            <div class="line-through text-gray-600 font-normal">
                Rp. 400.000
            </div>
        </div>

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black text-center justify-center items-start mr-6 font-bold text-base p-4">
            <div class="relative">
                <img src="{{ URL::to('/') }}/image/meja.png" class="" alt="Workplace" width="600" />
                <img class="absolute top-0 left-0" src="{{ URL::to('/') }}/image/discount.png" width="50" />
            </div>
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 300.000
            </div>
            <div class="line-through text-gray-600 font-normal">
                Rp. 400.000
            </div>
        </div>

        <div
            class="cursor-pointer flex flex-col w-64 h-72 bg-[#fffff] text-black text-center justify-center items-start mr-6 font-bold text-base p-4">
            <div class="relative">
                <img src="{{ URL::to('/') }}/image/meja.png" class="" alt="Workplace" width="600" />
                <img class="absolute top-0 left-0" src="{{ URL::to('/') }}/image/discount.png" width="50" />
            </div>
            <div>
                NAMA PRODUK
            </div>
            <div class="font-normal">
                Deskripsi singkat lorem ipsum
            </div>
            <div>
                Rp. 300.000
            </div>
            <div class="line-through text-gray-600 font-normal">
                Rp. 400.000
            </div>
        </div>

    </div>
    <footer class="mt-36">
        <div class="background-footer object-cover w-full footer-size flex flex-col justify-center items-center" style="background-image: url({{ URL::to('/') }}/image/Background-Footer.png)">
          <div class="footer-content flex flex-row text-2xl justify-evenly w-full text-white">
            <div class="baris1">
              <ul>
                <li class="font-bold underline-offset-4">Navigation</li>
                <li class="">Home</li>
                <li class="">Profile</li>
                <li class="">Chart</li>
                <li class="">Favorite</li>
              </ul>
            </div>
            <div class="baris2">
              <ul>
                <li class="font-bold underline-offset-4">Product</li>
                <li class="">Chair</li>
                <li class="">Table</li>
                <li class="">Wardrobe</li>
                <li class="">Shelf</li>
                <li class="">Bed Frame</li>
              </ul>
            </div>
            <div class="baris3">
              <ul>
                <li class="font-bold underline-offset-4">Help</li>
                <li class="">Contact Us</li>
                <li class="">FAQ</li>
                <li class="">Store Location</li>
              </ul>
            </div>
            <div class="baris4">
              <h3 class="font-bold">Sign up to get 25% off your first order</h3>
              <div class="email-input-button">
                <input type="text" name="" id="" placeholder="Your Email Address..." class="text-center mt-6 mr-4 rounded-2xl text-base w-80 h-11 text-black placeholder-black" />
                <button class="bg-amber-800 rounded-3xl w-32 h-11 translate-y-1">Sign Up</button>
                <ul class="list-none flex flex-row justify-evenly items-center mt-11">
                  <li class=""><img src="{{ URL::to('/') }}/image/Facebook.png" alt="" /></li>
                  <li class=""><img src="{{ URL::to('/') }}/image/Instagram.png" alt="" /></li>
                  <li class=""><img src="{{ URL::to('/') }}/image/Tiktok.png" alt="" /></li>
                  <li class=""><img src="{{ URL::to('/') }}/image/Whatsapp.png" alt="" /></li>
                  <li class=""><img src="{{ URL::to('/') }}/image/Youtube.png" alt="" /></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="copyright mt-14 text-white"><p>Copyright @ 2023 M-ABLE, Inc.</p></div>
        </div>
      </footer>


</body>

</html>
