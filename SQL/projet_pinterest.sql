-- phpMyAdmin SQL Dump 
-- version 4.5.4.1deb2ubuntu2 
-- http://www.phpmyadmin.net 
-- 
-- Client :  localhost 
-- Généré le :  Lun 20 Novembre 2017 à 16:19 
-- Version du serveur :  5.7.20-0ubuntu0.16.04.1 
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1 
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"; 
SET time_zone = "+00:00"; 
 
 
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */; 
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */; 
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */; 
/*!40101 SET NAMES utf8mb4 */; 
 
-- 
-- Base de données :  `projet_pinterest` 
-- 
 
-- -------------------------------------------------------- 
 
-- 
-- Structure de la table `categories` 
-- 
 
CREATE TABLE `categories` ( 
  `id` int(11) NOT NULL, 
  `nom` varchar(255) NOT NULL, 
  `description` text NOT NULL 
) ENGINE=MyISAM DEFAULT CHARSET=utf8; 
-- MyISAM supporte bien les requêtes de recherches de texte
 
-- -------------------------------------------------------- 
 
-- 
-- Structure de la table `img` 
-- 
 
CREATE TABLE `img` ( 
  `id` int(11) NOT NULL, 
  `url` text NOT NULL, 
  `titre` varchar(255) NOT NULL, 
  `description` text NOT NULL, 
  `date` timestamp DEFAULT CURRENT_TIMESTAMP,
  `userID` int(11) NOT NULL 
) ENGINE=MyISAM DEFAULT CHARSET=utf8; 
 
-- -------------------------------------------------------- 
 
-- 
-- Structure de la table `img_cat` 
-- 
 
CREATE TABLE `img_cat` ( 
  `id_images` int(11) NOT NULL, 
  `id_categories` int(11) NOT NULL 
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
-- Ici j'utilise InnoDB pour gérer les clés étrangères
 
-- -------------------------------------------------------- 
 
-- 
-- Structure de la table `users` 
-- 
 
CREATE TABLE `users` ( 
  `id` int(11) NOT NULL, 
  `name` varchar(255) NOT NULL, 
  `mail` varchar(255) NOT NULL, 
  `date` timestamp DEFAULT CURRENT_TIMESTAMP, 
  `admin` tinyint(1) DEFAULT NULL 
) ENGINE=MyISAM DEFAULT CHARSET=utf8; 
 
-- 
-- Index pour les tables exportées 
-- 
 
-- 
-- Index pour la table `categories` 
-- 
ALTER TABLE `categories` 
  ADD PRIMARY KEY (`id`); 
 
-- 
-- Index pour la table `img` 
-- 
ALTER TABLE `img` 
  ADD PRIMARY KEY (`id`); 
 
-- 
-- Index pour la table `users` 
-- 
ALTER TABLE `users` 
  ADD PRIMARY KEY (`id`); 
 
-- 
-- AUTO_INCREMENT pour les tables exportées 
-- 
 
-- 
-- AUTO_INCREMENT pour la table `categories` 
-- 
ALTER TABLE `categories` 
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 
-- 
-- AUTO_INCREMENT pour la table `img` 
-- 
ALTER TABLE `img` 
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 
-- 
-- AUTO_INCREMENT pour la table `users` 
-- 
ALTER TABLE `users` 
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT; 
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */; 
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */; 
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */; 
