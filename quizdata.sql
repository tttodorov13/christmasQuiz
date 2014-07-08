SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

CREATE TABLE IF NOT EXISTS `questions` (
  `number` int(3) NOT NULL AUTO_INCREMENT,
  `namequestion` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `A` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `B` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `C` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `D` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=234 ;
 