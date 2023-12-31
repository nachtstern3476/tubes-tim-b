@extends('main')
@section('content')
    <main class="p-6 md:px-24 md:py-0 font-inter min-h-[85vh] flex flex-col justify-center">
        <div class="flex flex-col md:flex-row justify-between mb-8">
            <h1 class="font-epologue font-bold text-3xl">List Artikel</h1>
            @if (session('id') !== null)
                <a href="{{ route('article.form') }}" class="bg-blue-500 text-base text-white py-2 px-5 rounded-md">Tambah
                    Article</a>
            @endif
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-y-8 gap-x-6">
            @if (count($article) != 0)
                @foreach ($article as $item)
                    <a href="{{ route('article.detail', 1) }}" class="border p-4 rounded-md">
                        <h2 class="font-semibold text-blue-500 mb-4">{{ $item->title }}</h2>
                        <p class="text-sm text-gray-500 mb-1">{{ $item->created_at }}</p>
                        <p class="text-sm text-gray-500">{{ Str::words($item->detail, 12) }}</p>
                    </a>
                @endforeach
            @else
                <div class="w-full border border-gray-200 my-4"></div>
                <p class="text-center">Tidak ada artikel</p>
                <div class="w-full border border-gray-200 my-4"></div>
            @endif
        </div>
    </main>
@endsection
