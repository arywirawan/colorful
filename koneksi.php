    <?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_pengaduan");

    function getdata($query)
    {
        global $koneksi;
        $hasil = mysqli_query($koneksi, $query);
        $data = [];
        while ($data_set = mysqli_fetch_assoc($hasil)) {
            $data[] = $data_set;
        }
        return $data;
    }

    function insertData($nama_tabel, $kolom, $nilai)
    {
        global $koneksi;
        $query = "INSERT INTO " . $nama_tabel . " " . $kolom . "VALUES " . $nilai;
        mysqli_query($koneksi, $query);
        $row = mysqli_affected_rows($koneksi);
        return $row;
    }

    function updateData($nama_tabel, $nilai_update, $namakolom, $nilaikolom)
    {
        global $koneksi;
        $query = "UPDATE " . $nama_tabel . " SET " . $nilai_update . " WHERE " . $namakolom . "=" . $nilaikolom;
        mysqli_query($koneksi, $query);
        $row = mysqli_affected_rows($koneksi);
        return $row;
    }

    function deleteData($nama_tabel, $namakolom, $nilaikolom)
    {
        global $koneksi;
        $query = "DELETE FROM " . $nama_tabel . " WHERE " . $namakolom . "=" . $nilaikolom;
        mysqli_query($koneksi, $query);
        $row = mysqli_affected_rows($koneksi);
        return $row;
    }
    function tambahAkun($nama, $email, $username, $password, $no_telp, $alamat, $member)
    {
        global $koneksi;
        $query = "INSERT INTO tb_anggota (nama, email, username, password, no_telp, alamat) VALUES ('$nama','$email','$username','$password','$no_telp','$alamat')";
        $query2 = "INSERT INTO tb_user (username, password, level) VALUES ('$username','$password','$member')";
        mysqli_query($koneksi, $query);
        mysqli_query($koneksi, $query2);
        $row = mysqli_affected_rows($koneksi);
        return $row;
    }


    ?>

  