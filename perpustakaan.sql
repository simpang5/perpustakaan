-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `userid` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `phone` varchar(16) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id` varchar(30) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `pengarang` varchar(50) NOT NULL,
  `penerbit` varchar(50) NOT NULL,
  `tahun_terbit` varchar(4) NOT NULL,
  `lokasi_buku` varchar(30) NOT NULL,
  `gambar` varchar(500) NOT NULL,
  `jumlah_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `denda`
--

CREATE TABLE `denda` (
  `id` varchar(30) NOT NULL,
  `kode_pinjam` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nominal` int(11) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `alasan` text NOT NULL,
  `tanggal_bayar` datetime NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pinjam`
--

CREATE TABLE `pinjam` (
  `id` varchar(30) NOT NULL,
  `kode_pinjam` varchar(30) NOT NULL,
  `kode_anggota` varchar(30) NOT NULL,
  `kode_buku` varchar(30) NOT NULL,
  `durasi` int(16) NOT NULL,
  `tanggal_pinjam` int(16) NOT NULL,
  `tanggal_kembali` int(16) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
