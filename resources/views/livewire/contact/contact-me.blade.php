<div>
    {{-- Do your work, then step back. --}}
    <button wire:click="$set('open', true)" class="group relative overflow-hidden">Contáctame <span class="absolute h-0.5 bg-[#65B741] bottom-0 left-0 w-1/2 transform -translate-x-full group-hover:translate-x-0 transition-transform duration-200 ease-in-out"></span></button>

    <x-dialog-modal wire:model="open" maxWidth="6xl">
        <x-slot name="title" >
            <h1 class="text-center font-extrabold text-3xl">Contáctame</h1>
        </x-slot>
        <x-slot name="content">
            <div class="w-[75%] mx-auto border-b-2 pb-5">
                <div>
                    <x-label for="name" class="text-black font-bold">Nombre:</x-label>
                    <x-input type="text" placeholder="Escribe tu nombre" />
                </div>
                <div class="flex">
                    <div class="w-[25%] mr-2">
                        <x-label for="name" class="text-black font-bold">¿Es oferta laboral?</x-label>
                        <select class="py-[1px] px-[12px] bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-[#65B741] focus:ring-0 rounded-md shadow-sm w-full h-8">
                            <option value="" disabled selected>Seleccionar</option>
                            <option value="si">Sí</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div class="w-[75%] ml-2">
                        <x-label for="name" class="text-black font-bold">Cargo:</x-label>
                        <x-input type="text" placeholder="Función a desempeñar" class="flex flex-col"/>
                    </div>
                </div>
                <div>
                    <x-label for="phone" class="text-black font-bold">Déjame tu número:</x-label>
                    <x-input type="number" placeholder="Escribe tu nombre" />
                </div>
                <div>
                    <x-label for="info" class="text-black font-bold">Información:</x-label>
                    <textarea name="info" id="info" class="bg-gray-200 focus:bg-gray-50 border-2 border-gray-300 focus:border-[#65B741] focus:ring-0 rounded-md shadow-sm w-full h-20" placeholder="Puedes dejarme más información"></textarea>
                </div>
                <div class="w-full flex justify-center mt-2">
                    <button class="cursor-pointer transition-all bg-green-500 text-white px-6 py-2 rounded-lg border-green-600 border-b-[4px] hover:brightness-110 hover:-translate-y-[1px] hover:border-b-[6px] active:border-b-[2px] active:brightness-90 active:translate-y-[2px]">Enviar</button>
                </div>
            </div>
            <div  class="w-[75%] text-center mx-auto my-5">
                <div>
                    <a href="https://www.facebook.com/EmaCoto21"><i class="fa-brands fa-facebook fa-2xl text-blue-800 mx-2 hover:-translate-y-2 duration-300"></i></a>
                    <a href="https://github.com/EmaCoto"><i class="fa-brands fa-github fa-2xl text-black mx-2 hover:-translate-y-2 duration-300"></i></a>
                    <a href="https://www.linkedin.com/in/emanuel-cort%C3%A9s-a481982b7/"><i class="fa-brands fa-linkedin fa-2xl text-blue-500 mx-2 hover:-translate-y-2 duration-300"></i></a>
                </div>
                <p class="my-3">emanuelcortesochoa@gmail.com</p>
            </div>
        </x-slot>
        <x-slot name="footer">
            <button  wire:click="$set('open', false)"  class="w-24 bg-[#111111] h-9 flex items-center justify-center rounded-lg cursor-pointer relative overflow-hidden transition-all duration-500 ease-in-out shadow-md hover:scale-105 hover:shadow-lg before:absolute before:top-0 before:-left-full before:w-full before:h-full before:bg-gradient-to-r before:from-[#009b49] before:to-[rgb(105,184,141)] before:transition-all before:duration-500 before:ease-in-out before:z-[-1] before:rounded-lg hover:before:left-0 text-white mx-auto">Cerrar</button>
        </x-slot>
    </x-dialog-modal>
</div>
