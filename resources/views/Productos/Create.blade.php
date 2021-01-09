@extends('Layouts.Layout')

@section('Conten')

<h1>Nuevo productos</h1>

Creacion de nuevos clientes 

<div class="container">
    <form action="{{ url('/Productos')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <label for="ProductoNombre">{{'Nombre del producto'}}</label>
                <input type="text" name="ProductoNombre" id="ProductoNombre" value="" >
            </div>
            <div class="col-md-6">
                <label for="ProductoClave">{{'Clave de producto'}}</label>
                <input type="text" name="ProductoClave" id="ProductoClave" value="" >
            </div>
            <div class="col-md-6">
                <label for="ProductoDescripcion">{{'Descripcion del producto'}}</label>
                <input type="text" name="ProductoDescripcion" id="ProductoDescripcion" value="">
            </div>
            <div class="col-md-6">
                <label for="ProductoPrecio">{{'Precio'}}</label>
                <input type="text" name="ProductoPrecio" id="ProductoPrecio" value="">
            </div>
            <div class="col-md-6">
                <input  type="submit" value="guardar">
            </div>
            
        </div>
    </form>

</div>
@endsection