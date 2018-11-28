
function cargaCartas(nivel)
{
	//Desaparece el tablero

	$.ajax(
			{
			    type: "POST",
			    url: "php/cargaCartas.php",
			    data:
			    {
			    	dif:nivel
			    },
			    success: function (data) 
			    {
			    	$('#tablero').html(data);
		    	}
			});

	//Reaparece el tablero
}


$(document).ready(

	function()
	{	
		var dif = Number(prompt("Número de cartas por lado"));
		cargaCartas(dif);
	}
);
