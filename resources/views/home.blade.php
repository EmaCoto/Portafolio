<x-guest-layout>
    {{-- NAV --}}
     <nav class="grid grid-cols-2 top-0 sticky bg-[#111111] w-full px-14 py-5 z-50 shadow-md shadow-black">
        <div class="flex items-center">
            <a href="{{ route('home') }}" class="group">
                <img src="{{ asset("img/my_photo.png") }}" alt="photo" class="size-12 rounded-full bg-white"> {{-- Editar que la imagen sea redonda --}}
                <a href="{{ route('home') }}" class="group font-bold mx-5 text-lg relative overflow-hidden">Emanuel Cortes Ochoa<span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></a>
            </a>
        </div>
        <div class="flex items-center justify-around">
            <a href="#technologies" class="group relative overflow-hidden">Tecnologías <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></a>
            <a href="#projects" class="group relative overflow-hidden">Proyectos <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></a>
            <livewire:about.aboutme />
            <a href="#" class="group relative overflow-hidden">Contáctame <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></a>
        </div>
     </nav>
    {{-- DESCRIPTION --}}
     <div id="contenedor" class="h-[86.2vh] flex flex-col justify-center px-14 py-5 z-10">
        <div class="z-10 bg-[#191919] text-white  py-8 px-3 rounded-lg shadow-lg shadow-black ">
            <h3 class="uppercase text-lg">¡Hola! soy emanuel</h3>
            <h2 class="text-6xl font-bold">Desarrollador <span class="text-[#65B741]">full-stack</span></h2>
            <h2 class="text-2xl">Un apasionado desarrollador web con experiencia en la creación de aplicaciones elegantes y dinámicas</h2>
        </div>
     </div>
    {{-- TECHNOLOGIES --}}
    <div id="technologies" class="px-14 py-5 bg-[#111111] text-black">
        <h1 class="text-white text-center w-full uppercase text-2xl font-semibold mb-10">Tecnologías aprendidas</h1>
        <div class="grid grid-cols-4">
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class="bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">JavaScript</h1>
                <img class="bg-[#ffdc53] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/javascript.png") }}" alt="">
            </div>
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">CSS3</h1>
                <img class="bg-[#50c1f9] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/css.png") }}" alt="">
            </div>
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">HTML5</h1>
                <img class="bg-[#fb824f] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/html.png") }}" alt="">
            </div>
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">Bootstrap</h1>
                <img class="bg-[#68597f] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/bootstrap.png") }}" alt="">
            </div>
        </div>
        <div class="grid grid-cols-4 mt-6">
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">Livewire</h1>
                <img class="bg-[#e87bbc] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/livewire.png") }}" alt="">
            </div>
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">Tailwind CSS</h1>
                <img class="bg-[#bfe8f0] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/tailwind.png") }}" alt="">
            </div>
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">PHP</h1>
                <img class="bg-[#989ab3] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/php.png") }}" alt="">
            </div>
            <div class="mx-20 hover:scale-90 duration-200">
                <h1 class=" bg-white rounded-t-lg w-32 m-auto mb-2 font-bold text-center text-lg">Laravel 10</h1>
                <img class="bg-[#f2aba2] rounded-b-lg w-32 m-auto p-3" src="{{ asset("img/laravel.png") }}" alt="">
            </div>
        </div>
    </div>
    {{-- PROJECTS --}}
    <div id="projects" class="px-14 py-5">
        <h1 class="text-center w-full uppercase text-2xl font-semibold mb-10">Proyectos</h1>
        <div class="grid grid-cols-4 ">
            <livewire:projects.first-project>
            <livewire:projects.second-project>
            <livewire:projects.third-project>
            <livewire:projects.fourth-project>
        </div>
        <div class="grid grid-cols-4 mt-6">

        </div>
    </div>

</x-guest-layout>
