@extends('main')
@section('content')
    <main class="p-6 md:px-24 md:py-0 font-inter min-h-[85vh] flex flex-col justify-center">
        <h1 class="font-epologue font-bold text-3xl mb-4">Detail Article</h1>
        <div class="my-4">
            <div class="grid grid-cols-2 w-40 mb-4">
                <h3 class=" flex gap-2"><img src="{{ asset('assets/img/user-regular.svg') }}" alt="icon">Owner</h3>
                <h3 class=" flex gap-2"><img class="p-0.5 bg-blue-400 rounded-full w-24"
                        src="{{ asset('assets/img/user-profile.png') }}" alt="profile">{{ $user->name }}</h3>
            </div>
            <div class="grid grid-cols-2 w-40">
                <h3 class="flex gap-2"><img src="{{ asset('assets/img/calendar-regular.svg') }}" alt="icon">Date</h3>
                <h3>{{ $article->created_at }}</h3>
            </div>
        </div>
        <div class="w-full border border-gray-200 my-4"></div>
        <div class="my-4">
            <h2 class="font-epologue font-semibold mb-4 text-base">ATTACHMENTS</h2>
            @foreach ($article->attachment as $attachment)
                <a href="{{ route('download', $attachment) }}" class=" flex gap-2 text-blue-500 font-semibold"><img
                        src="{{ asset('assets/img/paperclip-solid.svg') }}" alt="icon">Download Attachment
                </a>
            @endforeach
        </div>
        <div class="w-full border border-gray-200 my-4"></div>
        <h3 class="font-epologue font-semibold mb-4 text-base block">DESCRIPTION</h3>
        <div class="">
            <p>
                {{ $article->detail }}
            </p>
        </div>
    </main>
@endsection
