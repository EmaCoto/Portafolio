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
            <livewire:contact.contact-me />
        </div>
     </nav>

    {{-- DESCRIPTION --}}
    <x-description/>

    {{-- TECHNOLOGIES --}}
    <x-technologies/>
    {{-- PROJECTS --}}
    <div id="projects" class="px-14 py-5 relative">
        <h1 class="text-center w-full uppercase text-2xl font-semibold mb-10">Proyectos</h1>
        <div class="grid grid-cols-4 text-center mx-auto">
            {{-- ¡SE ESTAN HACIENDO MEJORAS EN LOS PROYECTOS PRONTO ESTARÁN NUEVAMENTE DISPONIBLES! --}}
            <livewire:projects.first-project>
            <livewire:projects.second-project.second-project>
            <livewire:projects.third-project>
            <livewire:projects.fourth-project>
        </div>
        <div class="grid  mt-6">
        </div>
    </div>
    {{-- FOOTER --}}
    <x-footer />
</x-guest-layout>
