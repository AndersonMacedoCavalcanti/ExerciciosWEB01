
<html lang = "pt-BR">
	 <head>
		  <meta charset="UTF-8">
		  <title>Unidade 7</title>

	 </head>
	 <body>
		<?php

			$_data1 = new DateTime("2016-01-01");
			$_date2 = new DateTime("2020-01-04");
			$_intervalo = $_data1 -> diff($_date2);

		?>

		<pre>
			<?php
				print_r($_intervalo);
	         ?>
		</pre>

	    <pre>
		    <?php
			    print_r($_intervalo -> format("%a"));
		    ?>
	    </pre>

	 </body>
</html>