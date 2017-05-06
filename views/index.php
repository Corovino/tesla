<?php 
include_once '../controller/usuario.php';
include_once 'partials/head.php';
$usr = new Usuario();
$result = $usr->getAllUsers();
?> 



<a href="cart.php">Vehiculos</a>
<h2>Usuarios sistema</h2>
<table>
	<thead>
		<tr>
			<td>nombre</td>
			<td>Aapellido</td>
			<td>cedula</td>
			<td>correo</td>
			<td>tel</td>
			<td>editar</td>
		</tr>
	</thead>
	<tbody>
		<?php 

		 		foreach($result as $row ){
		 			echo "<tr>";
		 			echo "<td>".$row['nombre']."</td>";
		 			echo "<td>".$row['apellido']."</td>";
		 			echo "<td>".$row['cedula']."</td>";
		 			echo "<td>".$row['correo']."</td>";
		 			echo "<td>".$row['tele']."</td>";
		 			echo "<td><button id=".$row['usuario_id'].">Editar</button></td>";
		 			echo "</tr>";
		 		}
		 ?>
	</tbody>
</table>

<h2>Agregar usuario</h2>

<form>
	<label>Nombre</label>
	<input type="text" name="nombre" >
	<br>
    <label>Apellido</label>
    <input type="text" name="apellido" >
    <br>
    <label>Teléfono</label>
	<input type="text" name="telefono" >
	<br>
	<label>Cédula</label>
	<input type="text" name="cedula" >
	<br>
	<label>Correo</label>
	<input type="text" name="correo" >
	<br>
	<button onclick="User.user();"> Enviar</button>
</form>

<?php 
include_once 'partials/footer.php';
?>
<script type="text/javascript" src="assets/js/user.js"></script>

