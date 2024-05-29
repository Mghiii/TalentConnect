@extends('layout')
@section('title', 'TC | Login')
@section('content')
    <div
        class="h-screen flex items-center justify-center bg-center bg-no-repeat bg-[url('https://wpwink.com/wp-content/uploads/2023/01/bg20.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="min-h-screen sm:flex sm:flex-row mx-0 justify-center">
            <div class="flex-col flex  self-center p-10 sm:max-w-5xl xl:max-w-2xl z-10">
                <div class="self-start hidden lg:flex flex-col  text-white">
                    <h1 class="mb-3 font-bold text-5xl">Hi ? Welcome Back </h1>
                    <p class="pr-3">Welcome back to TalentConnect! Sign in to explore opportunities for mentorship and
                        growth. Join our community of professionals and continue your journey towards success.</p>
                </div>
            </div>
            <div class="flex justify-center self-center  z-10">
                <div class="p-12 bg-white mx-auto rounded-2xl w-100 ">
                    <div class="mb-4">
                        <h3 class="font-semibold text-2xl text-gray-800">Sign In </h3>
                        <p class="text-gray-500">Please sign in to your account.</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="space-y-5">
                            <div class="space-y-2">
                                <label for="email" class="text-sm font-medium text-gray-700 tracking-wide">Email</label>
                                <input id="email" name="email" type="email" placeholder="mail@gmail.com"
                                    class="w-full text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-600">
                                @error('email')
                                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="space-y-2 relative">
                                <label for="password"
                                    class="mb-5 text-sm font-medium text-gray-700 tracking-wide">Password</label>
                                <input id="password" name="password" type="password" placeholder="Enter your password"
                                    class="w-full content-center text-base px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-gray-600">
                                <div class="absolute inset-y-0 right-0 pr-3 pt-6 flex items-center cursor-pointer"
                                    onclick="togglePasswordVisibility('password', this)">
                                    <i class="fa fa-eye text-gray-600"></i>
                                </div>
                            </div>
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember_me" name="remember_me" type="checkbox"
                                        class="h-4 w-4 bg-gray-500 focus:ring-gray-400 border-gray-300 rounded">
                                    <label for="remember_me" class="ml-2 block text-sm text-gray-800">Remember me</label>
                                </div>
                                <div class="text-sm">
                                    <a href="#" class="text-gray-400 hover:text-gray-500">Forgot your password?</a>
                                </div>
                            </div>
                            <div>
                                <button type="submit"
                                    class="w-full flex justify-center bg-gray-400 hover:bg-gray-500 text-gray-100 p-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-100">Sign
                                    in</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>
        function togglePasswordVisibility(id, icon) {
            const input = document.getElementById(id);
            if (input.type === "password") {
                input.type = "text";
                icon.innerHTML = '<i class="fa fa-eye-slash text-gray-600"></i>';
            } else {
                input.type = "password";
                icon.innerHTML = '<i class="fa fa-eye text-gray-600"></i>';
            }
        }
    </script>
@endsection
