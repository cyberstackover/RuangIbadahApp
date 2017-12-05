<?php
    //diinclude di tambah_data.php
	include 'mhsdb.php';
	$status="null";	
	if($_SERVER['REQUEST_METHOD']=='POST') {   //user menekan submit
	   $item['id']   = $_POST['id'];
	   $item['nim']  =  $_POST['nim'];
	   $item['nama'] =  $_POST['nama'];
	   $item['jurusan'] =  $_POST['jurusan'];
	   $item['email'] =  $_POST['email'];
	   if ($item['id']==-1) {
		   //-1 artinya data baru insert data ke database   
		   $mhsdb = new MhsDb();
		   $mhsdb->insert($item);
	   } else
	   {
		   //update
		   $mhsdb = new MhsDb();				   
		   $mhsdb->update($item);
	   }
	   $status='tambah_sukses';	   
	} else
	if ($_SERVER['REQUEST_METHOD']=='GET') {  //persiapan insert atau update
	   if  ($_GET['id']=="add") { 
		  //insert
	      $rec['id']   = -1;  //kode untuk insert	
		  $rec['nim']  = "";  
		  $rec['nama'] = "";
		  $rec['jurusan']  = "";  
		  $rec['email'] = "";
	   }
	   else {
		   //proses edit/update
		   $mhsdb = new MhsDb();
		   $res = $mhsdb->getRec($_GET['id']);
		   if($row = $res->fetch_assoc()) { 
			   $rec['id']   = $row['id'];	
			   $rec['nim']  = $row['nim'];  
			   $rec['nama'] = $row['nama'];
			   $rec['jurusan']  = $row['jurusan'];  
			   $rec['email'] = $row['email'];
		   }
	   }	   
	}

?>