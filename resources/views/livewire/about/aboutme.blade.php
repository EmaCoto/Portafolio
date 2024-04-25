<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button wire:click="$set('open', true)" class="group relative overflow-hidden">Acerca de mí <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></button>

    <x-dialog-modal wire:model="open" maxWidth="6xl">
        <x-slot name="title" >
            <!-- Aquí va el título de tu modal -->
        </x-slot>
        <x-slot name="content">
            <div class="text-xl text-justify text-black">
                {{-- ONE SECTION --}}
                <div class="flex justify-between">
                    <img src="{{ asset("img/my_photo_2.jpg") }}" alt="" class="bg-white w-[30%] h-[300px] rounded-lg">
                    <div class="ml-8 w-full text-center">
                        <h1 class="font-bold uppercase mb-8">Habilidades</h1>
                        <div class="grid grid-cols-3">
                            <div class="bg-gray-100">
                                <p>Asertividad</p>
                                <i class="fa-solid fa-ear-listen fa-xl p-8 text-blue-600"></i>
                            </div>
                            <div>
                                <p>Iniciativa</p>
                                <i class="fa-solid fa-arrow-up-wide-short fa-xl p-8 text-red-600"></i>
                            </div>
                            <div class="bg-gray-100">
                                <p>Adaptabilidad</p>
                                <i class="fa-solid fa-puzzle-piece fa-xl p-8 text-green-600"></i>
                            </div>
                            <div>
                                <p>Competencias Digitales</p>
                                <i class="fa-solid fa-laptop-code fa-xl p-8 text-violet-600"></i>
                            </div>
                            <div class="bg-gray-100">
                                <p>Resolucion de problemas</p>
                                <i class="fa-regular fa-handshake fa-xl p-8 text-orange-600"></i>
                            </div>
                            <div>
                                <p>Inteligencia Emocional</p>
                                <i class="fa-solid fa-brain fa-xl p-8 text-[#21C8DF]"></i>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- TWO SECTION --}}
                <div class="grid grid-cols-3 mt-8">
                    <div class="hover:bg-gray-100 hover:rounded-lg p-3">
                        <h1 class="font-bold uppercase text-center">¿quién soy?</h1>
                        <p>Hola, soy Emanuel Cortes Ochoa, un joven apasionado por el desarrollo web con una especialidad como full stack. Con tan solo 20 años, he adquirido experiencia y habilidades en tecnologías como <span class="text-[#D6BA32]">Java</span><span class="text-[#FFDA3E]">Script</span>, <span class="text-[#FB70A9]">Livewi</span><span class="text-[#4E56A6]">re</span>, <span class="text-[#E74430]">Laravel</span>, <span class="text-[#07B6D5]">Tailwind</span>, <span class="text-[#0277BD]">CSS</span><span class="text-[#039BE5]">3</span>, <span class="text-[#E74430]">HTML</span><span class="text-[#EF652A]">5</span>, <span class="text-[#563D7C]">Bootstrap</span>, <span class="font-semibold">GitHub</span> y <span class="text-[#777BB3]">PHP</span>.</p>
                    </div>
                    <div class="hover:bg-gray-100 hover:rounded-lg p-3">
                        <h1 class="font-bold uppercase text-center">¿A qué me dedico?</h1>
                        <p>Más allá de la programación, me fascina el mundo de la fotografía, capturando momentos únicos a través de mi lente. Soy un entusiasta del deporte y siempre estoy dispuesto a sumergirme en nuevos desafíos académicos y de aprendizaje.</p>
                    </div>
                    <div class="hover:bg-gray-100 hover:rounded-lg p-3">
                        <h1 class="font-bold uppercase text-center">¿Comó lo he logrado?</h1>
                        <p>Mi curiosidad y apertura hacia el conocimiento me llevan a estar constantemente aprendiendo y mejorando en mi campo. Siempre estoy abierto a nuevas oportunidades y dispuesto a enfrentar cualquier reto que se presente en mi camino.</p>
                    </div>
                </div>
                {{-- TIMELINE --}}
                <div class="my-5">
                    <h1 class="font-bold uppercase text-center">Estudios</h1>
                    <ol class=" grid grid-cols-3">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-10 h-9 bg-gray-200 rounded-full ring-0 ring-white">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold">Programación de software</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Servicio Nacional de Aprendizaje-SENA</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-10 h-9 bg-gray-200 rounded-full ring-0 ring-white">
                                <i class="fa-solid fa-terminal"></i>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold">Técnico en Sistemas</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Servicio Nacional de Aprendizaje-SENA</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-10 h-9 bg-gray-200 rounded-full ring-0 ring-white">
                                <i class="fa-regular fa-file-code"></i>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold">Introducción al Desarrollo Web l</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Google Actívate</time>
                        </div>
                    </li>
                    {{-- <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div class="z-10 flex items-center justify-center w-10 h-9 bg-gray-300 rounded-full ring-0 ring-white">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-100 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold">Bachiller Académico</h3>
                            <time class="block mb-2 text-sm font-normal leading-none text-gray-400">Institución Educativa Atanasio Girardot</time>
                        </div>
                    </li> --}}
                    </ol>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button  wire:click="$set('open', false)"  class="w-24 bg-[#111111] h-9 flex items-center justify-center rounded-lg cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-white mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
