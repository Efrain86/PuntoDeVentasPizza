
$(document).ready(function() {
    // var LipiaFormulario = new LipiaFormulario();
    $("#SearchClientes").on("click", function(e) {
        e.preventDefault();

        let TelefonoS = document.getElementById("search1").value;
        let datos = { Telefono: TelefonoS };

        
        $.ajax({
            method: "GET",
            dataType: "json",
            url: "http://127.0.0.1:8000/api/BuscarClientes",
            data: datos
        }).done(function(data) {        
            let Respuesta = data.data;
            

            let NombreCompleto  =Respuesta.clientes[0].Nombre +' '+ Respuesta.clientes[0].ApellidoPater +' '+ Respuesta.clientes[0].ApellidoMater ;
            $("#NombreCliente").val(NombreCompleto);
            $("#Telefono").val(Respuesta.clientes[0].Telefono);
        });
    });




        // ---------------------------
        // Tools
        // ---------------------------
        function LipiaFormulario(NameForm){
            
         $("#"+NameForm).find('input:text, input:password, input:file, select, textarea').val('');
         $("#"+NameForm).find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
 
        }
   
});


