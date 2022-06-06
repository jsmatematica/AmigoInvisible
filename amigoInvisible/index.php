
<script src="http://code.jquery.com/jquery-latest.js">
</script>
<script>
	$(document).ready(function() {
		$('#boton').click(function(event) {
			var nombreVar = $('#nombre').val();
			// Si en vez de por post lo queremos hacer por get, cambiamos el $.post por $.get
			$.post('agregar.php', {
				nombre : nombreVar
			}, function(responseText) {
				$('#mensaje').html(responseText);
			});
		});
	});
</script>
<?php
session_start();
$arr = array();
$_SESSION['arreglo'] = $arr;
?>
<form name="formulario" method="post">

<div>Nombre: <input type="text" name="nombre" value="" id="nombre" required></div>
</form>
<button id="boton">AGREGAR</button>
<div id="mensaje"></div>

<button id="sortear">Sortear</button>
<script src="http://code.jquery.com/jquery-latest.js">
</script>
<script>
	$(document).ready(function() {
		$('#sortear').click(function(event) {
			// Si en vez de por post lo queremos hacer por get, cambiamos el $.post por $.get
			$.post('sortear.php', {
			}, function(responseText) {
				$('#sorteo').html(responseText);
			});
		});
	});
</script>
<div id="sorteo"></div>





