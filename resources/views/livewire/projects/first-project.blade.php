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
            <button wire:click="$set('open', false)" class="mt-6 bg-gray-300 px-5 rounded-lg font-semibold text-lg text-gray-600">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
