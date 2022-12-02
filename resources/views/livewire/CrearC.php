<div class="font-sans">
    <div class="relative min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 ">
        <div class="relative sm:max-w-sm w-full">
            <div class="card bg-blue-400 shadow-lg  w-full h-full rounded-3xl absolute  transform -rotate-6"></div>
            <div class="card bg-red-400 shadow-lg  w-full h-full rounded-3xl absolute  transform rotate-6"></div>
            <div class="relative w-full rounded-3xl  px-6 py-4 bg-gray-100 shadow-md">
                <label for="" class="block mt-3 text-sm text-gray-700 text-center font-semibold">
                    Registrar Cliente
                </label>
                <form action="" >
                                    
                    <div>
                        <input type="text" placeholder="Nombres" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0"id="nombre_cliente" wire:model="nombre_cliente">
                    </div>
        
                    <div class="mt-7">                
                        <input type="text" placeholder="Direccion" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="direccion" wire:model="direccion">                           
                    </div>

                    <div class="mt-7">                
                        <input type="number" placeholder="Domicilios" class="mt-1 block w-full border-none bg-gray-100 h-11 rounded-xl shadow-lg hover:bg-blue-100 focus:bg-blue-100 focus:ring-0" id="domicilios" wire:model="domicilios">                           
                    </div>

                    <div class="mt-7">
                        <button wire:click="guardar()"class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Guardar
                        </button>
                    </div>
                    <div class="mt-7">
                        <button wire:click="update()" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
                            Actualizar
                        </button>
                    </div>

                    <div class="mt-7">
                        <button wire:click="cerrarModal()" class="bg-blue-500 w-full py-3 rounded-xl text-white shadow-xl hover:shadow-inner focus:outline-none transition duration-500 ease-in-out  transform hover:-translate-x hover:scale-105">
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