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
    var inputMaxText = [];
    var resultadoValidacion = [];
    var idForm = 0;//////////////////////////////////// pasar a cero ////////////////////////////////////////////

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

    var requiredInput = function(data){ 
        console.log(data);
        for(var i =0 ; i<data.length;i++)
        {
            $('[name="'+data[i]+'"]').css('border','1px solid red');
            $('[name="'+data[i]+'"]').on('change', function(){
                if( $(this).val() != '' && $(this).val() != null )
                {
                    $(this).css('border','0')
                }
            });
        }
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
            requiredInput(resultadoValidacion);
            return false;
        }else{
            return true;
        }
    };

    var printForm = function () {
        window.location.href = 'print_vida.php?id='+idForm;
    }

    var eventUser = function () {
        $('[name="doc_usuario"]').on('change',function () {
            var user = $(this).val();
            if(user!='' && user != null)
            {
                $.ajax( {
                    url: "../ajax/formularioajax.php",
                    method: 'POST',
                    dataType: 'JSON',
                    data: {
                        ac:'findUser',
                        uid: user
                    },
                    success: function( data ) {
                        if(data != null)
                        {
                            var dataFin = data[0];
                            $('input[name="nombre"]').val(dataFin.prim_nom_per).trigger('change');
                            $('input[name="primer_apellido"]').val(dataFin.prim_ape_per).trigger('change');
                            $('input[name="segundo_apellido"]').val(dataFin.seg_ape_per).trigger('change');
                            $('input[name="segundo_apellido"]').val(dataFin.seg_ape_per).trigger('change');
                            $('input[type="checkbox"][id="'+dataFin.id_tip_doc+'"]').attr('checked', true);
                            $('input[name="dia"]').val(dataFin.dia_nac_per).trigger('change');
                            $('input[name="mes"]').val(dataFin.mes_nac_per).trigger('change');
                            $('input[name="anio"]').val(dataFin.anio_nac_per).trigger('change');
                            $('input[type="checkbox"][name="gen"][value="'+dataFin.gen_per+'"]').attr('checked', true);
                            $('input[name="direccion"]').val(dataFin.dir_per).trigger('change');
                            $('input[name="telefono"]').val(dataFin.tel_per).trigger('change');
                            $('select[name="ciudad"]').val(dataFin.id_ciu_nac).trigger('change');
                            $('input[name="estatura"]').val(dataFin.est_per).trigger('change');
                            $('input[name="peso"]').val(dataFin.pes_per).trigger('change');
                        }else{
                            $('input[name="nombre"]').val(null);
                            $('input[name="primer_apellido"]').val(null);
                            $('input[name="segundo_apellido"]').val(null);
                            $('input[name="segundo_apellido"]').val(null);
                            $('input[type="checkbox"]').prop('checked', false);
                            $('input[name="dia"]').val(null);
                            $('input[name="mes"]').val(null);
                            $('input[name="anio"]').val(null);
                            $('input[name="direccion"]').val(null);
                            $('input[name="telefono"]').val(null);
                            $('select[name="ciudad"]').val('');
                            $('input[name="estatura"]').val(null);
                            $('input[name="peso"]').val(null);
                        }
                    }
                });
            }

        });
    };

    var validaCant = function (tag, cantidad) {
        var input = $('[name="'+tag+'"]'); //console.log(input);
        input.each(function () {
            $(this).on('keyup', function (e) {
                e.preventDefault();
                var valor = $(this).val();
                if(valor > cantidad)
                {
                    $(this).val(valor.substr(0, cantidad));
                    return false;
                }
            });
        })
    };

    var assignedValidation = function () {
        inputMaxText.forEach(function (value, index) {
            validaCant(value.tag, value.cantidad);
        });
    };

    var loadParameters = function(tag, cantidad) {
        var parameter = { tag: tag, cantidad: cantidad}
        inputMaxText.push(parameter);
    };

    var loadAllParameters = function () {
        loadParameters('dia', 2);
        loadParameters('mes', 2);
        loadParameters('anio', 4);
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
            eventUser();
            $('#print_form').hide();
        },
        addEventValidationInput: function () {
            loadAllParameters();
            assignedValidation();
        }
    }
})();

(function (argument) {
    companies.loadAutocomplete();
    country.getAllCountries();
    eventRadio.addEvent();
    formulario.addEventSaveButton();
    formulario.addEventValidationInput();
})();