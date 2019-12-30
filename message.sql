CREATE TABLE IF NOT EXISTS `message`(
    `Id` int(10) NOT NULL  AUTO_INCREMENT,
    `Pseudo` varchar(255) NOT NULL ,
    `Message` varchar(255) NOT NULL,
    KEY `Id` (`Id`))
    ENGINE=MyISAM DEFAULT CHARACTER SET  = latin1 AUTO_INCREMENT =51;