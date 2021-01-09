@extends('Layouts.Layout')

@section('Conten')

<div class="container">
    <ul class="nav nav-tabs" id="myTabVentas" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="VentasActivas-tab" data-toggle="tab" href="#VentasActivas" role="tab" aria-controls="home" aria-selected="true">Ventas Activas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Ventas en proceso</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="VentasEntregadas-tab" data-toggle="tab" href="#VentasEntregadas" role="tab" aria-controls="VentasEntregadas" aria-selected="false">Ventas Entregadas</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="VentasActivas" role="tabpanel" aria-labelledby="VentasActivas-tab">


          <table id="table_id" class="display">
    <thead>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Row 1 Data 1</td>
            <td>Row 1 Data 2</td>
        </tr>
        <tr>
            <td>Row 2 Data 1</td>
            <td>Row 2 Data 2</td>
        </tr>
    </tbody>
</table>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
        <div class="tab-pane fade" id="VentasEntregadas" role="tabpanel" aria-labelledby="VentasEntregadas-tab">...</div>
      </div>

</div>


@endsection

<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>