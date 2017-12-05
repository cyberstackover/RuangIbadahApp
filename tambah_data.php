<?php
     include 'ui.php';
	 include 'tambah_data_controller.php';
	 head('tambahdata');
	 if ($status=='tambah_sukses') {
		 echo "Data berhasil disimpan silahkan <a href=\"lihat_data.php\">lihat</a>";		 
	} else {  //Kondisi awal, edit atau error. Tampilkan form, nantinya bisa ditambahkan notif jika error

echo <<<EOB
		 <form action="tambah_data.php" method="post" data-ajax="false">
			<input type="hidden" name="id" value="{$rec['id']}">
			<label for="nama">Nama Lengkap:</label>
			<input data-clear-btn="true" type="text" name="nama" id="nama" required="required" placeholder="Contoh : Herwin" value="{$rec['nama']}" />
			<label for="nim">No KTP :</label>
			<input data-clear-btn="true" type="text" name="nim" id="nim" required="required" placeholder="Contoh : 625671357" value="{$rec['nim']}" />


   <label for="nim">Email :</label>
			<input data-clear-btn="true" type="text" name="email" id="email" required="required" placeholder="Contoh : herwin@windowslive.com" value="{$rec['email']}" />
            
            
   <label for="nim">No Telp :</label>
			<input data-clear-btn="true" type="text" name="email" id="email" required="required" placeholder="Contoh : 081939115544" value="{$rec['email']}" />

	<fieldset data-role="fieldcontain">
            <label for="kelamin">Jenis Kelamin :</label>
                <select name="kelamin" id="kelamin" data-native-menu="false" value="{$rec['jurusan']}">
		        <option>Pilih Salah Satu</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
            </fieldset>

			<fieldset data-role="fieldcontain">
            <label for="jurusan">Agama :</label>
                <select name="jurusan" id="jurusan" data-native-menu="false" value="{$rec['jurusan']}">
		        <option>Pilih Salah Satu</option>
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katholik">Katholik</option>
				<option value="Hindu">Hindu</option>
				<option value="Budha">Budha</option>
				<option value="Konghucu">Konghucu</option>
            </select>
            </fieldset>

          <label align="left" for="nama" class="ui-input-text">Password Anda :</label>
        <input data-clear-btn="true" type="password" name="nama" id="nama" required="required" placeholder="***************" value="" class="ui-input-text ui-body-c">

<input type="checkbox" name="checkbox-0" id="checkbox-mini-0" class="custom" data-mini="true" />
<label for="checkbox-mini-0">I agree</label>
			<button type="submit" name="submit" >Create</button>

		</form>
EOB;
	}
	foot();
?>