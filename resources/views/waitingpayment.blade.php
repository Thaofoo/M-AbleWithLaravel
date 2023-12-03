<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting Pay Page</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3108108d3f.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Navbar Start -->
    <!-- Navbar End -->
    <!-- Content Start -->
    <div class="flex flex-row justify-evenly">
        <div class="blank">

        </div>
        <div class="flex flex-row mt-16 mb-14">
            <div class="flex w-28 h-10 bg-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center mr-6 font-semibold text-xs">
                Selesai
            </div>
            <div class="flex w-28 h-10 bg-[#4D4239] text-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center mr-6 font-semibold text-xs">
                Belum Bayar
            </div>
            <div class="flex w-28 h-10 bg-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center mr-6 font-semibold text-xs">
                Pengemasan
            </div>
            <div class="flex w-28 h-10 bg-white rounded-2xl shadow-[4px_4px_10px_1px_rgba(0,0,0,0.25)] text-center justify-center items-center mr-6 font-semibold text-xs">
                Pengiriman
            </div>
        </div>
        <div class="blank">

        </div>
    </div>
    <div class="flex flex-col justify-center items-center">
        <div class=" flex flex-col h-fit w-fit rounded-3xl shadow-[2px_2px_4px_0px_rgba(0,0,0,0.25),_-2px_-2px_4px_0px_rgba(0,0,0,0.25)]  py-8 pr-11 pl-10 pb-7 mb-14">
            <div class="flex flex-row justify-between">
                <div class="blank w-96">
                </div>
                <div class="blank w-36"></div>
                <div class="text-[#4D4239] font-semibold text-xs">
                    Menunggu Pembayaran
                </div>
            </div>
            <div class="flex flex-row">
                <img src="{{ URL::to('/') }}/image/image 41.svg" alt="" srcset="">
                <div class="flex flex-col">
                    <div class="text-[#4D4239] font-bold text-4xl">
                        SANDSBERG
                    </div>
                    <div class="text-[#877160] text-xs font-normal">
                        Coklat - 1 barang x Rp.250.000
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between mb-2">
                <div class="blank">
                </div>
                <div class="blank "></div>
                <div class="text-[#9D8E82] font-semibold text-xs">
                    Jumlah yang harus dibayar: <span class="text-[#4D4239] text-xl font-bold">Rp.300.000</span>
                </div>
            </div>
            <div class="flex flex-row ">
                <div class="text-[#9D8E82] text-xs font-semibold mr-32">
                    Bayar sebelum 31-05-2003 05:00 dengan bank BCA
                </div>
                <div class="flex flex-row">
                    <div class="flex w-fit h-9 text-center justify-center items-center text-xs bg-[#9D8E82] text-white font-bold rounded-xl px-3 py-2 mr-2">
                        Bayar Sekarang
                    </div>
                    <div class="flex w-fit h-9 text-center justify-center items-center text-xs bg-white text-[#4D4239] border-[#4D4239] border-2 font-bold rounded-xl px-3 py-2">
                        Hubungi Penjual
                    </div>
                    <div class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <rect x="0.5" y="0.5" width="35" height="35" rx="10.5" fill="white" stroke="#594E45"/>
                            <circle cx="11" cy="18" r="2" fill="#4D4239"/>
                            <circle cx="18" cy="18" r="2" fill="#4D4239"/>
                            <circle cx="25" cy="18" r="2" fill="#4D4239"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex flex-col h-fit w-fit rounded-3xl shadow-[2px_2px_4px_0px_rgba(0,0,0,0.25),_-2px_-2px_4px_0px_rgba(0,0,0,0.25)]  py-8 pr-11 pl-10 pb-7 mb-14">
            <div class="flex flex-row justify-between">
                <div class="blank w-96">
                </div>
                <div class="blank w-36"></div>
                <div class="text-[#4D4239] font-semibold text-xs">
                    Menunggu Pembayaran
                </div>
            </div>
            <div class="flex flex-row">
                <img src="{{ URL::to('/') }}/image/image 41.svg" alt="" srcset="">
                <div class="flex flex-col">
                    <div class="text-[#4D4239] font-bold text-4xl">
                        SANDSBERG
                    </div>
                    <div class="text-[#877160] text-xs font-normal">
                        Coklat - 1 barang x Rp.250.000
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between mb-2">
                <div class="blank">
                </div>
                <div class="blank "></div>
                <div class="text-[#9D8E82] font-semibold text-xs">
                    Jumlah yang harus dibayar: <span class="text-[#4D4239] text-xl font-bold">Rp.300.000</span>
                </div>
            </div>
            <div class="flex flex-row ">
                <div class="text-[#9D8E82] text-xs font-semibold mr-32">
                    Bayar sebelum 31-05-2003 05:00 dengan bank BCA
                </div>
                <div class="flex flex-row">
                    <div class="flex w-fit h-9 text-center justify-center items-center text-xs bg-[#9D8E82] text-white font-bold rounded-xl px-3 py-2 mr-2">
                        Bayar Sekarang
                    </div>
                    <div class="flex w-fit h-9 text-center justify-center items-center text-xs bg-white text-[#4D4239] border-[#4D4239] border-2 font-bold rounded-xl px-3 py-2">
                        Hubungi Penjual
                    </div>
                    <div class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <rect x="0.5" y="0.5" width="35" height="35" rx="10.5" fill="white" stroke="#594E45"/>
                            <circle cx="11" cy="18" r="2" fill="#4D4239"/>
                            <circle cx="18" cy="18" r="2" fill="#4D4239"/>
                            <circle cx="25" cy="18" r="2" fill="#4D4239"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
        <div class=" flex flex-col h-fit w-fit rounded-3xl shadow-[2px_2px_4px_0px_rgba(0,0,0,0.25),_-2px_-2px_4px_0px_rgba(0,0,0,0.25)]  py-8 pr-11 pl-10 pb-7 mb-14">
            <div class="flex flex-row justify-between">
                <div class="blank w-96">
                </div>
                <div class="blank w-36"></div>
                <div class="text-[#4D4239] font-semibold text-xs">
                    Menunggu Pembayaran
                </div>
            </div>
            <div class="flex flex-row">
                <img src="{{ URL::to('/') }}/image/image 41.svg" alt="" srcset="">
                <div class="flex flex-col">
                    <div class="text-[#4D4239] font-bold text-4xl">
                        SANDSBERG
                    </div>
                    <div class="text-[#877160] text-xs font-normal">
                        Coklat - 1 barang x Rp.250.000
                    </div>
                </div>
            </div>
            <div class="flex flex-row justify-between mb-2">
                <div class="blank">
                </div>
                <div class="blank "></div>
                <div class="text-[#9D8E82] font-semibold text-xs">
                    Jumlah yang harus dibayar: <span class="text-[#4D4239] text-xl font-bold">Rp.300.000</span>
                </div>
            </div>
            <div class="flex flex-row ">
                <div class="text-[#9D8E82] text-xs font-semibold mr-32">
                    Bayar sebelum 31-05-2003 05:00 dengan bank BCA
                </div>
                <div class="flex flex-row">
                    <div class="flex w-fit h-9 text-center justify-center items-center text-xs bg-[#9D8E82] text-white font-bold rounded-xl px-3 py-2 mr-2">
                        Bayar Sekarang
                    </div>
                    <div class="flex w-fit h-9 text-center justify-center items-center text-xs bg-white text-[#4D4239] border-[#4D4239] border-2 font-bold rounded-xl px-3 py-2">
                        Hubungi Penjual
                    </div>
                    <div class="ml-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                            <rect x="0.5" y="0.5" width="35" height="35" rx="10.5" fill="white" stroke="#594E45"/>
                            <circle cx="11" cy="18" r="2" fill="#4D4239"/>
                            <circle cx="18" cy="18" r="2" fill="#4D4239"/>
                            <circle cx="25" cy="18" r="2" fill="#4D4239"/>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content End -->
    <!-- Footer Start -->
    <!-- Footer End -->
</body>
</html>
