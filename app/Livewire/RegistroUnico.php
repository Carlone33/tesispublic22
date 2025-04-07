<?php

namespace App\Livewire;

use Livewire\Component;

class RegistroUnico extends Component
{
    public $guia;
    public $cedula;
    public $nacionalidad;
    public $primernombre;
    public $segundonombre;
    public $primerapellido;
    public $segundoapellido;
    public $direccion;
    public $telefono;
    public $telefonolocal;
    public $estado_ciudadano;
    public $direccion_dependencia;
    public $delito;
    public $fecha_inicio;
    public $fecha_final;

    protected function rules()
    {
        return [
            'guia' => 'required|numeric',
            'cedula' => 'required|numeric',
            'nacionalidad' => 'required',
            'primernombre' => 'required',
            'segundonombre' => 'nullable',
            'primerapellido' => 'required',
            'segundoapellido' => 'nullable',
            'direccion' => 'required',
            'telefono' => 'required',
            'telefonolocal' => 'nullable',
            'estado_ciudadano' => 'required',
            'direccion_dependencia' => 'required',
            'delito' => 'required',
            'fecha_inicio' => 'required|date_format:Y-m-d',
            'fecha_final' => 'required|date_format:Y-m-d|after:fecha_inicio'
        ];
    }

    protected function messages()
    {
        return [
            'guia.required' => 'El número de guía es obligatorio.',
            'cedula.required' => 'La cédula es obligatoria.',
            'cedula.numeric' => 'La cédula debe ser un número.',
            'guia.numeric' => 'El número de guía debe ser un número.',
            'nacionalidad.required' => 'La nacionalidad es obligatoria.',
            'fecha_inicio.required' => 'La fecha de inicio es obligatoria.',
            'fecha_inicio.after_or_equal' => 'La fecha de inicio no puede ser anterior a hoy.',
            'fecha_final.after' => 'La fecha final debe ser posterior a la fecha de inicio.',
        ];
    }

    public function updated($propertyName)
    {
        // Intercepta cualquier cambio en las propiedades del formulario
        logger("La propiedad {$propertyName} fue actualizada con el valor: " . $this->$propertyName);
    }

    public function updatedCedula($value)
    {
        // Intercepta específicamente cambios en la propiedad 'cedula'
        logger("La cédula fue actualizada con el valor: {$value}");
    }

    public function FormatoyEnviar()
    {
        $this->validate(); // Valida los datos antes de procesarlos

        $this->nacionalidad = strtoupper($this->nacionalidad);
        $this->primernombre = strtoupper($this->primernombre);
        $this->segundonombre = strtoupper($this->segundonombre);
        $this->primerapellido = strtoupper($this->primerapellido);
        $this->segundoapellido = strtoupper($this->segundoapellido);
        $this->direccion = strtoupper($this->direccion);
        $this->telefono = strtoupper($this->telefono);
        $this->telefonolocal = strtoupper($this->telefonolocal);
        $this->estado_ciudadano = strtoupper($this->estado_ciudadano);
        $this->direccion_dependencia = strtoupper($this->direccion_dependencia);
        $this->delito = strtoupper($this->delito);

        dd($this->guia,
            $this->cedula,
            $this->nacionalidad,
            $this->primernombre,
            $this->segundonombre,
            $this->primerapellido,
            $this->segundoapellido,
            $this->direccion,
            $this->telefono,
            $this->telefonolocal,
            $this->estado_ciudadano,
            $this->direccion_dependencia,
            $this->delito,
            $this->fecha_inicio,
            $this->fecha_final
        );

        $this->reset([
            'guia',
            'cedula',
            'nacionalidad',
            'primernombre',
            'segundonombre',
            'primerapellido',
            'segundoapellido',
            'direccion',
            'telefono',
            'telefonolocal',
            'estado_ciudadano',
            'direccion_dependencia',
            'delito',
            'fecha_inicio',
            'fecha_final'
        ]);
    }

    public function render()
    {
        return view('livewire.registro-unico');
    }
}
