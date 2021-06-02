<?php
include '../model/databasePemuda.php';
$db = new database();
?>


<h1> EDIT DATA PEMUDA</h1>
<h4>by anwar</h4>
<form action="../controls/prosesPemuda.php?aksi=update" method="post">
<?php
foreach($db->edit($_GET['nik']) as $d){
?>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">nik</label>
				<div class="col-md-6 col-sm-6 ">
					<input type="text" name="nik" value="<?php echo $d['nik']?>" class="form-control" size="4" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Nama </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="nama" value="<?php echo $d['nama']?>" class="form-control" required>
				</div>
			</div>
			<div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Jenis Kelamin</label>
				<div class="col-md-6 col-sm-6 ">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-secondary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki
						</label>
						<label class="btn btn-primary " data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
							<input type="radio" class="join-btn" name="jenis_kelamin"  value="Perempuan" required>Perempuan
						</label>
					</div>
				</div>
			</div> 
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">tanggal lahir </label>
				<div class="col-md-6 col-sm-6">
					<input type="date" name="tgl_lahir" value="<?php echo $d['tgl_lahir']?>" class="form-control" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">Agama </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="agama" value="<?php echo $d['agama']?>" class="form-control" required>
				</div>
			</div>
            <div class="item form-group">
				<label class="col-form-label col-md-3 col-sm-3 label-align">status bekerja </label>
				<div class="col-md-6 col-sm-6">
					<input type="text" name="status_bekerja" value="<?php echo $d['status_bekerja']?>" class="form-control" required>
				</div>
			</div>
            <div class="item form-group">=
				<div  class="col-md-6 col-sm-6 offset-md-3">
					<input type="submit" name="submit" class="btn btn-primary" value="Simpan"><br>
			</div>
			
		
		
		</form>
		
	</div>             
<?php 
}
?>
<center>
<tr><img src="assets/images/logo1.jpeg" width="200px" height="200px"></tr> <br>
</center>
