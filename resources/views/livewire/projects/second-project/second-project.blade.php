<div class="m-8">
    <img wire:click="$toggle('open')" src="{{ asset("img/ping_pong.png") }}" alt="ping_pong" class="rounded-md">

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            Tabla de datos
        </x-slot>
        <x-slot name="content">
            <div class="flex justify-between">
                <div class="flex w-full">
                    <button class="mr-1 rounded-md flex items-center h-full w-24 bg-gray-500 text-white justify-center cursor-pointer hover:bg-gray-400 active:bg-gray-500">Buscar</button>
                    <x-input type="search"></x-input>
                </div>
                <livewire:projects.second-project.create>
            </div>
            <div class="h-96">
                <ul>
                    @foreach ($datatables as $datatable)
                    <li>
                        {{ $datatable->name }}
                    </li>
                    <li>
                        {{ $datatable->age }}
                    </li>
                    <li>
                        {{ $datatable->document }}
                    </li>
                    <li>
                        {{ $datatable->email }}
                    </li>
                    @endforeach
                </ul>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class="w-24 bg-[#111111] h-9 flex items-center justify-center rounded-lg cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-lg hover:before:left-0 text-white mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>

{{-- <div class="grid grid-cols-2">
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
        </div> --}}

