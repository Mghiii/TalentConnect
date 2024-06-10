@extends('layout')
@section('title', 'TC | Trainee Register')
@section('content')
    <section class="w-full min-h-screen flex items-center justify-center"
        style="background-image: url('https://wallpapercave.com/wp/wp10455999.jpg'); background-size: cover; background-position: center; background-repeat: no-repeat;">
        <div class="max-w-screen-lg w-full flex flex-col md:flex-row ">
            <div class="md:w-1/2 pb-14 bg-transparent pt-60 px-6">
                <h1 class="text-3xl font-bold text-white">Welcome to Internship Opportunities <span
                        class="text-gray-300 font-extrabold">Talent<span class="text-gray-400">Connect</span></span></h1>
                <p class="text-white mt-4">Explore exciting internship opportunities with leading companies to kickstart your
                    career.</p>
            </div>
            <div class="md:w-1/2 bg-white rounded-lg shadow-lg p-6 mx-4 my-4">
                <form action="{{ route('register.trainee.store') }}" class="w-full" method="POST">
                    @csrf
                    <div class="mb-4">
                        <h1 class="text-2xl font-bold text-gray-600">Register</h1>
                        <p>Start looking for training.</p>
                    </div>
                    <div class="md:flex md:space-x-4">
                        <div class="md:w-1/2 mb-4 space-y-2">
                            <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                            <input type="text" id="username" name="username" placeholder="Username"
                                class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('username') }}">
                            @error('username')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:w-1/2 mb-4 space-y-2">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="text" id="email" name="email" placeholder="Email"
                                class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('email') }}">
                            @error('email')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:space-x-4">
                        <div class="md:w-1/2 mb-4 space-y-2">
                            <label for="first-name" class="block text-sm font-medium text-gray-700">First Name</label>
                            <input type="text" id="first-name" name="first_name" placeholder="First Name"
                                class="w-full p-2 border border-gray-300 rounded-md " value="{{ old('first_name') }}">
                            @error('first_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:w-1/2 mb-4 space-y-2">
                            <label for="last-name" class="block text-sm font-medium text-gray-700">Last Name</label>
                            <input type="text" id="last-name" name="last_name" placeholder="Last Name"
                                class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('last_name') }}">
                            @error('last_name')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>
                    <div class="md:flex md:space-x-4">
                        <div class="md:w-1/2 mb-4 space-y-2 relative">
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <input type="password" id="password" name="password" placeholder="Password"
                                class="w-full p-2 border border-gray-300 rounded-md pr-10">
                            <div class="absolute inset-y-0 right-0 pr-3 pt-5 flex items-center cursor-pointer"
                                onclick="togglePasswordVisibility('password', this)">
                                <i class="fa fa-eye text-gray-600"></i>
                            </div>
                            @error('password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="md:w-1/2 mb-4 space-y-2 relative">
                            <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm
                                Password</label>
                            <input type="password" id="confirm-password" name="confirm_password"
                                placeholder="Confirm Password" class="w-full p-2 border border-gray-300 rounded-md pr-10">
                            <div class="absolute inset-y-0 right-0 pr-3 pt-5 flex items-center cursor-pointer"
                                onclick="togglePasswordVisibility('confirm-password', this)">
                                <i class="fa fa-eye text-gray-600"></i>
                            </div>
                            @error('confirm_password')
                                <p class="text-red-500 text-xs italic">{{ $message }}</p>
                            @enderror
                        </div>
                    </div>


                    <div class="mb-4 space-y-2">
                        <label for="adresse" class="block text-sm font-medium text-gray-700">Address</label>
                        <input type="text" id="adresse" name="address" placeholder="Address"
                            class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('address') }}">
                        @error('address')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 space-y-2">
                        <label for="phone-number" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" id="phone-number" name="phone_number" placeholder="Phone Number"
                            class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('phone_number') }}">
                        @error('phone_number')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 space-y-2">
                        <label for="domain" class="block text-sm font-medium text-gray-700">Domain</label>
                        <input type="text" id="domain" name="domain"
                            placeholder="You can chose more then one domain"
                            class="w-full p-2 border border-gray-300 rounded-md" value="{{ old('domain') }}">
                        @error('domain')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="terms_and_conditions" name="terms_and_conditions" type="checkbox"
                                class="h-4 w-4 bg-gray-500 focus:ring-gray-400 border-gray-300 rounded"
                                {{ old('terms_and_conditions') ? 'checked' : '' }}>
                            <label for="terms_and_conditions" class="ml-2 block text-sm text-gray-800">
                                I accept <a href="#">Terms & Conditions</a>
                        </div>
                        @error('terms_and_conditions')
                            <p class="text-red-500 text-xs italic">{{ $message }}</p>
                        @enderror
                        <div class="text-sm">
                            </label>

                            <p class="text-gray-600">Already have an account?</p>
                            <a href="#" class="text-gray-400 hover:text-gray-500 font-semibold">
                                Sign in
                            </a>
                        </div>
                    </div>
                    <br>
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center bg-gray-400  hover:bg-gray-500 text-gray-100 p-3  rounded-full tracking-wide font-semibold  shadow-lg cursor-pointer transition ease-in duration-100">
                            SIGN UP
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
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
