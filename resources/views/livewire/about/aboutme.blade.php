<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button wire:click="$set('open', true)" class="group relative overflow-hidden">Acerca de mí <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></button>

    <x-dialog-modal wire:model="open" maxWidth="4xl">
        <x-slot name="title" >
            <!-- Aquí va el título de tu modal -->
        </x-slot>
        <x-slot name="content">
            <div class="text-black text-xl text-justify">
                <div >
                    <img src="{{ asset("img/my_photo.png") }}" alt="" class="bg-white w-1/5 float-left">
                    <p>Hola, soy Emanuel Cortes Ochoa, un joven apasionado por el desarrollo web con una especialidad como full stack. Con tan solo 19 años, he adquirido experiencia y habilidades en tecnologías como <span class="text-[#D6BA32]">Java</span><span class="text-[#FFDA3E]">Script</span>, <span class="text-[#FB70A9]">Livewi</span><span class="text-[#4E56A6]">re</span>, <span class="text-[#E74430]">Laravel</span>, <span class="text-[#07B6D5]">Tailwind</span>, <span class="text-[#0277BD]">CSS</span><span class="text-[#039BE5]">3</span>, <span class="text-[#E74430]">HTML</span><span class="text-[#EF652A]">5</span>, <span class="text-[#563D7C]">Bootstrap</span>, <span class="font-semibold">GitHub</span> y <span class="text-[#777BB3]">PHP</span>.</p>
                </div>
                <p>Más allá de la programación, me fascina el mundo de la fotografía, capturando momentos únicos a través de mi lente. Soy un entusiasta del deporte y siempre estoy dispuesto a sumergirme en nuevos desafíos académicos y de aprendizaje.</p>
                <p>Mi curiosidad y apertura hacia el conocimiento me llevan a estar constantemente aprendiendo y mejorando en mi campo. Siempre estoy abierto a nuevas oportunidades y dispuesto a enfrentar cualquier reto que se presente en mi camino.</p>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class="mt-6 bg-gray-300 px-5 rounded-lg font-semibold text-lg text-gray-600">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
