@extends('dashboards.layout')
@section('title', 'company | Internships')
@section('content')
    <div class="flex h-screen bg-gray-50 ">
        <div class="w-16 border-r border-gray-100 px-4 py-8 flex flex-col items-center justify-center space-y-12 pb-40">
            <x-sidebar-company />
        </div>
        <div class="flex-1 p-2 overflow-y-auto">
            <header class="mb-8">
                <h1 class="text-3xl text-gray-800 font-bold">Welcome to Talent<span class="text-gray-500">Connect</span></h1>
                <p class="text-gray-600">Connecting businesses with top talent</p>
            </header>
            <section class="w-full min-h-screen flex flex-col lg:flex-row items-center lg:justify-around">
                <div class="lg:w-1/2 lg:pr-2">
                    <div class="md:mb-40">
                        <h2 class="md:text-4xl text-2xl font-bold text-gray-800">Creating Announcements for Companies</h2>
                        <br>
                        <p class="text-gray-600 md:text-lg md:pb-20">
                            Announcements for internships attract potential trainees by highlighting program benefits and
                            desired candidate skills, helping build a strong applicant pool and increasing visibility for
                            your organization.</p>
                        <img src="https://img.freepik.com/vector-gratis/ilustracion-estilo-personaje-estudiante-femenina-sentada-pila-libros-usando-computadora-portatil-mientras-estudia-linea_241107-585.jpg?size=338&ext=jpg"
                            alt="" class="hidden md:block mx-auto rounded-3xl ">
                    </div>
                </div>
                <br><br>
                <div class="lg:w-1/3 lg:pl-4">
                    <div class="mb-40 rounded-full">

                        <form action="#" method="POST" enctype="multipart/form-data"
                            class="bg-white p-8 rounded-lg shadow-md">
                            @csrf
                            <h2 class="md:text-4xl text-2xl font-bold text-gray-600">Add Training <span
                                    class="text-gray-800">Announcement :</span> </h2><br>

                            <div class="mb-6">
                                <label for="title" class="block text-gray-700 font-bold mb-2">Title:</label>
                                <input type="text" id="title" name="title"
                                    class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                    required>
                            </div>
                            <div class="mb-6">
                                <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                                <textarea id="description" name="description" rows="3"
                                    class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full" required></textarea>
                            </div>
                            <div class="mb-6">
                                <label for="skills" class="block text-gray-700 font-bold mb-2">Skills Required:</label>
                                <input type="text" id="skills" name="skills"
                                    class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                    required>
                            </div>
                            <div class="mb-6">
                                <label for="benefits" class="block text-gray-700 font-bold mb-2">Benefits:</label>
                                <textarea id="benefits" name="benefits" rows="3"
                                    class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full" required></textarea>
                            </div>
                            <div class="mb-6">
                                <label for="contact" class="block text-gray-700 font-bold mb-2">Contact
                                    Information:</label>
                                <input type="text" id="contact" name="contact"
                                    class="border-gray-300 rounded-md shadow-sm focus:border-gray-500 focus:ring-gray-500 w-full"
                                    required>
                            </div>
                            <div class="mb-6">
                                <label for="image" class="block text-gray-700 font-bold mb-2">Image:</label>
                                <div class="flex items-center">
                                    <div class="flex-grow">
                                        <span class="text-gray-500">Enhance your announcement with an eye-catching image
                                            selection.</span>
                                        <input type="file" id="image" name="image"
                                            class="block w-full mt-1 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-gray-50 file:text-gray-700 hover:file:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-gray-500">
                                    </div>
                                </div>
                            </div>
                            <button type="submit"
                                class="w-full flex justify-center bg-gray-400 hover:bg-gray-500 text-gray-100 p-3 rounded-full tracking-wide font-semibold shadow-lg cursor-pointer transition ease-in duration-100">Submit</button>
                        </form>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
