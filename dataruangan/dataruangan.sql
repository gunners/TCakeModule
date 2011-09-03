-- phpMyAdmin SQL Dump
-- version 2.11.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 12, 2011 at 11:25 AM
-- Server version: 5.0.51
-- PHP Version: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `siakad`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataruangan`
--

CREATE TABLE IF NOT EXISTS `dataruangan` (
  `kd_ruangan` varchar(50) NOT NULL,
  `nama_ruangan` varchar(50) NOT NULL,
  `lantai` varchar(50) NOT NULL,
  `kapasitas` varchar(50) NOT NULL,
  `kapasitas_ujian` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  PRIMARY KEY  (`kd_ruangan`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dataruangan`
--

