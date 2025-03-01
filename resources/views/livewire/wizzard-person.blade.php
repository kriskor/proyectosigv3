<div>
    {{-- @include('layout.partials.errors') --}}
    @include('layout.partials.flashMessage')
    @if ($step == 1)
        <div class="py-1 sm:py-1 mt-5">
            <div class="flex justify-center">
                <button type="button" class="w-10 h-10 rounded-full btn btn-primary mx-2">1</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">2</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">3</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">4</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">5</button>
            </div>
            <div class="px-5 mt-10">
                <div class="font-medium text-center text-lg">COMPLETA TUS DATOS PERSONALES</div>
            </div>
            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        <span style="font-size: 2em; color: #C5CAE9;">
                            <i class="fas fa-address-card"></i>
                        </span>
                       Datos complementarios
                    </h2>

                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Download Excel </button> --}}
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">CI</label>
                            <input wire:model="ci" type="text" class="form-control" placeholder="">
                            @error('ci') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">Expedido</label>
                            <select wire:model="expedido" class="form-select">
                                <option value="">Seleccione un opcion</option>
                                <option>CH</option>
                                <option>LP</option>
                                <option>CB</option>
                                <option>OR</option>
                                <option>PT</option>
                                <option>TJ</option>
                                <option>SC</option>
                                <option>BE</option>
                                <option>PD</option>
                            </select>
                            @error('expedido') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label>Genero</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input wire:model="genero" class="form-check-input" type="radio" name="masculino"
                                        value="H">
                                    <label class="form-check-label">Masculino</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input wire:model="genero" class="form-check-input" type="radio" name="femenino"
                                        value="M">
                                    <label class="form-check-label">Femenino</label>
                                </div>
                            </div>
                            @error('genero') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>


                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input wire:model="nacimiento" class="form-control block mx-auto" type="date">
                            @error('nacimiento') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">Edad</label>
                            <input wire:model="edad" type="text" class="form-control" placeholder="" disabled>
                            @error('edad') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">Departamento</label>
                            <select wire:model="departamento" class="form-select">
                                <option value="">Seleccione un opcion</option>
                                @foreach ($departments as $department)
                                    <option value="{{ $department->id }}">{{ $department->nombre }}</option>
                                @endforeach
                            </select>
                            @error('departamento') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Direccion</label>
                            <input wire:model="direccion" type="text" class="form-control" placeholder="">
                            @error('direccion') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">Estado Civil</label>
                            <select wire:model='estadoCivil' class="form-select">
                                <option value="">Seleccione un opcion</option>
                                <option>SOLTERO</option>
                                <option>CASADO</option>
                                <option>VIUDO</option>
                                <option>DIVORCIADO</option>
                            </select>
                            @error('estadoCivil') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-3">
                            <label class="form-label">Teléfono / Celular</label>
                            <input wire:model="telefonoPersona" type="text" class="form-control" placeholder="">
                            @error('telefonoPersona') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        @if($genero)
                        <div class="col-span-12 sm:col-span-3">
                            <label>Es {{$genero==='H'?'Padre?':'Madre?'}}</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input wire:model='hijos' class="form-check-input" type="radio" name="genero_Si"
                                        value="1">
                                    <label class="form-check-label">Si</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input wire:model='hijos' class="form-check-input" type="radio" name="genero_No"
                                        value="0">
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                            @error('hijos') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        @endif

                        <div class="col-span-12 sm:col-span-3">
                        </div>


                        <div class="col-span-12 sm:col-span-6">
                            <label>Presenta alguna Discapacidad?</label>
                            <div class="flex flex-col sm:flex-row mt-2">
                                <div class="form-check mr-2">
                                    <input wire:model='discapacidad' class="form-check-input" type="radio"
                                        name="discapacidadSi" value="1">
                                    <label class="form-check-label">Si</label>
                                </div>
                                <div class="form-check mr-2 mt-2 sm:mt-0">
                                    <input wire:model='discapacidad' class="form-check-input" type="radio"
                                        name="discapacidadNo" value="0">
                                    <label class="form-check-label">No</label>
                                </div>
                            </div>
                            @error('discapacidad') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        @if ($discapacidad)
                            {{-- <form class="col-span-12 gap-2 sm:col-span-12 flex items-center"
                                wire:submit.prevent="updateDiscapacidad" enctype="multipart/form-data"> --}}
                                <div class="col-span-12 sm:col-span-3">
                                    <label for="input-wizard-3" class="form-label">Cual?</label>
                                    <select wire:model="tipoDiscapacidad" class="form-select">
                                        <option value="">Seleccione un opcion</option>
                                        <option>FÍSICO</option>
                                        <option>MOTORA</option>
                                        <option>INTELECTUAL</option>
                                        <option>AUDITIVA</option>
                                        <option>VISUAL</option>
                                        <option>MENTAL/PSÍQUICA</option>
                                        <option>MÚLTIPLE</option>
                                    </select>
                                </div>
                                <div class="col-span-12 sm:col-span-3">
                                    <label for="input-wizard-3" class="form-label">Certificado de Discapacidad</label>
                                    <input wire:model='archivod' type="file" class="form-control" placeholder="22">
                                </div>
                                {{-- <div class="col-span-12 sm:col-span-3 pt-6">
                                    <button type="submit" class="btn btn-secondary">Guardar</button>
                                </div> --}}
                            {{-- </form> --}}
                        @endif
                        {{-- <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                            <button wire:click="updatePerson" class="btn btn-primary w-24 ml-2">Siguiente</button>
                        </div> --}}
                    </div>
                </div>
            </div>


            {{-- <div class="box px-5 sm:px-20 mt-10 pt-10 border-t border-gray-200 dark:border-dark-5">
                <div class="font-medium text-base">Datos complementarios</div>
                <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">CI</label>
                        <input wire:model="ci" type="text" class="form-control" placeholder="">
                        @error('ci') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">Expedido</label>
                        <select wire:model="expedido" class="form-select">
                            <option value="">Seleccione un opcion</option>
                            <option>CH</option>
                            <option>LP</option>
                            <option>CB</option>
                            <option>OR</option>
                            <option>PT</option>
                            <option>TJ</option>
                            <option>SC</option>
                            <option>BE</option>
                            <option>PD</option>
                        </select>
                        @error('expedido') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label>Genero</label>
                        <div class="flex flex-col sm:flex-row mt-2">
                            <div class="form-check mr-2">
                                <input wire:model="genero" class="form-check-input" type="radio" name="masculino"
                                    value="H">
                                <label class="form-check-label">Masculino</label>
                            </div>
                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                <input wire:model="genero" class="form-check-input" type="radio" name="femenino"
                                    value="M">
                                <label class="form-check-label">Femenino</label>
                            </div>
                        </div>
                        @error('genero') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>


                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">Fecha de Nacimiento</label>
                        <input wire:model="nacimiento" class="form-control block mx-auto" type="date">
                        @error('nacimiento') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">Edad</label>
                        <input wire:model="edad" type="text" class="form-control" placeholder="" disabled>
                        @error('edad') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>

                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">Departamento</label>
                        <select wire:model="departamento" class="form-select">
                            <option value="">Seleccione un opcion</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->nombre }}</option>
                            @endforeach
                        </select>
                        @error('departamento') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-6">
                        <label class="form-label">Direccion</label>
                        <input wire:model="direccion" type="text" class="form-control" placeholder="">
                        @error('direccion') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">Estado Civil</label>
                        <select wire:model='estadoCivil' class="form-select">
                            <option value="">Seleccione un opcion</option>
                            <option>SOLTERO</option>
                            <option>CASADO</option>
                            <option>VIUDO</option>
                            <option>DIVORCIADO</option>
                        </select>
                        @error('estadoCivil') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    <div class="col-span-12 sm:col-span-3">
                        <label class="form-label">Teléfono / Celular</label>
                        <input wire:model="telefonoPersona" type="text" class="form-control" placeholder="">
                        @error('telefonoPersona') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    @if($genero)
                    <div class="col-span-12 sm:col-span-3">
                        <label>Es {{$genero==='H'?'Padre?':'Madre?'}}</label>
                        <div class="flex flex-col sm:flex-row mt-2">
                            <div class="form-check mr-2">
                                <input wire:model='hijos' class="form-check-input" type="radio" name="genero_Si"
                                    value="1">
                                <label class="form-check-label">Si</label>
                            </div>
                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                <input wire:model='hijos' class="form-check-input" type="radio" name="genero_No"
                                    value="0">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                        @error('hijos') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    @endif

                    <div class="col-span-12 sm:col-span-3">
                    </div>


                    <div class="col-span-12 sm:col-span-6">
                        <label>Presenta alguna Discapacidad?</label>
                        <div class="flex flex-col sm:flex-row mt-2">
                            <div class="form-check mr-2">
                                <input wire:model='discapacidad' class="form-check-input" type="radio"
                                    name="discapacidadSi" value="1">
                                <label class="form-check-label">Si</label>
                            </div>
                            <div class="form-check mr-2 mt-2 sm:mt-0">
                                <input wire:model='discapacidad' class="form-check-input" type="radio"
                                    name="discapacidadNo" value="0">
                                <label class="form-check-label">No</label>
                            </div>
                        </div>
                        @error('discapacidad') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                    </div>
                    @if ($discapacidad)
                        <form class="col-span-12 gap-2 sm:col-span-12 flex items-center"
                            wire:submit.prevent="updateDiscapacidad" enctype="multipart/form-data">
                            <div class="col-span-12 sm:col-span-3">
                                <label for="input-wizard-3" class="form-label">Cual?</label>
                                <select wire:model="tipoDiscapacidad" class="form-select">
                                    <option value="">Seleccione un opcion</option>
                                    <option>Físico</option>
                                    <option>Motora</option>
                                    <option>Intelectual</option>
                                    <option>Auditiva</option>
                                    <option>Visual</option>
                                    <option>Mental/psíquica</option>
                                    <option>Múltiple</option>
                                </select>
                            </div>
                            <div class="col-span-12 sm:col-span-3">
                                <label for="input-wizard-3" class="form-label">Certificado de Discapacidad</label>
                                <input wire:model='archivod' type="file" class="form-control" placeholder="22">
                            </div>
                            <div class="col-span-12 sm:col-span-3 pt-6">
                                <button type="submit" class="btn btn-secondary">Guardar</button>
                            </div>
                        </form>
                    @endif
                    <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                        <button wire:click="updatePerson" class="btn btn-primary w-24 ml-2">Siguiente</button>
                    </div>
                </div>
            </div> --}}
            <br>
            @if ($hijos == 1)

            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        <span style="font-size: 2em; color: #C5CAE9;">
                            <i class="fas fa-user-friends"></i>
                        </span>
                        Registro de Hijo(a)

                    </h2>
                    <button type="button" class="btn btn-primary btn-sm"  wire:click="showHijo()">  <i class="fa fa-plus w-4 h-4 mr-2 "></i>  Adicionar </button>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-file w-4 h-4 mr-2"><path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z"></path><polyline points="13 2 13 9 20 9"></polyline></svg> Download Excel </button> --}}
                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">
                        <table class="table col-span-12 sm:col-span-12">
                            <thead>
                                <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap">Nombre hijo(a)</th>
                                    <th class="whitespace-nowrap">Fecha de Nacimiento</th>
                                    <th class="whitespace-nowrap">Certificado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($decendants as $index => $decendant)
                                    <tr>
                                        <td class="border-b dark:border-dark-5">{{ $index+1 }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $decendant->nombre }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $decendant->nacimiento }}
                                        </td>
                                        <td class="border-b dark:border-dark-5">
                                                <button type="button" wire:click="setArchivo({{$decendant->id}})"  class="btn btn-secondary" > <i class="fa fa-file-alt "></i></button>

                                        </td>
                                        <td>
                                            <button type="button" wire:click="deleteHijo({{$decendant->id}})" class="btn btn-danger btn-sm" >
                                                    <i  class="fa fa-trash" ></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
                </div>
            </div>
            <br>
            @endif

            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        <span style="font-size: 2em; color: #C5CAE9;">
                            <i class="fas fa-people-carry"></i>
                        </span>
                        Dificultad Laboral
                    </h2>
                    <button type="button" class="btn btn-primary btn-sm"  wire:click="showDificultad()">  <i class="fa fa-plus   w-4 h-4 mr-2"></i>  Adicionar </button>

                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">

                        {{-- <div class="col-span-12 sm:col-span-4">
                            <label class="form-label">Dificultad para conseguir
                                trabajo</label>
                            <select wire:model="problema" class="form-select">
                                <option value="">Seleccione un opcion</option>
                                @foreach ($problems as $problem)
                                    <option value="{{ $problem->id }}">{{ $problem->nombre }}</option>
                                @endforeach
                            </select>
                            @error('problema') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-4">
                            <label class="form-label">Detalle</label>
                            <input wire:model='detalle' type="text" class="form-control"
                                placeholder="Detalle de la dificultad">
                            @error('problema') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-4 pt-6">
                            <button wire:click='saveDifficulty' class="btn btn-secondary">Añadir</button>
                        </div> --}}

                        <table class="table col-span-12 sm:col-span-12">
                            <thead>
                                <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap">Dificultad</th>
                                    <th class="whitespace-nowrap">Detalle</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($difficulties as $index => $difficulty)
                                    <tr>
                                        <td class="border-b dark:border-dark-5">{{ $index+1 }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $difficulty->problem->nombre }}
                                        </td>
                                        <td class="border-b dark:border-dark-5">{{ $difficulty->detalle }}</td>
                                        <td>
                                            <button wire:click="deleteDifficulty({{$difficulty->id}})" class="btn btn-danger btn-sm" >
                                                <i  class="fa fa-trash" ></i>
                                           </button>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="ubtri col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button wire:click="updatePerson" class="btn btn-primary w-24 ml-2">Siguiente</button>
            </div>

        </div>
    @endif
    @if ($step == 2)
        <div class=" py-10 sm:py-20 mt-5">
            <div class="flex justify-center">
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">1</button>
                <button type="button" class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">2</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">3</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">4</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">5</button>
            </div>
            <div class="px-5 mt-10">
                <div class="font-medium text-center text-lg">DATOS DE REFERENCIA PERSONAL</div>
            </div>

            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        <span style="font-size: 2em; color: #C5CAE9;">
                            <i class="fas fa-address-book"></i>
                        </span>
                        Persona de Contacto
                    </h2>
                    <button type="button" class="btn btn-primary btn-sm"  wire:click="showContacto()">  <i class="fa fa-plus   w-4 h-4 mr-2"></i>  Adicionar </button>

                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">


                        <table class="table col-span-12 sm:col-span-12">
                            <thead>
                                <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap">Nombre Completo</th>
                                    <th class="whitespace-nowrap">Teléfono / Celular</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($personContacts as $index => $personContact)
                                    <tr>
                                        <td class="border-b dark:border-dark-5">{{ $index+1 }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $personContact->nombre }} {{ $personContact->paterno }} {{ $personContact->materno }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $personContact->telefono }}</td>
                                        <td>
                                            <button type="button" wire:click="deleteContacto({{$personContact->id}})" class="btn btn-danger btn-sm" >
                                                <i  class="fa fa-trash" ></i>
                                           </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button type="button" wire:click="step1" class="btn btn-dark w-24">Atras</button>
                <button type="button" wire:click="updateStep3" class="btn btn-primary w-24 ml-2">Siguiente</button>
            </div>


        </div>
    @endif
    @if ($step == 3)

            <div class=" py-10 sm:py-20 mt-5">
                <div class="flex justify-center">
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">1</button>
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">2</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">3</button>
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">4</button>
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">5</button>
                </div>
                <div class="px-5 mt-10">
                    <div class="font-medium text-center text-lg">FORMACION PROFESIONAL</div>
                    {{-- <div class="font-medium text-center text-lg">Especifique su Formación</div> --}}
                </div>

                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            <span style="font-size: 2em; color: #C5CAE9;">
                                <i class="fas fa-user-graduate"></i>
                            </span>
                            Información de Formación Profesional
                        </h2>
                        <button type="button" class="btn btn-primary btn-sm"  wire:click="showFormacion()">  <i class="fa fa-plus   w-4 h-4 mr-2"></i>  Adicionar </button>

                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">


                            <table class="table col-span-12 sm:col-span-12">
                                <thead>
                                    <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">Institución Educativa</th>
                                        <th class="whitespace-nowrap">Carrera</th>
                                        <th class="whitespace-nowrap">Grado Académico</th>
                                        <th class="whitespace-nowrap">Fecha de Egreso</th>
                                        <th class="whitespace-nowrap">Titulo / Certificado Académico</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($studies as $study)
                                        <tr>
                                            <td class="border-b dark:border-dark-5">{{ $study->id }}</td>
                                            <td class="border-b dark:border-dark-5">
                                                {{ $study->institution }}</td>
                                            <td class="border-b dark:border-dark-5">{{ $study->career->nombre }}
                                            </td>
                                            <td class="border-b dark:border-dark-5">{{ $study->grado_academico }}
                                            </td>
                                            <td class="border-b dark:border-dark-5">{{ $study->egreso }}</td>
                                            <td class="border-b dark:border-dark-5">
                                                <button  type="button" wire:click="setArchivoFormacion({{$study->id}})"  class="btn btn-secondary " > <i class="fa fa-file-alt "></i></button>

                                            </td>
                                            <td>
                                                <button type="button" wire:click="deleteFormacion({{$study->id}})" class="btn btn-danger btn-sm" >
                                                    <i  class="fa fa-trash" ></i>
                                               </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>

                <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button type="button" wire:click='step2' class="btn btn-dark w-24">Atras</button>
                    <button type="button" wire:click='updateStep4'
                        class="btn btn-primary w-24 ml-2">Siguiente</button>
                </div>


            </div>

    @endif
    @if ($step == 4)
        <div class=" py-10 sm:py-20 mt-5">
            <div class="flex justify-center">
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">1</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">2</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">3</button>
                <button type="button" class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">4</button>
                <button type="button"
                    class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">5</button>
            </div>
            <div class="px-5 mt-10">
                <div class="font-medium text-center text-lg">EXPERIENCIA LABORAL</div>
            </div>

            <div class="intro-y box col-span-12 lg:col-span-6">
                <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                    <h2 class="font-medium text-base mr-auto">
                        <span style="font-size: 2em; color: #C5CAE9;">
                            <i class="fas fa-briefcase"></i>
                        </span>
                        Información de Experiencia Laboral
                    </h2>
                    <button type="button" class="btn btn-primary btn-sm"  wire:click="showExperiencia()">  <i class="fa fa-plus   w-4 h-4 mr-2"></i>  Adicionar </button>

                </div>
                <div class="p-5">
                    <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">


                        <table class="table col-span-12 sm:col-span-12">
                            <thead>
                                <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                    <th class="whitespace-nowrap">#</th>
                                    <th class="whitespace-nowrap">Institución</th>
                                    <th class="whitespace-nowrap">Cargo</th>
                                    <th class="whitespace-nowrap">Inicio</th>
                                    <th class="whitespace-nowrap">Fin</th>
                                    <th class="whitespace-nowrap">certificado</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($experiences as $index => $experience)
                                    <tr>
                                        <td class="border-b dark:border-dark-5">{{ $index+1 }}</td>
                                        <td class="border-b dark:border-dark-5">
                                            {{ $experience->institution }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $experience->cargo }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $experience->fecha_inicio }}</td>
                                        <td class="border-b dark:border-dark-5">{{ $experience->fecha_fin }}</td>
                                        <td class="border-b dark:border-dark-5">

                                            <button  type="button" wire:click="setArchivoExperiencia({{$experience->id}})"  class="btn btn-secondary " > <i class="fa fa-file-alt "></i></button>
                                        </td>
                                        <td>
                                            <button type="button"  wire:click="deleteExperiencia({{$experience->id}})" class="btn btn-danger btn-sm" >
                                                <i  class="fa fa-trash" ></i>
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                <tr>
                                    <td colspan="5">
                                        <strong>Total Años: {{$totalyears}}</strong>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>

            <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                <button wire:click='step3' class="btn btn-dark w-24">Atras</button>
                <button wire:click="updateStep5" class="btn btn-primary w-24 ml-2">Siguiente</button>
            </div>


        </div>


    @endif
    @if ($step == 5)

            <div class=" py-10 sm:py-20 mt-5">
                <div class="flex justify-center">
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">1</button>
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">2</button>
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">3</button>
                    <button type="button"
                        class="w-10 h-10 rounded-full btn bg-gray-200 dark:bg-dark-1 text-gray-600 mx-2">4</button>
                    <button type="button" class="intro-y w-10 h-10 rounded-full btn btn-primary mx-2">5</button>
                </div>
                <div class="px-5 mt-10">
                    <div class="font-medium text-center text-lg">DATOS DE REFERENCIA LABORAL</div>
                </div>

                <div class="intro-y box col-span-12 lg:col-span-6">
                    <div class="flex items-center px-5 py-5 sm:py-3 border-b border-gray-200 dark:border-dark-5">
                        <h2 class="font-medium text-base mr-auto">
                            <span style="font-size: 2em; color: #C5CAE9;">
                                <i class="fas fa-building"></i>
                            </span>
                            Información de Referencia Laboral
                        </h2>
                        <button type="button" class="btn btn-primary btn-sm"  wire:click="showReferencia()">  <i class="fa fa-plus   w-4 h-4 mr-2"></i>  Adicionar </button>

                    </div>
                    <div class="p-5">
                        <div class="grid grid-cols-12 gap-4 gap-y-5 mt-5">


                            <table class="table col-span-12 sm:col-span-12">
                                <thead>
                                    <tr class="bg-gray-700 dark:bg-dark-1 text-white">
                                        <th class="whitespace-nowrap">#</th>
                                        <th class="whitespace-nowrap">Institucion</th>
                                        <th class="whitespace-nowrap">Nombres</th>
                                        <th class="whitespace-nowrap">Apellido Paterno</th>
                                        <th class="whitespace-nowrap">Apellido Materno</th>
                                        <th class="whitespace-nowrap">Teléfono / Celular</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr>
                                            <td class="border-b dark:border-dark-5">{{ $contact->id }}</td>
                                            <td class="border-b dark:border-dark-5">
                                                {{ $contact->institution }}</td>
                                            <td class="border-b dark:border-dark-5">{{ $contact->nombre }}</td>
                                            <td class="border-b dark:border-dark-5">{{ $contact->paterno }}</td>
                                            <td class="border-b dark:border-dark-5">{{ $contact->materno }}</td>
                                            <td class="border-b dark:border-dark-5">{{ $contact->telefono }}</td>
                                            <td>
                                                <button type="button" wire:click="deleteContact({{$contact->id}})" class="btn btn-danger btn-sm" >
                                                    <i  class="fa fa-trash" ></i>
                                                </button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <div class="col-span-12 flex items-center justify-center sm:justify-end mt-5">
                    <button type="button" wire:click="step4" class="btn btn-dark w-24">Atras</button>
                    <a href="{{ route('page.dashboard') }}" class="btn btn-primary w-24 ml-2">Finalizar</a>
                </div>


            </div>

    @endif

<!-- BEGIN: Modal Content  check event listener-->

<div id="preview-modal" class="modal overflow-y-auto {{$dialog?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  style="height: 500px;">
                <div class=" text-right"> <button type="button" wire:click="closeModal()" class="btn btn-default  "> <i class="fa fa-times"></i> </button> </div>
                {{-- <button  type="button" class=" w-8 h-8"  wire::click="closeModal()"> <i  class="fa fa-times"></i> </button> --}}
                <div class="modal-body p-0">
                    {{-- {{$urlfile}} --}}
                    <iframe src="{{$urlfile}}" frameborder="0" class="w-full" style="height: 500px;" >
                    </iframe>
                </div>
            </div>

    </div>
</div>

<!-- END: Modal Content -->

<!-- BEGIN: Modal Content  check event listener-->

<div id="hijo-modal" class="modal overflow-y-auto {{$dialog_hijo?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  >
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Registro de Hijo(a)</h2>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button> --}}
                    <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2"> <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                        </div>
                    </div>
                </div> <!-- END: Modal Header -->
                <div class="modal-body ">
                    <div class="grid grid-cols-12 gap-4 items-center col-span-12 sm:col-span-12">
                        <div class="col-span-12 sm:col-span-4">
                            <label class="form-label">Nombre del hijo(a)</label>
                            <input wire:model="nombreHijo" type="text" class="form-control" placeholder="jose">
                            @error('nombreHijo') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-4">
                            <label class="form-label">Fecha de Nacimiento</label>
                            <input wire:model="nacimientoHijo" class="form-control block mx-auto" type="date">
                            @error('nacimientoHijo') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-4">
                            <label class="form-label">Certificado de Nacimiento</label>
                            <input wire:model='archivoHijo' type="file" accept=".jpg, .bmp, .png, .pdf" class="form-control" placeholder="22">
                            @error('archivoHijo') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        {{-- <div class="col-span-12 sm:col-span-3 pt-6">
                            <button wire:click='saveHijo' class="btn btn-secondary">Guardar</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer text-right"> <button type="button" wire:click="closeHijo" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button> <button wire:click='saveHijo' type="button" class="btn btn-primary w-20">Guardar</button> </div> <!-- END: Modal Footer -->
            </div>

    </div>
</div>

<!-- END: Modal Content -->

<!-- BEGIN: Modal Content  check event listener-->

<div id="dificultad-modal" class="modal overflow-y-auto {{$dialog_dificultad?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  >
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Dificultad Laboral</h2>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button> --}}
                    <div class="dropdown sm:hidden"> <a class="dropdown-toggle w-5 h-5 block" href="javascript:;" aria-expanded="false"> <i data-feather="more-horizontal" class="w-5 h-5 text-gray-600 dark:text-gray-600"></i> </a>
                        <div class="dropdown-menu w-40">
                            <div class="dropdown-menu__content box dark:bg-dark-1 p-2"> <a href="javascript:;" class="flex items-center p-2 transition duration-300 ease-in-out bg-white dark:bg-dark-1 hover:bg-gray-200 dark:hover:bg-dark-2 rounded-md"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </a> </div>
                        </div>
                    </div>
                </div> <!-- END: Modal Header -->
                <div class="modal-body ">
                    <div class="grid grid-cols-12 gap-4 items-center col-span-12 sm:col-span-12">
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Dificultad para conseguir
                                trabajo</label>
                            <select wire:model="problema" class="form-select">
                                <option value="">Seleccione un opcion</option>
                                @foreach ($problems as $problem)
                                    <option value="{{ $problem->id }}">{{ $problem->nombre }}</option>
                                @endforeach
                            </select>
                            @error('problema') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Detalle</label>
                            <input wire:model='detalle' type="text" class="form-control"
                                placeholder="Detalle de la dificultad">
                            @error('problema') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        {{-- <div class="col-span-12 sm:col-span-3 pt-6">
                            <button wire:click='saveHijo' class="btn btn-secondary">Guardar</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer text-right"> <button type="button" wire:click="closeDificultad" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button> <button wire:click='saveDifficulty' type="button" class="btn btn-primary w-20">Guardar</button> </div> <!-- END: Modal Footer -->
            </div>

    </div>
</div>

<!-- END: Modal Content -->

<!-- BEGIN: Modal Content  check event listener-->

<div id="contact-modal" class="modal overflow-y-auto {{$dialog_contacto?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  >
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Nuevo Contacto</h2>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button> --}}

                </div> <!-- END: Modal Header -->
                <div class="modal-body ">
                    <div class="grid grid-cols-12 gap-4 items-center col-span-12 sm:col-span-12">
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Nombres</label>
                            <input wire:model='nombreContacto' type="text" class="form-control" placeholder="Jorge">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Apellido Paterno</label>
                            <input wire:model='paternoContacto' type="text" class="form-control" placeholder="Perez">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Apellido Materno</label>
                            <input wire:model='maternoContacto' type="text" class="form-control" placeholder="Perez">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Teléfono / Celular</label>
                            <input wire:model='telefonoContacto' type="text" class="form-control" placeholder="73087144">
                        </div>
                        {{-- <div class="col-span-12 sm:col-span-3 pt-6">
                            <button wire:click='contactoPersonal' class="btn btn-secondary">Añadir</button>
                        </div> --}}
                        {{-- <div class="col-span-12 sm:col-span-3 pt-6">
                            <button wire:click='saveHijo' class="btn btn-secondary">Guardar</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer text-right"> <button type="button" wire:click="closeContacto" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button> <button wire:click='contactoPersonal' type="button" class="btn btn-primary w-20">Guardar</button> </div> <!-- END: Modal Footer -->
            </div>

    </div>
</div>

<!-- END: Modal Content -->

<!-- BEGIN: Modal Content  check event listener-->

<div id="formacion-modal" class="modal overflow-y-auto {{$dialog_formacion?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  >
                <form wire:submit.prevent="formacion" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Registro de Formacion Laboral</h2>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button> --}}

                </div> <!-- END: Modal Header -->
                <div class="modal-body ">
                    <div class="grid grid-cols-12 gap-4 items-center col-span-12 sm:col-span-12">
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Institución</label>
                            <input wire:model='institutionFormacion' type="text" class="form-control"
                                placeholder="Univalle">
                            @error('institutionFormacion') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Carrera</label>
                            <select wire:model="carrera" class="form-select">
                                <option value="">Seleccione un opcion</option>
                                @foreach ($careers as $career)
                                    <option value="{{ $career->id }}">{{ $career->nombre }}</option>
                                @endforeach
                            </select>
                            @error('carrera') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Grado Académico</label>
                            <select wire:model='gradoFormacion' class="form-select">
                                <option value="">Seleccione un opcion</option>
                                <option>TÉCNICO</option>
                                <option>LICENCIATURA</option>
                                <option>POSGRADO</option>
                            </select>
                            @error('gradoFormacion') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Fecha de Titulación / Egreso</label>
                            <input wire:model='egresoFormacion' class="form-control block mx-auto" type="date">
                            @error('egresoFormacion') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Titulo / Certificado Académico</label>
                            <input wire:model='archivoFormacion' type="file" class="form-control" id="uploadformacion{{$filecounter}}">
                            @error('archivoFormacion') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>
                        {{-- <div class="col-span-12 sm:col-span-3 pt-6">
                            <button type="submit" class="btn btn-secondary">Añadir</button>
                        </div> --}}
                    </div>
                </div>
                <div class="modal-footer text-right"> <button type="button" wire:click="closeFormacion" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button> <button  type="submit" class="btn btn-primary w-20">Guardar</button> </div> <!-- END: Modal Footer -->
                </form>
            </div>

    </div>
</div>

<!-- END: Modal Content -->

<!-- BEGIN: Modal Content  check event listener-->

<div id="experiencia-modal" class="modal overflow-y-auto {{$dialog_experiencia?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  >
                <form wire:submit.prevent="experiencia" enctype="multipart/form-data">
                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Registro de Experiencia Laboral</h2>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button> --}}

                </div> <!-- END: Modal Header -->
                <div class="modal-body ">
                    <div class="grid grid-cols-12 gap-4 items-center col-span-12 sm:col-span-12">
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Institución</label>
                            <input wire:model='institutionLaboral' type="text" class="form-control"
                                placeholder="EPSAS">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Cargo</label>
                            <input wire:model='cargoLaboral' type="text" class="form-control" placeholder="Analista">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Fecha de Inicio</label>
                            <input wire:model="fecha_inicio" class="form-control block mx-auto" type="date">
                             @error('fecha_inicio') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">

                            <label class="form-label">Fecha Fin</label>
                            <input wire:model="fecha_fin" class="form-control block mx-auto" type="date">
                             @error('fecha_fin') <small class="intro-x sm:ml-auto mt-1 sm:mt-0 text-theme-6 block ">{{ $message }}</small> @enderror
                        </div>

                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Certificado de trabajo</label>
                            <input wire:model='archivoLaboral' type="file" class="form-control" placeholder="22" id="uploadExperiencia{{$filecounter}}">
                        </div>


                    </div>
                </div>
                <div class="modal-footer text-right"> <button type="button" wire:click="closeExperiencia" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button> <button  type="submit" class="btn btn-primary w-20">Guardar</button> </div> <!-- END: Modal Footer -->
                </form>
            </div>

    </div>
</div>

<!-- END: Modal Content -->

<!-- BEGIN: Modal Content  check event listener-->

<div id="referencia-modal" class="modal overflow-y-auto {{$dialog_referencia?'show':'hide'}}" data-backdrop="static" tabindex="-1" aria-hidden="false" style="padding-left: 0px; margin-top: 0px; margin-left: 0px; z-index: 10000;">
    <div class="modal-dialog modal-lg">

            <div class="modal-content"  >

                <div class="modal-header">
                    <h2 class="font-medium text-base mr-auto">Registro de Referencia Laboral</h2>
                    {{-- <button class="btn btn-outline-secondary hidden sm:flex"> <i data-feather="file" class="w-4 h-4 mr-2"></i> Download Docs </button> --}}

                </div> <!-- END: Modal Header -->
                <div class="modal-body ">
                    <div class="grid grid-cols-12 gap-4 items-center col-span-12 sm:col-span-12">
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Institución</label>
                            <input wire:model='institutionReferencia' type="text" class="form-control"
                                placeholder="EPSAS">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Nombres</label>
                            <input wire:model='nombreReferencia' type="text" class="form-control"
                                placeholder="Jorge">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Apellido Paterno</label>
                            <input wire:model='paternoReferencia' type="text" class="form-control"
                                placeholder="Vargas">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Apellido Materno</label>
                            <input wire:model='maternoReferencia' type="text" class="form-control"
                                placeholder="Pozo">
                        </div>
                        <div class="col-span-12 sm:col-span-6">
                            <label class="form-label">Teléfono / Celular</label>
                            <input wire:model='telefonoReferencia' type="text" class="form-control"
                                placeholder="2214589">
                        </div>
                        {{-- <div class="col-span-12 sm:col-span-1 pt-6">
                            <a wire:click='referencia' class="btn btn-secondary">Añadir</a>
                        </div>
                         --}}

                    </div>
                </div>
                <div class="modal-footer text-right"> <button type="button" wire:click="closeReferencia" class="btn btn-outline-secondary w-20 mr-1">Cancelar</button> <button wire:click='referencia' class="btn btn-primary w-20">Guardar</button> </div> <!-- END: Modal Footer -->

            </div>

    </div>
</div>

<!-- END: Modal Content -->


</div>
