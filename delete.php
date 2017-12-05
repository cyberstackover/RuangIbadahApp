<?php
	include 'ui.php';
	include 'mhsdb.php';
	head('deletedatamhs');
	if ($_SERVER['REQUEST_METHOD']=='GET') {     	
		$id = $_GET['id'];
		$mhsdb = new MhsDb();
		$mhsdb->delete($id);
		echo "Data berhasil dihapus silahkan <a href=\"lihat_data.php\">lihat</a>";
	}
	foot();
?>