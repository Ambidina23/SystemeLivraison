-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  sam. 07 avr. 2018 à 18:05
-- Version du serveur :  5.6.38
-- Version de PHP :  7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `LivraisonBDD`
--

-- --------------------------------------------------------

--
-- Structure de la table `adresse_depart`
--

CREATE TABLE `adresse_depart` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero_rue` double(8,2) NOT NULL,
  `nom_voie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complement_adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_postale` double(8,2) NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `adresse_destination`
--

CREATE TABLE `adresse_destination` (
  `id` int(10) UNSIGNED NOT NULL,
  `numero_rue` double(8,2) NOT NULL,
  `nom_voie` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `complement_adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `code_postale` double(8,2) NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `pays` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `client`
--

CREATE TABLE `client` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `reference` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `id_particulier` int(10) UNSIGNED DEFAULT NULL,
  `id_organismePublique` int(10) UNSIGNED DEFAULT NULL,
  `id_entreprise` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_heure_creation` datetime NOT NULL,
  `validee` tinyint(1) NOT NULL,
  `payee` tinyint(1) NOT NULL,
  `expediee` tinyint(1) NOT NULL,
  `livree` tinyint(1) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `id_client` int(10) UNSIGNED NOT NULL,
  `id_objet` int(10) UNSIGNED DEFAULT NULL,
  `id_adresse_depart` int(10) UNSIGNED NOT NULL,
  `id_adresse_destination` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `entreprises`
--

CREATE TABLE `entreprises` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomEntreprise` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsableDestinataire` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroTel` double(8,2) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `entreprises`
--

INSERT INTO `entreprises` (`id`, `nomEntreprise`, `responsableDestinataire`, `numeroTel`, `adresse`, `email`, `created_at`, `updated_at`) VALUES
(2, 'eseis gedoc', 'dupont gomes', 999999.99, '34 rue lavarel 94000 creteil pampdour', 'eseis@gedoc.com', '2018-04-02 10:53:38', '2018-04-02 10:53:38'),
(3, 'yann sarl', 'yann cobboé', 999999.99, '23 rue de four 75000 Paris', 'yann@gamil.com', '2018-04-03 15:48:52', '2018-04-03 15:48:52');

-- --------------------------------------------------------

--
-- Structure de la table `facture`
--

CREATE TABLE `facture` (
  `id` int(10) UNSIGNED NOT NULL,
  `dateFacture` datetime NOT NULL,
  `montant` double(8,2) NOT NULL,
  `dateLivraison` datetime NOT NULL,
  `id_client` int(10) UNSIGNED NOT NULL,
  `id_commande` int(10) UNSIGNED NOT NULL,
  `id_gestionnaire` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `gestionnaire`
--

CREATE TABLE `gestionnaire` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroTel` double(8,2) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_03_29_182901_create_commande_table', 2),
(4, '2018_03_29_192953_create_client_table', 3),
(5, '2018_03_29_202952_create_gestionnaire_table', 4),
(6, '2018_03_29_203010_create_objet_table', 4),
(7, '2018_03_29_214805_create_facture_table', 4),
(8, '2018_03_29_214919_create_mission_table', 5),
(9, '2018_03_29_222242_create_adresse_depart_table', 5),
(10, '2018_03_29_223548_create_vehicule_table', 5),
(11, '2018_03_29_223606_create_reservation_table', 5),
(12, '2018_03_29_225037_create_reservation_vehicule_table', 5),
(13, '2018_03_30_010930_create_adresse_destination_table', 5),
(14, '2018_04_02_082607_create_particuliers_table', 5),
(15, '2018_04_02_084032_create_organisme_publiques_table', 5),
(16, '2018_04_02_090344_create_entreprises_table', 5),
(17, '2018_04_02_090842_create_ressources_humaines_table', 5),
(18, '2018_04_05_182836_type_column', 6);

-- --------------------------------------------------------

--
-- Structure de la table `mission`
--

CREATE TABLE `mission` (
  `id` int(10) UNSIGNED NOT NULL,
  `durree_mission` time NOT NULL,
  `id_Commande` int(10) UNSIGNED NOT NULL,
  `id_ressourceHumaine` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `objet`
--

CREATE TABLE `objet` (
  `id` int(10) UNSIGNED NOT NULL,
  `poids` double(8,2) NOT NULL,
  `fragilite` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `nature` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` double(8,2) NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `organisme_publiques`
--

CREATE TABLE `organisme_publiques` (
  `id` int(10) UNSIGNED NOT NULL,
  `nomOrganisme` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `responsableDestinataire` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroTel` double(8,2) NOT NULL,
  `adresse` text COLLATE utf8_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `organisme_publiques`
--

INSERT INTO `organisme_publiques` (`id`, `nomOrganisme`, `responsableDestinataire`, `numeroTel`, `adresse`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Université d\'evry', 'Monsieur Declercq', 999999.99, '43 rue tabel stor 91000 evry centre', 'declercq@univ-ervy.fr', '2018-04-02 07:32:35', '2018-04-02 07:32:35'),
(3, 'urssaf', 'pascal handal', 999999.99, '23 huren bal 95 356 saint Denis', 'urssaf@gmail.com', '2018-04-03 15:54:28', '2018-04-03 15:54:28');

-- --------------------------------------------------------

--
-- Structure de la table `particuliers`
--

CREATE TABLE `particuliers` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroTel` double(8,2) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `particuliers`
--

INSERT INTO `particuliers` (`id`, `nom`, `prenom`, `numeroTel`, `adresse`, `email`, `created_at`, `updated_at`) VALUES
(2, 'Ambidina', 'Moussa', 999999.99, '32 rue corot 91240 saint michel sur orge', 'ambidina23moussa@gmail.com', '2018-04-02 07:46:42', '2018-04-02 07:46:42'),
(3, 'Diallo', 'fatou', 999999.99, '45 calot cru 91456 farbry saint', 'fatou@gmail.com', '2018-04-02 10:00:00', '2018-04-02 10:00:00'),
(4, 'Gunes', 'Hakan', 999999.99, '34 rue averse 93300 CLICHY SOU BOIS', 'hahan@gmail.com', '2018-04-03 16:00:50', '2018-04-03 16:00:50'),
(5, 'testu', 'jennifer', 999999.99, '33 rue va-tout 92000 haut', 'jennifer@gmail.com', '2018-04-04 12:43:43', '2018-04-04 12:43:43');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) UNSIGNED NOT NULL,
  `reference` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_reservation` datetime NOT NULL,
  `duree_operation` time NOT NULL,
  `id_gestionnaire` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation_vehicule`
--

CREATE TABLE `reservation_vehicule` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_reservation` int(10) UNSIGNED NOT NULL,
  `id_vehicule` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressources_humaines`
--

CREATE TABLE `ressources_humaines` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `numeroTel` double(8,2) NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` char(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Particulier', 'Ambidina', 'ambidina23moussa@gmail.com', '$2y$10$kOqvCWelpsaAMF56DlWaBOYdaioeoLbKCj5wTJ4sWTP6agDpXidUy', 'hnZMn65jCJAes2vtF0rLOub2KeJOBeyV8RRg8rFAYHo6Zq9uehHMxzKTgJVw', '2018-04-02 07:49:38', '2018-04-02 07:49:38'),
(2, 'Particulier', 'fatou Diallo', 'fatou@gmail.com', '$2y$10$QCVotyzZLHUBX.0PwG5Kl.kQf0KIJ/Uyb8L8SzZFe5zmA994BF/WC', 'cWOoDtGmnxzSjjKqw8QSiZpCOeEzwFmuG0U1DTU57ZCFWBPNTpOZ2Cqlq3Qo', '2018-04-03 08:45:11', '2018-04-03 08:45:11'),
(3, 'Particulier', 'ebrahim Ouadoud', 'ebrahim@gmail.com', '$2y$10$EOrzGE2Rg31bHbz/7zDvzu8ep6AXJR.KIT6rUX6XNlSPO.gjy6qqO', 'yBsyqsOfbMRgor7Ma46aG8rRylWeO1rvw1t1EyyyXRrg2kN0JSzZGwDvdyT9', '2018-04-03 08:46:07', '2018-04-03 08:46:07'),
(4, 'Particulier', 'simba khaled', 'simba@gmail.com', '$2y$10$wZVcmS6YZfPjvbcotqWI6O7V/n6Fen1ApLlwNI/6BdcIzSxfJQNJ6', 'qRpxvOciT7FW0BObaaudPec6JYmZBQA26PzDUF0dD28lSPkjLgM7XoYHnG6d', '2018-04-03 11:21:08', '2018-04-03 11:21:08'),
(5, 'Particulier', 'ansaf aliasse', 'ansaf@gmail.com', '$2y$10$UnSCJfjAnU.xm0tMvr.OiucNs7kn0bc4fYaB0P5do/r5e8HalfTPi', '3y1EXZr4osdjMOftZVKweiMnxQaUSGKlVwNs1jlCkcmbJjdGlh6N4nixETf6', '2018-04-03 15:42:42', '2018-04-03 15:42:42'),
(6, 'Particulier', 'testu', 'jennifer@gamil.com', '$2y$10$yqHvSJcLtyna0aY3e7Tt9OuhS2WljgUMDZkuJNXfFRu5/P6Zc1IJ6', 'G2EBUxBNTOfE5Ptgi3ekYCil5tpH4SnC7mEmRLp2OexSPBgADUr2Mhqnnu9P', '2018-04-04 12:48:58', '2018-04-04 12:48:58'),
(7, 'Particulier', 'rayane', 'rayane@gmail.com', '$2y$10$rUSweA8pkCW4cNz1DE92DeoNjEpHK4FkMq9NGQi8DM89oqT3oWPqS', 'YmLHd7BbosO3P7P9JupeMjxuLxjEODA0T0QMfTeoOPeXXDaV2YmXA503Rtkq', '2018-04-05 11:27:32', '2018-04-05 11:27:32'),
(8, 'Particulier', 'yann', 'yann@gmail.com', '$2y$10$nntYOw3w600ZnMM6olD5jOOHZfAEd1hRr1yDmyGGWX3yVPRaAnRHa', 'VpUw0P79XefUfqGzd8INmSs39488s9MYLCPXtBMHE0kitb4Le5GG0d61befr', '2018-04-05 12:43:23', '2018-04-05 12:43:23'),
(9, 'Particulier', 'sara', 'sara@gmail.com', '$2y$10$eJ5FWQbjKaUMIdJLfCTbC.jVjRr.wvxzCOTWi/dKEck3R4SorIrGS', 'G5yePZBawKXDhGUNKHdrfyIs0XlmqOi18hrFPrkWnSaVpRGLdTiL4EnEeLtx', '2018-04-05 15:49:39', '2018-04-05 15:49:39'),
(10, 'Particulier', 'karim dada', 'karim@gmail.com', '$2y$10$Ac4w6NdP4HTjpz/OoUOpJ.YjJPF6ufQPFuIxOrPnyF7YtN5IpBMya', 'roiynzhsL3th8t5O9yEeQk5mhcVQ01hg2Fbwb1SylSO6Q0TMOWJWZcJHkO6G', '2018-04-05 16:45:06', '2018-04-05 16:45:06'),
(11, 'Entreprise', 'Eseis  gedoc', 'eseis@gamil.com', '$2y$10$DnHI7Gwvcm/TdZzrDwKlUuC74WNb1uD25107XJTFtfLWyypTVdl3W', '4lYqBq8JxJyM8oQsn30faziiOYnUuNS9t162OKCAVycearYqDjfk5IzoZbWq', '2018-04-05 17:01:31', '2018-04-05 17:01:31'),
(12, 'Organisme Public', 'Evry val d\'essonne', 'evry@gmail.com', '$2y$10$rrhJjPvvcGpeACvNUcFSjOTZRhnzvWF2sGqYP9tS6X8iE4xql4qUG', 'mRz27ixnMVpI2rGlQL7qPSRh43ZTp2jo9OuXbXriZUGX33qqhF9yQfafsxSO', '2018-04-05 17:06:49', '2018-04-05 17:06:49'),
(13, 'Entreprise', 'H&M', 'hm@gmail.com', '$2y$10$K8eRTyX/85uXGnbM5Y80De7jSHclI0lAeTPueubcveKlitK9.99pu', '1izw4rqKxN3aFnsTiOrpnrlXc3XxBNIt8VlmR6q4jWM5yRZLrYqS4R6pUhta', '2018-04-05 17:32:45', '2018-04-05 17:32:45'),
(14, 'Entreprise', 'heart', 'heart@gmail.com', '$2y$10$yaTy3ryTi6lLHMi7hdr4b.e1NaBol2EEkvuY9HeK3zkk2.hRP.orC', 'L4tYFdlpWr974YsGZ01K3neZciwVGLQPbtOS7PvdYrrf6rtU7PXZDGMCKTWK', '2018-04-05 17:43:29', '2018-04-05 17:43:29'),
(15, 'Entreprise', 'jean sarl', 'jean@hotmail.fr', '$2y$10$YhXv9IbLDUv2XAkm22rvSOZQdLAhGegT66eN8XwgT01XmMmYkJ5Fa', '4ucpBZ4VDdM4z3J3RUS3mSP8xTi4h9MALB1AB3PL9lGotoJPl3uol3QHlEZr', '2018-04-05 17:57:23', '2018-04-05 17:57:23'),
(18, 'Organisme Public', 'ueve', 'ueve@univ-evry.fr', '$2y$10$QR937JGVF0Jf3LbU83UN5eFiq60idpSr9nFxoiiXdIfJflV2PvXja', 'ipuF3gTlMi1ZNbnx3Nhg9UC3IOcPUhol7KG2s9Pk085mBtzZYSGgn9ho7m8b', '2018-04-05 18:22:27', '2018-04-05 18:22:27'),
(19, 'entreprise', 'sdfghjk', 'xdfghn@yahoo.fr', '$2y$10$bV91VnQMtsRm.WRWp9NYF.FwTgCJ69TQumLQr0xf4eZ/7UzHVgoh2', 'vXXzJTvEQ3suuglOoIzMQaHyEl88j70IZMLbXEmJFEr1jSBEmS2sAdEzCWIS', '2018-04-05 22:57:55', '2018-04-05 22:57:55'),
(20, 'particulier', 'azzer', 'azer@yahoo.fr', '$2y$10$A4NC3aYEB6xh9ATZCbG28uBjy2bTF5ATCDBMrEO8q2uL4zwd4aPBW', 'lYNVn7Fd5YBb8M41YkqRwCTUvIaZQMPvnjxroyERMD01QEPbPYG3pYyPyzdO', '2018-04-05 23:10:10', '2018-04-05 23:10:10'),
(21, 'entreprise', 'azertyj', 'fghj@yahho.fr', '$2y$10$a5v1CuWGyv1uizTTwxCy..vAisrBWnDE8NuXsUCcCoRiiIrAGEUmm', 'bWylvft3RsVC0w9Xxpkq8wkMFWqy0wawMetwjJ9UA25CWyQycZuTJpegvwXg', '2018-04-05 23:23:55', '2018-04-05 23:23:55'),
(22, 'particulier', 'sdfghj', 'xcvb@sdfgh.fr', '$2y$10$k3vLUZp79uFEq3aJQQMq5Op.UYS6Ch5xV46xHaBwh7IoCBHGW0Jha', 'O2vfVqHLIFEUqiuQzh6rraHu8GWkHVoRL5283foSVJBoDH7G4kS4zhNJxzZ9', '2018-04-05 23:45:36', '2018-04-05 23:45:36'),
(23, 'particulier', 'azerty', 'zerty@zert.fr', '$2y$10$DK4Gx.q0vih4wRB6J806numPt1jDSiwfA.nOWjdkD7ASz4CHu60Z6', 'm3QwKCxs4HWn62nARKDBQC5JknpWaERkrvPfWiKfkV7DyVZRP5AACna9zAoW', '2018-04-06 00:09:44', '2018-04-06 00:09:44'),
(24, 'particulier', 'azerty', 'azerty@azerty.fr', '$2y$10$m1w.r6K5hljrlSsJmEX1aOYE3H5HMY/ShrfI01l0aMgX/UqmNiNaW', NULL, '2018-04-06 00:22:57', '2018-04-06 00:22:57'),
(25, 'entreprise', 'azert', 'azert@yahoo.fr', '$2y$10$56RJpoBZ67FdMOe8jvhXhe905NhN.vsxpgt7FnhwH8ZllKMQe8Y5K', 'zHEVOZd0pUEbvzhQ3KGsLERDzz2nZADe43jxyRAAULTgKzLkZBMI4BCC80iJ', '2018-04-06 06:00:35', '2018-04-06 06:00:35'),
(26, 'particulier', 'azerty', 'azert@azer.fr', '$2y$10$j.oTBgy27JotbawvrBsGA.cgU6DGi1q03lo6OxF2cxEZ9Cz0z0o/m', '34PiVQ32MBL0EcV7lkwoAvBD9CAfOSZeCRNLOZZ3AD42NA0cxD2SEmKnUp5I', '2018-04-06 06:08:14', '2018-04-06 06:08:14'),
(27, 'organisme_public', 'qsdfg', 'wxcffg@sdfg.fr', '$2y$10$IL8RzDxr09JRPxjxx/kCweMZuVvtThXw002J9o1ICODxAr72HHotW', '9SvaMsRB3rVFLEKCVWvNezpjfQkccgwtMyfqxaAKusDCOj9gJf7k08UyZjOY', '2018-04-06 06:09:38', '2018-04-06 06:09:38'),
(28, 'particulier', 'dfghj', 'sdfgh@fghj.fr', '$2y$10$8YJhXIxGpJv.7PJWiT/2Pu9HqaJKfYDRHG0yyO/bRJcsdhrMCofeG', 'RNrxCzZGM2bZZs9acX15PhK8oNwlid3FFrlZHT43QDXfvRMqQkq5coREHesj', '2018-04-06 06:45:01', '2018-04-06 06:45:01'),
(29, 'particulier', 'azert', 'azert@qsdfg.gt', '$2y$10$EFnz2IzDcWCPnotRWXq4yeBRlQxxlWzPVf3TS8cKkWaK5gEl7IAxG', 'KQitJrw08VE6ieoJ4432eyYYzIckAOEaltPeqJ4OCNwGlrP1xlh3bXeeEUvK', '2018-04-06 06:50:00', '2018-04-06 06:50:00'),
(30, 'particulier', 'azerty', 'azer@azert.fr', '$2y$10$Z3xYGD6B9zCaXsx7ZTeS2uf7KKIivk1GRkVGKzUJhANpJ6J.Ml09K', 'fdSboBKgL9c5IaXTpJ5TYegSWj1nvGgTpMiF3IMJfnc6uRRGTPzxsX5lOZVk', '2018-04-06 06:52:35', '2018-04-06 06:52:35'),
(31, 'particulier', 'aze', 'azerty@az.fr', '$2y$10$nrknCiWj7L/J/ocG3C6F8.4wFAWdP6fzhmPin3qUq/7BYvv1tuVZK', 'bMFtvNVQ78V2IQkS3r3eEZg3GdBys0I2KxdFjY9DpoX9Qct7z5kFCA85AKRe', '2018-04-06 06:54:45', '2018-04-06 06:54:45'),
(32, 'particulier', 'azerty', 'azert@sdf.fr', '$2y$10$.nL0zGHSs5G2XJdlMoX/luQG3UGY1mb2xznENCIuMo7qSMyMVmNTe', 'pNkIV3KLyfiMOhWoDPh4mLTh6cyo7UWwclXQ75arKdGKyysX1PjfLGhzDAA5', '2018-04-06 07:33:03', '2018-04-06 07:33:03'),
(33, 'entreprise', 'azerty', 'azert@azert.fr', '$2y$10$ob5dy6BGj8EqxWh6soG1..UEU2xmhSvxfwGw0qRrCzrlX2qOIa40O', 'CjuY4w84sFKsIlpszg8sL6V4GdI6F1pUkXLJKwbVt1WZNRCS6OvyryucmDBx', '2018-04-06 08:16:01', '2018-04-06 08:16:01'),
(34, 'entreprise', 'azerty', 'azert@erty.fr', '$2y$10$AUIB1K/403wvCoNOUG3gS.3KCz2Q0LZUUM5yZQOCzGHnX2xP.oMD2', 'TQZ9QUUwMDW6ideSV671mlLEAvhKcqF6GmiBFxG41Y46KhxRdBtaMmzwUHpV', '2018-04-06 09:32:21', '2018-04-06 09:32:21'),
(35, 'particulier', 'zerty', 'efghj@sdfg.fr', '$2y$10$7LP0NQBmN.n8W.R2.0WTSeCneQB2nB/Kysyh3ceHz8tYQKHI8Wq3G', 'MYRJIEy7621snk29nriV53oIpqjsqVT6pnUI4TtPbN5O4G4KTKxLXfg14VA8', '2018-04-07 07:13:26', '2018-04-07 07:13:26'),
(36, 'particulier', 'azert', 'zerty@zerty.fr', '$2y$10$ChK.mWC6yi.AN8xqsI003.6Wnuv2x/5jv7MhAPBkNF8.4poVQK4ze', 'SvEMq0Mfq51MJn3m19fISZWMrILhoJgFlZlvRP7Yrm2ecFZyXoQQUKlzzOeg', '2018-04-07 07:27:46', '2018-04-07 07:27:46'),
(37, 'particulier', 'azerty', 'azerty@azert.fr', '$2y$10$CfctdaLsYNO52y/6sflT3OvnjxZL6HVkz7VLlPpBQ0DTFNnPmMkn2', 'is1mpl1ZkA7WuoaVC9NJJ4GddtU1CDlwJF4rurIpIFXPvpkUPj9ubUMLyYPY', '2018-04-07 07:30:40', '2018-04-07 07:30:40'),
(38, 'particulier', 'azert', 'qsdf@sdf.fr', '$2y$10$4bfse89hS2o5SjB9TUgCuOrs8Zgni.hEoxr9pQrqMFEkvysNagG96', 'FpgzJTHxc0eoeso2XNVlVIId9kmHtpWA9vDu4BvIsNHX8KCemZnOPDH9470X', '2018-04-07 08:02:40', '2018-04-07 08:02:40'),
(39, 'entreprise', 'azer', 'zert@azer.fr', '$2y$10$faXuzZ.l5H.1iuTFdV9n/eF2JjN77UicJxS8bsWw/lqvNklhwJ/Je', NULL, '2018-04-07 08:22:14', '2018-04-07 08:22:14');

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(10) UNSIGNED NOT NULL,
  `immatriculation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `capacite_volume` double(8,2) NOT NULL,
  `capacite_poids` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adresse_depart`
--
ALTER TABLE `adresse_depart`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `adresse_destination`
--
ALTER TABLE `adresse_destination`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `entreprises`
--
ALTER TABLE `entreprises`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `entreprises_email_unique` (`email`);

--
-- Index pour la table `facture`
--
ALTER TABLE `facture`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facture_id_client_foreign` (`id_client`),
  ADD KEY `facture_id_commande_foreign` (`id_commande`),
  ADD KEY `facture_id_gestionnaire_foreign` (`id_gestionnaire`);

--
-- Index pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `gestionnaire_email_unique` (`email`),
  ADD KEY `gestionnaire_id_user_foreign` (`id_user`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `mission`
--
ALTER TABLE `mission`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mission_id_commande_foreign` (`id_Commande`);

--
-- Index pour la table `objet`
--
ALTER TABLE `objet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `organisme_publiques`
--
ALTER TABLE `organisme_publiques`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `organisme_publiques_email_unique` (`email`);

--
-- Index pour la table `particuliers`
--
ALTER TABLE `particuliers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `particuliers_email_unique` (`email`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_id_gestionnaire_foreign` (`id_gestionnaire`);

--
-- Index pour la table `reservation_vehicule`
--
ALTER TABLE `reservation_vehicule`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reservation_vehicule_id_vehicule_foreign` (`id_vehicule`),
  ADD KEY `reservation_vehicule_id_reservation_foreign` (`id_reservation`);

--
-- Index pour la table `ressources_humaines`
--
ALTER TABLE `ressources_humaines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ressources_humaines_email_unique` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adresse_depart`
--
ALTER TABLE `adresse_depart`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `adresse_destination`
--
ALTER TABLE `adresse_destination`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `client`
--
ALTER TABLE `client`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `entreprises`
--
ALTER TABLE `entreprises`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `facture`
--
ALTER TABLE `facture`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT pour la table `mission`
--
ALTER TABLE `mission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `objet`
--
ALTER TABLE `objet`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `organisme_publiques`
--
ALTER TABLE `organisme_publiques`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `particuliers`
--
ALTER TABLE `particuliers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation_vehicule`
--
ALTER TABLE `reservation_vehicule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ressources_humaines`
--
ALTER TABLE `ressources_humaines`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `facture`
--
ALTER TABLE `facture`
  ADD CONSTRAINT `facture_id_client_foreign` FOREIGN KEY (`id_client`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `facture_id_commande_foreign` FOREIGN KEY (`id_commande`) REFERENCES `commande` (`id`),
  ADD CONSTRAINT `facture_id_gestionnaire_foreign` FOREIGN KEY (`id_gestionnaire`) REFERENCES `gestionnaire` (`id`);

--
-- Contraintes pour la table `gestionnaire`
--
ALTER TABLE `gestionnaire`
  ADD CONSTRAINT `gestionnaire_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `mission`
--
ALTER TABLE `mission`
  ADD CONSTRAINT `mission_id_commande_foreign` FOREIGN KEY (`id_Commande`) REFERENCES `commande` (`id`);

--
-- Contraintes pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD CONSTRAINT `reservation_id_gestionnaire_foreign` FOREIGN KEY (`id_gestionnaire`) REFERENCES `gestionnaire` (`id`);

--
-- Contraintes pour la table `reservation_vehicule`
--
ALTER TABLE `reservation_vehicule`
  ADD CONSTRAINT `reservation_vehicule_id_reservation_foreign` FOREIGN KEY (`id_reservation`) REFERENCES `reservation` (`id`),
  ADD CONSTRAINT `reservation_vehicule_id_vehicule_foreign` FOREIGN KEY (`id_vehicule`) REFERENCES `vehicule` (`id`);
