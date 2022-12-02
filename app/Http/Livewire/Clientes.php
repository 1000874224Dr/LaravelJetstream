<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Cliente;

class Clientes extends Component
{
    public  $nombre_cliente,$direccion,$domicilios;
    public $modal=false;

    public function render()
    {
        $this->clientes=Cliente::all();
        return view('livewire.clientes');
    }
    public function crear()
    {
        $this->limpiar();
        $this->AbrirModal();
    }
    public function AbrirModal()
    {
        $this->modal = true;
    }
    public function cerrarModal()
    {
        $this->modal =false;
    }
    public function limpiar()
    {
        $this->id ='';
        $this->nombre_cliente ='';
        $this->direccion ='';
        $this->domicilios ='';
        
    }
    public function editar($id)
    {
        $clientes=Cliente::findOrfail($id);
        $this->id_CLiente =$id;
        $this->nombre_cliente =$clientes->nombre_cliente;
        $this->direccion =$clientes->direccion;
        $this->domicilios =$clientes->domicilios;


        
        $this->AbrirModal();
    }
    public function borrar($id)
    {
        Cliente::find($id)->delete();
    
    }
    
    public function guardar()
    {
        Cliente::updateOrCreate(['id'=> $this -> id],
        [
            
            'nombre_cliente'=> $this -> nombre_cliente,
            'direccion'=> $this -> direccion,
            'domicilios'=> $this -> domicilios,
            

        ]);
        $this->CerrarModal();
        $this->limpiar();
    }
    public function update()
    {
        $this->validate(['nombre_cliente'=> 'required','direccion'=> 'required','domicilios'=>'required']);
        if($this->id) {
            $clientes = Cliente::find($this->id_CLiente);
            $clientes -> update([
            'nombre_cliente'=> $this-> nombre_cliente,
            'direccion' => $this-> direccion,
            'domicilios' => $this-> domicilios,

            ]);
        }

    $this->CerrarModal();
     $this->limpiar();

    }
}