<div>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1
                        class="bg-indigo-500 text-white  col-start-1 col-span-4 text-center text-xl  mb-3  border-t border-b py-4">
                        Exclusion por Solicitud Administrativa</h1>

                    <form wire:submit.prevent="FormatoyEnviar" class="mt-5 mr-5 ml-5 mb-5">
                        <div class=" grid grid-cols-3 gap-4">
                            <x-label>
                                @if ($foto)
                                    <img class="rounded-full mx-auto w-40 h-40" src="{{ asset('storage/' . $foto->store('fotos', 'public')) }}">
                                @else
                                    <img class="rounded-full mx-auto w-40 h-40" src="{{ asset('images/default-avatar.png') }}">
                                @endif
                                <input type="file" wire:model="foto" class="block mt-2 w-full">
                                @error('foto')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Nº de Guía
                                <input wire:model="guia" type="text" required class="block mt-2 w-full">
                                @error('guia')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Nacionalidad
                                <select class="block mt-2 w-full" required wire:model="nacionalidad">
                                    <option selected value="">Seleccione una opción...</option>
                                    <option value="V">Venezolano</option>
                                    <option value="E">Extranjero</option>
                                </select>
                                @error('nacionalidad')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Nº de Cedula
                                <input wire:model="cedula" required type="text" class="block mt-2 w-full">
                                @error('cedula')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Primer Nombre
                                <input wire:model="primernombre" required type="text" class="block mt-2 w-full">
                                @error('primernombre')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Segundo Nombre
                                <input wire:model="segundonombre" required type="text" class="block mt-2 w-full">
                                @error('segundonombre')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Primer Apellido
                                <input wire:model="primerapellido" required type="text" class="block mt-2 w-full">
                                @error('primerapellido')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Segundo Apellido
                                <input wire:model="segundoapellido" required type="text" class="block mt-2 w-full">
                                @error('segundoapellido')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Dirección domicilial
                                <input wire:model="direccion" required type="text" class="block mt-2 w-full">
                                @error('direccion')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Teléfono
                                <input wire:model="telefono" class="block mt-2 w-full" required type="text">
                                @error('telefono')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Teléfono Local
                                <input wire:model="telefonolocal" required class="block mt-2 w-full" type="text">
                                @error('telefono_local')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Estado del ciudadano
                                <input wire:model="estado_ciudadano" required class="block mt-2 w-full" type="text">
                                @error('estado_ciudadano')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Dirección dependencia
                                <input wire:model="direccion_dependencia" required class="block mt-2 w-full"
                                    type="text">
                            </x-label>

                            <x-label>
                                Delito
                                <input wire:model="delito"class="block mt-2 w-full" required type="text">
                                @error('delito')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Fecha inicio
                                <input wire:model="fecha_inicio" required class="block mt-2 w-full" type="date">
                                @error('fecha_inicio')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Fecha final
                                <input wire:model="fecha_final" required class="block mt-2 w-full" type="date">
                                @error('fecha_final')
                                    <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <h2
                                class="bg-indigo-500 text-white col-span-3 text-center text-xl mt-3 mb-3 border-t border-b py-4">
                                Información del abogado
                            </h2>

                            <x-label>
                                Nombre
                                <input wire:model="nombre_abogado" class="block mt-2 w-full" type="text">
                            </x-label>

                            <x-label>
                                Apellido
                                <input wire:model="apellido_abogado" class="block mt-2 w-full" type="text">
                            </x-label>

                            <x-label>
                                Cedula
                                <input wire:model="cedula_abogado" class="block mt-2 w-full" type="text">
                            </x-label>

                            <x-label>
                                Teléfono
                                <input wire:model="telefono_abogado" class="block mt-2 w-full" type="text">
                            </x-label>


                            <button type="submit"
                                class="col-span-3 py-6 bg-indigo-500 hover:bg-indigo-900 text-xl text-white rounded-xl">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
