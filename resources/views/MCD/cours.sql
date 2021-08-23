-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 23 août 2021 à 14:48
-- Version du serveur :  10.4.19-MariaDB
-- Version de PHP : 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `cours`
--

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `libelle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `libelle`, `created_at`, `updated_at`) VALUES
(1, 'Applications web', NULL, NULL),
(2, 'Applications mobile', NULL, NULL),
(3, 'Création graphique', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descrpition` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prix` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `jobs`
--

INSERT INTO `jobs` (`id`, `titre`, `descrpition`, `prix`, `created_at`, `updated_at`) VALUES
(1, 'Adding Custom Guards', 'You may define your own authentication guards using the extend method on the Auth facade. ', '20 000 fca', NULL, NULL),
(2, 'Closure Request Guards', 'You should place your call to the extend method within a service provider. Si', '30 000fcfa', NULL, NULL),
(3, 'UVCI MASTER 1', 'E\r\n2 = ¦ 0z  | z ∈ R© est donc une droite vectorielle, dont le vecteur X3 =  01  est une base.\r\n4. Les dimensions des sous-espaces propres sont égales aux multiplicités des valeurs propres', '60 000f', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `job_user`
--

CREATE TABLE `job_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `job_user`
--

INSERT INTO `job_user` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(4, 1, 1, NULL, NULL),
(6, 3, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_06_28_121607_create_jobs_table', 2),
(5, '2021_06_28_134626_create_job_user_table', 3),
(6, '2021_08_03_120309_create_visiteurs_table', 4),
(7, '2021_08_12_135525_create_categories_table', 5),
(8, '2021_08_12_135845_create_projets_table', 5),
(9, '2021_08_13_184625_add_titre_to_projets', 6);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('etienblog@gmail.com', '$2y$10$rNtFtsjs.rpVxxOSEWdmE.vDVJikwTzriNUJj8/.TVVTdkuzLxp16', '2021-06-28 11:47:55');

-- --------------------------------------------------------

--
-- Structure de la table `projets`
--

CREATE TABLE `projets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pourquoi_momodev` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quelles_solution` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mot_fin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lien_site` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `images` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`images`)),
  `logo` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sous_titre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `projets`
--

INSERT INTO `projets` (`id`, `categorie_id`, `description`, `pourquoi_momodev`, `quelles_solution`, `mot_fin`, `lien_site`, `images`, `logo`, `created_at`, `updated_at`, `titre`, `sous_titre`) VALUES
(1, 1, 'Pros-Consulte est leader en France dans ce domaine\r\n : la seule \r\nplateforme avec\r\nune visibilité de la disponibilité des psychologues en temps ', 'Pros-Consulte est leader en France dans ce domaine\r\n : la seule \r\nplateforme avec\r\nune visibilité de la disponibilité des psychologues en temps ', 'Pros-Consulte est leader en France dans ce domaine\r\n : la seule \r\nplateforme avec\r\nune visibilité de la disponibilité des psychologues en temps ', 'Pros-Consulte est leader en France dans ce domaine : la seule plateforme avec une visibilité de la disponibilité des psychologues en temps r', NULL, '[\"client1.jpg\",\"client2.jpg\",\"client3.jpg\"]', '[\"logo1.jpg\",\"pressecotedivoirebackground.png\"]', NULL, NULL, 'HUBERSON', 'application mobile est disponible'),
(2, 1, 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface web plus une possibilité \r\nde recevoir une notification \r\nlorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface web plus une possibilité \r\nde recevoir une notification \r\nlorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface web plus une possibilité \r\nde recevoir une notification \r\nlorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les mêmes fonctionnalités que l’interface web plus. ', NULL, '[\"cartes_visite.jpg\",\"team1.jpg\",\"client3.jpg\"]', NULL, NULL, NULL, 'HUBERSON', 'application mobile est disponible'),
(3, 2, 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface web plus une possibilité \r\nde recevoir une notification \r\nlorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface web plus une possibilité \r\nde recevoir une notification \r\nlorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface web plus une possibilité \r\nde recevoir une notification \r\nlorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les\r\n mêmes fonctionnalités que l’interface ', NULL, '[\"Logo sans fond.jpg\",\"team4.jpg\",\"team5.jpg\"]', NULL, NULL, NULL, 'HUBERSON', 'application mobile est disponible'),
(4, 3, 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', NULL, '[\"logistique.jpg\", \"camera5.jpg\", \"camera6.png\"]', NULL, NULL, NULL, 'HUBERSON', 'application mobile est disponible'),
(5, 3, 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones\r\n Apple et Android. Elle offre les mêmes fonctionnalités que\r\n l’interface web plus\r\n une possibilité de\r\n recevoir une notification lorsqu’un psychologue occupé ou absent devient disponible.', 'Une application mobile est disponible pour les smartphones Apple et Android. Elle offre les ', NULL, '[\"about.jpg\", \"batiment_ecole004.jpg\", \"camera1.jpg\"]', NULL, NULL, NULL, 'HUBERSON', 'application mobile est disponible');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ETIEN', 'etienblog@gmail.com', NULL, '$2y$10$pM0G.ywlBIm1Qq17oWUcKOSWD4txGCOXOjqv/1Hg1BsOp07Y9tkNm', NULL, '2021-06-28 11:43:33', '2021-06-28 11:43:33');

-- --------------------------------------------------------

--
-- Structure de la table `visiteurs`
--

CREATE TABLE `visiteurs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `visiteurs`
--

INSERT INTO `visiteurs` (`id`, `nom`, `contact`, `email`, `objet`, `message`, `created_at`, `updated_at`) VALUES
(1, 'ETTIEN', '523651222222222', NULL, NULL, 'loiuygfcvbn,;lmoiuytfcvbn,lm\r\nloiuhgfdfghjklm', '2021-08-03 14:09:24', '2021-08-03 14:09:24'),
(2, 'setiak', '1452023652', NULL, NULL, 'lkuytfcvbn,;lk,n\r\nhgfdcvbn,;', '2021-08-03 15:09:27', '2021-08-03 15:09:27'),
(3, 'DEV ETIEN', '81236523', NULL, NULL, '8525kjhgfvbnjklkj\r\n8555852', '2021-08-03 16:18:39', '2021-08-03 16:18:39'),
(4, 'DEV ETIEN', '81236523', NULL, NULL, '8525kjhgfvbnjklkj\r\n8555852', '2021-08-03 16:22:03', '2021-08-03 16:22:03'),
(5, 'ira etien', '81236523', NULL, NULL, 'ùpokjhb525265\r\nmlkjbvcvbn,', '2021-08-03 16:28:42', '2021-08-03 16:28:42'),
(6, 'ayouba', '25852365', NULL, NULL, 'fdghjlkjhghjklm\r\n25852365', '2021-08-03 16:35:31', '2021-08-03 16:35:31'),
(7, 'ayouba', '25852365', NULL, NULL, 'fdghjlkjhghjklm\r\n25852365', '2021-08-03 16:37:08', '2021-08-03 16:37:08'),
(8, 'ayouba', '25852365', NULL, NULL, 'fdghjlkjhghjklm\r\n25852365', '2021-08-03 16:37:20', '2021-08-03 16:37:20'),
(9, 'ayouba', '25852365', NULL, NULL, 'fdghjlkjhghjklm\r\n25852365', '2021-08-03 16:37:56', '2021-08-03 16:37:56'),
(10, 'hjjjhgfhgggg', '58425', NULL, NULL, 'hjjjhgfhgggg', '2021-08-03 16:39:59', '2021-08-03 16:39:59'),
(11, 'ayouba', '81236523', NULL, NULL, ';jhbvbn,;:mùm;,n,', '2021-08-03 16:44:25', '2021-08-03 16:44:25'),
(12, 'DEV ETIEN', '1452023652', NULL, NULL, 'liuygbn,;:!ùùmlkjb\r\nkjhgfdfghjkl', '2021-08-03 16:46:17', '2021-08-03 16:46:17'),
(13, 'hjjjhgfhgggg', '58425', NULL, NULL, 'lkjhbjnk,l;mù:lmkjb', '2021-08-03 16:51:50', '2021-08-03 16:51:50'),
(14, 'DEV ETIEN', '1452023652', NULL, NULL, 'kfghjklkjhgdyuk', '2021-08-03 18:24:53', '2021-08-03 18:24:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `job_user`
--
ALTER TABLE `job_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_user_job_id_foreign` (`job_id`),
  ADD KEY `job_user_user_id_foreign` (`user_id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `projets`
--
ALTER TABLE `projets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `job_user`
--
ALTER TABLE `job_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `projets`
--
ALTER TABLE `projets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `visiteurs`
--
ALTER TABLE `visiteurs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `job_user`
--
ALTER TABLE `job_user`
  ADD CONSTRAINT `job_user_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `job_user_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
