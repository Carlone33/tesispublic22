<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Services\GuideNumberService;

class RegistroPolicial extends Component
{
    use WithFileUploads;


    // Propiedades para los campos del formulario
    public $foto;
    public $guia;
    public $nacionalidad;
    public $cedula;
    public $primernombre;
    public $segundonombre;
    public $primerapellido;
    public $segundoapellido;
    public $direccion_domicilio;
    public $telefono_personal;
    public $direccion_trabajo;
    public $telefono_trabajo;
    public $telefono_local;
    public $direccion_dependencia;
    public $numero_oficio;
    public $fecha_inicio;
    public $fecha_final;
    public $cedula_apoderado;
    public $nombre_apoderado;
    public $apellido_apoderado;
    public $direccion_apoderado;
    public $telefono_apoderado;
    public $direccion_trabajo_apoderado;
    public $telefono_trabajo_apoderado;
    public $nombre_abogado;
    public $apellido_abogado;
    public $cedula_abogado;
    public $telefono_abogado;
    public $observacion;

    public $showAssigned = false;

    public function toggleAssigned()
    {
        $this->showAssigned = !$this->showAssigned;
    }

    protected function rules()
    {
        return [
            'foto' => 'nullable|image|max:1024', // <- max está en Kb (Kilobytes)
            'guia' => 'required|string|max:50',
            'nacionalidad' => 'required|string|in:V,E',
            'cedula' => 'required|numeric|digits_between:7,8',
            'primernombre' => 'required|string|max:50',
            'segundonombre' => 'nullable|string|max:50',
            'primerapellido' => 'required|string|max:50',
            'segundoapellido' => 'nullable|string|max:50',
            'direccion_domicilio' => 'required|string|max:255',
            'telefono_personal' => 'required|digits:10',
            'direccion_trabajo' => 'nullable|string|max:255',
            'telefono_trabajo' => 'nullable|digits:10',
            'telefono_local' => 'nullable|digits:10',
            'direccion_dependencia' => 'required|string|max:255',
            'numero_oficio' => 'required|string|max:50',
            'fecha_inicio' => 'required|date|before_or_equal:fecha_final',
            'fecha_final' => 'required|date|after_or_equal:fecha_inicio',
            'cedula_apoderado' => 'nullable|numeric|digits_between:7,8',
            'nombre_apoderado' => 'nullable|string|max:50',
            'apellido_apoderado' => 'nullable|string|max:50',
            'direccion_apoderado' => 'nullable|string|max:255',
            'telefono_apoderado' => 'nullable|digits:10',
            'direccion_trabajo_apoderado' => 'nullable|string|max:255',
            'telefono_trabajo_apoderado' => 'nullable|digits:10',
            'nombre_abogado' => 'required|string|max:50',
            'apellido_abogado' => 'required|string|max:50',
            'cedula_abogado' => 'required|numeric|digits_between:7,8',
            'telefono_abogado' => 'required|digits:10',
            'observacion' => 'nullable|string|max:500',
        ];
    }

    protected function messages()
    {
        return [
            'foto.image' => 'El archivo debe ser una imagen.',
            'foto.max' => 'La imagen no debe superar 1 MB.',
            'guia.required' => 'El número de guía es obligatorio.',
            'nacionalidad.required' => 'La nacionalidad es obligatoria.',
            'nacionalidad.in' => 'La nacionalidad debe ser Venezolano (V) o Extranjero (E).',
            'cedula.required' => 'La cédula es obligatoria.',
            'cedula.numeric' => 'La cédula debe ser un número.',
            'cedula.digits_between' => 'La cédula debe tener entre 7 y 8 dígitos.',
            'primernombre.required' => 'El primer nombre es obligatorio.',
            'primerapellido.required' => 'El primer apellido es obligatorio.',
            'direccion_domicilio.required' => 'La dirección domiciliaria es obligatoria.',
            'telefono_personal.required' => 'El teléfono personal es obligatorio.',
            'telefono_personal.digits' => 'El teléfono personal debe tener 10 dígitos.',
            'direccion_dependencia.required' => 'La dirección de la dependencia es obligatoria.',
            'numero_oficio.required' => 'El número de oficio es obligatorio.',
            'fecha_inicio.required' => 'La fecha de inicio es obligatoria.',
            'fecha_inicio.before_or_equal' => 'La fecha de inicio debe ser anterior o igual a la fecha final.',
            'fecha_final.required' => 'La fecha final es obligatoria.',
            'fecha_final.after_or_equal' => 'La fecha final debe ser posterior o igual a la fecha de inicio.',
            'nombre_abogado.required' => 'El nombre del abogado es obligatorio.',
            'apellido_abogado.required' => 'El apellido del abogado es obligatorio.',
            'cedula_abogado.required' => 'La cédula del abogado es obligatoria.',
            'telefono_abogado.required' => 'El teléfono del abogado es obligatorio.',
        ];
    }

    public function submit()
    {
        // $this->validate();
        $guideService = new GuideNumberService();
        $this->guia = $guideService->generate('registro_policial', 'REGPOL');
        dd($this->guia);
        session()->flash('message', 'Formulario enviado correctamente.');
    }

    public function render()
    {
        return view('livewire.registro-policial');
    }
}
