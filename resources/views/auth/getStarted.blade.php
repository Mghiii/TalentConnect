@extends('layout')
@section('title', ' TC | Get started')
@section('content')
    <!-- component -->
    <section
        class="h-screen flex items-center justify-center bg-center bg-no-repeat bg-[url('https://wallpaperaccess.com/full/5227136.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-white md:text-5xl lg:text-6xl">Register
                as
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">Here at TalentConnect, we specialize in
                connecting companies with talented individuals seeking training opportunities, fostering mutual growth and
                innovation.</p>
            <div class="flex justify-center space-x-4">
                <a href="{{route('register.trainee.create')}}"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-gray-600 hover:bg-gray-800 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600">
                    Trainee
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="25" fill="currentColor"
                        class="bi bi-person-fill-check" viewBox="0 0 13 16">
                        <path
                            d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7m1.679-4.493-1.335 2.226a.75.75 0 0 1-1.174.144l-.774-.773a.5.5 0 0 1 .708-.708l.547.548 1.17-1.951a.5.5 0 1 1 .858.514M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path
                            d="M2 13c0 1 1 1 1 1h5.256A4.5 4.5 0 0 1 8 12.5a4.5 4.5 0 0 1 1.544-3.393Q8.844 9.002 8 9c-5 0-6 3-6 4" />
                    </svg> </a>
                <a href="{{route('register.company.create')}}"
                    class="inline-flex justify-center hover:text-gray-900 items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg border border-white hover:bg-gray-100 focus:ring-4 focus:ring-gray-400">
                    Company
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" fill="currentColor"
                        class="bi bi-buildings-fill" viewBox="0 0 8 16">
                        <path
                            d="M15 .5a.5.5 0 0 0-.724-.447l-8 4A.5.5 0 0 0 6 4.5v3.14L.342 9.526A.5.5 0 0 0 0 10v5.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V14h1v1.5a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5zM2 11h1v1H2zm2 0h1v1H4zm-1 2v1H2v-1zm1 0h1v1H4zm9-10v1h-1V3zM8 5h1v1H8zm1 2v1H8V7zM8 9h1v1H8zm2 0h1v1h-1zm-1 2v1H8v-1zm1 0h1v1h-1zm3-2v1h-1V9zm-1 2h1v1h-1zm-2-4h1v1h-1zm3 0v1h-1V7zm-2-2v1h-1V5zm1 0h1v1h-1z" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
