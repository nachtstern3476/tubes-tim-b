@extends('main')
@section('content')
    <main class="px-6 md:px-12">
        <section id="home" class="flex justify-center md:justify-between items-center px-4 h-80 font-inter">
            <img class="h-48 hidden md:block " src="assets/img/floating-book.png" alt="book">
            <div>
                <h1 class="text-center text-4xl lg:text-6xl font-semibold border-b-4 mb-2 pb-2 border-gray-900 border-solid">
                    Arthro Teknolgi
                </h1>
                <p class="text-sm max-w-md mx-auto md:text-base text-center">
                    Kumpulan karya ilmiah Informasi Sistem, Game Teknologi, Jaringan Teknologi & Kemanan
                    Jaringan
                </p>
                <form action="{{ route('search') }}" method="get">
                    <div class="flex items-center border-2 p-2 border-solid border-gray-400 rounded-full mt-6">
                        <input class="w-full focus:outline-none h-8 pl-2" type="text" name="q"
                            placeholder="Search article...">
                        <button class="bg-blue-400 rounded-full p-2 ml-2">
                            <img src="assets/img/magnifying-glass-solid.svg" alt="search-icon">
                        </button>
                    </div>
                </form>
            </div>
            <img class="h-48 hidden md:block" src="assets/img/floating-book.png" alt="book">
        </section>
        <section id="about" class=" px-4 text-sm text-gray-500 font-inter mb-20">
            <p class="mb-4">
                MENGENAI KARYA TULIS ILMIAH/PENELITIAN : Karya ilmiah berperan penting dalam mengkomunikasikan hasil
                penelitian dan kontribusi ilmiah kepada komunitas ilmiah Dalam sebuah karya ilmiah, setiap kata dan
                argumen disusun secara cermat untuk menjamin kejelasan, ketepatan, dan keakuratan informasi yang
                disampaikan.
            </p class="mb-4">
            <p class="mb-4">
                Penulisan akademis adalah proses yang sangat terorganisir dan sistematis yang memungkinkan peneliti
                mengkomunikasikan pengetahuan dan ide baru kepada komunitas ilmiah.
                Penggunaan terminologi teknis, definisi yang jelas, dan argumen logis membantu pembaca memahami dengan
                tepat apa yang ingin disampaikan penulis.
                Kutipan dari sumber terpercaya juga disediakan untuk mendukung dan memperkuat setiap pernyataan. Selain
                itu, penulisan akademis juga melibatkan proses peer review di mana naskah diserahkan untuk dievaluasi
                oleh para ahli di bidang keilmuan tertentu. Tinjauan sejawat memastikan bahwa metode penelitian
                dilakukan dengan benar, analisis data konsisten, dan hasil yang disajikan valid.
            </p class="mb-4">
            <p class="mb-4">
                Publikasi di jurnal Sinta menciptakan platform pertukaran pengetahuan dengan rekan-rekan nasional,
                sehingga memperkuat kualitas dan dampak penelitian di tingkat nasional.
                Keunggulan utama penerbitan di jurnal terindeks Sinta adalah memberikan kontribusi yang signifikan
                terhadap perkembangan ilmu pengetahuan dan teknologi di Indonesia.
                Jurnal-jurnal ini berperan penting dalam membangun literatur ilmiah nasional dan membantu meningkatkan
                kualitas pendidikan dan penelitian di berbagai bidang.
            </p class="mb-4">
        </section>
        <section id="team" class=" font-inter p-4 mb-20">
            <h2 class="text-2xl md:text-4xl font-bold mb-12 text-center">Developer Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 mx-auto gap-6">
                <div class="flex flex-col md:flex-row gap-4 border rounded-lg p-4">
                    <img class="md:w-40" src="assets/img/profile-img.png" alt="profile">
                    <div class="flex flex-col gap-6 md:gap-0 justify-between">
                        <h2 class="text-2xl font-semibold">Frontend dev</h2>
                        <p class="flex items-center text-xl gap-1 font-medium"><img class="w-10"
                                src="assets/img/icon-name.png" alt="icon">Isabel
                            Norsina</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4 border rounded-lg p-4">
                    <img class="md:w-40" src="assets/img/profile-img.png" alt="profile">
                    <div class="flex flex-col gap-6 md:gap-0 justify-between">
                        <h2 class="text-2xl font-semibold">UI/UX Designer</h2>
                        <p class="flex items-center text-xl gap-1 font-medium"><img class="w-10"
                                src="assets/img/icon-name.png" alt="icon">Isabel
                            Norsina</p>
                    </div>
                </div>
                <div class="flex flex-col md:flex-row gap-4 border rounded-lg p-4">
                    <img class="md:w-40" src="assets/img/profile-img.png" alt="profile">
                    <div class="flex flex-col gap-6 md:gap-0 justify-between">
                        <h2 class="text-2xl font-semibold">Backend dev</h2>
                        <p class="flex items-center text-xl gap-1 font-medium"><img class="w-10"
                                src="assets/img/icon-name.png" alt="icon">Isabel
                            Norsina</p>
                    </div>
                </div>
            </div>
        </section>
        <section id="article" class=" font-inter p-4 mb-20">
            <h2 class="text-2xl md:text-4xl font-bold mb-12 text-center">Artikel</h2>
            @if ($article)
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-12">
                    @foreach ($article as $item)
                        <a href="{{ route('article.detail', 1) }}" class="border p-4 rounded-md">
                            <h2 class="font-semibold text-blue-500 mb-4">{{ $item->title }}</h2>
                            <p class="text-sm text-gray-500 mb-1">{{ $item->created_at }}</p>
                            <p class="text-sm text-gray-500">{{ Str::words($item->detail, 12) }}</p>
                        </a>
                    @endforeach
                </div>
            @else
                <div class="w-full border border-gray-200 my-4"></div>
                <p class="text-center">Tidak ada artikel</p>
                <div class="w-full border border-gray-200 my-4"></div>
            @endif
        </section>
        <section class=" font-inter p-4 mb-20">
            <h2 class="text-2xl md:text-4xl font-bold mb-12 text-center">Trusted by</h2>
            <div class="grid grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-20">
                <img class="w[60px]" src="assets/img/Image 7.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 8.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 9.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 10.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 11.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 12.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 13.svg" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 14.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 15.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 16.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 17.png" alt="icon-brand">
                <img class="w[60px]" src="assets/img/Image 18.png" alt="icon-brand">
            </div>
        </section>
    </main>
@endsection
