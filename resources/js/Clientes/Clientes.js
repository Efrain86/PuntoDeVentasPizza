$(document).ready(function() {



    
    $("#BtnAgregarDireccion").on("click", function() {

        var RowNew = '';
        RowNew = RowNew + "<tr><td>" + $("#Calle").val()+ "</td>";
        RowNew =  RowNew + "<td>" + $("#NumeroCasa").val()+ "</td>";
        RowNew =  RowNew + "<td>" + $("#Colonia").val()+ "</td>";
        RowNew =  RowNew + "<td>" + $("#Cruzamientos").val()+ "</td>";
        RowNew =  RowNew + "<td>" + $("#DireccionPrincipal").val()+ "</td></tr>";
        console.log(RowNew);
          $("#TblDirecciones > tbody").append(RowNew);
         LipiaFormulario("FormDireccion");
        });


});