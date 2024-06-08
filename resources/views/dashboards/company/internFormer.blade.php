@extends('dashboards.layout')
@section('title', 'Company | Former interns')
@section('content')

    <div class="flex h-screen">
        <div class=" w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company  :company="$company" />
        </div>
        <div class="flex-1 p-8 overflow-y-auto">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <section>
                <div class="mt-12 ">


                    <div class="mb-12 grid gap-y-10 gap-x-6 md:grid-cols-2 xl:grid-cols-4">

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 overflow-hidden rounded-xl bg-gradient-to-tr from-blue-600 to-blue-400 text-white shadow-blue-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-bullhorn text-2xl"></i>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Announcements</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ $announces->count() }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard" >
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">Announcements</strong>&nbsp;Management
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-pink-600 to-pink-400 text-white shadow-pink-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-paper-plane text-2xl"></i>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Intern applicants</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ $offres->count() }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard/intern-applicants">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">View</strong>&nbsp;All the list
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-green-600 to-green-400 text-white shadow-green-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-graduation-cap text-2xl"></i>

                            </div>
                            <div class="p-4 text-right">

                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Former interns</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ count($internships) }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard/former-interns">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-bold  text-blue-gray-600">
                                        <strong class="text-green-500">View</strong>&nbsp;All the list
                                    </p>
                                </a>
                            </div>
                        </div>

                        <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                            <div
                                class="bg-clip-border mx-4 rounded-xl overflow-hidden bg-gradient-to-tr from-orange-600 to-orange-400 text-white shadow-orange-500/40 shadow-lg absolute -mt-4 grid h-16 w-16 place-items-center">
                                <i class="fas fa-hourglass-half text-2xl"></i>
                            </div>
                            <div class="p-4 text-right">
                                <p
                                    class="block antialiased font-sans text-sm leading-normal font-semibold text-blue-gray-600">
                                    Current interns</p>
                                <h4
                                    class="block antialiased tracking-normal font-sans text-2xl font-semibold leading-snug text-blue-gray-900">
                                    {{ count($internships2) }}</h4>
                            </div>
                            <div class="border-t border-blue-gray-50 p-4">
                                <a href="/company/dashboard/current-interns">
                                    <p
                                        class="block antialiased font-sans text-base leading-relaxed font-normal text-blue-gray-600">
                                        <strong class="text-green-500">View</strong>&nbsp;All the list
                                    </p>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="mb-4 grid grid-cols-1 gap-6 xl:grid-cols-3">
                        <div
                            class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md overflow-hidden xl:col-span-2">
                            <div
                                class="relative bg-clip-border rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none m-0 flex items-center justify-between p-6">
                                <div>
                                    <h6
                                        class="block antialiased tracking-normal font-sans text-base underline font-bold leading-relaxed text-blue-gray-900 mb-1">
                                        Former interns
                                    </h6>
                                </div>

                            </div>
                            <div class="overflow-x-auto">
                                <table class="table-auto border-collapse w-full" id="Announcements">
                                    <thead>
                                        <tr class="bg-gray-100">
                                            <th class="px-4 py-2">Full name</th>
                                            <th class="px-4 py-2">Email</th>
                                            <th class="px-4 py-2">Phone number</th>
                                            <th class="px-4 py-2">Atestation</th>
                                            <th class="px-4 py-2">Comment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($internships as $internship )
                                        @if ($internship->certificate)
                                        <tr
                                        class="hover:bg-gray-200 font-normal hover:font-semibold text-gray-600 hover:text-gray-800 cursor-pointer">
                                        <td
                                            class="border px-4 py-2 text-center font-normal hover:font-semibold text-gray-600 hover:text-gray-800">
                                            {{$internship->trainee->first_name}} {{$internship->trainee->last_name}}
                                        </td>
                                        <td class="border px-4 py-2 text-center">{{$internship->trainee->email}}</td>
                                        <td class="border px-4 py-2 text-center">{{$internship->trainee->phone_number}}</td>
                                        <td class="border px-4 py-2 text-center"><a href="{{ asset('storage/'. $internship->certificate) }}" download>PDF</a></td>
                                        <td class="border px-4 py-2 text-center">{{$internship->comment}}</td>
                                    </tr>
                                    @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
        </div>
    </div>
    </section>
    </div>
    </div>



    <script>
        function smoothScroll(event) {
            event.preventDefault();
            const targetId = event.currentTarget.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            targetElement.scrollIntoView({
                behavior: 'smooth'
            });
        }
    </script>
@endsection
