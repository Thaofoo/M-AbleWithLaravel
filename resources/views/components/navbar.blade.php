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
