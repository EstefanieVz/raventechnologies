<x-app-layout>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXlo==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<style>
 .colore{
        background:  #ff8000;
    }
    .topcentral{
        text-align: center;
        margin-block:auto;
        margin-inline:auto;
    }
    .container{
        max-width: 1840px;
        width: 100%;
        background:#565656;
        box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
    }
    .container h2{
        padding: 2rem 1rem;
        font-size: 2.5rem;
        text-align: center;
    }
    .tbl{
        width: 100%;
        border-collapse: collapse;
    }
    .tbl thead{
        background:  #ff8000;
        color: #000000;
    }
    .tbl thead th{
        font-size: 0.9rem;
        padding: 0.8rem;
        letter-spacing: 0.2rem;
        vertical-align: top;
        border: 1px solid #ff8000;
    }
    .tbl tbody tr td{
        font-size: 1rem;
        letter-spacing: 0.2rem;
        font-weight: normal;
        text-align: center;
        border: 1px solid #e59444
    }
    a{
        text-decoration: none;
    }
    .re{
        background-color: rgba(77, 76, 76, 0); border: 2px solid #000000;
    }
    .re:hover{
        background: #000000; color: white;
    }
    @media(max-width: 768px){
        .tbl thead{
            display: none;
        }
        .tbl tr,
        .tbl td{
            display: block;
            width: 100%;
        }
        .tbl tr{
            margin-bottom: 1rem;
        }
        .tbl td::before{
            content: "";
            position: absolute;
        }
    }
</style>

{{-- @extends('layouts.app') --}}
<div class="topcentral">
    <br>
        <h2 style="color: rgb(255, 255, 255); font-size:30px; font-weight: 700;">PRODUCTOS DE RAVEN TECHNOLOGIES</h2>


<br>
<button class="re font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 "><a href="{{route('products.create')}}" style="color: white;">Crear Nuevo Producto</a></button>

<br>
</div>
<br><br>
<div class="container">
    <div class="tbl_container">
        <div class="colore">
        <h2>Productos</h2>
        </div>
<table class="tbl">
    <thead>
        <th> Nombre </th>
        <th> Descripción </th>
        <th> Imagen </th>
        <th> Precio </th>
        <th> Acciones </th>
    </thead>

    <tbody>

        @foreach ($products as $p)
        <tr>
            <td>{{$p->name}}</td>
            <td>{{$p->description}}</td>
            <td><img src="/image/products/{{$p->image}}" width="60" alt="Producto"></td>
            <td>{{$p->unit_price}}</td>
            <td>
                {{-- <a class="nav-link" href="{{route('perfil')}}"><img src="{{ asset('/fondo/user.gif') }}" width="50px" height="50px" alt="GIF"></a> --}}

                <button class="re"><a href="{{route("products.show",$p)}}"><img src="{{ asset('/fondo/show.gif') }}" width="40px" height="40px" alt="GIF"></a></button>
                <button class="re"><a href="{{route("products.edit",$p)}}"><img src="{{ asset('/fondo/edit.gif') }}" width="40px" height="40px" alt="GIF"></a></button>
                <button class="re"><a href="{{route("products.delete",$p)}}"><img src="{{ asset('/fondo/delete.gif') }}" width="40px" height="40px" alt="GIF"></a></button>
                
            </td>
        </tr>
            
        @endforeach
    </tbody>
</table>
</div>
</div>
{{-- {{$products->links()}}<!-- GENERA LOS ENLACES DE CADA PÁGINA--> --}}
        <br><br><br>

</x-app-layout>