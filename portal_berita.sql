-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 13 Mar 2024 pada 08.04
-- Versi server: 8.0.30
-- Versi PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal_berita`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `comments_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_03_13_021426_create_posts_table', 1),
(6, '2024_03_13_021857_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(4, 'App\\Models\\User', 2, 'user login', 'b4ce22008f96f27452c483d37c424673166b019773c23d2f4144962cc33ce2d9', '[\"*\"]', '2024-03-13 01:01:02', NULL, '2024-03-13 00:28:22', '2024-03-13 01:01:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `title`, `news_content`, `author`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Selamat Datang di Portal Berita', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur voluptatem rem id, molestiae amet consequuntur dolorem, unde perferendis incidunt mollitia eum asperiores quia fugiat eligendi saepe dolore nisi iure aliquid. Consectetur quidem officiis rem odit accusamus itaque ratione perspiciatis, pariatur, voluptate quibusdam dignissimos. Molestias cupiditate ratione eius. Itaque modi rerum, nulla pariatur nihil saepe iusto amet omnis facilis hic obcaecati veritatis similique adipisci sapiente vel deserunt placeat. Ratione ea quod, earum quisquam minima voluptate iure ullam exercitationem numquam recusandae repellat cupiditate, omnis, ut esse facere est! Tenetur, natus, velit iusto dolore necessitatibus tempora ab omnis mollitia odit provident iste enim, doloremque asperiores molestias impedit quia? Totam expedita ex, quasi explicabo reiciendis similique at nemo laudantium veniam harum molestiae nam impedit, eligendi natus exercitationem provident, pariatur quibusdam. Eos, facere quo voluptas vero hic, et a provident quas perferendis delectus rerum expedita cum nisi, unde eveniet. Architecto officiis sequi quia autem iusto similique recusandae tenetur amet earum delectus porro possimus eum, repudiandae illum, atque, quod velit aspernatur blanditiis eos impedit corrupti. Iusto corporis animi distinctio fuga enim? Labore sunt aut vel recusandae? Dolorum adipisci quasi maiores perferendis deserunt excepturi fugiat animi non ad ipsa odit possimus saepe, sequi laudantium ullam quos est earum necessitatibus sint repellat. Quisquam quibusdam necessitatibus saepe dolorem quaerat, beatae magni deleniti quo? Similique quis nam cum, doloribus perferendis laudantium eligendi harum tempora, iure repudiandae obcaecati quaerat quas accusantium nisi unde? Nostrum vitae harum laboriosam natus. Fugiat nam porro atque eos dolore numquam rerum id et veritatis vero laboriosam facere quibusdam, ab debitis perferendis reiciendis minima sapiente praesentium error at maiores? Quaerat alias aspernatur aut fuga praesentium consectetur recusandae facilis harum. Facilis consectetur, exercitationem corrupti id vel laborum illo expedita voluptatibus? Ratione velit nobis tempora dolor sunt corrupti deleniti ex dolorum, pariatur iusto labore? Dolorem doloribus sequi quasi quis.', 1, '2024-03-13 04:31:37', NULL, NULL),
(2, 'Pengumuman', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur voluptatem rem id, molestiae amet consequuntur dolorem, unde perferendis incidunt mollitia eum asperiores quia fugiat eligendi saepe dolore nisi iure aliquid. Consectetur quidem officiis rem odit accusamus itaque ratione perspiciatis, pariatur, voluptate quibusdam dignissimos. Molestias cupiditate ratione eius. Itaque modi rerum, nulla pariatur nihil saepe iusto amet omnis facilis hic obcaecati veritatis similique adipisci sapiente vel deserunt placeat. Ratione ea quod, earum quisquam minima voluptate iure ullam exercitationem numquam recusandae repellat cupiditate, omnis, ut esse facere est! Tenetur, natus, velit iusto dolore necessitatibus tempora ab omnis mollitia odit provident iste enim, doloremque asperiores molestias impedit quia? Totam expedita ex, quasi explicabo reiciendis similique at nemo laudantium veniam harum molestiae nam impedit, eligendi natus exercitationem provident, pariatur quibusdam. Eos, facere quo voluptas vero hic, et a provident quas perferendis delectus rerum expedita cum nisi, unde eveniet. Architecto officiis sequi quia autem iusto similique recusandae tenetur amet earum delectus porro possimus eum, repudiandae illum, atque, quod velit aspernatur blanditiis eos impedit corrupti. Iusto corporis animi distinctio fuga enim? Labore sunt aut vel recusandae? Dolorum adipisci quasi maiores perferendis deserunt excepturi fugiat animi non ad ipsa odit possimus saepe, sequi laudantium ullam quos est earum necessitatibus sint repellat. Quisquam quibusdam necessitatibus saepe dolorem quaerat, beatae magni deleniti quo? Similique quis nam cum, doloribus perferendis laudantium eligendi harum tempora, iure repudiandae obcaecati quaerat quas accusantium nisi unde? Nostrum vitae harum laboriosam natus. Fugiat nam porro atque eos dolore numquam rerum id et veritatis vero laboriosam facere quibusdam, ab debitis perferendis reiciendis minima sapiente praesentium error at maiores? Quaerat alias aspernatur aut fuga praesentium consectetur recusandae facilis harum. Facilis consectetur, exercitationem corrupti id vel laborum illo expedita voluptatibus? Ratione velit nobis tempora dolor sunt corrupti deleniti ex dolorum, pariatur iusto labore? Dolorem doloribus sequi quasi quis.', 1, '2024-03-13 04:31:37', NULL, NULL),
(3, 'Tutorial HTML Untuk Pemula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla fuga assumenda dolorem delectus optio sed consequuntur, harum cumque placeat veritatis cupiditate inventore omnis qui culpa tempore magnam ratione voluptatibus earum libero porro vitae! Voluptates maxime ipsam earum quod dignissimos doloremque veritatis dolorem iure unde excepturi cumque neque sit numquam reprehenderit eaque itaque corporis, eos consequatur nihil necessitatibus perspiciatis incidunt aperiam est! Assumenda repudiandae itaque ipsam alias animi ratione, recusandae, nulla nam iste facere maiores, suscipit perferendis non reprehenderit rerum voluptatum error adipisci dignissimos dolorum ullam! Deserunt animi nobis repellendus doloribus molestiae dolores a odio perferendis accusamus est amet explicabo blanditiis reiciendis quo illo ut, quam modi harum beatae ducimus, eius illum facere enim cumque? Veritatis velit suscipit dolorum magnam eligendi sed aliquid, voluptatem inventore itaque! Voluptatibus neque atque perferendis, veritatis incidunt excepturi debitis mollitia accusantium, dicta ut dolore fugit possimus, porro non consectetur. Repellat, minus soluta. Nihil, a? Cum labore quidem eveniet laborum non excepturi, distinctio ducimus dolorem ipsam commodi quo eius. Nulla eaque esse porro, id similique ea laboriosam facilis fugiat repudiandae maxime ullam ipsum cum dolorem sequi dolorum eius ipsam amet error. Numquam iste culpa adipisci sit eius commodi! Reiciendis eos quibusdam dolorum est quo vel excepturi eveniet quis laborum, autem, aliquam fugiat cumque maxime laudantium libero doloremque! Illum, quasi. Maxime earum ipsam nihil unde numquam sit veritatis eveniet aliquam quae magni. Eligendi soluta delectus excepturi fuga quae tempora. Iure neque aliquid quae sunt. Inventore incidunt et corrupti cumque harum similique perspiciatis repellat aut voluptate illo officia cum commodi sit in quidem obcaecati sed, voluptatibus molestias amet eveniet recusandae aliquid ratione. Dolorem aspernatur ipsam soluta nisi nam recusandae, vitae molestias, quae velit temporibus quas, inventore optio molestiae adipisci? Nostrum, rerum beatae minima numquam tenetur nulla labore? Quas sequi voluptate cum eaque earum aspernatur totam vitae illo asperiores hic?', 1, '2024-03-13 00:19:01', '2024-03-13 00:19:01', NULL),
(4, 'Tutorial PHP Untuk Pemula', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla fuga assumenda dolorem delectus optio sed consequuntur, harum cumque placeat veritatis cupiditate inventore omnis qui culpa tempore magnam ratione voluptatibus earum libero porro vitae! Voluptates maxime ipsam earum quod dignissimos doloremque veritatis dolorem iure unde excepturi cumque neque sit numquam reprehenderit eaque itaque corporis, eos consequatur nihil necessitatibus perspiciatis incidunt aperiam est! Assumenda repudiandae itaque ipsam alias animi ratione, recusandae, nulla nam iste facere maiores, suscipit perferendis non reprehenderit rerum voluptatum error adipisci dignissimos dolorum ullam! Deserunt animi nobis repellendus doloribus molestiae dolores a odio perferendis accusamus est amet explicabo blanditiis reiciendis quo illo ut, quam modi harum beatae ducimus, eius illum facere enim cumque? Veritatis velit suscipit dolorum magnam eligendi sed aliquid, voluptatem inventore itaque! Voluptatibus neque atque perferendis, veritatis incidunt excepturi debitis mollitia accusantium, dicta ut dolore fugit possimus, porro non consectetur. Repellat, minus soluta. Nihil, a? Cum labore quidem eveniet laborum non excepturi, distinctio ducimus dolorem ipsam commodi quo eius. Nulla eaque esse porro, id similique ea laboriosam facilis fugiat repudiandae maxime ullam ipsum cum dolorem sequi dolorum eius ipsam amet error. Numquam iste culpa adipisci sit eius commodi! Reiciendis eos quibusdam dolorum est quo vel excepturi eveniet quis laborum, autem, aliquam fugiat cumque maxime laudantium libero doloremque! Illum, quasi. Maxime earum ipsam nihil unde numquam sit veritatis eveniet aliquam quae magni. Eligendi soluta delectus excepturi fuga quae tempora. Iure neque aliquid quae sunt. Inventore incidunt et corrupti cumque harum similique perspiciatis repellat aut voluptate illo officia cum commodi sit in quidem obcaecati sed, voluptatibus molestias amet eveniet recusandae aliquid ratione. Dolorem aspernatur ipsam soluta nisi nam recusandae, vitae molestias, quae velit temporibus quas, inventore optio molestiae adipisci? Nostrum, rerum beatae minima numquam tenetur nulla labore? Quas sequi voluptate cum eaque earum aspernatur totam vitae illo asperiores hic?', 3, '2024-03-13 00:26:50', '2024-03-13 00:26:50', NULL),
(5, 'Tutorial CSS Untuk Pemula', 'isi content sudah di perbaharui', 2, '2024-03-13 00:28:42', '2024-03-13 01:01:02', '2024-03-13 01:01:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `email`, `username`, `password`, `firstname`, `lastname`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin@gmail.com', 'admin', '$2y$10$Wz51b2637t3jIB0ThR.vV.omDqNEBtld93hWrzzQqe5.ip3KepStK', 'admin', 'admin', NULL, NULL, NULL),
(2, 'tony@gmail.com', 'tony', '$2y$10$Wz51b2637t3jIB0ThR.vV.omDqNEBtld93hWrzzQqe5.ip3KepStK', 'tony', 'cooper', NULL, NULL, NULL),
(3, 'sam@gmail.com', 'sam', '$2y$10$Wz51b2637t3jIB0ThR.vV.omDqNEBtld93hWrzzQqe5.ip3KepStK', 'sam', 'bonz', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_author_foreign` (`author`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_author_foreign` FOREIGN KEY (`author`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
