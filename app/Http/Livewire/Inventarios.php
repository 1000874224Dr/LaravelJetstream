<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Inventario;

class Inventarios extends Component
{
    public  $nombre,$cantidad;
    public $modal=false;

    public function render()
    {
        $this->inventarios=Inventario::all();
        return view('livewire.inventarios');
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
        $this->nombre ='';
        $this->cantidad ='';
        
    }
    public function editar($id)
    {
        $inventario=Inventario::findOrfail($id);
        $this->id_invent =$id;
        $this->nombre =$inventario->nombre;
        $this->cantidad =$inventario->cantidad;
        
        $this->AbrirModal();
    }
    public function borrar($id)
    {
        Inventario::find($id)->delete();
    
    }
    
    public function guardar()
    {
        Inventario::updateOrCreate(['id'=> $this -> id],
        [
            
            'nombre'=> $this -> nombre,
            'cantidad'=> $this -> cantidad,
            

        ]);
        $this->CerrarModal();
        $this->limpiar();
    }
    public function update()
    {
        $this->validate(['nombre'=> 'required','cantidad'=> 'required']);
        if($this->id) {
            $inventarios = Inventario::find($this->id_invent);
            $inventarios -> update([
            'nombre'=> $this-> nombre,
            'cantidad' => $this-> cantidad,
          

            ]);
        }

        $this->CerrarModal();
        $this->limpiar();
    }
}
    
