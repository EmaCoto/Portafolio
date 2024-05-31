<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
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
</div>
