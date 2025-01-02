<html>

<head>
    <title>Pendaftaran</title>
    <style>

        hr {
            margin-bottom: 10px;

        }

        table {
            border: solid black 2px;
            border-collapse: collapse;



        }

        table th {
            border: solid black 2px;
            color: white;
            padding: 10px 20px;
            background: blue;
        }

        table td {
            border: solid black 2px;
            padding: 15px;
            text-align: center;

        }

        #btn_tambah {
            display: inline-block;
            margin-bottom: 10px;
            text-decoration: none;
            background: black;
            color: white;
            padding: 8px 10px;
            border-radius: 10px;

        }

        #btn_tambah:hover {
            background: navy;
            color: white;

        }
        button{
            width: 60px;
            height: 30px;
            padding: 5px;
            color: white;
            font-weight: bold;
            background-color: green;
            border-radius: 5px;

        }
        .thapus{
            background-color: red;
        }

    </style>
</head>

<body>
    <div class="container">
    <h1>Data Pendaftaran</h1>
    <hr>
    <a href="index.php?ke=daftar_tambah" id="btn_tambah">Tambah Data</a>
    <table>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Nik</th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>NO DG</th>
            <th>Jenis Kendaraan</th>
            <th>Input KTP</th>
            <th>Input STNK</th>
            <th>NO antrian</th>
            <th>aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $hasil = mysqli_query($konek, "SELECT * FROM tbl_wp");
        ?>

        <?php if (mysqli_num_rows($hasil) == 0) : ?> 
            <tr><td colspan='12'>Data Belum Tersedia</td></tr>
        <?php else : ?>
          <?php while ($data = mysqli_fetch_array($hasil))  : ?>  

              <tr>
            <td width="30px;"><?php echo $no; ?></td>
            <td><?php echo $data['nma_wp']; ?></td>
            <td><?php echo $data['nik_wp']; ?></td>
            <td><?php echo $data['jns_kel']; ?></td>
            <td><?php echo $data['alamat_wp']; ?></td>
            <td><?php echo $data['no_dg']; ?></td>
            <td><?php echo $data['jns_kdrn']; ?></td>
            <td><?php echo $data['input_stnk']; ?></td>
            <td><?php echo $data['input_ktp']; ?></td>
            <td><?php echo $data['no_antrian']; ?></td>
           

            <td class="Aksi" width="20%" >
            <button class="thapus">
                <a href="hapus.php?id=<?php echo $data["id_wp"]; ?>" onclick = "return confirm('yakin ingin menghapus data ini?')">hapus</a>
            </button>

            <button class="tubah">
                <a href="index.php?ke=ubah&a=<?php echo $data["id_wp"]; ?>">ubah</a>
            </button>

        </td>
        </tr> 
         
        <?php $no++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    </table>

   
</div>
</body>

</html>