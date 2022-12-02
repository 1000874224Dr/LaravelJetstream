<?php

namespace App\Http\Livewire;

use App\Models\Compra;
use App\Models\Producto;
use Livewire\Component;



class Compras extends Component
{
    public $nombre_proveedor,$cantidad_insumo,$precio;

    public $modal =false;

    public function render()
    {
        $this->compras=Compra::all();
        return view('livewire.compras');
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
        $this-> nombre_proveedor = '';
        $this->cantidad_insumo ='';
        $this->precio ='';
        
    }
    public function editar($id)
    {
        $compras=Compra::findOrfail($id);
        $this->id_Compra =$id;
        $this->nombre_proveedor =$compras->nombre_proveedor;
        $this->cantidad_insumo =$compras->cantidad_insumo;
        $this->precio =$compras->precio;


        
        $this->AbrirModal();
    }
    public function borrar($id)
    {
        Compra::find($id)->delete();
    
    }
    
    public function guardar()
    {
        Compra::updateOrCreate(['id'=> $this -> id],
        [
            
            'nombre_proveedor'=> $this -> nombre_proveedor,
            'cantidad_insumo'=> $this -> cantidad_insumo,
            'precio'=> $this -> precio,
            

        ]);
        $this->CerrarModal();
        $this->limpiar();
    }
    public function update()
    {
        $this->validate(['nombre_proveedor'=> 'required','cantidad_insumo'=> 'required']);
        if($this->id) {
            $compras = Compra::find($this->id_Compra);
            $compras -> update([
            'nombre_proveedor'=> $this-> nombre_proveedor,
            'cantidad_insumo' => $this-> cantidad_insumo,
            'precio' => $this-> precio,
           

            ]);
        }
        $this->CerrarModal();
        $this->limpiar();
    }


}