
$(document).ready(function() {
   function LipiaFormulario(){
    

       this.CleanValidation = function CleanValidation(NameForm){
         $("#"+NameForm).find('input:text, input:password, input:file, select, textarea').val('');
    $("#"+NameForm).find('input:radio, input:checkbox').removeAttr('checked').removeAttr('selected');
       }
    
   }

});
