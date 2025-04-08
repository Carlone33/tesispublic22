<div>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="bg-indigo-500 text-white  col-start-1 col-span-3 text-center text-xl  mb-3  border-t border-b py-4">Exclusion por Registro Policial</h1>

                    <form wire:submit.prevent="submit" class="mt-5 mr-5 ml-5 mb-5">
                        <div class="grid grid-cols-3 gap-3">

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
                                <input type="text" wire:model="guia" class="w-full block mt-2">
                                @error('guia')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Nacionalidad
                                <select class="block mt-2 w-full" wire:model="nacionalidad">
                                    <option selected value="">Seleccione una opción...</option>
                                    <option value="V">Venezolano</option>
                                    <option value="E">Extranjero</option>
                                </select>
                                @error('nacionalidad')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Nº de Cédula
                                <input type="text" wire:model="cedula" class="w-full block mt-2">
                                @error('cedula')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Primer Nombre
                                <input type="text" wire:model="primernombre" class="w-full block mt-2">
                                @error('primernombre')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Segundo Nombre
                                <input type="text" wire:model="segundonombre" class="w-full block mt-2">
                                @error('segundonombre')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Primer Apellido
                                <input type="text" wire:model="primerapellido" class="w-full block mt-2">
                                @error('primerapellido')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Segundo Apellido
                                <input type="text" wire:model="segundoapellido" class="w-full block mt-2">
                                @error('segundoapellido')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Dirección Domiciliaria
                                <input type="text" wire:model="direccion_domicilio" class="w-full block mt-2">
                                @error('direccion_domicilio')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Teléfono Personal
                                <input type="text" wire:model="telefono_personal" class="w-full block mt-2">
                                @error('telefono_personal')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Dirección de Trabajo
                                <input type="text" wire:model="direccion_trabajo" class="w-full block mt-2">
                                @error('direccion_trabajo')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Teléfono de Trabajo
                                <input type="text" wire:model="telefono_trabajo" class="w-full block mt-2">
                                @error('telefono_trabajo')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Teléfono Local
                                <input type="text" wire:model="telefono_local" class="w-full block mt-2">
                                @error('telefono_local')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Dirección Dependencia
                                <input type="text" wire:model="direccion_dependencia" class="w-full block mt-2">
                                @error('direccion_dependencia')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Nº de Oficio
                                <input type="text" wire:model="numero_oficio" class="w-full block mt-2">
                                @error('numero_oficio')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Fecha Inicio
                                <input type="date" wire:model="fecha_inicio" class="w-full block mt-2">
                                @error('fecha_inicio')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Fecha Final
                                <input type="date" wire:model="fecha_final" class="w-full block mt-2">
                                @error('fecha_final')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label class="col-start-1">
                                <x-checkbox wire:click="toggleAssigned" /> Con Apoderado
                            </x-label>

                            @if ($showAssigned)
                                <h2 class="bg-indigo-500 text-white col-span-3 text-center text-xl mt-3 mb-3 border-t border-b py-4">Información del Apoderado</h2>

                                <x-label>
                                    Cédula
                                    <input type="text" wire:model="cedula_apoderado" class="w-full block mt-2">
                                    @error('cedula_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>

                                <x-label>
                                    Nombre
                                    <input type="text" wire:model="nombre_apoderado" class="w-full block mt-2">
                                    @error('nombre_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>

                                <x-label>
                                    Apellido
                                    <input type="text" wire:model="apellido_apoderado" class="w-full block mt-2">
                                    @error('apellido_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>

                                <x-label>
                                    Dirección Domiciliaria
                                    <input type="text" wire:model="direccion_apoderado" class="w-full block mt-2">
                                    @error('direccion_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>

                                <x-label>
                                    Teléfono Personal
                                    <input type="text" wire:model="telefono_apoderado" class="w-full block mt-2">
                                    @error('telefono_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>

                                <x-label>
                                    Dirección de Trabajo
                                    <input type="text" wire:model="direccion_trabajo_apoderado" class="w-full block mt-2">
                                    @error('direccion_trabajo_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>

                                <x-label>
                                    Teléfono de Trabajo
                                    <input type="text" wire:model="telefono_trabajo_apoderado" class="w-full block mt-2">
                                    @error('telefono_trabajo_apoderado')
                                        <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                    @enderror
                                </x-label>
                            @endif

                            <h2 class="bg-indigo-500 text-white col-span-3 text-center text-xl mt-3 mb-3 border-t border-b py-4">Información del Abogado</h2>

                            <x-label>
                                Nombre
                                <input type="text" wire:model="nombre_abogado" class="w-full block mt-2">
                                @error('nombre_abogado')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Apellido
                                <input type="text" wire:model="apellido_abogado" class="w-full block mt-2">
                                @error('apellido_abogado')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Cédula
                                <input type="text" wire:model="cedula_abogado" class="w-full block mt-2">
                                @error('cedula_abogado')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label>
                                Teléfono
                                <input type="text" wire:model="telefono_abogado" class="w-full block mt-2">
                                @error('telefono_abogado')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <x-label class="col-span-3">
                                Observación
                                <textarea wire:model="observacion" class="w-full block mt-2"></textarea>
                                @error('observacion')
                                    <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </x-label>

                            <button type="submit" class="w-full col-span-2 py-6 bg-indigo-500 text-xl text-white rounded-xl">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

