<div>
    <div>
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <h1 class="bg-indigo-500 text-2xl text-white text-center">Exclusión por Registro Policial</h1>

                    <form class="mt-5 mr-5 ml-5 mb-5">
                        <div class="grid grid-cols-4 gap-4">
                            <label>
                                Nº de Guía
                                <input type="text" class="block mt-2">
                            </label>
                            <label class="col-start-1">
                                Nº de Cedula
                                <input type="text" class="block mt-2">
                            </label>
                            <label class="col-start-1">
                                Primer Nombre
                                <input type="text" class="block mt-2">
                            </label>
                            <label class="col-start-3">
                                Segundo Nombre
                                <input type="text" class="block mt-2">
                            </label>
                            <label class="col-start-1">
                                Primer Apellido
                                <input type="text" class="block mt-2">
                            </label>
                            <label class="col-start-3">
                                Segundo Apellido
                                <input type="text" class="block mt-2">
                            </label>
                            <label class="col-start-1">
                                Dirección domicilial
                                <input type="text">
                            </label>
                            <label class="col-start-3">
                                Teléfono
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Dirección de trabajo
                                <input type="text">
                            </label>
                            <label class="col-start-3">
                                Teléfono de trabajo
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Teléfono Local
                                <input class="block mt-2" type="text">
                            </label>
                            {{-- <label class="col-start-3">
                                Estado del ciudadano
                                <input class="block mt-2" type="text">
                            </label> --}}
                            <label class="col-start-1">
                                Dirección dependencia
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                N° de Oficio
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Fecha inicio
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Fecha final
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                            <x-checkbox wire:click="toggleAssigned" />Con apoderado
                            </label>
                            @if ($showAssigned)
                            <h2 class="col-start-1 col-span-4 text-center text-xl mt-3 mb-3  border-t border-b py-4">Información del apoderado</h2>
                            <label class="col-start-1">
                                Cedula
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Nombre
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Apellido
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Dirección domiciliario
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Telefono personal
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-1">
                                Dirección de trabajo
                                <input class="block mt-2" type="text">
                            </label>
                            <label class="col-start-3">
                                Telefono de trabajo
                                <input class="block mt-2" type="text">
                            </label>
                            @endif
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
                            <label class="col-start-1">
                                Observación
                            </label>
                            <input class="block mt-2 col-span-4 py-5" type="text">
                            <a class="col-start-3"></a>

                            <button class="col-start-2 col-span-2 py-6 bg-indigo-500 text-xl text-white rounded-xl">Enviar</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

