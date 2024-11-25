<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 flex justify-center items-center h-screen">
    <div class="flex bg-white rounded-xl shadow-lg overflow-hidden w-4/5 lg:w-1/2">
        <div class="hidden md:flex md:w-1/2 bg-blue-700 p-5">
            <div class="w-full">
                <img src="{{ asset('images/image-placeholder.png') }}" alt="3D Room" class="rounded-md">
            </div>
        </div>
        <div class="w-full md:w-1/2 p-8">
            <h2 class="text-2xl font-bold text-center mb-4">Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input id="email" type="email" name="email" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input id="password" type="password" name="password" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                </div>
                <button type="submit"
                    class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500">
                    Login
                </button>
                <div class="text-center mt-4">
                    <a href="{{ route('password.request') }}" class="text-blue-600 hover:underline">Lupa Password?</a>
                </div>
            </form>
            <div class="text-center mt-6">
                <p class="text-gray-600">Belum punya akun?
                    <a href="{{ route('register') }}" class="text-black hover:text-blue-600 hover:underline">
                        Daftar disini!
                    </a>
                </p>
            </div>
        </div>
    </div>
</body>

</html>
