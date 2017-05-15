<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8'>
		<title> 
			TABUADA 
		</title>
		<style>
			body {
				margin: 0 auto;
				width: 840px;
				font-family: Calibri;
			}
			tr,th {
				text-align: center;
			}
			th {
				color: white;
				background-color: red;
			}
		</style>
	</head>
	<body>
		<?php
			foreach ($_POST as $chave => $valor)
				$$chave = $valor;
		?>
		<?php
		while ($num_inicialtab <= $num_finaltab)
		{
			echo 
				"<table border='2'>
					<caption>TABUADA DO $num_inicialtab </caption>
					<tr>
						<th>
							FÓRMULA
						</th>
						<th>
							VALOR
						</th>
					</tr>";
					
		$num_inicialmult = $_POST ['num_inicialmult'];
		$num_finalmult = $_POST ['num_finalmult'];
		
		while ($num_inicialmult <= $num_finalmult)
		{
			echo 
				"<tr>
					<td>
						$num_inicialtab x $num_inicialmult
					</td>";
			echo		
					"<td>".
						$num_inicialtab * $num_inicialmult
					."</td>
				</tr>";
		$num_inicialmult++;
		}
		$num_inicialtab++;
		}
		echo "</table>";
		?>
	</body>
</html>