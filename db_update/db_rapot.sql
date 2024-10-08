-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 08 Okt 2024 pada 06.00
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rapot`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_catatan`
--

CREATE TABLE `tabel_catatan` (
  `id_catatan` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `catatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_data_sekolah`
--

CREATE TABLE `tabel_data_sekolah` (
  `id_data_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `npsn` varchar(20) NOT NULL,
  `nss` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `kota` varchar(30) NOT NULL,
  `provinsi` varchar(30) NOT NULL,
  `website` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `kepala_sekolah` varchar(50) NOT NULL,
  `nip_kepsek` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_data_sekolah`
--

INSERT INTO `tabel_data_sekolah` (`id_data_sekolah`, `nama_sekolah`, `npsn`, `nss`, `alamat`, `kelurahan`, `kecamatan`, `kota`, `provinsi`, `website`, `email`, `kepala_sekolah`, `nip_kepsek`) VALUES
(1, 'sekolah abc', '123', '123', 'tangerang', 'tangerang', 'tangerang', 'tangerang 123', 'banten', 'abc.sch.id', 'abc@gmail.com', 'Pak Budi M.pd', '123');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_eskul`
--

CREATE TABLE `tabel_eskul` (
  `id_eskul` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_eskul` varchar(50) NOT NULL,
  `tahun_pelajaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_guru`
--

CREATE TABLE `tabel_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `alamat` text NOT NULL,
  `mapel` varchar(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_guru`
--

INSERT INTO `tabel_guru` (`id_guru`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `alamat`, `mapel`, `username`, `password`, `hak_akses`) VALUES
(2, 'ujang', 'Perempuan', 'bandung', '2024-09-17', '123', 'alamat1', 'MTK', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'Guru'),
(3, 'budi', 'Perempuan', 'bandung', '2024-09-17', '123', 'alamat', 'MTK', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'Walas'),
(4, 'Veri', 'Perempuan', 'bandung', '2024-09-17', '123', 'alamat', 'MTK', 'walas', 'a8cc0f2332d8c66d6e2b1b823961bb5d', 'Walas'),
(5, 'Steve', 'Laki Laki', 'bandung', '2024-09-17', '123', 'alamat', 'MTK', 'kepsek', '8561863b55faf85b9ad67c52b3b851ac', 'Kepsek');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `tingkatan` varchar(10) NOT NULL,
  `walas` varchar(50) NOT NULL,
  `tahun_pelajaran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kelas`
--

INSERT INTO `tabel_kelas` (`id_kelas`, `nama_kelas`, `tingkatan`, `walas`, `tahun_pelajaran`) VALUES
(2, '10', 'X', 'budi', '1'),
(3, '11', 'XI', '123', '1'),
(4, '12', 'XII', '123', '1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kkm`
--

CREATE TABLE `tabel_kkm` (
  `id_kkm` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `nilai_kkm` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_kkm`
--

INSERT INTO `tabel_kkm` (`id_kkm`, `nama_kelas`, `nama_guru`, `mapel`, `nilai_kkm`) VALUES
(1, '7', 'Ujang', 'Bahasa Indonesia', '85');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `singkatan` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_mapel`
--

INSERT INTO `tabel_mapel` (`id_mapel`, `nama_mapel`, `singkatan`) VALUES
(1, 'Bahasa Indonesia', 'Bhs. Indo1'),
(2, 'Matematika', 'MTK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai_mapel`
--

CREATE TABLE `tabel_nilai_mapel` (
  `id_nmp` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nilai_pengetahuan` int(3) NOT NULL,
  `nilai_keterampilan` int(3) NOT NULL,
  `nilai_pts` int(3) NOT NULL,
  `nilai_pas` int(3) NOT NULL,
  `deskripsi` text NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_nilai_mapel`
--

INSERT INTO `tabel_nilai_mapel` (`id_nmp`, `nis`, `nama_siswa`, `nilai_pengetahuan`, `nilai_keterampilan`, `nilai_pts`, `nilai_pas`, `deskripsi`, `mapel`, `id_guru`, `nama_guru`) VALUES
(1, 7, '', 80, 80, 80, 80, '0', 'IPA', 1, ''),
(2, 1, 'nina', 90, 90, 95, 90, '90', 'IPA', 1, ''),
(3, 1, 'nina', 90, 90, 95, 90, '90', 'IPS', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai_sosial`
--

CREATE TABLE `tabel_nilai_sosial` (
  `id_ns` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `predikat` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_nilai_sosial`
--

INSERT INTO `tabel_nilai_sosial` (`id_ns`, `nis`, `nama_siswa`, `predikat`, `deskripsi`) VALUES
(1, '1', 'nina', 'A', 'BAIK SEKALI'),
(2, '2', 'nani123', 'A ', 'BAIK'),
(3, '5', 'budi', 'A', 'BAIK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai_spiritual`
--

CREATE TABLE `tabel_nilai_spiritual` (
  `id_nsp` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `predikat` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_nilai_spiritual`
--

INSERT INTO `tabel_nilai_spiritual` (`id_nsp`, `nis`, `nama_siswa`, `predikat`, `deskripsi`) VALUES
(1, 3, 'budi', 'A', 'Baik'),
(2, 1, 'nina', 'A', 'BAIK'),
(3, 2, 'nani123', 'A', 'Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_prestasi`
--

CREATE TABLE `tabel_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_prestasi` text NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_prestasi`
--

INSERT INTO `tabel_prestasi` (`id_prestasi`, `nis`, `nama_siswa`, `jenis_prestasi`, `keterangan`) VALUES
(1, 1, 'nina', 'LOMBA CERDAS CERMAT', 'JUARA 1 LOMBA CERDAS CERMAT KOTA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_siswa`
--

CREATE TABLE `tabel_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `jenis_pendaftaran` varchar(20) NOT NULL,
  `penerimaan_data` date NOT NULL,
  `nis` int(11) NOT NULL,
  `nisn` int(11) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `agama` varchar(15) NOT NULL,
  `status_keluarga` varchar(20) NOT NULL,
  `anak_ke` varchar(5) NOT NULL,
  `alamat` text NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `pekerjaan_ayah` varchar(50) NOT NULL,
  `pekerjaan_ibu` varchar(50) NOT NULL,
  `nama_wali` varchar(50) NOT NULL,
  `pekerjaan_wali` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `jenis_kelamin`, `jenis_pendaftaran`, `penerimaan_data`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `anak_ke`, `alamat`, `telepon`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `pekerjaan_wali`, `username`, `password`, `hak_akses`) VALUES
(4, 'nina', 'X', 'Laki - Laki', 'Siswa Baru', '2024-07-11', 1, 1, 'bandung', '2024-07-02', 'Islam', 'Anak Kandung', '1', 'alamt', '123', 'ayah', 'ibu', 'kerja ayah', 'kerja ibu', '', '', '12345', '02257f912e3641aa7ae2f0a0cb941466', 'siswa'),
(5, 'nani123', 'XI', 'Laki - Laki', 'Siswa Baru', '2024-07-11', 2, 2, 'bandung', '2024-07-02', 'Islam', 'Anak Kandung', '1', 'alamt', '123', 'ayah', 'ibu', 'kerja ayah', 'kerja ibu', '', '', '2', '02257f912e3641aa7ae2f0a0cb941466', 'siswa'),
(6, 'budi', 'X', 'Laki Laki', 'Baru', '2024-07-05', 3, 3, 'tangerang', '2024-09-25', 'islam', 'anak', '1', 'tangerang', '0812345', 'ayah', 'ibu', 'kerja', 'kerja', '-', '-', 'budi', 'budi', 'siswa'),
(7, 'budi', 'X', 'Laki Laki', 'Baru', '2024-07-05', 4, 4, 'tangerang', '2024-09-25', 'islam', 'anak', '1', 'tangerang', '0812345', 'ayah', 'ibu', 'kerja', 'kerja', '-', '-', 'budi', 'budi', 'siswa'),
(8, 'budi', 'XII', 'Laki Laki', 'Baru', '2024-07-05', 5, 5, 'tangerang', '2024-09-25', 'islam', 'anak', '1', 'tangerang', '0812345', 'ayah', 'ibu', 'kerja', 'kerja', '-', '-', 'budi', 'budi', 'siswa'),
(9, 'budi', 'XI', 'Laki Laki', 'Baru', '2024-07-05', 6, 6, 'tangerang', '2024-09-25', 'islam', 'anak', '1', 'tangerang', '0812345', 'ayah', 'ibu', 'kerja', 'kerja', '-', '-', 'budi', 'budi', 'siswa'),
(10, 'budi', 'XII', 'Laki Laki', 'Baru', '2024-07-05', 7, 7, 'tangerang', '2024-09-25', 'islam', 'anak', '1', 'tangerang', '0812345', 'ayah', 'ibu', 'kerja', 'kerja', '-', '-', 'budi', 'budi', 'siswa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tahun_pelajaran`
--

CREATE TABLE `tabel_tahun_pelajaran` (
  `id_tapel` int(11) NOT NULL,
  `tahun_pelajaran` text NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_tahun_pelajaran`
--

INSERT INTO `tabel_tahun_pelajaran` (`id_tapel`, `tahun_pelajaran`, `semester`) VALUES
(2, '2023/2024', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tidak_hadir`
--

CREATE TABLE `tabel_tidak_hadir` (
  `id_th` int(11) NOT NULL,
  `nis` int(11) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `sakit` int(5) NOT NULL,
  `izin` int(5) NOT NULL,
  `alpa` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_tidak_hadir`
--

INSERT INTO `tabel_tidak_hadir` (`id_th`, `nis`, `nama_siswa`, `sakit`, `izin`, `alpa`) VALUES
(1, 1, 'nina', 2, 2, 2),
(2, 3, 'budi', 2, 1, 1),
(3, 4, 'budi', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `last_login` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_user`
--

INSERT INTO `tabel_user` (`id_user`, `nama_lengkap`, `username`, `password`, `hak_akses`, `last_login`) VALUES
(1, 'admin13', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-07-05 09:34:34');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tabel_catatan`
--
ALTER TABLE `tabel_catatan`
  ADD PRIMARY KEY (`id_catatan`);

--
-- Indeks untuk tabel `tabel_data_sekolah`
--
ALTER TABLE `tabel_data_sekolah`
  ADD PRIMARY KEY (`id_data_sekolah`);

--
-- Indeks untuk tabel `tabel_eskul`
--
ALTER TABLE `tabel_eskul`
  ADD PRIMARY KEY (`id_eskul`);

--
-- Indeks untuk tabel `tabel_guru`
--
ALTER TABLE `tabel_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indeks untuk tabel `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indeks untuk tabel `tabel_kkm`
--
ALTER TABLE `tabel_kkm`
  ADD PRIMARY KEY (`id_kkm`);

--
-- Indeks untuk tabel `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `tabel_nilai_mapel`
--
ALTER TABLE `tabel_nilai_mapel`
  ADD PRIMARY KEY (`id_nmp`);

--
-- Indeks untuk tabel `tabel_nilai_sosial`
--
ALTER TABLE `tabel_nilai_sosial`
  ADD PRIMARY KEY (`id_ns`);

--
-- Indeks untuk tabel `tabel_nilai_spiritual`
--
ALTER TABLE `tabel_nilai_spiritual`
  ADD PRIMARY KEY (`id_nsp`);

--
-- Indeks untuk tabel `tabel_prestasi`
--
ALTER TABLE `tabel_prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indeks untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indeks untuk tabel `tabel_tahun_pelajaran`
--
ALTER TABLE `tabel_tahun_pelajaran`
  ADD PRIMARY KEY (`id_tapel`);

--
-- Indeks untuk tabel `tabel_tidak_hadir`
--
ALTER TABLE `tabel_tidak_hadir`
  ADD PRIMARY KEY (`id_th`);

--
-- Indeks untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tabel_catatan`
--
ALTER TABLE `tabel_catatan`
  MODIFY `id_catatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_data_sekolah`
--
ALTER TABLE `tabel_data_sekolah`
  MODIFY `id_data_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_eskul`
--
ALTER TABLE `tabel_eskul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_guru`
--
ALTER TABLE `tabel_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tabel_kkm`
--
ALTER TABLE `tabel_kkm`
  MODIFY `id_kkm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai_mapel`
--
ALTER TABLE `tabel_nilai_mapel`
  MODIFY `id_nmp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai_sosial`
--
ALTER TABLE `tabel_nilai_sosial`
  MODIFY `id_ns` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai_spiritual`
--
ALTER TABLE `tabel_nilai_spiritual`
  MODIFY `id_nsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_prestasi`
--
ALTER TABLE `tabel_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tabel_tahun_pelajaran`
--
ALTER TABLE `tabel_tahun_pelajaran`
  MODIFY `id_tapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tabel_tidak_hadir`
--
ALTER TABLE `tabel_tidak_hadir`
  MODIFY `id_th` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
