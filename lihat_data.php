<?php
     include 'ui.php';
	 include 'mhsdb.php';

	 head('lihatdata');	 	
	 $mhsdb = new MhsDb();
	 if ($_SERVER['REQUEST_METHOD']=='GET') {
		if (isset($_GET['namacari'])) {
          $namacari = $_GET['namacari']; 		
		  $res = $mhsdb->getSearchData($namacari);	
		} else {
		  $res = $mhsdb->getAllData();
		}
	 } 

echo <<<EOB
	 <div class="choice_list">
		<ul data-role="listview" data-inset="true" >
EOB;
	//mysqli
	while($row = $res->fetch_assoc()) {

        echo "<li> <a href=\"lihat_data_mhs.php?id={$row['id']}\"  data-transition=\"slidedown\"> <h3>{$row["nama"]}({$row["nim"]}) </h3></a></li>";

     }	 

echo <<<EOB
		</ul>
	 </div>
EOB;

	 foot();
?>