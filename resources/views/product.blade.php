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
    <nav class="w-5/5 height-nav shadow-lg flex flex-row justify-evenly items-center">
      <div class="logo"><img src="{{ URL::to('/') }}/image/logo.png" alt="" /></div>
      <div class="searchbar">
        <form method="GET">
          <div class="input-form searchbar-size text-black bg-gray-200 p-2 rounded-2xl">
            <i class="fa-solid fa-magnifying-glass ml-2"></i>
            <input type="text" id="form" placeholder="Cari" class="searchbar-size-form bg-gray-200 text-black placeholder-black ml-3 rounded-t-2xl" />
          </div>
        </form>
      </div>
      <div class="icon">
        <ul class="list-none flex flex-row">
          <li class="m-10"><img src="{{ URL::to('/') }}/image/icon-pesanan.png" alt="" /></li>
          <li class="mt-10"><img src="{{ URL::to('/') }}/image/icon-like.png" alt="" /></li>
          <li class="m-10"><img src="{{ URL::to('/') }}/image/icon-chart.png" alt="" /></li>
          <li class="mt-10"><img src="{{ URL::to('/') }}/image/icon-mail.png" alt="" /></li>
          <li class="m-10"><img src="{{ URL::to('/') }}/image/icon-user.png" alt="" /></li>
        </ul>
      </div>
    </nav>
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
          <div class="buy-now"><button class="bg-yellow-950 text-white border border-yellow-950 rounded-xl shadow font-semibold w-32 h-10 text-center text-xl ml-3 mr-5">Buy Now</button></div>
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
    <script src="js/product.js"></script>
    <script src="https://kit.fontawesome.com/3108108d3f.js" crossorigin="anonymous"></script>
  </body>
</html>
