<?php
     include 'ui.php';
	 include 'mhsdb.php';

	 head('lihatdatamhs');	 	

	 $mhsdb = new MhsDb();
	 $res = $mhsdb->getRec($_GET['id']);

	//mysqli
	if($row = $res->fetch_assoc()) {

echo <<<EOB
<div class="ui-grid-a">
	<div class="ui-block-a"><a href="tambah_data.php?id={$row['id']}" data-role="button">Update</a></div>
	<div class="ui-block-b"><a href="#popupDialog" data-rel="popup" data-position-to="window" data-transition="pop" data-role="button">Delete</a>
    <div data-role="popup" id="popupDialog" data-overlay-theme="b" data-theme="b" data-dismissible="false" style="max-width:400px;">
    <div data-role="header" data-theme="a">
    <h1>PERINGATAN!!!</h1>
    </div>
    <div role="main" class="ui-content">
        <h3 class="ui-title">Anda yakin ingin hapus?</h3>
        <a href="delete.php?id={$row['id']}" data-role="button" data-transition="flow">Delete</a>
		<a href="#" data-role="button" data-rel="back">Cancel</a>
    </div>
</div>

</div><!-- /grid-a -->
EOB;
        echo "No KTP     :  {$row["nim"]} <br>"; 
		echo "Nama    : {$row["nama"]} <br>";
		echo "Agama :  {$row["jurusan"]} <br>"; 
		echo "Email   : {$row["email"]}";
     }	 
	 foot();
?>