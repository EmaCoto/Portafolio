<div class="m-8">
    <img wire:click="$toggle('open')" src="{{ asset("img/datatable.png") }}" alt="ping_pong" class="rounded-md cursor-pointer">

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
            <div class="h-96 flex flex-col">
                <table class="w-full table-auto rounded-lg overflow-hidden mt-4">
                    <thead class="rounded-t-lg">
                        <tr class="bg-[#65B741] text-gray-100 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">N°</th>
                            <th class="py-3 px-6 text-left">Nombre</th>
                            <th class="py-3 px-6 text-left">Edad</th>
                            <th class="py-3 px-6 text-center">Documento</th>
                            <th class="py-3 px-6 text-center">Correo</th>
                            <th class="py-3 px-6 text-center">Acciones</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white text-gray-600 text-sm font-light">
                        @foreach ($datatables as $datatable)
                            <tr class="border-b border-gray-200 hover:bg-gray-100" >{{-- wire:key="datatable-{{ $datatable->id }}" --}}
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $datatable->id }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $datatable->name }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <span class="font-medium">{{ $datatable->age }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span class="font-medium">{{ $datatable->document }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <div class="flex items-center justify-center">
                                        <span class="font-medium">{{ $datatable->email }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center flex justify-center">
                                    <div class="flex group relative mr-10">
                                        <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-4 opacity-0 absolute bg-blue-600 rounded-lg px-2">
                                            Editar
                                        </span>
                                        <div>
                                            @livewire('projects.second-project.edit', ['datatableId' => $datatable->id], key(time() . $datatable->id))
                                        </div>
                                    </div>
                                    <div class="flex group relative">
                                        <span class="w-26 py-1 text-gray-100 group-hover:opacity-100 group-hover:bg-opacity-80 -top-8 -left-4 opacity-0 absolute bg-red-600 rounded-lg px-2">
                                            Eliminar
                                        </span>
                                        <div>
                                            <button wire:click="destroy({{ $datatable->id }})"><i class="fa-solid fa-ban text-red-600 hover:text-red-300"></i></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <div class="px-6">
                {{ $datatables->links() }}
            </div> --}}
        </x-slot>
        <x-slot name="footer">
            <button wire:click="$set('open', false)" class="w-24 bg-[#111111] h-9 flex items-center justify-center rounded-lg cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-lg hover:before:left-0 text-white mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
