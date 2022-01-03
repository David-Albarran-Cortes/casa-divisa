<div>


    {{-- button de filtrar productos por grid y por lista --}}
    <div class=" bg-white rounded-lg shadow-lg mb-6 sticky   top-0" style="z-index: 900">
        <div class="px-6 py-2 flex justify-between items-center">
            <h1 class="font-semibold text-gray-700 uppercase ">

                <span class="text-gray-700  px-2 py-1 ">

                </span>
            </h1>
            
 

            <div x-data="{open: false}" class="  md:block grid grid-cols-1   bg-white      ">

                <div class="relative inline-block">
                    <!-- Dropdown toggle button -->
                    <button @click="open = ! open"
                        class="relative z-10 block p-2 text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div x-show="open" @click="open = false"
                        class="absolute right-0 z-20 w-48 py-2 mt-2 bg-white rounded-md shadow-xl dark:bg-gray-800">

                        <a wire:click="$set('view','grid')"
                            class="  {{ $view == 'grid' ? 'text-green-500' : '' }} cursor-pointer block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            change of modena
                        </a>
                        <a wire:click="$set('view', 'list')"
                            class="  {{ $view == 'list' ? 'text-green-500' : '' }} cursor-pointer block px-4 py-3 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                            cryptocurrency list
                        </a>

                    </div>
                </div>





            </div>
        </div>
    </div>
    {{-- End --}}




    @if ($view == 'grid')
        <div class="grid grid-rows-1 md:grid-cols-3 ">

            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/dolar.png') }}" />
                            <div class="ml-3 ">
                                <span
                                    class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Dolar</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/dolar.png') }}" />
                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/?text=Hola este es el precio del dolar: {{ number_format($dolar['USD']['transferencia'], 2) }}  "
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                            <br>

                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Dolar en
                            venezuela: <br>
                            $1 USD = {{ number_format($dolar['USD']['transferencia'], 2) }} .BsS </div>


                    </div>

                </div>
            </div>


            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/euro.png') }}" />
                            <div class="ml-3 ">
                                <span
                                    class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Euro</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>
                        <img src="{{ Storage::url('image/euro.png') }}" />
                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el precio del euro: {{ number_format($dolar['EUR']['transferencia'], 2) }}"
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Euro en
                            venzuela:<br>
                            €1 = {{ number_format($dolar['EUR']['transferencia'], 2) }} .BsS </div>
                        {{-- $dolar['EUR']['transferencia'] --}}

                    </div>

                </div>
            </div>


            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full"
                                src="{{ Storage::url('image/pesos_bolivares.png') }}" />
                            <div class="ml-3 ">
                                <span class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Pesos
                                    Bolivares</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>
                        <br><br>
                        <img src="{{ Storage::url('image/pesos_bolivares.png') }}" />
                        <br><br>
                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el cambio de pesos a bolivares: {{ number_format($dolar['COL']['transfer'], 4) }}"
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500   "> Pesos a
                            bolívares:<br>
                            {{ number_format($dolar['COL']['transfer'], 4) }} COP </div>
                        {{-- {{ $dolar['COL']['transfer'] }} --}}


                    </div>

                </div>
            </div>


            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/bitcoin.png') }}" />
                            <div class="ml-3 ">
                                <span class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Dolar
                                    Bitcoin</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/bitcoin.png') }}" />

                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el precio del dolar bitcoin : {{ number_format($dolar['USD']['bitcoin_ref'], 2) }} "
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Dolar Bitcoin en
                            venezuela:
                            {{ number_format($dolar['USD']['bitcoin_ref'], 2) }} .BsS
                            {{-- $dolar['USD']['bitcoin_ref'] --}}</div>


                    </div>
                </div>
            </div>


            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/petroleo.png') }}" />
                            <div class="ml-3 ">
                                <span
                                    class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Petroleo</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/petroleo.png') }}" />

                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el precio del petroleo: {{ $dolar['MISC']['petroleo'] }}"
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500   "> Petroleo :<br>
                            ${{ $dolar['MISC']['petroleo'] }}
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/oro.png') }}" />
                            <div class="ml-3 ">
                                <span
                                    class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Oro</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/oro.png') }}" />

                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el precio del oro: {{ number_format($dolar['GOLD']['rate'], 2) }} (Oz)"
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500   "> Oro : <br>
                            ${{ number_format($dolar['GOLD']['rate'], 2) }} (Oz) </div>
                        {{-- $dolar['GOLD']['rate'] }},00(oz)</div> --}}
                    </div>
                </div>
            </div>

        </div>



        <div class="grid grid-rows-1 md:grid-cols-3 ">

            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/BCV.png') }}" />
                            <div class="ml-3 ">
                                <span
                                    class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Reservas
                                    BCV</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/BCV.png') }}" />

                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola esta son las reservas del bcv: {{ $dolar['BCV']['reservas'] }} MM "
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500   "> Reservas:
                            {{ $dolar['BCV']['reservas'] }} MM</div>
                    </div>
                </div>
            </div>


            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/dolar_bcv.png') }}" />
                            <div class="ml-3 ">
                                <span class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">DOLAR
                                    BCV:</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/dolar_bcv.png') }}" />

                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el precio del dolar bcv:  {{ number_format($dolar['USD']['promedio_real'], 2) }} "
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text- mr-auto cursor-pointer text-gray-200 hover:text-purple-500   "> Dolar Bcv:<br>
                            $1 USD = {{ number_format($dolar['USD']['promedio_real'], 2) }} .BsS
                            {{-- $dolar['USD']['promedio_real'] --}}</div>
                    </div>
                </div>
            </div>

            <div class="p-6">
                <div class="bg-gray-100  ">
                    <div class="max-w-md   bg-gray-900 shadow-lg rounded-xl p-6 ">
                        <div class="flex items-center px-4 py-3">
                            <img class="h-8 w-8 rounded-full" src="{{ Storage::url('image/euro_dolar.png') }}" />
                            <div class="ml-3 ">
                                <span class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500">Euro a
                                    dolar</span>
                                <span
                                    class="  mr-auto     hover:text-purple-500   text-white  text-xs block">{{ $dolar['_timestamp']['fecha'] }}
                                </span>
                            </div>
                        </div>

                        <img src="{{ Storage::url('image/euro_dolar.png') }}" />

                        <div class="flex items-center justify-between mx-4 mt-3 mb-2">
                            <div class="flex gap-5">
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z">
                                    </path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path clip-rule="evenodd"
                                        d="M47.5 46.1l-2.8-11c1.8-3.3 2.8-7.1 2.8-11.1C47.5 11 37 .5 24 .5S.5 11 .5 24 11 47.5 24 47.5c4 0 7.8-1 11.1-2.8l11 2.8c.8.2 1.6-.6 1.4-1.4zm-3-22.1c0 4-1 7-2.6 10-.2.4-.3.9-.2 1.4l2.1 8.4-8.3-2.1c-.5-.1-1-.1-1.4.2-1.8 1-5.2 2.6-10 2.6-11.4 0-20.6-9.2-20.6-20.5S12.7 3.5 24 3.5 44.5 12.7 44.5 24z"
                                        fill-rule="evenodd"></path>
                                </svg>
                                <svg fill="#111827" height="24" viewBox="0 0 48 48" width="24">
                                    <path
                                        d="M47.8 3.8c-.3-.5-.8-.8-1.3-.8h-45C.9 3.1.3 3.5.1 4S0 5.2.4 5.7l15.9 15.6 5.5 22.6c.1.6.6 1 1.2 1.1h.2c.5 0 1-.3 1.3-.7l23.2-39c.4-.4.4-1 .1-1.5zM5.2 6.1h35.5L18 18.7 5.2 6.1zm18.7 33.6l-4.4-18.4L42.4 8.6 23.9 39.7z">
                                    </path>
                                </svg>
                            </div>
                            <div class="flex " title="compartir">
                                <a href="https://wa.me/573132593212?text=Hola este es el cambio de Euro a Dolar: {{ $dolar['EURUSD']['rate'] }}   "
                                    target="_blank">
                                    <img fill="#fff" src="{{ Storage::url('image/share_was.png') }}"
                                        viewBox="0 0 48 48" width="60" height="60" alt="">

                                </a>

                            </div>
                        </div>
                        <div class="text-lg mr-auto cursor-pointer text-gray-200 hover:text-purple-500   ">Euro a
                            Dolar:<br>
                            {{ $dolar['EURUSD']['rate'] }} </div>
                        €1 = USD ${{ $dolar['EURUSD']['rate'] }}
                    </div>
                </div>
            </div>
        </div>

    @else
        <x-crypto-list>
        </x-crypto-list>
    @endif
 
    



    <div>








    </div>


</div>
<script src="//unpkg.com/alpinejs" defer></script>

</div>
