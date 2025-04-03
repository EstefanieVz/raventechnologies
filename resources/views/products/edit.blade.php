<style>
  .div{
          background-image: linear-gradient(rgba(0, 0, 0, 0.7),rgba(0, 0, 0, 0.7));
      }
        .formregistro{
      width:500px;
      height: 480px;
      padding-inline:20px;
      border-radius: 12px;
      margin-block:auto;
      margin-inline:auto;
      } 
      .re{
          background-color: white; border: 2px solid #ff9800;
      }
      .re:hover{
          background: #000000; color: rgb(252, 147, 0);
      }
      </style>
<x-app-layout>
  <div class="div">
    <br><br>
    <center><h1 id="titulo" style="color: #ff8000; font-size:30px; font-weight: 700;"> CREAR NUEVO PRODUCTO</h1></center>
<br><br>
<form action="{{route('products.update',$product->id)}}" method="POST" enctype="multipart/form-data" class="formregistro">
    @csrf
    @method('PUT')
    <div  class="mb-6">
    <br>
    <label for=""  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nombre</label>
    <input type="text" name="name" value="{{$product->name}}" class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-stone-500">
    </div>
    <div  class="mb-6">
    <label for=""  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descripción</label>
    <input type="text" name="description" value="{{$product->description}}" class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-stone-500">
    </div>
    <div  class="mb-6">
    <label for=""  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Imagen</label>
    <input type="file" name="image" value="{{$product->image}}" style="color: #ff9800;">
    </div>
    <div  class="mb-6">
    <label for=""  class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
    <input type="text" name="unit_price" value="{{$product->unit_price}}" class="bg-stone-50 border border-stone-300 text-stone-900 text-sm rounded-lg focus:ring-orange-500 focus:border-orange-500 block w-full p-2.5 dark:bg-stone-700 dark:border-stone-600 dark:placeholder-stone-400 dark:text-white dark:focus:ring-orange-500 dark:focus:border-stone-500">
    </div>
    <button type="submit" class="w-full text-orange-600 hover:text-white border border-orange-600 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-orange-400 dark:text-orange-400 dark:hover:text-white dark:hover:bg-orange-500 dark:focus:ring-orange-900">Registrar</button>
</form>
<br><br>
</div>
<br><br>

</x-app-layout>