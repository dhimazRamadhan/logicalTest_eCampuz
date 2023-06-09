<?php
    $sql = "SELECT a.mhs_nama, MAX(b.nilai), c.mk_nama
            FROM tb_mahasiswa a JOIN tb_mahasiswa_nilai b on a.mhs_id = b.mhs_id
            JOIN tb_matakuliah c on b.mk_id = c.mk_id
            WHERE c.mk_kode = 'MK303'";