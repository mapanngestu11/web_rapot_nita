-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Jul 2024 pada 03.48
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
  `nis` varchar(20) NOT NULL,
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
  `nip_kepsek` varchar(20) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `hak_akses` varchar(10) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_guru`
--

INSERT INTO `tabel_guru` (`id_guru`, `nama_guru`, `jenis_kelamin`, `tempat_lahir`, `tanggal_lahir`, `telepon`, `alamat`, `mapel`, `username`, `password`, `hak_akses`, `dibuat_oleh`, `waktu`) VALUES
(1, 'guru', 'L', '1', '2024-07-05', '1', '1', '1', 'guru', '77e69c137812518e359196bb2f5e9bb9', 'guru', 1, '2024-07-05 09:36:26');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kelas`
--

CREATE TABLE `tabel_kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `tingkatan` varchar(10) NOT NULL,
  `walas` varchar(50) NOT NULL,
  `tahun_pelajaran` text NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_kkm`
--

CREATE TABLE `tabel_kkm` (
  `id_kkm` int(11) NOT NULL,
  `nama_kelas` varchar(30) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `nilai_kkm` varchar(10) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_mapel`
--

CREATE TABLE `tabel_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(30) NOT NULL,
  `singkatan` varchar(10) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai_mapel`
--

CREATE TABLE `tabel_nilai_mapel` (
  `id_nmp` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `nilai_pengetahuan` int(11) NOT NULL,
  `nilai_keterampilan` int(11) NOT NULL,
  `nilai_pts` int(11) NOT NULL,
  `nilai_pas` int(11) NOT NULL,
  `deskripsi` int(11) NOT NULL,
  `mapel` varchar(30) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(50) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai_sosial`
--

CREATE TABLE `tabel_nilai_sosial` (
  `id_ns` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `predikat` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_guru` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_nilai_spiritual`
--

CREATE TABLE `tabel_nilai_spiritual` (
  `id_nsp` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `predikat` varchar(15) NOT NULL,
  `deskripsi` text NOT NULL,
  `id_guru` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_prestasi`
--

CREATE TABLE `tabel_prestasi` (
  `id_prestasi` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama_siswa` varchar(50) NOT NULL,
  `jenis_prestasi` text NOT NULL,
  `keterangan` text NOT NULL,
  `id_guru` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `nis` varchar(20) NOT NULL,
  `nisn` varchar(20) NOT NULL,
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
  `pekerjaa_wali` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `hak_akses` varchar(10) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tabel_siswa`
--

INSERT INTO `tabel_siswa` (`id_siswa`, `nama_siswa`, `kelas`, `jenis_kelamin`, `jenis_pendaftaran`, `penerimaan_data`, `nis`, `nisn`, `tempat_lahir`, `tanggal_lahir`, `agama`, `status_keluarga`, `anak_ke`, `alamat`, `telepon`, `nama_ayah`, `nama_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `nama_wali`, `pekerjaa_wali`, `username`, `password`, `hak_akses`, `dibuat_oleh`, `waktu`) VALUES
(1, 'Budi', 'X', 'L', '1', '2024-07-05', '1', '1', '1', '2024-07-05', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 'siswa', 'bcd724d15cde8c47650fda962968f102', 'siswa', 1, '2024-07-05 09:35:43');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tahun_pelajaran`
--

CREATE TABLE `tabel_tahun_pelajaran` (
  `id_tapel` int(11) NOT NULL,
  `tahun_pelajaran` text NOT NULL,
  `semester` varchar(30) NOT NULL,
  `dibuat_oleh` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tabel_tidak_hadir`
--

CREATE TABLE `tabel_tidak_hadir` (
  `id_th` int(11) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `sakit` int(5) NOT NULL,
  `izin` int(5) NOT NULL,
  `alpa` int(5) NOT NULL,
  `id_guru` int(11) NOT NULL,
  `waktu` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2024-07-05 09:34:34');

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
  MODIFY `id_data_sekolah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_eskul`
--
ALTER TABLE `tabel_eskul`
  MODIFY `id_eskul` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_guru`
--
ALTER TABLE `tabel_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_kelas`
--
ALTER TABLE `tabel_kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_kkm`
--
ALTER TABLE `tabel_kkm`
  MODIFY `id_kkm` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_mapel`
--
ALTER TABLE `tabel_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai_mapel`
--
ALTER TABLE `tabel_nilai_mapel`
  MODIFY `id_nmp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai_sosial`
--
ALTER TABLE `tabel_nilai_sosial`
  MODIFY `id_ns` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_nilai_spiritual`
--
ALTER TABLE `tabel_nilai_spiritual`
  MODIFY `id_nsp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_prestasi`
--
ALTER TABLE `tabel_prestasi`
  MODIFY `id_prestasi` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_siswa`
--
ALTER TABLE `tabel_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tabel_tahun_pelajaran`
--
ALTER TABLE `tabel_tahun_pelajaran`
  MODIFY `id_tapel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_tidak_hadir`
--
ALTER TABLE `tabel_tidak_hadir`
  MODIFY `id_th` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
