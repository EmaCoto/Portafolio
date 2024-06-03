<div>
    <button wire:click="$toggle('open')" class="rounded-md ml-5 flex items-center h-full w-24 bg-[#65B741] text-white justify-center cursor-pointer hover:bg-[#7bb960] active:bg-[#65B741]">create</button>

    <x-dialog-modal maxWidth="4xl" wire:model="open">
        <x-slot name="title">
            Crear datos
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
            <button wire:click='save' class="mx-4 w-24 bg-[#65B741] text-white h-9 flex items-center justify-center rounded-lg cursor-pointer">Crear</button>
        </x-slot>
    </x-dialog-modal>
</div>
