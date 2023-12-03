<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout</title>
    @vite('resources/css/app.css')
    <style>
        .bg-mable {
            background-color: #030302
        }

        .text-xxs {
            font-size: 0.675rem;
            line-height: 0.675rem;
        }

        .navbar-shadow {
            box-shadow: 1px -5px 33px 3px rgba(0, 0, 0, 0.2);
            -webkit-box-shadow: 1px -5px 33px 3px rgba(0,0,0,0.2);
            -moz-box-shadow: 1px -5px 33px 3px rgba(0,0,0,0.2);
        }

    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3108108d3f.js" crossorigin="anonymous"></script>
  </head>
  <body class="font-poppins">

    <!-- List Barang Checkout -->
    <div class="mt-16 ">
        <!-- List Header -->
        <div class="font-medium text-gray-700 my-3 mx-28 flex justify-end">
            <P class="mx-36">Jumlah</P>
            <p class="mx-12">Subtotal</p>
        </div>

        <!-- List Item -->
        <div class="flex justify-between items-center border-y border-gray-300 py-8 mx-28">
            <!-- Left Side -->
            <div class="flex">
                <div class="mx-10">
                    <img src="{{ URL::to('/') }}/image//checkout/chair.png" alt="">
                </div>
                <div class="flex flex-col justify-between w-96">
                    <div>
                        <!-- Nama dan Deskripsi -->
                        <div class="text-xl font-medium">NAMA PRODUK</div>
                        <div class="text-gray-600 text-xl font-light">deskripsi singkat produk</div>
                    </div>
                    <div>
                        <!-- Price -->
                        <div class="text-2xl font-semibold flex items-start">
                            <span class="text-sm font-normal mr-0.5">Rp</span>640.000
                        </div>
                        <!-- Berat -->
                        <div class="text-gray-600 text-l font-light">Berat paket: 29.7kg</div>
                        <div class="text-gray-600 text-l font-light">Total berat paket: 29.7kg</div>
                    </div>
                </div>
            </div>
            <!-- Right Side -->
            <div class="flex">

                <!-- Counter Input -->
                <div>
                    <div class="flex border border-gray-300 rounded-full py-2 items-center mx-32">
                        <div class="ml-5 mr-2">
                            -
                        </div>
                        <div class="pl-3 pr-3">
                            1
                        </div>
                        <div class="ml-2 mr-5">
                            +
                        </div>
                    </div>
                </div>


                <div class="flex flex-col items-end">
                    <!-- Price -->
                    <div class="text-3xl font-semibold flex items-start w-40 text-left mt-3">
                        <span class="text-base font-normal mr-0.5">Rp</span>640.000
                    </div>
                    <!-- Icons -->
                    <div class="flex justify-between w-16 items-center mt-5 mr-6">
                        <div>
                            <img src="{{ URL::to('/') }}/image//checkout/icon_love.svg" alt="">
                        </div>
                        <div>
                            <img src="{{ URL::to('/') }}/image//checkout/icon_trash.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Metode Pengantaran -->
    <div class="mx-28">
        <div class="text-center text-2xl font-semibold mt-14 mb-5">
            Metode Pengantaran
        </div>
            <div class="text-base font-light text-gray-600 mb-1.5">
                Pilih Alamat
            </div>
            <div class="border border-gray-800 rounded-xl py-6 px-16 flex items-center justify-between">
                <!-- Left -->
                <div class="text-base font-semibold w-60">
                    <div>
                        Nathania Erlinda Putri
                    </div>
                    <div>
                        (+62) 821 1163 3025
                    </div>

                </div>
                <!-- Middle -->
                <div class="mr-10 text-gray-600">
                    Jl. Mulyorejo Indah I No.4, Mulyorejo, Kec. Tambaksari, Surabaya, Jawa Timur
                    JAWA TIMUR - ID 60114
                </div>

                <!-- Right -->
                <div class="flex text-xxs font-light text-center w-32 justify-between">
                    <div class="w-14 h-6 border border-gray-600 rounded-full text-gray-600 flex justify-center items-center">
                        Utama
                    </div>
                    <div class="cursor-pointer hover:bg-[#312a24] w-14 h-6 bg-mable rounded-full text-white align-middle flex justify-center items-center">
                        Ubah
                    </div>
                </div>
            </div>

            <!-- Metode Pengiriman -->
            <div class="flex justify-between mt-6">
                <!-- Left -->
                <div class="cursor-pointer hover:bg-gray-100 border border-gray-300 rounded-xl py-6 px-10 flex items-center justify-start w-1/2 mr-3">
                    <img class="mr-6" src="{{ URL::to('/') }}/image//checkout/icon_delivery.svg" alt="">
                    <div>
                        <div class="font-semibold text-base">
                            Delivery
                        </div>
                        <div class="font-normal text-base text-gray-500">
                            Tersedia peniriman Regular & Same day
                        </div>
                    </div>
                </div>

                <!-- Right -->
                <div class="cursor-pointer hover:bg-gray-100 border border-gray-300 rounded-xl py-6 px-10 flex items-center justify-start w-1/2 ml-3">
                    <img class="mr-6" src="{{ URL::to('/') }}/image//checkout/icon_pickup.svg" alt="">
                    <div>
                        <div class="flex">
                            <div class="font-semibold text-base">
                                Pick-up Point
                            </div>
                            <div class="bg-mable text-xxs py-1 px-2 rounded text-white font-light my-auto ml-3">
                                GRATIS ONGKIR
                            </div>
                        </div>
                        <div class="font-normal text-base text-gray-500">
                            Ambil di pick-up point terdekat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Rekomendasi -->
    <div class="mx-28">
        <div class="text-left text-2xl font-semibold mt-16 mb-16">
            Direkomendasikan Untuk Anda
        </div>
        <div class="flex justify-between">
            <!-- Item Squares -->
            <div class="cursor-pointer w-64 h-[23rem] bg-[#fffff] rounded-2xl mr-6 flex flex-col justify-between hover:bg-slate-50 p-5">
                <img src="{{ URL::to('/') }}/image//checkout/chair.png" class="w-64" alt="...">
                <div>
                    <div class="text-base font-medium">
                        NAMA PRODUK
                    </div>
                    <div class="text-sm font-light text-gray-500 mb-1">
                        Deskripsi singkat lorem ipsum
                    </div>
                    <div class="text-lg font-semibold">
                        Rp 400.000
                    </div>
                </div>
            </div>

            <div class="cursor-pointer w-64 h-[23rem] bg-[#fffff] rounded-2xl mr-6 flex flex-col justify-between hover:bg-slate-50 p-5">
                <img src="{{ URL::to('/') }}/image//checkout/table.jpg" class="w-64" alt="...">
                <div>
                    <div class="text-base font-medium">
                        NAMA PRODUK
                    </div>
                    <div class="text-sm font-light text-gray-500 mb-1">
                        Deskripsi singkat lorem ipsum
                    </div>
                    <div class="text-lg font-semibold">
                        Rp 400.000
                    </div>
                </div>
            </div>

            <div class="cursor-pointer w-64 h-[23rem] bg-[#fffff] rounded-2xl mr-6 flex flex-col justify-between hover:bg-slate-50 p-5">
                <img src="{{ URL::to('/') }}/image//checkout/sofa.jpg" class="w-64" alt="...">
                <div>
                    <div class="text-base font-medium">
                        NAMA PRODUK
                    </div>
                    <div class="text-sm font-light text-gray-500 mb-1">
                        Deskripsi singkat lorem ipsum
                    </div>
                    <div class="text-lg font-semibold">
                        Rp 400.000
                    </div>
                </div>
            </div>

            <div class="cursor-pointer w-64 h-[23rem] bg-[#fffff] rounded-2xl mr-6 flex flex-col justify-between hover:bg-slate-50 p-5">
                <img src="{{ URL::to('/') }}/image//checkout/wardrobe.jpg" class="w-64" alt="...">
                <div>
                    <div class="text-base font-medium">
                        NAMA PRODUK
                    </div>
                    <div class="text-sm font-light text-gray-500 mb-1">
                        Deskripsi singkat lorem ipsum
                    </div>
                    <div class="text-lg font-semibold">
                        Rp 400.000
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="flex mx-28 mt-20">
        <!-- Left -->
        <div class="w-1/2">
            <div class="text-2xl font-semibold mb-3">
                Kebijakan Belanja Online
            </div>

            <!-- Kenijakan Item -->
            <div class="border-b border-gray-400 h-[5.5rem] w-11/12 flex justify-between items-center p-6">
                <div class="flex">
                    <img class="mr-9" src="{{ URL::to('/') }}/image//checkout/icon_secure.svg" alt="...">
                    <div class="ml-10 text-base font-semibold">Belanja aman</div>
                </div>
                <div>
                    <img src="{{ URL::to('/') }}/image//checkout/icon_arrow_down.svg" alt="...">
                </div>
            </div>

            <!-- Kebijakan Item -->
            <div class="border-b border-gray-400 h-[5.5rem] w-11/12 flex justify-between items-center p-6">
                <div class="flex">
                    <img class="mr-9" src="{{ URL::to('/') }}/image//checkout/icon_payment.svg" alt="...">
                    <div class="ml-10 text-base font-semibold">Pilihan pembayaran</div>
                </div>
                <div>
                    <img src="{{ URL::to('/') }}/image//checkout/icon_arrow_down.svg" alt="...">
                </div>
            </div>

            <!-- Kenijakan Item -->
            <div class="border-b border-gray-400 h-[5.5rem] w-11/12 flex justify-between items-center p-6">
                <div class="flex">
                    <img class="mr-9" src="{{ URL::to('/') }}/image//checkout/icon_refund.svg" alt="...">
                    <div class="ml-10 text-base font-semibold">Pengembalian 90 hari</div>
                </div>
                <div>
                    <img src="{{ URL::to('/') }}/image//checkout/icon_arrow_down.svg" alt="...">
                </div>
            </div>

            <!-- Kenijakan Item -->
            <div class="border-b border-gray-400 h-[5.5rem] w-11/12 flex justify-between items-center p-6">
                <div class="flex">
                    <img class="mr-9" src="{{ URL::to('/') }}/image//checkout/icon_contact.svg" alt="...">
                    <div class="ml-10 text-base font-semibold">Hubungi kami</div>
                </div>
                <div>
                    <img src="{{ URL::to('/') }}/image//checkout/icon_arrow_down.svg" alt="...">
                </div>
            </div>

        </div>

        <!-- Right -->
        <div class="w-1/2 flex flex-col items-end">
            <!-- Kode Promo -->
            <div class="border border-gray-300 rounded-xl p-5 flex flex-col items-start w-11/12 h-[11.5rem] justify-between">
                <div class="text-base font-semibold">
                    Gunakan kode promo?
                </div>
                <div class="text-sm font-light text-gray-500">
                    Masukkan kode promo
                </div>
                <div class="flex">
                    <input class="w-[24rem] h-[2.7rem] border border-gray-400 rounded-lg p-3 mr-6" type="text">
                    <div class="w-[5.8125rem] h-[2.7rem] border border-gray-300 rounded-full text-xs font-medium flex items-center justify-center">
                        Tambah
                    </div>
                </div>
                <div class="text-[0.875rem] font-medium text-[#594E45] cursor-pointer decoration-clone">
                    Lihat rewards saya
                </div>
            </div>

            <!-- Ringkasan Order -->
            <div class="border border-gray-300 rounded-xl p-5 flex flex-col items-start w-11/12 h-[18.317rem] justify-between mt-3">
                <div class="my-3">
                    <div class="text-lg font-semibold mb-3">
                        Ringkasan
                    </div>
                    <div class="flex justify-between w-full text-[0.8125rem] font-light text-gray-600 mb-1">
                        <div>Jumlah produk</div>
                        <div>1</div>
                    </div>
                    <div class="flex justify-between w-full text-[0.8125rem] font-light text-gray-600 mb-1">
                        <div>Total berat</div>
                        <div>29.7kg</div>
                    </div>
                </div>
                <div class="w-full">
                    <div class="border-t w-full h-[3.3rem] border-gray-300 flex justify-between items-center text-[0.8125rem] text-gray-600">
                        <div class="font-semibold">Subtotal sebelum biaya ongkir</div>
                        <div class="font-normal">Rp 670.000,00</div>
                    </div>
                    <div class="border-t w-full h-[3.3rem] border-gray-300 flex justify-between items-center text-[0.8125rem]  text-gray-600">
                        <div class="font-semibold">Total termasuk pajak</div>
                        <div class="font-semibold">Rp 670.000,00</div>
                    </div >
                    <div class="border-t w-full h-[3.3rem] border-gray-300 flex justify-between items-center text-[0.8125rem]  text-gray-600">
                        <div class="font-semibold">Pilih metode pembayaran</div>
                        <div class="flex">
                            <img class="mr-4" src="{{ URL::to('/') }}/image//checkout/icon_bca.svg" alt="">
                            <img src="{{ URL::to('/') }}/image//checkout/icon_arrow_right.svg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-30 p-16">

    </div>

    <nav class="navbar-shadow w-[63rem] bg-white h-20 bottom-0 right-2/4 translate-x-2/4 fixed flex items-center justify-between rounded-t-xl px-8">
        <div class="text-sm">
            <span class="font-normal text-gray-500">1 produk:</span>
            <span class="font-semibold text-gray-600">Rp 640.000,00</span>
        </div>
        <div class="flex items-center">
            <div class="font-light text-sm mr-3 text-gray-500">
                <u>Gunakan kode promo?</u>
            </div>
            <div class="rounded-full bg-mable flex items-center justify-center px-48 py-2.5 text-sm text-white font-semibold">
                Buat Pesanan
            </div>
        </div>
    </nav>


  </body>
</html>
