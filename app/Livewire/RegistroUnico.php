<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Nomenclador;
use App\Models\UnidadAdministrativa; // Ensure this model exists and is correctly imported

class RegistroUnico extends Component
{
    use WithFileUploads;

    public $showAssigned = false;

    // Datos personales y de solicitud
    public $guia, $cedula, $nacionalidad, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $sexo, $foto;
    public $direccion, $telefono, $telefonolocal, $estado_ciudadano, $direccion_dependencia, $delito, $fecha_inicio, $fecha_final;
    public $nombre_abogado, $apellido_abogado, $cedula_abogado, $unidadesAdministrativas;
    public $unidad_administrativa;


//     // Dirección del solicitante
// public $calle_solicitante;
// public $casa_edificio_solicitante;
// public $piso_solicitante;
// public $apartamento_solicitante;

// // Dirección del apoderado
// public $calle_apoderado;
// public $casa_edificio_apoderado;
// public $piso_apoderado;
// public $apartamento_apoderado;

// Teléfonos del apoderado
public $telefono_apoderado;
public $telefonolocal_apoderado;

// Dirección del abogado
// public $calle_abogado;
// public $casa_edificio_abogado;
// public $piso_abogado;
// public $apartamento_abogado;

// Teléfonos del abogado
public $telefono_abogado;
public $telefonolocal_abogado;

// Otros campos del formulario
public $fecha_solicitud;
public $hora_solicitud;

    // Selects dependientes para solicitante, apoderado y abogado
    public $ubicaciones = [
        'solicitante' => [
            'estado' => null, 'municipio' => null, 'parroquia' => null, 'calle' => null, 'casa_edificio' => null, 'piso' => null, 'apartamento' => null,
            'estados' => [], 'municipios' => [], 'parroquias' => [],
        ],
        'apoderado' => [
            'estado' => null, 'municipio' => null, 'parroquia' => null, 'calle' => null, 'casa_edificio' => null, 'piso' => null, 'apartamento' => null,
            'estados' => [], 'municipios' => [], 'parroquias' => [],
        ],
        'abogado' => [
            'estado' => null, 'municipio' => null, 'parroquia' => null, 'calle' => null, 'casa_edificio' => null, 'piso' => null, 'apartamento' => null,
            'estados' => [], 'municipios' => [], 'parroquias' => [],
        ],
    ];

    public function mount()
    {
        $estados = Nomenclador::where('tipo', 9)->get();
        foreach (['solicitante', 'apoderado', 'abogado'] as $tipo) {
            $this->ubicaciones[$tipo]['estados'] = $estados;
            $this->ubicaciones[$tipo]['municipios'] = collect();
            $this->ubicaciones[$tipo]['parroquias'] = collect();
        }
    }

    // Método genérico para actualizar municipios y parroquias
    public function updated($property, $value)
    {
        foreach (['solicitante', 'apoderado', 'abogado'] as $tipo) {
            if ($property === "ubicaciones.$tipo.estado") {
                $this->ubicaciones[$tipo]['municipios'] = Nomenclador::where('padre', $value)->get();
                $this->ubicaciones[$tipo]['municipio'] = null;
                $this->ubicaciones[$tipo]['parroquias'] = collect();
                $this->ubicaciones[$tipo]['parroquia'] = null;
            }
            if ($property === "ubicaciones.$tipo.municipio") {
                $this->ubicaciones[$tipo]['parroquias'] = Nomenclador::where('padre', $value)->get();
                $this->ubicaciones[$tipo]['parroquia'] = null;
            }
        }
    }

    public function toggleAssigned()
    {
        $this->showAssigned = !$this->showAssigned;
    }

    protected function rules()
    {
        return [
            'guia' => 'required|numeric',
            'cedula' => 'required|numeric|digits_between:7,8',
            'nacionalidad' => 'required',
            'primernombre' => 'required',
            'primerapellido' => 'required',
            'direccion' => 'required',
            'telefono' => ['required', 'regex:/^0\d{3}-\d{7}$/'],
            'estado_ciudadano' => 'required',
            'direccion_dependencia' => 'required',
            'delito' => 'required',
            'fecha_inicio' => 'required|date_format:Y-m-d',
            'fecha_final' => 'required|date_format:Y-m-d|after:fecha_inicio',
            'nombre_abogado' => 'required',
            'apellido_abogado' => 'required',
            'cedula_abogado' => 'required|numeric|digits_between:7,8',
            'telefono_abogado' => 'required|digits:10',
            'foto' => 'nullable|image|max:1024',
        ];
    }

    public function FormatoyEnviar()
    {

        if ($this->foto) {
            $validated['foto'] = $this->foto->store('fotos', 'public');
        }



        dd($this->unidad_administrativa);



        session()->flash('success', 'Datos validados y listos para guardar.');


    }

    public function render()
    {

        $this->unidadesAdministrativas = UnidadAdministrativa::all();
        return view('livewire.registro-unico', [
            'ubicaciones' => $this->ubicaciones,
            'showAssigned' => $this->showAssigned,
            'unidadesAdministrativas' => $this->unidadesAdministrativas,
        ]);
    }
}
