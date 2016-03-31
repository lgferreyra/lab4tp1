  function login()
        {
             $("#MensajeError").val("Verificando... ");
           
            DatosLogin={};
            DatosLogin.usuario= $("#correo").val();
            DatosLogin.clave=$("#clave").val();
           

            var funcionAjax =$.ajax({
                url:"ValidarUsuario.php",
                 type:"post",
                data: DatosLogin               
                });


            funcionAjax.done(function(respuesta){
                alert(respuesta);
                if(respuesta=="correcto")
                {
                    $("#MensajeError").val("");
                    window.location.href="menu.php";            // vamos al menu
                }
                else
                {
                    $("#MensajeError").val("NO esta registrado... ");

                    // mostrar mensaje "no esta en la base"
                    //vamos al registro
                    //window.location.href="registroJquery.php";
                }
        });



        }


  function GuardarUsuarioRapido()
        {
             $("#MensajeError").val("Verificando Correo... ");
          // alert($("#correoRegistro").val());
            DatosDelRegistro={};
            DatosDelRegistro.nombre= $("#nombre").val();
            DatosDelRegistro.apellido=$("#apellido").val();
            DatosDelRegistro.correo=$("#correoRegistro").val();
            DatosDelRegistro.clave=$("#claveRegistro").val();
           
            console.log(DatosDelRegistro);



            var funcionAjax =$.ajax({
                url:"ValidarCorreo.php",
                 type:"post",
                data: DatosDelRegistro               
                });

            funcionAjax.done(function(respuesta){
                alert(respuesta);
                console.log(respuesta);
                if(respuesta=="correcto")
                {
                    $("#MensajeError").val("");
                    //window.location.href="menu.php";            // vamos al menu
                }
                else
                {
                    $("#MensajeError").val("El Correro ya existe. ");

                    // mostrar mensaje "no esta en la base"
                    //vamos al registro
                    //window.location.href="registroJquery.php";
                }
        });



        }
