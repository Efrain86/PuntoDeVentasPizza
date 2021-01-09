@extends('Layouts.Layout')
@section('js')
<script src="/js/Clientes/Clientes.js"></script>  

@endsection
@section('Conten')
<div class="container">
    <div class="form-group">
        {{-- <form action="{{ url('/clientes')}}" method="post" enctype="multipart/form-data"> --}}
            <form >
            {{csrf_field()}}
            <div class="form-group">
                <div>
                    <label for="Nombre">{{'Nombre'}}</label>
                    <input type="text" name="Nombre" class="form-control" id="Nombre" value="">
                </div>
                <div>
                    <label for="ApellidoPater">{{'Apellido Paterno'}}</label>
                    <input type="text" name="ApellidoPater" class="form-control" id="ApellidoPater" value="">
                </div>
                <div>
                    <label for="ApellidoMater">{{'Apellido Materno'}}</label>
                    <input type="text" name="ApellidoMater" class="form-control" id="ApellidoMater" value="">
                </div>
                <div>
                    <label for="Telefono">{{'Teléfono'}}</label>
                    <input type="text" name="Telefono" class="form-control" id="Telefono" value="">
                </div>
                <div>
                    <label for="Correo">{{'Correo'}}</label>
                    <input type="Correo" name="Correo" class="form-control" id="Correo" value="">


                </div>
                <div>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalDireccion">
                        Agrega direccion
                    </button>
                </div>

                <div>


                    <table id="TblDirecciones" class="table  table-striped">
                        <thead class="thead-light">
                            <tr>
                                <th>Calle</th>
                                <th>Numero</th>
                                <th>Colonia</th>
                                <th>Crusamientos</th>
                                <th>DireccionPrincipal</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                <div>
                    <input type="submit" class="btn btn-outline-success my-2 my-sm-0 form-control" value="guardar">
                </div>

            </div>
        </form>
    </div>
</div>




<!-- Modal -->
<div class="modal fade" id="ModalDireccion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Venta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <form id="FormDireccion">
                    <div class="form-group">
                        <label for="Calle">Calle</label>
                        <input type="text" class="form-control" id="Calle" aria-describedby="emailHelp">
                        <small id="Calle" class="form-text text-muted">La calle es un campo obligatorio</small>
                    </div>
                    <div class="form-group">
                        <label for="NumeroCasa">Numero de casa</label>
                        <input type="text" class="form-control" id="NumeroCasa">
                    </div>
                    <div class="form-group">
                        <label class="form-check-label" for="Colonia">Colonia</label>
                        <input type="text" class="form-control" id="Colonia">
                       
                    </div>

                    <div class="form-group">
                        <label class="form-check-label" for="Cruzamientos">Cruzamientos</label>
                        <input type="text" class="form-control" id="Cruzamientos">     
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="DireccionPrincipal">
                        <label class="form-check-label" for="DireccionPrincipal">Direccion principal</label>
                      </div>
                    </form>


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary" id="BtnAgregarDireccion">Agregar</button>
            </div>
        </div>
    </div>
</div>

@endsection