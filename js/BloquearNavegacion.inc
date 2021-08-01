	<script>
			document.onkeydown = desabilitar; // Teclas Precionada 
document.onselectstart = selecionar; //Anular la Selecion de Texto 
document.oncontextmenu = selecionar; //Anular el Boton Der del Mouse 

function selecionar() { 
return false; 
} 

function desabilitar() { 
// Combinacion de Teclas con el Control 
if (event.ctrlKey) { 
switch(window.event.keyCode) { 
case 67: //Ctrl-C -- Copiar --- 
case 86: //Ctrl-V -- Pegar --- 
event.keyCode = 0; 
return false; 

// aqui puede poner todas las tecla de combinacion que tiene programado el ie, para anularlo. 

default: 
break; 
} 
} 
} 
			 </script>