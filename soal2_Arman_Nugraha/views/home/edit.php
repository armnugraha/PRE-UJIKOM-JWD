<?php
    include('connection/connection.php');
    
    $id = $_GET['get_id'];

    $show = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");

    if(mysqli_num_rows($show) == 0){
            //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
        echo '<script>window.history.back()</script>';
        
    }else{
        $data = mysqli_fetch_assoc($show);
    }
?>

<div>

    <form action="controller/SiswaController.php" method="post">
            
        <input type="hidden" name="get_id" value="<?php echo $data['id']; ?>">

        <div>
            <div>
                <h3>Siswa</h3>
            </div>

            <div>

                <div>
                    <label>NIS</label>
                    <div>
                        <input type="number" name="nis" placeholder="NIS" required value="<?php echo $data['nis']; ?>"  />
                    </div>
                </div>

                <div>
                    <label>Nama</label>
                    <div>
                        <input type="text" name="nama" placeholder="Nama" required value="<?php echo $data['nama']; ?>"  />
                    </div>
                </div>

                <div>
                    <label>Alamat</label>
                    <div>
                        <input type="text" name="alamat" placeholder="Alamat" required value="<?php echo $data['alamat']; ?>"  />
                    </div>
                </div>

                <div>
                    <label>Tanggal Lahir</label>
                    <div>
                        <input type="date" name="tgl_lhr" required value="<?php echo $data['tgl_lhr']; ?>"  />
                    </div>
                </div>

                <div>
                    <button name="edit-siswa">Ubah</button>
                </div>

            </div>
        </div>
    </form>
</div>