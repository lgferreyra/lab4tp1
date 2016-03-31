//entra en el ready cuando se ha cargado todo el dom
$(document).ready(function(){
     //evento change del input file
    document.getElementById("fichero").addEventListener('change', cargar, false);
    
    $("#mensaje").hide();
    //Validacion del formulario
    $("#frmRegistro").validate({
    	event: "blur",
        rules: 
        {
            'nombre': "required",
            'apellido': "required",
            'legajo': {required: true,digits: true},
            'dire': "required",
            'email': {required: true,  email: true},
            'fecha': {required: true,  date: true},
            'pass': "required",
            'pass2': {equalTo: "#pass"},
            'fichero': "required"
        },
    	messages: 
        {
            'nombre': "<span class='error1'>Ingresa tu nombre</span>",
            'apellido': "<span class='error1'>Ingresa tu apellido</span>",
            'legajo': {required: "<span class='error1'>Ingresa tu legajo</span>", digits:  "<span class='error1'>Ingresa solo numeros</span>"},
            'dire': "<span class='error1'>Ingresa tu dirección</span>",
            'email':{required: "<span class='error1'>Ingresa tu email</span>", email: "<span class='error1'>Por favor, indica una dirección de email válida</span>"},
            'fecha': "<span class='error1'>No seas coqueto/a, ingresa tu fecha de nacimiento</span>",
            'pass': "<span class='error1'>Ingresa tu password supersecreta</span>",
            'pass2': "<span class='error1'>Ingresa tu password correctamente otra vez</span>",
            'fichero': "<span class='error1'>Selecciona una imagen copada</span>"
            
        },
    	debug: true,
        errorElement: "label",
    	submitHandler: function(form){
    	    var envio = new FormData();
    	    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery 
            envio.append("usuario", $("#email").val());
            envio.append("clave", $("#pass").val());
            envio.append("nombre", $("#nombre").val());
            envio.append("apellido", $("#apellido").val());
            envio.append("legajo", $("#legajo").val());
            envio.append("dire", $("#dire").val());
            envio.append("fecha", $("#fecha").val());
            envio.append("clave", $("#pass").val());
   
            for (var i = 0; i < files.length; i++) {
            envio.append("fichero0", files[i]);
            }
           // alert("antes de ajax");
    		var miAjax = $.ajax({
    			type: "POST",
    			url:"GuardarUsuario.php",
    			contentType: false,
    		    processData: false,
    			data: envio,
    		});
    		miAjax.done(function(msg){
               //alert(msg);
    		        var strIndex = msg.indexOf('Error');
                    if(strIndex == -1) {
                        //string no encontrado
        		        $("#mensaje").html(msg + "<br><strong>Gracias por registrarte, bienvenido!</strong>");
        		        $("#mensaje").show();
    					document.getElementById("nombre").value="";
        				document.getElementById("apellido").value="";
        				document.getElementById("legajo").value="";
        				document.getElementById("dire").value="";
        				document.getElementById("email").value="";
        				document.getElementById("fecha").value="";
        				document.getElementById("pass").value="";
        				document.getElementById("pass2").value="";
        				document.getElementById("fichero").value="";
        				setTimeout(function() {
        				    $('#mensaje').fadeOut('fast');
        				    window.location.href="menu.php";
        				    
        				}, 2500);
                    }
                   else
                    {
                        alert(msg);
                    }
    			});//fin done
    	    }
    });
});

function cargar(){
    var files = $("#fichero").get(0).files; // $("#fichero") slector por id de jquery  
    var envio = new FormData();
    for (var i = 0; i < files.length; i++) {
    envio.append("fichero0", files[i]);
    }
    var promise = $.ajax
            ({
            type: "POST",
            url: "ajaxFoto.php",
            contentType: false,
    		processData: false,
            data: envio,
            cache: false,
            dataType: "text"
          });// fin del ajax
            
    // la funcion Ajax me devuelve una promesa de javascript, algo que va a hacerse. Cuando el servidor responde y si la respuesta del servidor es exitosa ingresa al done y ejecuta la función que se le pasa
    promise.done(function (dato){ 
                    $('#error').hide();
                    console.log(dato);
                    var strIndex = dato.indexOf('Error');
                    if(strIndex == -1) {
                        //string no encontrado
                        $('#imagen').attr("src", "FotosTemp/" + files[0].name);
                         $('#error').html("");
                    } else {
                        //string encontrado
                        $('#error').html(dato);
                        $('#error').show();
                        $('#imagen').attr("src", "");
                        $('#fichero').val("");
                    }
                       
    });

}