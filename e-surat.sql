--
-- Database: `e-surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `appoval_rules_node`
--

CREATE TABLE `appoval_rules_node` (
  `id` int(11) NOT NULL,
  `bisa_menandatangani` tinyint(1) DEFAULT NULL,
  `bisa_atas_nama` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `appoval_rules_node`
--

INSERT INTO `appoval_rules_node` (`id`, `bisa_menandatangani`, `bisa_atas_nama`) VALUES
(1, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `approval_rules_edge`
--

CREATE TABLE `approval_rules_edge` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `approval_surat_keluar`
--

CREATE TABLE `approval_surat_keluar` (
  `id` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `approval_surat_keluar`
--

INSERT INTO `approval_surat_keluar` (`id`, `status`, `tanggal`, `keterangan`) VALUES
(1, 'Masuk', '2019-11-11 00:00:00', 'Terbaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi_rules_edge`
--

CREATE TABLE `disposisi_rules_edge` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi_rules_edge`
--

INSERT INTO `disposisi_rules_edge` (`id`) VALUES
(1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi_rules_node`
--

CREATE TABLE `disposisi_rules_node` (
  `id` int(11) NOT NULL,
  `penerima_surat` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi_rules_node`
--

INSERT INTO `disposisi_rules_node` (`id`, `penerima_surat`) VALUES
(1, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `disposisi_surat_masuk`
--

CREATE TABLE `disposisi_surat_masuk` (
  `id` int(11) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `keterangan` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `disposisi_surat_masuk`
--

INSERT INTO `disposisi_surat_masuk` (`id`, `status`, `tanggal`, `keterangan`) VALUES
(1, 'Masuk', '2019-11-11 00:00:00', 'Terbaca');

-- --------------------------------------------------------

--
-- Struktur dari tabel `golongan`
--

CREATE TABLE `golongan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `golongan`
--

INSERT INTO `golongan` (`id`, `nama`) VALUES
(1, 'III a'),
(2, 'II b'),
(3, 'III d');

-- --------------------------------------------------------

--
-- Struktur dari tabel `instansi`
--

CREATE TABLE `instansi` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL,
  `alamat` text,
  `no_telepon` varchar(20) DEFAULT NULL,
  `kode_pos` varchar(10) DEFAULT NULL,
  `fax` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `instansi`
--

INSERT INTO `instansi` (`id`, `nama`, `alamat`, `no_telepon`, `kode_pos`, `fax`) VALUES
(1, 'Ministry of Communications and Informatics', 'Jl. Medan Merdeka Barat No.9, RT.2/RW.3, Gambir, Kecamatan Gambir, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110', '(021) 3452841', '10110', '(021) 3452841'),
(2, 'Layanan Pengadaan Secara Elektronik (LPSE)', 'Gedung Utama Kementerian Luar Negeri Lt.3, Jl. Taman Pejambon No. 6, Senen, RT.9/RW.5, Senen, Kec. Senen, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10110', '(021) 3512002', '10110', '(021) 3512002'),
(3, 'Ministry of Finance', 'Gedung Prijadi Praptosuhardo II Lt. 1, Jl. Lap. Banteng Timur No.2-4, Ps. Baru, Kecamatan Sawah Besar, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10710', '(021) 3450959', '10710', '(021) 3450959');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id`, `nama`) VALUES
(1, 'Pimpinan'),
(2, 'Sekretaris'),
(3, 'Administrasi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan_users`
--

CREATE TABLE `jabatan_users` (
  `id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jabatan_users`
--

INSERT INTO `jabatan_users` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, '2019-11-10 09:15:11', '2019-11-11 13:30:25'),
(2, 3, '2019-11-10 09:15:11', '2019-11-11 13:30:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_surat`
--

CREATE TABLE `kategori_surat` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_surat`
--

INSERT INTO `kategori_surat` (`id`, `nama`) VALUES
(1, 'Surat Pribadi'),
(2, 'Surat Resmi'),
(3, 'Surat Sosial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori_surat_keluar`
--

CREATE TABLE `kategori_surat_keluar` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori_surat_keluar`
--

INSERT INTO `kategori_surat_keluar` (`id`, `nama`) VALUES
(2, 'Surat Resmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sifat`
--

CREATE TABLE `sifat` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `sifat`
--

INSERT INTO `sifat` (`id`, `nama`) VALUES
(1, 'Surat Resmi');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_keluar`
--

CREATE TABLE `surat_keluar` (
  `id` int(11) NOT NULL,
  `nomor_klasifikasi` varchar(45) DEFAULT NULL,
  `file_lampiran` varchar(45) DEFAULT NULL,
  `perihal` text,
  `isi_surat` text,
  `isi_lampiran_surat` text,
  `no_agenda` varchar(45) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_keluar`
--

INSERT INTO `surat_keluar` (`id`, `nomor_klasifikasi`, `file_lampiran`, `perihal`, `isi_surat`, `isi_lampiran_surat`, `no_agenda`, `tanggal`) VALUES
(1, '123', 'ada', 'penting', 'Bakti Sosial', 'Kehadiran', '17', '2019-11-11 09:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `surat_masuk`
--

CREATE TABLE `surat_masuk` (
  `id` int(11) NOT NULL,
  `nomor_agenda` varchar(45) DEFAULT NULL,
  `no_surat` varchar(45) DEFAULT NULL,
  `surat_dari` varchar(45) DEFAULT NULL,
  `is_antar_dinas` tinyint(1) DEFAULT NULL,
  `no_tindak_lanjut` varchar(45) DEFAULT NULL,
  `perihal` text,
  `tanggal` date DEFAULT NULL,
  `lampiran` varchar(45) DEFAULT NULL,
  `file_surat` varchar(45) DEFAULT NULL,
  `file_lampiran` varchar(45) DEFAULT NULL,
  `jumlah_lampiran` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `surat_masuk`
--

INSERT INTO `surat_masuk` (`id`, `nomor_agenda`, `no_surat`, `surat_dari`, `is_antar_dinas`, `no_tindak_lanjut`, `perihal`, `tanggal`, `lampiran`, `file_surat`, `file_lampiran`, `jumlah_lampiran`) VALUES
(1, '123', '1234', 'Dinas Kesehatan', 127, '12345', 'penting', '2019-11-11', 'ada', 'ada', 'ada', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(45) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `password_hash` varchar(255) DEFAULT NULL,
  `password_reset_token` varchar(255) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  `role` varchar(45) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Dhastan', 'asdf', 'asdf', 'asdf', 'Dhastan@gmail.com', 'Pelajar', 'dddd', '2019-11-11 09:00:00', '2019-11-12 09:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoval_rules_node`
--
ALTER TABLE `appoval_rules_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_rules_edge`
--
ALTER TABLE `approval_rules_edge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `approval_surat_keluar`
--
ALTER TABLE `approval_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_rules_edge`
--
ALTER TABLE `disposisi_rules_edge`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_rules_node`
--
ALTER TABLE `disposisi_rules_node`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `disposisi_surat_masuk`
--
ALTER TABLE `disposisi_surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `golongan`
--
ALTER TABLE `golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jabatan_users`
--
ALTER TABLE `jabatan_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_surat`
--
ALTER TABLE `kategori_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori_surat_keluar`
--
ALTER TABLE `kategori_surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sifat`
--
ALTER TABLE `sifat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `surat_masuk`
--
ALTER TABLE `surat_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoval_rules_node`
--
ALTER TABLE `appoval_rules_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `approval_rules_edge`
--
ALTER TABLE `approval_rules_edge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `approval_surat_keluar`
--
ALTER TABLE `approval_surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disposisi_rules_edge`
--
ALTER TABLE `disposisi_rules_edge`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disposisi_rules_node`
--
ALTER TABLE `disposisi_rules_node`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `disposisi_surat_masuk`
--
ALTER TABLE `disposisi_surat_masuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `golongan`
--
ALTER TABLE `golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `jabatan_users`
--
ALTER TABLE `jabatan_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sifat`
--
ALTER TABLE `sifat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `surat_keluar`
--
ALTER TABLE `surat_keluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
