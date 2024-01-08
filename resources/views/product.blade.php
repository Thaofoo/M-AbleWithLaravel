<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Product</title>
    @vite('resources/css/app.css')
    <style>
      .footer-size {
        height: 555px;
      }
      .list-size {
        width: 306px;
      }
      .image-list-size {
        height: 70px;
        width: 70px;
      }
      input:focus {
        outline: none;
      }
      .searchbar-size-form {
        height: 47px;
        width: 700px;
      }
      .searchbar-size {
        border: 1px solid black;
        display: flex;
        flex-direction: row;
        height: 50px;
        width: 800px;
        align-items: center;
      }
      .height-nav {
        height: 100px;
      }
      .height-carousel {
        height: 410;
      }
      .width-divider {
        width: 600px;
      }
      .border-thin {
        border-width: 0.1px;
      }
      .width-comment {
        width: 1000px;
      }
      .width-komentar {
        width: 580px;
      }
      /* Menghilangkan increase decrease arrow ketika dihover */
      input[type='number'] {
        -moz-appearance: textfield;
      }

      input[type='number']::-webkit-inner-spin-button,
      input[type='number']::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
      }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-xxx" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/3108108d3f.js" crossorigin="anonymous"></script>
  </head>
  <body>
    <x-navbar/>
    <div class="main-section flex flex-row justify-center mt-24">
      <div class="photo p-4 mr-10 w-80 height-carousel flex flex-col items-center">
        <div class="main-photo"><img src="{{ URL::to('/') }}/image/product1.png" alt="" width="306px" height="306px" id="product-image" /></div>
        <div class="list-foto flex flex-row mt-6 justify-between list-size">
          <button onclick="changeImage('{{ URL::to('/') }}/image/product1.png')"><img src="{{ URL::to('/') }}/image/product1.png" alt="" class="image-list-size" /></button>
          <button onclick="changeImage('{{ URL::to('/') }}/image/product2.png')"><img src="{{ URL::to('/') }}/image/product2.png" alt="" class="image-list-size" /></button>
          <button onclick="changeImage('{{ URL::to('/') }}/image/product3.png')"><img src="{{ URL::to('/') }}/image/product3.png" alt="" class="image-list-size" /></button>
          <button onclick="changeImage('{{ URL::to('/') }}/image/product4.png')"><img src="{{ URL::to('/') }}/image/product4.png" alt="" class="image-list-size" /></button>
        </div>
      </div>

      <div class="text p-4 ml-10 flex flex-col text-yellow-950">
        <div class="nama-barang font-bold text-5xl"><h1>SANSBERG</h1></div>
        <div class="jenis-ukuran-barang flex flex-row mt-2.5">
          <div class="jenis"><p>Kursi</p></div>
          <div class="ukuran ml-2.5"><p>40x40x100</p></div>
        </div>
        <div class="deskripsi-barang w-96 text-justify mt-4">
          <p>
            Yorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus.
            Maecenas eget condimentum velit, sit amet feugiat lectus.
          </p>
        </div>
        <p class="mt-16">Pilih Warna</p>
        <div class="warna-jumlah-barang flex flex-row justify-center items-center">
          <div class="dropdown w-72 h-10 mr-3.5">
            <select
              id="countries"
              class="border border-solid text-sm rounded-xl focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white dark:shadow-lg dark:placeholder-gray-800 dark:text-orange-950 dark:focus:ring-blue-500 dark:focus:border-blue-500 bg-white"
            >
              <option selected>--Pilih Warna--</option>
              <option value="US">Dark Wood</option>
              <option value="CA">Red Valvet</option>
              <option value="FR">Matcha</option>
            </select>
          </div>

          <div class="flex items-center bg-white w-36 h-11 border-solid border-gray-500 justify-center rounded-xl border-thin">
            <button id="decrement" class="w-12 h-11 rounded-l focus:outline-none" onclick="updateQuantity(-1)">-</button>
            <input id="quantity" class="w-12 h-8 text-center" type="number" value="1" />
            <button id="increment" class="w-12 h-11 rounded-r focus:outline-none" onclick="updateQuantity(1)">+</button>
          </div>
        </div>
        <div class="button flex mt-5 items-center w-80">
          <div class="chart"><button class="bg-white hover:bg-gray-100 text-gray-800 border border-yellow-950 rounded-xl shadow font-semibold w-32 h-10 text-center text-xl">+ Chart</button></div>
          <a  href="{{ URL::route('checkout') }}" class="buy-now"><button class="bg-yellow-950 text-white border border-yellow-950 rounded-xl shadow font-semibold w-32 h-10 text-center text-xl ml-3 mr-5">Buy Now</button></a>
          <i class="fa-regular fa-heart fa-2xl m-auto" style="color: #6c4933; cursor: pointer" id="heartIcon" onclick="toggleHeartIcon()"></i>
        </div>
      </div>
    </div>

    <div class="comment-section flex flex-row justify-center mt-24 items-center">
      <div class="ukuran-comment width-comment flex flex-row justify-center">
        <div class="left w-32 mr-10 flex flex-col">
          <div class="rata-rating flex flex-row items-center justify-evenly mb-1">
            <img src="{{ URL::to('/') }}/image/slash-star.png" alt="" class="mr-3" />
            <h3 class="text-3xl font-bold">4.0<span class="text-lg font-medium">/5.0</span></h3>
          </div>
          <div class="jumlah-rating-comment flex flex-row">
            <p class="text-xs font-semibold">20 Komentar : 9 Rating</p>
          </div>
        </div>
        <div class="right ml-10 flex flex-col">
          <div class="ulasan-pembeli text-left font-bold text-3xl mb-4"><h2>Ulasan Pembeli</h2></div>
          <div class="commentar flex flex-col">
            <div class="user font-semibold text-xl"><h3>Erlandope</h3></div>
            <div class="bintang w-16 h-10 mt-2 mb-1"><img src="{{ URL::to('/') }}/image/group-star.png" alt="" /></div>
            <div class="komentar text-lg width-komentar mb-6"><p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.</p></div>
            <div class="divider h-0.5 bg-slate-300 width-divider"></div>
          </div>
          <div class="commentar flex flex-col">
            <div class="user font-semibold text-xl"><h3>Erlandope</h3></div>
            <div class="bintang w-16 h-10 mt-2 mb-1"><img src="{{ URL::to('/') }}/image/group-star.png" alt="" /></div>
            <div class="komentar text-lg width-komentar mb-6"><p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.</p></div>
            <div class="divider h-0.5 bg-slate-300 width-divider"></div>
          </div>
          <div class="commentar flex flex-col">
            <div class="user font-semibold text-xl"><h3>Erlandope</h3></div>
            <div class="bintang w-16 h-10 mt-2 mb-1"><img src="{{ URL::to('/') }}/image/group-star.png" alt="" /></div>
            <div class="komentar text-lg width-komentar mb-6"><p>Vorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan.</p></div>
            <div class="divider h-0.5 bg-slate-300 width-divider"></div>
          </div>
        </div>
      </div>
    </div>

    <x-footer/>
    <script src="{{ URL::asset('js/product.js') }}"></script>
    <script src="https://kit.fontawesome.com/3108108d3f.js" crossorigin="anonymous"></script>
  </body>
</html>
