Formulario de clientes
<div class="container">

    <form action="{{url('/clientes')}}" method="post" enctype="multipart/form-data">
        {{csrf_field}}
        <div class="row">
            <div class="col-md-6">
                <label for="Nombre">{{'Nombre'}}</label>
                <input type="text" name="Nombre" id="Nombre" value="" tok>
            </div>
            <div class="col-md-6">
                <input type="button" value="guardar">
            </div>
        </div>
    </form>

</div>