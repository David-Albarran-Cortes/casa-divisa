<div>




    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">

                   
                    
                    
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    coin
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    precio
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    price change
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Mkt Cap
                                </th>

                                <th scope="col"
                                    class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>


                                {{-- <th scope="col" class="relative px-6 py-3">
                                    <span class="sr-only">Edit</span>
                                </th> --}}
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($coins as $coin => $row)
                            
                                <tr class="  ">
                                    <td class="px-6 py-4 whitespace-nowrap  ">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="{{ $row->image }}" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium ">

                                                    <a wire:click="coinview('{{ $coin }}')"
                                                        class="cursor-pointer hover:text-green-500  bg-white text-gray-900">
                                                        {{ $row->name }}
                                                    </a>



                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    {{ $row->symbol }}
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900">${{ $row->current_price }}</div>

                                    </td>
                                    <td x-data="{ coin: {{ $row->price_change_percentage_24h }} }"
                                        class="px-6 py-4 whitespace-nowrap">
                                        <div x-bind:class="coin > 0 ? 'text-green-500' : 'text-red-600' "
                                            class="text-sm  ">
                                            {{ $row->price_change_percentage_24h }} %
                                        </div>

                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-gray-900"> {{ $row->market_cap }}</div>

                                    </td>


                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span
                                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            Active
                                        </span>
                                    </td>


                                </tr>
                            @endforeach

                            <!-- More people... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{-- <div >
        @foreach ($coins as $coin => $row)
          <a wire:click="coinview('{{ $coin }}')"  class="text-gray-700 bg-white">
            {{ $row->id  }}

        </a>  
        @endforeach
    </div> --}}









    <x-jet-dialog-modal wire:model="open_modal" class="">
        <x-slot name="title">
            titulo
        </x-slot>

        <x-slot name="content">





        </x-slot>



        <x-slot name="footer">
            <x-jet-secondary-button wire:click="$set('open_modal',false)" wire:loading.attr="disabled">
                Cancelar
            </x-jet-secondary-button>
            <x-jet-button color="indigo" wire:click="update" wire:target="update" wire:loading.attr="disabled"
                class="disabled:opacity-25 cursor-pointer text-white dark:bg-green-500 bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 ">
                Actualizar
                </x-button-enlace>
        </x-slot>
    </x-jet-dialog-modal>




    @push('script')
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @endpush




</div>
