<div>

    <h2>Data Siswa</h2>

    <?php

        $get_value = "";

        if (!empty($_GET["key"])) {
            $get_value = $_GET["key"];
        }

    ?>

    <form method="get">
        cari:<input type="text" 
            name="key" 
            placeholder="Nis atau Nama"
            value="<?php echo $get_value; ?>">
        <input type="submit" name="cari">
    </form>

</div>

<div>
    
    <?php

        include 'connection/connection.php';

        $sql ="SELECT * FROM siswa WHERE nis LIKE '%".$get_value."%' OR nama LIKE '%".$get_value."%' ";

        //untuk menyeleksi data error
        $query =mysqli_query($koneksi,$sql);

        $cek=mysqli_num_rows($query);

        if ($cek == null) {
            echo "Data Tidak ditemukan";
        }else{
    ?>
    <table border="1" id="tb-siswa">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
    <?php
        while($record =mysqli_fetch_assoc($query)){
    ?>
        <tr>
            <td><?php echo $record['id']; ?></td>
            <td><?php echo $record['nis']; ?></td>
            <td><?php echo $record['nama']; ?></td>
            <td><?php echo $record['alamat']; ?></td>
            <td><?php echo $record['tgl_lhr']; ?></td>
            <td>
                <a href="index.php?page=views/home/edit&get_id=<?php echo $record['id']; ?>">Edit</a>
                <span> | </span>
                <a href="controller/SiswaController.php?get_id=<?php echo $record['id']; ?>">Hapus</a>
            </td>
        </tr>
    <?php } } ?>
        </tbody>
    </table>

</div>