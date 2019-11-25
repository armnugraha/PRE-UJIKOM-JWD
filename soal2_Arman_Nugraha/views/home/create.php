<?php
    // error_reporting(0);
    include('connection/connection.php');
?>

<div>
    <h2>Tambah Siswa</h2>
</div>

<div>

    <form action="controller/SiswaController.php" method="post">

	    <div>
	        <div>
	            <h3>Siswa</h3>
	        </div>

	        <div>

	            <div>
	                <label>NIS</label>
	                <div>
	                    <input type="number" name="nis" placeholder="NIS" required />
	                </div>
	            </div>

	            <div>
	                <label>Nama</label>
	                <div>
	                    <input type="text" name="nama" placeholder="Nama" required />
	                </div>
	            </div>

	            <div>
	                <label>Alamat</label>
	                <div>
	                    <input type="text" name="alamat" placeholder="Alamat" required />
	                </div>
	            </div>

	            <div>
	                <label>Tanggal Lahir</label>
	                <div>
	                    <input type="date" name="tgl_lhr" required />
	                </div>
	            </div>

	            <div>
	            	<button name="save">Simpan</button>
	            </div>


	        </div>
	    </div>

    </form>

</div>