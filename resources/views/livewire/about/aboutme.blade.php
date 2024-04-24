<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button wire:click="$set('open', true)" class="group relative overflow-hidden">Acerca de mí <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></button>

    <x-dialog-modal wire:model="open" maxWidth="6xl">
        <x-slot name="title" >
            <!-- Aquí va el título de tu modal -->
        </x-slot>
        <x-slot name="content">
            <div class="text-xl text-justify text-black">
                <div class="flex">
                    <img src="{{ asset("img/my_photo.png") }}" alt="" class="bg-white w-1/5 float-left h-[230px]">
                    <div class="ml-10 w-full text-center">
                        <h1 class="font-bold uppercase">Habilidades</h1>
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
                <div class="grid grid-cols-3">
                    <div class="p-4">
                        <p>Hola, soy Emanuel Cortes Ochoa, un joven apasionado por el desarrollo web con una especialidad como full stack. Con tan solo 20 años, he adquirido experiencia y habilidades en tecnologías como <span class="text-[#D6BA32]">Java</span><span class="text-[#FFDA3E]">Script</span>, <span class="text-[#FB70A9]">Livewi</span><span class="text-[#4E56A6]">re</span>, <span class="text-[#E74430]">Laravel</span>, <span class="text-[#07B6D5]">Tailwind</span>, <span class="text-[#0277BD]">CSS</span><span class="text-[#039BE5]">3</span>, <span class="text-[#E74430]">HTML</span><span class="text-[#EF652A]">5</span>, <span class="text-[#563D7C]">Bootstrap</span>, <span class="font-semibold">GitHub</span> y <span class="text-[#777BB3]">PHP</span>.</p>
                    </div>
                    <div class="p-4">
                        <p>Más allá de la programación, me fascina el mundo de la fotografía, capturando momentos únicos a través de mi lente. Soy un entusiasta del deporte y siempre estoy dispuesto a sumergirme en nuevos desafíos académicos y de aprendizaje.</p>
                    </div>
                    <div class="p-4">
                        <p>Mi curiosidad y apertura hacia el conocimiento me llevan a estar constantemente aprendiendo y mejorando en mi campo. Siempre estoy abierto a nuevas oportunidades y dispuesto a enfrentar cualquier reto que se presente en mi camino.</p>
                    </div>
                </div>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class="bg-gray-300 px-5 rounded-lg font-semibold text-lg text-gray-600">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
