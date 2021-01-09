@extends('Layouts.Layout')
@section('Conten')
<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>Producto</th>
            <th>Clave</th>
            <th>Deescripcion</th>
            <th>Precios</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($productos as $producto)
        <tr>
            <td>
                {{$producto->ProductoNombre}}
            </td>
            <td>
                {{$producto->ProductoClave}}
            </td>
            <td>
                {{$producto->ProductoDescripcion}}
            </td>
            <td>
                {{$producto->ProductoPrecio}}
            </td>
            <td>Editar | 

                <form method="post" action="{{ url('/clientes/' .$producto->ProductoId)}}" >
                    {{csrf_field() }}
                    {{method_field('DELETE')}}
                    <button type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                </form>

            </td>
        </tr>
        @empty
        <p>No users</p>
        @endforelse


    </tbody>
</table>

@endsection