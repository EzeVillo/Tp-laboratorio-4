<?php
require "Header.php";
?>

<h1>Listado de proveedores</h1>
<?php
if (empty($this->Proveedores)) {
?>
	<p>No hay proveedores</p>
<?php
} else {
?>
	<table>
		<tr>
			<th>Id</th>
			<th>Nombre</th>
		</tr>

		<?php
		foreach ($this->Proveedores as $i) {
		?>
			<tr>
				<td><?= $i['Id_proveedor'] ?></td>
				<td><?= $i['Nombre'] ?></td>
			</tr>
		<?php
		}
		?>

	</table>
<?php
}

require "Footer.php";
