<div>
   
     <section class="flex flex-col max-w-4x2 mx-auto overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800 md:flex-row md:h-48">
        <div class="md:flex md:items-center md:justify-center md:w-1/2 md:bg-gray-700 md:dark:bg-gray-800">
            <div class="px-6 py-6 md:px-8 md:py-0">
                <h2 class="text-lg font-bold text-white dark:text-white md:text-gray-100">Deseas Recibir <span class="text-blue-600 dark:text-blue-400 md:text-blue-300">Actualizaciones </span> Del Dolar</h2>
                
                <p class="mt-2 text-sm text-gray-600 dark:text-gray-400 md:text-gray-400">Suscribete para recibir por correo las actualizaciones del precio del dolar</p>
            </div>
        </div>

        <div class="flex items-center justify-center pb-6 md:py-0 md:w-1/2">
            <form>
                <div class="flex flex-col overflow-hidden border rounded-lg dark:border-gray-600 lg:flex-row">
                    <x-jet-input type="text" class="px-6 py-3 text-gray-700 placeholder-gray-500 bg-white outline-none dark:bg-gray-800 dark:placeholder-gray-400 focus:placeholder-transparent dark:focus:placeholder-transparent"   placeholder="Enter your email" aria-label="Enter your email" wire:model="suscripción"/>
                    <x-jet-input-error for="suscripción"/>



                    <x-jet-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save" class="px-4 py-3 text-sm font-medium tracking-wider text-gray-100 uppercase transition-colors duration-200 transform bg-indigo-700 hover:bg-indigo-600 focus:bg-gray-600 focus:outline-none" >
                        subscribe
                    </x-jet-danger-button>


                 </div>
                
                
            </form>
        </div>
    </section>
</div>
