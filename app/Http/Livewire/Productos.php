<?php

namespace App\Http\Livewire;
 
use Livewire\Component;
use App\Models\Producto;

class Productos extends Component
{
    public $nombre,$cantidad,$precio;

    public $modal=false;
    
    public function render()
    {
        $this->productos=Producto::all();
        return view('livewire.productos');
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
        $this->precio ='';
    }
    public function editar($id)
    {
        $producto=Producto::findOrfail($id);
        $this->id_producto =$id;
        $this->nombre =$producto->nombre;
        $this->cantidad =$producto->cantidad;
        $this->precio =$producto->precio;
        $this->AbrirModal();
    }
    public function borrar($id)
    {
        Producto::find($id)->delete();
    
    }
    
    public function guardar()
    {
        Producto::updateOrCreate(['id'=>$this-> id],
        [
            
            'nombre'=> $this -> nombre,
            'cantidad'=> $this -> cantidad,
            'precio'=> $this -> precio

        ]);
        
        $this->CerrarModal();
        $this->limpiar();
    }
    public function update()
    {
        $this->validate(['nombre'=> 'required','cantidad'=> 'required','precio'=>'required']);
        if($this->id) {
            $productos = Producto::find($this->id_producto);
            $productos -> update([
            'nombre'=> $this-> nombre,
            'cantidad' => $this-> cantidad,
            'precio' => $this-> precio,

            ]);
        }
        
        $this->CerrarModal();
        $this->limpiar();
    }
}
