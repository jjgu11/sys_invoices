
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <a href="{{ route('products.index')}}" type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent 
            rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
            focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mb-4">
            Listar Producto
            </a>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{route('products.store')}}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Producto
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" name="name" type="text" 
                    value="{{old('name')}}" placeholder="">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    @enderror
                </div>
              

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="price">
                    Precio
                    </label>
                    
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="price" 
                    name="price" type="number" value="{{old('price')}}" placeholder="">
                    @error('name')
                        <p class="text-red-500 text-xs italic">{{$message}}</p>
                    @enderror
                </div>

                <div class="mb-6">
                
                    <input class="sr-only" id="image"  name="image" type="file" >
                   
                </div>

                <button  type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent 
                rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 
                focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition mb-4">
                Guardar
                </button>
              
            </form>
           
        </div>
    
    </div>



</x-app-layout>