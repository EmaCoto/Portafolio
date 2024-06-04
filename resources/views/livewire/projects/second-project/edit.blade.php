{{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
<div>
    <button wire:click="$toggle('open')"><i class="fa-solid fa-pencil text-blue-600 hover:text-blue-300 cursor-pointer"></i></button>

    <x-dialog-modal maxWidth="4xl" wire:model="open">
        <x-slot name="title">
            Editar datos
        </x-slot>
        <x-slot name="content">
            <form class="w-[85%] mx-auto mt-10">
                <div class="flex justify-between">
                    <div class="flex items-center h-full pr-4 w-full">
                        <x-label>Nombre:</x-label>
                        <x-input type="text" wire:model='name' placeholder="Escribe tu nombre" />
                    </div>
                    <div class="flex items-center h-full pr-4">
                        <x-label>Edad:</x-label>
                        <x-input type="number" wire:model='age'/>
                    </div>
                    <div class="flex items-center h-full w-full">
                        <x-label>Cédula:</x-label>
                        <x-input type="number" wire:model='document' placeholder="Escribe tu número de cédula" />
                    </div>
                </div>
                <div class="flex items-center h-full mt-5 w-[75%] mx-auto">
                    <x-label>Correo:</x-label>
                    <x-input type="email" wire:model='email' placeholder="Escribe tu correo electrónico" />
                </div>

            </form>
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class="mx-4 w-24 bg-gray-600 text-white h-9 flex items-center justify-center rounded-lg cursor-pointer">Cerrar</button>
            <button wire:click='edit' class="mx-4 w-24 bg-blue-600 text-white h-9 flex items-center justify-center rounded-lg cursor-pointer">Editar</button>
        </x-slot>
    </x-dialog-modal>
</div>



