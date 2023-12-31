@extends('main')
@section('content')
    <form action="{{ route('article.form.post') }}" method="post" enctype="multipart/form-data">
        @csrf
        <main class="p-6 md:px-24 font-inter min-h-[85vh] flex flex-col justify-center">
            <input class="border p-2 rounded-md font-epologue font-bold text-3xl mb-4" placeholder="Judul Artikel"
                name="title" required />
            <div class="my-4">
                <h2 class="font-epologue font-semibold mb-4 text-base">ATTACHMENTS</h2>
                <div id="modal" class="flex gap-2 text-gray-400 mb-2">
                    <img src="{{ asset('assets/img/plus-solid.svg') }}" alt="icon">Add
                    attachments
                </div>
                <input type="file" class="text-gray-400 border border-gray-200 p-2 rounded-md" name="attachment[]"
                    multiple>
            </div>
            <div class="w-full border border-gray-200 my-4"></div>
            <h3 class="font-epologue font-semibold mb-4 text-base block">DESCRIPTION</h3>
            <div class="">
                <textarea name="description" class="border rounded-md w-full p-4" cols="30" rows="10" required></textarea>
            </div>
            <button class="bg-blue-600 px-4 py-2 text-white rounded-md form-button">Kirim</button>
        </main>
    </form>
@endsection
