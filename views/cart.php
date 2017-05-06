<?php 
include_once '../controller/cart.php';
include_once 'partials/head.php';
$vhc = new Cart();
$result = $vhc->getAllCart();
?>
<a href="index.php">Home</a>

<h2>Vehiculos sistema</h2>

<table>
	<thead>
		<tr>
			<td>Marca  </td>
			<td>Modelo</td>
			<td>Placa</td>
			<td>Capacidad</td>
			<td>Editar</td>
		</tr>
	</thead>
	<tbody>
	   <?php 

	   	  foreach ($result as  $row) {
	   	  	echo "<tr id='id_".$row['vehiculo_id']."' style='cursor:pointer'>";
	   	  	echo "<td contenteditable='true'><p>".$row['marca']."</p></td>";
	   	  	echo "<td contenteditable='true'><p>".$row['modelo']."</p></td>";
	   	  	echo "<td contenteditable='true'> <p>".$row['placa']."</p></td>";
	   	  	echo "<td contenteditable='true'><p>".$row['capacidad']."</p></td>";
	   	  	echo "<td ><button class='edit' id_edit=".$row['vehiculo_id'].">Editar</button></td>";
	   	  	echo "</tr>";

	   	  }
	   ?>
	   <tr></tr>
	</tbody>
</table>


<h2>Agregar usuario</h2>

<form>
	<label>Marca</label>
	<input type="text" name="marca" >
	<br>
    <label>Modelo</label>
    <input type="text" name="modelo" >
    <br>
    <label>Placa</label>
	<input type="text" name="placa" >
	<br>
	<label>Capacidad</label>
	<input type="text" name="capacidad" >
	<br>
	<br>
	<button onclick="Cart.cart();"> Enviar</button>
</form>

<?php 
include_once 'partials/footer.php';
?>
<script type="text/javascript" src="assets/js/cart.js"></script>
<script type="text/javascript" src="assets/js/editar.js"></script>








