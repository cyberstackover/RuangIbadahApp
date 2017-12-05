<?php
	include 'ui.php';
	head('caridatamhs');
echo <<<EOB
		 <form action="lihat_data.php" method="get" data-ajax="false">
			<label for="nama">Nama yg dicari :  </label>
			<input type="text" name="namacari" id="namacari" value="" />
			<button type="submit">Cari!</button> 
		</form>
EOB;
	foot();
?>