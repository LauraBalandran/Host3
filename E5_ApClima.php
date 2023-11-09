<HTML>
<HEAD> <TITLE> Selector  clima</TITLE></HEAD>
<BODY Background="nube.jpg">
<center>
<marquee direction="left" behavior="scroll" scrollamount="3"> Revisa tu clima diariamente </marquee> <br>
<label for="clima"> Seleccione el clima de hoy: </label>

<select id="clima">
	<option value=""> --Haga una selección -- </option>
	<option value="soleado"> <h1> Soleado </h1> </option>
	<option value="lluvioso"> Lluvioso </option>
	<option value="nublado"> Nublado </option>
</select>
<p>

</center>

<script>

var seleccionar = document.querySelector('Select');
var parrafo = document.querySelector('p');

seleccionar.addEventListener('change',establecerClima);

function establecerClima(){
	var eleccion = seleccionar.value;
	
	if (eleccion == 'soleado'){
		parrafo.textContent = 'El dia esta agradable y soleado hoy, puedes usar shorts';
	} else if (eleccion == 'lluvioso'){
		parrafo.textContent = 'HOla esta lloviendo !! usa impermeable';
	} else if (eleccion == 'nublado'){
		parrafo.textContent = 'Hola el cielo esta grisaseo, refrescará';
	}else {
		parrafo.textContent = '';
	}
	
}


</script>
<?php


?>


</BODY>
</HTML>