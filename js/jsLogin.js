  function login()
        {

            var elUsuario=$("#correo").val();
            var laClave=$("#clave").val();

            var funcionAjax =$.ajax({url:"ValidarUsuario.php", type:"post",
                data:{
                    usuario:elUsuario,
                    clave:laClave
                    }});


            funcionAjax.done(function(respuesta){

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
