/*$(function() {

    // Add link for print preview and intialise

    $('.content_login').prepend('<a class="print-preview">Imprimir</a>');

    $('a.print-preview').printPreview();			

   

    // Add keybinding (not recommended for production use)

    $(document).bind('keydown', function(e) {

        var code = (e.keyCode ? e.keyCode : e.which);

        if (code == 80 && !$('#print-modal').length) {

            $.printPreview.loadPrintPreview();

            return false;

        }            

    });

});

/* funciones Propias */

var companies = (function () {
    var loadAjaxAllCompanies = function () {
        $.ajax( {
            url: "../ajax/companiesajax.php",
            
            data: {
                ac: 'allcompanies'
            },
            success: function( data ) {
                $('#nit').html(data);
                addEventCompanies();
            }             
        });     
    };

    var findCompanyInfo = function (id) {
        $.ajax( {
            url: "../ajax/companiesajax.php",            
            data: {
                ac: 'find',
                id: id
            },
            success: function( data ) {
                $('#nom_emp').text(data);
            }             
        }); 
    }

    var addEventCompanies = function () {
        $('#nit').on('change', function () {
            if($(this).val() != '' )
            {
                findCompanyInfo($(this).val());
            }else{
                $('#nom_emp').text('');
            }
        });
    };

    return{
        loadAutocomplete: function () {
            loadAjaxAllCompanies();            
        }
    }
})();

var country = (function(){
    var loadAjaxAllCountries = function () {
        $.ajax( {
            url: "../ajax/ciudadajax.php",
            
            data: {
                ac: 'allCiudades'
            },
            success: function( data ) {
                $('#ciudad').html(data);
            }             
        });     
    };

    return{
        getAllCountries: function () {
            loadAjaxAllCountries();
        }
    }
})();

var eventRadio = (function () {
    var checksI = {}; 
    var checksG
    var findTag = function (nameTag) {
        if(nameTag == 'identificacion')
        {
            checksI = $('.'+nameTag);  
        }else{
            checksG = $('.'+nameTag);  
        }
    
        addEventCheck(nameTag);      
    };

    var addEventCheck = function(nameTag)
    {
        if(nameTag == 'identificacion')
        {
            var checks = checksI;
        }else{
            var checks = checksG;            
        }

        checks.each(function () {
            $(this).on('click', function () {
                if($(this).is(':checked'))
                {
                    var id = $(this).attr('id');
                    checks.each(function () {
                        if($(this).attr('id')!=id)
                        {
                            $(this).attr('checked', false);
                        }                        
                    });

                    $(this).attr('checked', true);
                }
            })
        });
    }

    return{
        addEvent: function () {
            findTag('identificacion');
            findTag('genero');
        }
    }
})();

var formulario = (function(){
    var inputRequired = ['nov',
                         'nit', 
                         'doc', 
                         'nombre',
                         'primer_apellido',
                         'doc_usuario',
                         'dia',
                         'mes',
                         'anio',
                         'direccion',
                         'telefono',
                         'ciudad',
                         'cantidad_asignada',
                         'incremento_solic',
                         'gen',
                         'estatura',
                         'peso',
                         'ocupacion',
                         'centro_costos',
                         'deporte'
                        ];

    var resultadoValidacion = [];
    var idForm = 21;//////////////////////////////////// pasar a cero ////////////////////////////////////////////

    var sendInformation = function () {
        $.ajax( {
            url: "../ajax/formularioajax.php",
            method: 'POST',
            data: $('#form').serialize(),
            success: function( data ) {
                idForm = data;
                $('#print_form').show();
            }             
        });
    }
    var saveForm = function () {
        if(validateInputRequired()){
            sendInformation();
        }
        return false;
    };

    var validateInputRequired = function () {
        resultadoValidacion = [];
        for (var i = inputRequired.length - 1; i >= 0; i--) {
            
            if( $('input[name="'+inputRequired[i]+'"]').val() == '' || 
                $('input[name="'+inputRequired[i]+'"]').val() == 'undefined'

            )
            {
                resultadoValidacion.push(inputRequired[i]);
            }else if($('input[type="checkbox"][name^="'+inputRequired[i]+'"]').length > 0 )
            {
                var temporal = $('input[type="checkbox"][name^="'+inputRequired[i]+'"]');
                var cantidad = 0;
                temporal.each(function () {
                    if($(this).is(':checked'))
                    {
                        cantidad++;
                    }
                });

                if(cantidad<=0)
                {
                    resultadoValidacion.push(inputRequired[i]);
                }
            }else if($('select[name="'+inputRequired[i]+'"]').length>0 &&
                    ($('select[name="'+inputRequired[i]+'"]').val() == '' || 
                     $('select[name="'+inputRequired[i]+'"]').val() == 'undefined'   ))
            {
                resultadoValidacion.push(inputRequired[i]);
            }            
        }
        if(resultadoValidacion.length>0)
        {
            return false;
        }else{
            return true;
        }        
    };

    var printForm = function () {
        window.location.href = 'print_vida.php?id='+idForm;
    }

    return{
        addEventSaveButton: function () {
            $('#saveContrato').on('click', function (e) {
                e.preventDefault();
                saveForm();
                return false;
            });

            $('#print_form').on('click', function (e) {
                e.preventDefault();
                if(idForm > 0)
                {
                    printForm();
                }
                return false;
            });

            //$('#print_form').hide();
        }
    }
})();

(function (argument) {
    companies.loadAutocomplete();
    country.getAllCountries();
    eventRadio.addEvent();
    formulario.addEventSaveButton();
})();