
CREATE TABLE IF NOT EXISTS `pembimbing` (
  `id_pembimbing` int(255) NOT NULL auto_increment,
  `nip` varchar(50) NOT NULL,
  `id_tesis` int(255) NOT NULL,
  PRIMARY KEY  (`id_pembimbing`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

