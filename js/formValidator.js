/**
 * Envoi Ajax des formulaires des landings
 *
 * 23/02/2016
 */

$(document).ready(function(){

    // On commence par cacher la div d'erreur
    if($('.alert-danger').is(':visible')){
        $($('.alert-danger').hide());
    }

    // Soumission du formulaire
    $(document).on('submit','form',function(e){
        e.preventDefault();
        // modale chargement
        if ($('.modal').length < 1){
            $('body').append('\
                <div id="modal" class="modal" style="padding:40px;">\n\
                    <div class="alert alert-warning">\n\
                        <img src="http://www.myastro.fr/images/loader.gif" /> Récupération des informations.\n\
                    </div>\n\
                </div>');
        }
        $('.modal').modal('show');
        // requête Ajax
        $.ajax({
            url : "http://www.myastro.fr/inc/ajaxHandler.php",
            type : 'POST',
            cache : false,
            dataType : "json",
            xhrFields : {
                withCredentials: true
            },
            data : { action : 'formValidation', data : $(this).serialize() },
            success : function(response){
                // On reset le tout
                $('.modal').modal('hide');
                $('.alert-danger p').html('');
                $('.alert-danger').hide();
                $('input,select').not('[type="submit"]').removeClass('has-an-error');
                $('input,select').not('[type="submit"]').parent().removeClass('has-error');

                // Traitement de la réponse
                if(typeof response !== 'object'){
                   console.log('ERROR : Response cannot be decoded as Json Object');
                   console.log('RETURNED : ' + response);
                }

                if(!response.hasOwnProperty('url')){
                    // Si on a pas une url en retour, on a des erreurs
                    for (var key in response) {
                        $('input[name="'+key+'"].form-control,select[name="'+key+'"].form-control').parent().addClass('has-error');
                        $('input[name="'+key+'"],select[name="'+key+'"]').not('.form-control').addClass('has-an-error');
                        $('.alert-danger p').append(response[key]);
                        $('.alert-danger').show();
                        $('.alert-danger').removeClass('hidden');
                    }
                } else { // Redirection
                    $('#modal').html('<div class="alert alert-success"><b>Inscription complétée.</b> Vous allez être redirigé.</div>');
                    $('.modal').modal('show');
                    setTimeout(function(){
                        document.location.replace(response.url);
                    }, 3000);
                }
            },
            error : function(){
                $('#modal').html('<div class="alert alert-danger"><b>Une erreur est survenue.</b> Veuillez réessayer dans quelques instants.</div>');
                $('.modal').modal('show');
            }
        });
        // -- fin requête ajax

        return false;
    });
});