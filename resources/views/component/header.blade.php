<header class="w-full border">
    <nav class="p-4 w-full flex justify-between md:justify-around items-center relative z-10 bg-white">
        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo1.png') }}" alt="" class="h-7 w-auto"></a>
        <div
            class="md:translate-y-0 md:w-auto gap-4 py-4 md:py-0 md:gap-8 items-center md:static md:bg-transparent md:text-black md:flex-row navList font-inter flex flex-col transition-all bg-gray-800 p-2 w-screen text-white duration-500 ease-in-out absolute translate-y-[-100vw] left-0">
            <a class="flex gap-2 items-center" href="{{ request()->is('/') ? '#home' : route('home') }}"><img
                    class="w-4 hidden md:block" src="{{ asset('assets/img/home-svgrepo-com.svg') }}" alt="icon">
                Home</a>
            <a class="flex gap-2 items-center" href="{{ request()->is('/') ? '#about' : route('home') }}"><img
                    class="w-4 hidden md:block" src="{{ asset('assets/img/view-list-svgrepo-com.svg') }}"
                    alt="icon">
                About</a>
            <a class="flex gap-2 items-center" href="{{ request()->is('/') ? '#team' : route('home') }}"><img
                    class="w-4 hidden md:block" src="{{ asset('assets/img/team-svgrepo-com.svg') }}" alt="icon">
                Team</a>
            <a class="flex gap-2 items-center" href="{{ route('article') }}"><img class="w-4 hidden md:block"
                    src="{{ asset('assets/img/newspaper-regular.svg') }}" alt="icon">
                Article</a>
        </div>
        <div class="hidden md:block">
            @if (session('id') !== null)
                <a href="{{ route('logout') }}" class="bg-blue-500 text-base text-white py-2 px-5 rounded-md">Log
                    out</a>
            @else
                <a href="{{ route('register') }}"
                    class="bg-blue-500 text-base text-white py-2 px-5 rounded-md mr-2">Sign
                    Up</a>
                <a href="{{ route('login') }}" class="bg-blue-500 text-base text-white py-2 px-5 rounded-md">Sign
                    in</a>
            @endif
        </div>
        <div class="humburger block md:hidden right-4 top-7">
            <span class="humburgerLine1 duration-500 ease-in-out h-[3px] w-[25px] bg-teal-700 block mb-1"></span>
            <span class="humburgerLine2 duration-500 ease-in-out h-[3px] w-[15px] bg-teal-700 block mb-1"></span>
            <span class="humburgerLine3 duration-500 ease-in-out h-[3px] w-[30px] bg-teal-700 block mb-1"></span>
        </div>
    </nav>
    <div
        class="items-center md:static nav-list font-inter flex flex-col transition-all bg-gray-800 text-white duration-500 ease-in-out absolute left-0 right-0 md:hidden -translate-y-[100vh] z-0">
        <a class="text-lg w-full text-center py-4 block hover:bg-gray-600" href="#home">Home</a>
        <a class="text-lg w-full text-center py-4 block hover:bg-gray-600" href="#current">Current</a>
        <a class="text-lg w-full text-center py-4 block hover:bg-gray-600" href="#team">Team</a>
        <a class="text-lg w-full text-center py-4 block hover:bg-gray-600" href="{{ route('article') }}">Article</a>
    </div>
</header>
