<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Registrar Producto
                </label>
                <form action="" >
                                    
                    <div>
                        <input type="text" placeholder="Nombres" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="nombre" wire:model="nombre">
                    </div>
        
                    <div class="mt-7">                
                        <input type="number" placeholder="Cantidad" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="cantidad" wire:model="cantidad">                           
                    </div>

                    <div class="mt-7">                
                        <input type="number " placeholder="Precio" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="precio" wire:model="precio">                           
                    </div>

                    
                    
        
                    <div class="mt-7">
                        <button wire:click="guardar()" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Guardar
                        </button>
                    </div>

                    <div class="mt-7">
                        <button wire:click="update()" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                           Actualizar
                        </button>
                    </div>

                    <div class="mt-7">
                        <button wire:click="cerrarModel()" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Limpiar
                        </button>
                    </div>
                
                        </div>
                        <div>
                            
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>