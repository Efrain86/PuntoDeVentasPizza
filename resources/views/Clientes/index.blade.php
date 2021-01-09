@extends('Layouts.Layout')


@section('Conten')

    <div class="container">
        <div class="row justify-content-end">
            <div class="col col-3">
                
                     <a href="{{ url('/Clientes/create')}}" class="btn btn-bd-primary">Nuevos clientes<span class="fi-person"></span></a>
                
   
                <ion-icon name="body-outline"></ion-icon>
                <span class="oi oi-icon-name" title="icon name" aria-hidden="true"></span>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            
 <table class="table table-light" id ="Clientes">
    <thead class="thead-light">
        <tr>
            <th>Numero cliente</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Teléfono</th>
            <th>Correo</th>
            <th>Accion</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($clientes as $cliente)
        <tr>
            <td>
                {{$cliente->ClienteId}}
            </td>
            <td>
                {{$cliente->Nombre}}
            </td>
            <td>
                {{$cliente->ApellidoPater}}
            </td>
            <td>
                {{$cliente->ApellidoMater}}
            </td>
            <td>
                {{$cliente->Telefono}}
            </td>
            <td>
                {{$cliente->Correo}}
            </td>
            <td>Editar | 

                <form method="post" action="{{ url('/clientes/' .$cliente->ClienteId)}}" >
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

</div>
</div>
<script>
    $(document).ready(function() {
$('#Clientes').DataTable({
    keys: true, 
    responsive: true, 
    autoW
});
} );
</script>
<script src="{{asset('js/scripts/NuevaVenta.js')}}"></script>


@endsection

