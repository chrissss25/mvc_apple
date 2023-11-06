<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
	<h1>apple christian david heredia heredia</h1>
	<table border="1">
		<tr>
			<td><strong>idproducto</strong></td>
			<td><strong>nombre</strong></td>
			<td><strong>marca</strong></td>
			<td><strong>precio</strong></td>
			<td><strong>categoria</strong></td>
			<td><strong>existencia</strong></td>
			<td><strong>modelo</strong></td>
			<td><strong>color</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["idproducto"]; ?></td>
						<td><?php echo $pd[$i]["nombre"]; ?></td>
						<td><?php echo $pd[$i]["marca"]; ?></td>
						<td><?php echo $pd[$i]["precio"]; ?></td>
						<td><?php echo $pd[$i]["categoria"]; ?></td>
						<td><?php echo $pd[$i]["existencia"]; ?></td>
						<td><?php echo $pd[$i]["modelo"]; ?></td>
						<td><?php echo $pd[$i]["color"]; ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>