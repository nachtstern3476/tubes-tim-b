<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body class="flex justify-center items-center h-screen">
    <main class="flex flex-col shadow-lg w-96 p-6">
        <h1 class="font-epologue text-4xl font-semibold mb-2">Welcome.</h1>
        <h2 class="font-epologue font-semibold text-2xl text-gray-400 mb-8">Create an account</h2>
        <form action="{{ route('register.post') }}" method="POST">
            @csrf
            <label class="font-inter font-semibold text-gray-700 mb-1">Email</label>
            <div class="bg-gray-100 p-3 rounded-md flex justify-between mb-4">
                <img class="w-5" src="{{ asset('assets/img/envelope-regular.svg') }}" alt="">
                <input
                    class="placeholder:font-inter placeholder:text-gray-400 focus:outline-none bg-gray-100 w-full px-3"
                    type="email" id="email" name="email" placeholder="Enter email">
            </div>
            <label class="font-inter font-semibold text-gray-700 mb-1">Fullname</label>
            <div class="bg-gray-100 p-3 rounded-md flex justify-between mb-4">
                <img class="w-5" src="{{ asset('assets/img/user-icon.svg') }}" alt="">
                <input
                    class="placeholder:font-inter placeholder:text-gray-400 focus:outline-none bg-gray-100 w-full px-3"
                    type="text" name="fullname" placeholder="Fullname">
            </div>
            <label class="font-inter font-semibold text-gray-700 mb-1">Password</label>
            <div class="bg-gray-100 p-3 rounded-md flex justify-between mb-8">
                <img class="w-5" src="{{ asset('assets/img/lock-svgrepo-com.svg') }}" alt="eye">
                <input
                    class="placeholder:font-inter placeholder:text-gray-400 focus:outline-none bg-gray-100 w-full px-3"
                    type="password" id="password" name="password" placeholder="Enter password">
                <img id="eye" src="{{ asset('assets/img/eye-slash-regular.svg') }}" alt="eye">
            </div>
            <div>
                <button class="font-inter bg-blue-400 rounded-md px-8 py-2.5 w-full text-white mb-4">Sign in</button>
            </div>
        </form>
        <p class="font-inter text-center">already have an account? <a class="text-blue-500 font-medium"
                href="{{ route('login') }}">Login</a>
        </p>
    </main>

    <script src="{{ asset('assets/js/login.js') }}"></script>
</body>

</html>
