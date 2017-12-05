<?php
//diinclude di controller
//koneksi ke db	
include 'db.php';
    class MhsDb extends Db {	

		//versi mysqli

		function update($item) {
			if(!self::$dbh) $this->connect();			

			if (!(self::$dbh->query("UPDATE db_mhs set nama='{$item['nama']}', nim='{$item['nim']}', jurusan='{$item['jurusan']}', email='{$item['email']}' where id= {$item['id']}"))){
			   printf("Error: %s\n", self::$dbh->error);
			   exit();			   
			}
		}

		function insert($item) {
			if(!self::$dbh) $this->connect();			
			$nim  =  $item['nim'];
			$nama =  $item['nama'];
			$jurusan =  $item['jurusan'];
			$email =  $item['email'];
			if (!(self::$dbh->query("INSERT INTO db_mhs(nim,nama,jurusan,email) VALUES ('$nim','$nama','$jurusan','$email')"))) {
			   printf("Error: %s\n", self::$dbh->error);
			   exit();			   
			}
		}

		function delete($id) {
			if(!self::$dbh) $this->connect();			
			if (!(self::$dbh->query("delete from db_mhs where id = $id"))) {
			   printf("Error: %s\n", self::$dbh->error);
			   exit();			   
			}
		}

		function getSearchData($nama) {
			if(!self::$dbh) $this->connect();
			$res = self::$dbh->query("SELECT id,nim,nama,jurusan,email FROM db_mhs where nama like ('%{$nama}%')");
			return $res;
		}

		function getAllData() {
			if(!self::$dbh) $this->connect();
			$res = self::$dbh->query("SELECT id,nim,nama,jurusan,email FROM db_mhs");
			return $res;
			//cara memproses $res : while($row = $res->fetch_assoc()) {
		}

		function getRec($id) {
		   if(!self::$dbh) $this->connect();
		   $res = self::$dbh->query("SELECT id,nim,nama,jurusan,email FROM db_mhs where id=$id");
		   return $res;
		}
	}	
?>