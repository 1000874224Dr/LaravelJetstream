<?php

namespace App\Http\Livewire;

use App\Models\Proveedor;
use Livewire\Component;

class Proveedores extends Component
{
    public $nombre_pro,$insumo_pro,$precio;

    public $modal =false;
    public function render()
    {
        $this->proveedores=Proveedor::all();
        return view('livewire.proveedores');
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
        $this->nombre_pro ='';
        $this->insumo_pro ='';
        $this->precio ='';
        
    }
    public function editar($id)
    {
        $clientes=Proveedor::findOrfail($id);
        $this->id_pro=$id;
        $this->nombre_pro =$clientes->nombre_pro;
        $this->insumo_pro =$clientes->insumo_pro;
        $this->precio =$clientes->precio;

        $this->AbrirModal();
    }
    public function borrar($id)
    {
        Proveedor::find($id)->delete();
    
    }
    
    public function guardar()
    {
        Proveedor::updateOrCreate(['id'=> $this -> id],
        [
            
            'nombre_pro'=> $this -> nombre_pro,
            'insumo_pro'=> $this -> insumo_pro,
            'precio'=> $this -> precio,
            

        ]);
        $this->CerrarModal();
        $this->limpiar();
    }
    public function update()
    {
        $this->validate(['nombre_pro'=> 'required','insumo_pro'=> 'required','precio'=>'required']);
        if($this->id) {
            $proveedor = Proveedor::find($this->id_pro);
            $proveedor -> update([
            'nombre_pro'=> $this-> nombre_pro,
            'insumo_pro' => $this-> insumo_pro,
            'precio' => $this-> precio,

            ]);
        }
        $this->CerrarModal();
        $this->limpiar();
    }

}
