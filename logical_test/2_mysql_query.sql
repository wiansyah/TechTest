SELECT mhs_nama FROM tb_mahasiswa_nilai
    JOIN tb_matakuliah ON tb_mahasiswa_nilai.mk_id = tb_matakuliah.mk_id
    JOIN tb_mahasiswa ON tb_mahasiswa_nilai.mhs_id = tb_mahasiswa.mhs_id
    WHERE mk_kode = "MK303" ORDER BY nilai DESC LIMIT 1;