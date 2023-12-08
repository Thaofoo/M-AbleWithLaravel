<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        integrity="sha512-xxx" crossorigin="anonymous" />
    <title>Waiting Page</title>
</head>
<style>
    .timeline {
        position: relative;
    }

    .itemline {
        position: absolute;
        top: 35%;
        left: 10%;
        width: 80%;
        right: 0;
        transform: translateY(-50%);
        height: 2px;
        background-color: #4D4239;
        z-index: -1;
    }
</style>



<body class="bg-white">

    <x-navbar/>
    <div class="flex items-center justify-center min-h-screen mt-36">
        <div class="w-full flex flex-col items-center">
            <ul class="flex items-start gap-x-24 timeline">
                <li class="flex items-center justify-center flex-col relative">
                    <div class="w-24 h-24 border-2 rounded-full flex items-center justify-center bg-white z-10 p-6"
                        style="border-color: #4D4239;">
                        <img src="{{ URL::to('/') }}/image/waiting/icon_pesanan.svg" class="w-auto" alt="Icon Pesanan">
                    </div>
                    <span class="mt-2 text-sm">Pesanan dibuat</span>
                    <span class="text-gray-500 text-xs">29/10/2023</span>
                </li>
                <li class="flex items-center justify-center flex-col relative">
                    <div class="w-24 h-24 border-2 rounded-full flex items-center justify-center bg-white z-10 p-6"
                        style="border-color: #4D4239;">
                        <img src="{{ URL::to('/') }}/image/waiting/icon_pembayaran.svg" class="w-auto" alt="Icon Pesanan">
                    </div>
                    <span class="mt-2 text-sm">Menunggu Pembayaran</span>
                </li>
                <li class="flex items-center justify-center flex-col relative">
                    <div class="w-24 h-24 border-2 rounded-full flex items-center justify-center bg-white z-10 p-5"
                        style="border-color: #4D4239;">
                        <img src="{{ URL::to('/') }}/image/waiting/icon_delivery.svg" class="w-auto" alt="Icon Pesanan">
                    </div>
                    <span class="mt-2 text-sm">Pengiriman</span>
                </li>
                <li class="flex items-center justify-center flex-col relative">
                    <div class="w-24 h-24 border-2 rounded-full flex items-center justify-center bg-white z-10 p-5"
                        style="border-color: #4D4239;">
                        <img src="{{ URL::to('/') }}/image/waiting/icon_review.svg" class="w-auto" alt="Icon Pesanan">
                    </div>
                    <span class="mt-2 text-sm">Ulasan</span>
                </li>
                <div class="itemline"></div>
            </ul>

            <div
                class="flex flex-col justify-center items-center border border-black rounded p-4 mt-16 md:w-3/5 max-w-screen-md">
                <div class="flex px-12">
                    <div class="flex flex-col text-xs text-black font-bold w-full md:w-40">
                        <div>Erlinda Nathania Putri</div>
                        <div>(+62)82111633025</div>
                    </div>
                    <div class="ml-4 text-xs text-gray-700 w-full md:w-auto">
                        <div>Jl. Mulyorejo Indah I No.4, Mulyorejo, Kec. Tambaksari, Surabaya, Jawa Timur</div>
                        <div>JAWA TIMUR - ID 60114</div>
                    </div>
                </div>
            </div>

            <div class="container mx-auto mt-8">
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="border-b-2"></th>
                            <th class="border-b-2"></th>
                            <th class="border-b-2 font-normal text-right">Jumlah</th>
                            <th class="border-b-2 font-normal text-right">Subtotal Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Baris Pertama -->
                        <tr>
                            <td class="border-b">
                                <img src="{{ URL::to('/') }}/image/waiting/img_chairs.svg" alt="Product Image"
                                    class="w-32 object-cover my-4">
                            </td>
                            <td class="border-b">
                                <div class="text-lg font-bold">SANDSBERG CHAIR</div>
                                <div class="text-xs font-light">Deskripsi terkait Sandsberg Chair</div>
                                <div class="text-xl font-bold my-2"><span
                                        class="text-xs font-normal align-top">Rp</span>250.000</div>
                                <div class="text-xs font-light">Berat Paket: 1 kg</div>
                                <div class="text-xs font-light">Total Berat Paket: 1 kg</div>
                            </td>
                            <td class="border-b">
                                <div class="text-2xl font-light text-right">
                                    1
                                </div>
                            </td>
                            <td class="border-b">
                                <div class="text-xl font-bold my-2 text-right"><span
                                        class="text-xs font-normal align-top">Rp</span>250.000</div>
                            </td>
                        </tr>
                        <!-- Baris Kedua -->
                        <tr>
                            <td class="border-b">
                                <img src="{{ URL::to('/') }}/image/waiting/img_chairs.svg" alt="Product Image"
                                    class="w-32 object-cover my-4">
                            </td>
                            <td class="border-b">
                                <div class="text-lg font-bold">SANDSBERG CHAIR</div>
                                <div class="text-xs font-light">Deskripsi terkait Sandsberg Chair</div>
                                <div class="text-xl font-bold my-2"><span
                                        class="text-xs font-normal align-top">Rp</span>250.000</div>
                                <div class="text-xs font-light">Berat Paket: 1 kg</div>
                                <div class="text-xs font-light">Total Berat Paket: 1 kg</div>
                            </td>
                            <td class="border-b">
                                <div class="text-2xl font-light text-right">
                                    2
                                </div>
                            </td>
                            <td class="border-b">
                                <div class="text-xl font-bold my-2 text-right"><span
                                        class="text-xs font-normal align-top">Rp</span>500.000</div>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <!-- Bagian Total dan Button Bayar -->
                <div class="mt-4">
                    <div class="flex justify-end">
                        <div class="w-1/2">
                            <table class="w-full border-b">
                                <tbody>
                                    <tr>
                                        <td class="text-right">Subtotal Pengiriman</td>
                                        <td class="pl-4">
                                            <div class="text-xl font-bold my-5 text-right"><span
                                                    class="text-xs font-normal align-top">Rp</span>70.000</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Total Pesanan</td>
                                        <td class="pl-4">
                                            <div class="text-xl font-bold my-5 text-right"><span
                                                    class="text-xs font-normal align-top">Rp</span>820.000</div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">Metode Pembayaran:</td>
                                        <td class="pl-4 flex items-center justify-end my-5">
                                            <img src="{{ URL::to('/') }}/image/waiting/Bank_Central_Asia.svg" class="w-20">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="my-4 flex justify-end">
                                <button class="text-white px-8 py-2 rounded-xl w-2/3"
                                    style="background-color: #4D4239;">BAYAR</button>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</body>

</html>
