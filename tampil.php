<?php

include '../model/databasePemuda.php';
$db=new database();
?>
<div class="container" style="margin-top:20px">
		<center><font size="6">Data PERSATUAN PEMUDA KELURAHAN BANGKO KANAN</font></center>
		<hr>
		<a href="indexs.php?page=tambah_mhs"><button class="btn btn-dark right">Tambah Data</button></a>
		<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>  
					<th>NIK</th>
					<th>Nama </th>
					<th>Jenis Kelamin</th>
					<th>TANGGAL LAHIR</th>
					<th>AGAMA</th>
					<th>STATUS BEKERJA</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php			
				$no =1;
                foreach ($db->tampil_data()as $x){
                ?>
						<tr>
							<td><?php echo $no++; ?></td>
							<td><?php echo $x['nik']; ?></td>
                            <td><?php echo $x['nama']; ?></td>
                            <td><?php echo $x['jenis_kelamin']; ?></td>
                            <td><?php echo $x['tgl_lahir']; ?></td>
                            <td><?php echo $x['agama']; ?></td>
                            <td><?php echo $x['status_bekerja']; ?></td>
							
							<td>
							
                                <a href="indexs.php?page=edit_mhs&nik=<?php echo $x['nik'];?>&aksi=edit"> Edit</a> <a>||</a>
                                 <a href="../controls/prosesPemuda.php?nik=<?php echo $x['nik'];?>&aksi=hapus"> Hapus</a>
                            </td>
						</tr>
					<?php               
			}
				?>
			<tbody>
		</table>
	</div>
	</div>
