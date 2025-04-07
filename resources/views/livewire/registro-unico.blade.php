<div>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="bg-indigo-500 text-2xl text-white text-center">Exclusión por Registro Unico</h1>

                    <form wire:submit.prevent="FormatoyEnviar" class="mt-5 mr-5 ml-5 mb-5">
                        <div class="grid grid-cols-4 gap-4">
                            <label>
                                Nº de Guía
                                <input wire:model="guia" type="text" required class="block mt-2">
                                @error('guia')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                            @enderror
                            </label>
                            <label class="col-start-1">
                                Nacionalidad
                                <select class="block mt-2" required wire:model="nacionalidad">
                                <option selected value="">Seleccione una opción...</option>
                                <option value="V">Venezolano</option>
                                <option value="E">Extranjero</option>
                                </select><br>
                                @error('nacionalidad')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                                Nº de Cedula
                                <input wire:model="cedula" required type="text" class="block mt-2">
                                @error('cedula')
                                <span class="text-red-500 text-xs mt-3 block">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-1">
                                Primer Nombre
                                <input wire:model="primernombre" required type="text" class="block mt-2">
                                @error('primernombre')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-3">
                                Segundo Nombre
                                <input wire:model="segundonombre" required type="text" class="block mt-2">
                                @error('segundonombre')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-1">
                                Primer Apellido
                                <input wire:model="primerapellido" required type="text" class="block mt-2">
                                @error('primerapellido')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-3">
                                Segundo Apellido
                                <input wire:model="segundoapellido" required type="text" class="block mt-2">
                                @error('segundoapellido')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-1">
                                Dirección domicilial
                                <input wire:model="direccion" required type="text">
                                @error('direccion')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                            @enderror
                            </label>
                            <label class="col-start-3">
                                Teléfono
                                <input wire:model="telefono" required class="block mt-2" type="text">
                                @error('telefono')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-1">
                                Teléfono Local
                                <input wire:model="telefonolocal" required class="block mt-2" type="text">
                                @error('telefono_local')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-3">
                                Estado del ciudadano
                                <input wire:model="estado_ciudadano" required class="block mt-2" type="text">
                                @error('estado_ciudadano')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-1">
                                Dirección dependencia
                                <input wire:model="direccion_dependencia" required class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Delito
                                <input wire:model="delito"class="block mt-2" required type="text">
                                @error('delito')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-1">
                                Fecha inicio
                                <input wire:model="fecha_inicio" required class="block mt-2" type="date">
                                @error('fecha_inicio')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <label class="col-start-3">
                                Fecha final
                                <input wire:model="fecha_final" required class="block mt-2" type="date">
                                @error('fecha_final')
                                <span class="text-red-500 text-xs mt-3 block ">{{ $message }}</span>
                                @enderror
                            </label>
                            <h2 class="col-start-1 col-span-4 text-center text-xl mt-3 mb-3  border-t border-b py-4">Información del abogado</h2>
                            <label class="col-start-1">
                                Nombre
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Apellido
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Cedula
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Teléfono
                                <input class="block mt-2" type="text">
                            </label>


                            <button type="submit" class="col-start-2 col-span-2 py-6 bg-indigo-500 text-xl text-white rounded-xl">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
