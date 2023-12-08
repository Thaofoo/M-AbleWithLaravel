<nav class="w-full h-24 shadow-lg flex flex-row justify-evenly items-center fixed z-50 bg-white top-0">
    <a href="{{ URL::route('landing') }}" class="logo"><img src="{{ URL::to('/') }}/image/logo.png" alt="" /></a>
    <div class="searchbar">
      <form method="GET">
        <div class="input-form text-black bg-gray-200 p-2 rounded-2xl border border-black flex flex-row h-12 w-[50rem] flex items-center justify-start">
          <i class="fa-solid fa-magnifying-glass ml-2"></i>
          <input type="text" id="form" placeholder="Cari" class="p-0 h-[1.7rem] w-[43.75rem] bg-gray-200 text-black placeholder-black ml-3 border-none" />
        </div>
      </form>
    </div>
    <div class="icon">
      <ul class="list-none flex flex-row">
        <li class="m-10"><a href="{{ URL::route('waitingPayment') }}"><img src="{{ URL::to('/') }}/image/icon-pesanan.png" alt="" /></a></li>
        <li class="mt-10"><a href="{{ URL::route('landing') }}"><img src="{{ URL::to('/') }}/image/icon-like.png" alt="" /></a></li>
        <li class="m-10"><a href="{{ URL::route('checkout') }}"><img src="{{ URL::to('/') }}/image/icon-chart.png" alt="" /></a></li>
        <li class="mt-10"><a><img src="{{ URL::to('/') }}/image/icon-mail.png" alt="" /></a></li>
        <li class="m-10"><a><img src="{{ URL::to('/') }}/image/icon-user.png" alt="" /></a></li>
      </ul>
    </div>
</nav>
