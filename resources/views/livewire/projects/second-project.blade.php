<div class="cursor-pointer m-8">
    <img wire:click="$set('open', true)" src="{{ asset("img/ping_pong.png") }}" alt="ping_pong" class="rounded-md">
    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <h1 class="text-center text-xl">Acciones y eventos creados con Livewire</h1>
        </x-slot>
        <x-slot name="content">
            <div class="grid grid-cols-2">
                <div>
                    <button wire:click='decrement'> - </button>
                    <span class="mx-2">{{ $count }}</span>
                    <button wire:click='increment'> + </button>
                </div>
                <div>
                    <form class="mb-4" wire:submit='save'>
                        <input wire:model='pais' placeholder="Ingrese un país" type="text">
                        <button>Agregar</button>
                    </form>
                    <ul class="list-disc list-inside space-y-2">
                        @foreach ($paises as $index => $pais)
                            <li wire:key='pais-{{ $index }}'>
                                <span wire:mouseenter='changeActive("{{ $pais }}")'>{{ $pais }}</span>
                                <button wire:click='delete({{ $index }})' class="bg-red-500">x</button>
                            </li>
                        @endforeach
                    </ul>
                    {{ $active }}
                </div>
            </div>

        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class="w-24 bg-[#111111] h-9 flex items-center justify-center rounded-lg cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-lg hover:before:left-0 text-white mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>

