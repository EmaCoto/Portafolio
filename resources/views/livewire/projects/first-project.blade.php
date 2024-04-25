<div  class="cursor-pointer m-8">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <img wire:click="$set('open', true)" src="{{ asset("img/ping_pong.png") }}" alt="ping_pong" class="rounded-md">
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <!-- Aquí va el título de tu modal -->
        </x-slot>
        <x-slot name="content">
            <!-- Aquí va el contenido de tu modal -->
        </x-slot>
        <x-slot name="footer">
            <button  wire:click="$set('open', false)"  class="w-[150px] bg-black h-[50px] my-3 flex items-center justify-center rounded-xl cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-xl hover:before:left-0 text-[#fff] mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
