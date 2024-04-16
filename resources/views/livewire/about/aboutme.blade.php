<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <button wire:click="$set('open', true)" class="group relative overflow-hidden">Acerca de mí <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></button>

    <x-dialog-modal wire:model="open">
        <x-slot name="title">
            <!-- Aquí va el título de tu modal -->
        </x-slot>
        <x-slot name="content">
            <!-- Aquí va el contenido de tu modal -->
        </x-slot>
        <x-slot name="footer">
            <!-- Aquí va el pie de tu modal -->
        </x-slot>
    </x-dialog-modal>
</div>
