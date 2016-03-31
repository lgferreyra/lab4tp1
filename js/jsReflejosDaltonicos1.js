/*En la pantalla se mostrarán 6 botones de 
distintos colores,  al comenzar el juego se 
mostrara el texto de un color entre los 6 posibles
 para que el jugador sepa que botón tocar .Al tocar 
 el botón correcto se informara cuanto tiempo tardo.
*/
var ColorSecreto;
var tiempoInicio;
function comenzar()
{
	
	//Genero el número RANDOM entre 1 y 4
	 EleccionColorSecreto =Math.floor( Math.random()*6)+1;
		
		switch(EleccionColorSecreto)
		{
			case 1:
				
				ColorSecreto="rojo";
				break;
			case 2:
				ColorSecreto="azul";
				break;
			case 3:
				ColorSecreto="verde";
				break;
			case 4:
				ColorSecreto="amarillo";
				break;
			case 5:
				ColorSecreto="marron";
				break;
			case 6:
				ColorSecreto="celeste";
				break;
			

		}
		
document.getElementById('ColorElejido').value=ColorSecreto;

tiempoInicio=  new Date();
 tiempoInicio=tiempoInicio.getTime();

}//FIN DE LA FUNCIÓN
function Responder(colorParametro)
{
	
	if(colorParametro==ColorSecreto)
		{
			tiempoFinal= new Date();
			tiempoFinal=tiempoFinal.getTime();
			resultado=tiempoFinal-tiempoInicio;
			alert("su tiempo fue: "+resultado);
		}
		else
		{
			alert("incorrecto");
		}


}//FIN DE LA FUNCIÓN
