<head>

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

</head>

<footer class="mt-36 ">
    <div class="background-footer object-cover w-full footer-size flex flex-col justify-center items-center pt-8" style="background-image: url({{ URL::to('/') }}/image/Background-Footer.png)">
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
