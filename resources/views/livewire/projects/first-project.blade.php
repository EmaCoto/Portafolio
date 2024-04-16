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
            <!-- Aquí va el pie de tu modal -->
        </x-slot>
    </x-dialog-modal>
</div>
