-- phpMyAdmin SQL Dump
-- version 4.7.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 29, 2018 at 07:26 PM
-- Server version: 5.6.38
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `WorldCup2018`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `team` varchar(30) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `age` int(10) NOT NULL,
  `goals` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`team`, `fname`, `lname`, `age`, `goals`) VALUES
('Belgium', 'Thibaut', 'Courtois', 27, 92),
('France', 'Alphonse', 'Areola', 33, 0),
('Belgium', 'Toby', 'Alderweireld', 21, 12),
('Belgium', 'Jan', 'Vertonghen', 19, 1),
('Belgium', 'Vincent', 'Kompany', 34, 2),
('Belgium', 'Thomas', 'Vermaelen', 25, 1),
('Belgium', 'Thomas', 'Meunier', 25, 3),
('Belgium', 'Youri', 'Tielemans', 28, 82),
('Belgium', 'Axel', 'Witsel', 29, 60),
('Belgium', 'Witsel', 'Witsel', 21, 11),
('Belgium', 'Leander', 'Dendoncker', 22, 3),
('Belgium', 'Dries', 'Mertens', 20, 32),
('Croatia', 'Ivan', 'Rakitic', 29, 134),
('Croatia', 'Mario', 'Mandzukic', 34, 142),
('Croatia', 'Luka', 'Modriat', 24, 188),
('Croatia', 'Andrej', 'Kramaric', 27, 42),
('Croatia', 'Mario', 'Mario', 26, 214),
('Croatia', 'Marcelo', 'Brozovic', 25, 38),
('Croatia', 'Filip', 'Bradaric', 18, 21),
('Croatia', 'Tin', 'Jedvaj', 21, 43),
('Croatia', 'Duje', 'Caleta-Car', 22, 13),
('Croatia', 'Danijel', 'Subasic', 29, 3),
('Croatia', 'Marko', 'Pjaca', 26, 0),
('Croatia', 'Ante', 'Rebic', 21, 81),
('France', 'Antoine', 'Griezmann', 29, 124),
('France', 'Olivier', 'Giroud', 24, 164),
('France', 'paul', 'pogba', 28, 261),
('France', 'Kylian', 'Mbappe', 30, 99),
('France', 'Ousmane', 'Dembele', 27, 42),
('France', 'Florian', 'Thauvin', 19, 0),
('France', 'Nabil', 'Fekir', 23, 43),
('France', 'Ngolo', 'Kante', 20, 0),
('France', 'Steven', 'Nzonzi', 19, 0),
('France', 'Djibril', 'Sidibe', 21, 0),
('France', 'Benjamin', 'Mendy', 25, 2);
