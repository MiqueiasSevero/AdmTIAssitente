
	<nav>
		
		<?php
            include("nav.php");

    ?>

	</nav>
   <?php

             include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");

    ?>

