-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jul 2020 pada 15.37
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tb_larahub`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(17, '2014_10_12_000000_create_users_table', 1),
(18, '2014_10_12_100000_create_password_resets_table', 1),
(19, '2019_08_19_000000_create_failed_jobs_table', 1),
(20, '2020_07_02_104939_create_tb_pertanyaan', 1),
(21, '2020_07_02_105034_create_tb_jawaban', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_pertanyaan`
--

CREATE TABLE `tb_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_profil` bigint(20) NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jml_jawaban` int(11) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `tanggal_diperbaharui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_pertanyaan`
--

INSERT INTO `tb_pertanyaan` (`id_pertanyaan`, `judul`, `id_profil`, `isi`, `jml_jawaban`, `tanggal_dibuat`, `tanggal_diperbaharui`) VALUES
(1, 'mysql Foreign key constraint is incorrectly formed error', 1111, 'I have two tables, table1 is the parent table with a column ID and table2 with a column IDFromTable1 (not the actual name) when I put a FK on IDFromTable1 to ID in table1 I get the error Foreign key constraint is incorrectly formed error. I would like to delete table 2 record if table1 record gets deleted. Thanks for any help', 2, '2020-07-02 19:29:01', '2020-07-02 19:29:01'),
(5, 'Cara Menggunakan Laravel', 1234, 'Bagaimana cara kerja dari Laravel?', 1, '2020-07-02 21:55:38', '2020-07-02 21:55:38'),
(6, 'Pengertian Laravel', 3333, 'Apa itu Laravel', 2, '2020-07-02 23:34:04', '2020-07-02 23:34:04'),
(7, 'Penjelasan mengenai JS, PHP, HTML, dan CSS', 9999, 'Apakah pengertian dari JS, PHP, HTML, dan CSS. Dan apakah perbedaannya?', 4, '2020-07-03 11:18:15', '2020-07-03 11:18:15'),
(9, 'Pengertian Primary Key, Foreign Key, dan Candidate Key', 1234, 'Apakah perbedaan dari Primary Key, Foreign Key, dan Candidate Key?', 3, '2020-07-03 19:17:43', '2020-07-03 12:34:05');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_jawaban`
--

CREATE TABLE `tb_jawaban` (
  `id_jawaban` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `isi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_profil` bigint(20) NOT NULL,
  `tanggal_dibuat` datetime NOT NULL,
  `tanggal_diperbaharui` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `tb_jawaban`
--

INSERT INTO `tb_jawaban` (`id_jawaban`, `id_pertanyaan`, `isi`, `id_profil`, `tanggal_dibuat`, `tanggal_diperbaharui`) VALUES
(1, 1, 'I ran into this same problem with HeidiSQL. The error you receive is very cryptic. My problem ended up being that the foreign key column and the referencing column were not of the same type or length.\r\n\r\nThe foreign key column was SMALLINT(5) UNSIGNED and the referenced column was INT(10) UNSIGNED. Once I made them both the same exact type, the foreign key creation worked perfectly.', 2222, '2020-07-02 19:29:46', '2020-07-02 19:29:46'),
(2, 5, 'Saya tidak tahu', 3333, '2020-07-02 22:33:09', '2020-07-02 22:33:09'),
(3, 6, 'Laravel adalah framework yang paling banyak mendapatkan bintang di Github. Sekarang framework ini menjadi salah satu yang populer di dunia, tidak terkecuali di Indonesia. ', 2222, '2020-07-02 23:36:11', '2020-07-02 23:36:11'),
(4, 6, 'Laravel fokus di bagian end-user, yang berarti fokus pada kejelasan dan kesederhanaan, baik penulisan maupun tampilan, serta menghasilkan fungsionalitas aplikasi web yang bekerja sebagaimana mestinya. Hal ini membuat developer maupun perusahaan menggunakan framework ini untuk membangun apa pun, mulai dari proyek kecil hingga skala perusahaan kelas atas.', 5555, '2020-07-02 23:36:11', '2020-07-02 23:36:11'),
(5, 1, 'I think', 5555, '2020-07-03 10:37:03', '2020-07-03 10:37:03'),
(8, 7, 'HTML adalah singkatan dari HyperText Markup Language , yaitu markup language  yang digunakan untuk membuat suatu halaman web, sehingga HTML dapat menampilkan berbagai informasi baik tulisan maupun gambar pada sebuah web browser.  HTML biasanya menggunakan tag-tag tertentu yang berada dalam tanda kurung <>. Sebagian besar tag pada HTML adalah tag yang berpasangan, contoh : jika kita menggunakan <head> harus ditutup dengan </head>, atau jika kita menggunakan <p> harus ditutup dengan </p>. Tapi ada juga beberapa tag yang tidak berpasangan, contohnya adalah <img>.', 6666, '2020-07-03 11:19:13', '2020-07-03 11:19:13'),
(9, 7, 'CSS adalah singkatan dari Cascading Style Sheet, yaitu suatu aturan yang digunakan untuk mengatur tampilan maupun format dari suatu halaman web, sehingga tampilan web akan menjadi lebih teratur. CSS juga digunakan untuk meningkatkan keindahan suatu web dengan style-style tertentu. Contoh penggunaan CSS adalah untuk mengatur warna font, ukuran font, ketebalan font, mengganti background web, mengubah border dari suatu tabel, perubahan tampilan suatu link saat dipilih, dan lainnya.', 1234, '2020-07-03 11:19:40', '2020-07-03 11:19:40'),
(10, 7, 'PHP merupakan singkatan rekursif (akronim berulang) dari PHP Hypertext Preprocessor. PHP adalah bahasa pemrograman script yang paling banyak dipakai saat ini atau dalam kata lain bisa diartikan sebuah bahasa pemrograman web yang bekerja di sisi server (server side scripting) yang dapat melakukan konektifitas padadatabase yang di mana hal itu tidak dapat dilakukan hanya dengan menggunakan sintaks-sintaks HTML biasa. PHP banyak dipakai untuk memrogram situs webdinamis, walaupun tidak tertutup kemungkinan digunakan untuk pemakaian lain.', 4321, '2020-07-03 11:19:59', '2020-07-03 11:19:59'),
(11, 7, 'Javascript adalah bahasa pemrograman yang dijalankan dikomputer klien. Javascript disipkan dalam kode-kode html dan digunakan sepenuhnya dengan bantuan browser. Javascript melakukan interaksi dengan pengguna langsung disisi klien. JavaScript juga merupakan bahasa scripting yang paling populer di internet dan bekerja pada banyak browser seperti Internet Explorer, Mozilla, Firefox, Netscape, Opera. JavaScript digunakan pada Web pages untuk meningkatkan design, validate forms, detect browsers, create cookies, GUI dsb.', 7667, '2020-07-03 11:20:22', '2020-07-03 11:20:22'),
(13, 9, 'Primary Key merupakan sebuah aturan dimana fungsinya adalah untuk membedakan anatara baris satu dengan baris lainnya yang ada pada tabel dan bersifat unik.\r\n\r\nAda ketentuan yang harus diperhatikan ketika field yang menjadi primary key yakni :\r\nData tidak boleh sama atau ganda (unik)\r\nData tidak boleh bernilai null', 3232, '2020-07-03 19:36:23', '2020-07-03 19:36:23'),
(14, 9, 'Foreign key merupakan suatu atribut untuk melengkapi hubungan yang menunjukan ke induknya, itu artinya field pada tabel merupakan kunci tamu dari tabel lain. Dan biasanya penggunaan foreign key akan sangat dibutuhkan ketikan kita menemukan banyak tabel dan ingin menghubungkan satu tabel dengan tabel lainnya.', 2313, '2020-07-03 19:37:06', '2020-07-03 19:37:06'),
(15, 9, 'candidate key merupakan suatu atribut ataupun super key yang mengidentifikasi secara unik untuk kejadian spesifik dari entitas.', 4553, '2020-07-03 19:37:35', '2020-07-03 19:37:35');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD PRIMARY KEY (`id_jawaban`),
  ADD KEY `tb_jawaban_id_pertanyaan_foreign` (`id_pertanyaan`);

--
-- Indeks untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  MODIFY `id_jawaban` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `tb_pertanyaan`
--
ALTER TABLE `tb_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_jawaban`
--
ALTER TABLE `tb_jawaban`
  ADD CONSTRAINT `tb_jawaban_id_pertanyaan_foreign` FOREIGN KEY (`id_pertanyaan`) REFERENCES `tb_pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
