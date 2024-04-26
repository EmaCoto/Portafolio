<div  class="cursor-pointer m-8">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <img wire:click="$set('open', true)" src="{{ asset("img/ping_pong.png") }}" alt="ping_pong" class="rounded-md">
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <!-- Aquí va el título de tu modal -->
        </x-slot>
        <x-slot name="content">
            <div>
                <canvas id="game" class="m-0 p-0 text-center overflow-hidden w-[975px] h-[445px]">
                </canvas>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button  wire:click="$set('open', false)"  class="w-24 bg-[#111111] h-9 flex items-center justify-center rounded-lg cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-lg hover:before:left-0 text-white mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
