{{-- <section id="navbar">
    <div class="container">
    <!-- logo box -->
    <div class="logo">
        <img src="images/NftiseLogo.png" alt="NftiseLogo" />
    </div>
    <!-- menu box (div) -->
    <div class="menu">
        <ul>
        <li>
            <a href="/" class="{{ ($title === 'Home') ? 'active' : '' }}">Home</a>
        </li>
        <li>
            <a href="/blog" class="{{ ($title === 'Blog') ? 'active' : '' }}">Blog</a>
        </li>
        <li>
            <a href="/about" class="{{ ($title === 'About') ? 'active' : '' }}">About</a>
        </li>
        </ul>
    </div>
    <!-- button box -->
    <div class="button">
        <a href="#"
        >start free a trial
        <img src="images/icons/right arrow.svg" alt="right arrow" />
        </a>
    </div>
    </div>
</section> --}}

<section class="bg-lime-200 py-5 mb-10">
    <div class="relative container w-4/5 mx-auto flex justify-between">
        <ul class="w-fit flex gap-10">
            <li class="text-md font-semibold"><a href="/">Home</a></li>
            <li class="text-md font-semibold"><a href="/blog">Blog</a></li>
            <li class="text-md font-semibold"><a href="/categories">Categories</a></li>
            <li class="text-md font-semibold"><a href="/about">About</a></li>
        </ul>
        @auth
        <p class="peer hover:cursor-pointer">
            <span>Welcome, {{ auth()->user()->name }}</span>
            <i class="fa-sharp fa-solid fa-chevron-down ml-[5px] text-[12px] hidden lg:inline"></i>
        </p>
        <div class="hidden bg-white shadow-md hover:block peer-hover:block absolute right-28 top-6">
            <a href="/dashboard" class="py-2 px-4 block hover:bg-gray-200">Dashboard</a>
            <form action="/logout" method="post">
                @csrf
                <button type="submit" class="w-full text-left py-2 px-4 block hover:bg-gray-200">Logout</button>
            </form>
          </div>
        @else
        <button class="text-md font-semibold"><a href="/login">Login</a></button>
        @endauth
    </div>
</section>