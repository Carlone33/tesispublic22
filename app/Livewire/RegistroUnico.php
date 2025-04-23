<?php

namespace App\Livewire;
use Livewire\WithFileUploads;
use Livewire\Component;
use App\Models\Nomenclador;

class RegistroUnico extends Component
{
    use WithFileUploads;

    public $showAssigned = false;

    // Datos personales y de solicitud
    public $guia, $cedula, $nacionalidad, $primernombre, $segundonombre, $primerapellido, $segundoapellido, $sexo, $foto;
    public $direccion, $telefono, $telefonolocal, $estado_ciudadano, $direccion_dependencia, $delito, $fecha_inicio, $fecha_final;
    public $nombre_abogado, $apellido_abogado, $cedula_abogado, $telefono_abogado;

    // Selects dependientes para solicitante, apoderado y abogado
    public $ubicaciones = [
        'solicitante' => [
            'estado' => null, 'municipio' => null, 'parroquia' => null,
            'estados' => [], 'municipios' => [], 'parroquias' => [],
        ],
        'apoderado' => [
            'estado' => null, 'municipio' => null, 'parroquia' => null,
            'estados' => [], 'municipios' => [], 'parroquias' => [],
        ],
        'abogado' => [
            'estado' => null, 'municipio' => null, 'parroquia' => null,
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
            'telefono' => 'required|digits:10',
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

    public function render()
    {
        return view('livewire.registro-unico', [
            'ubicaciones' => $this->ubicaciones,
            'showAssigned' => $this->showAssigned,
        ]);
    }
}
