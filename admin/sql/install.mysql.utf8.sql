DROP TABLE IF EXISTS `#__jhi_properties`;
 
CREATE TABLE `#__jhi_properties` (
  `id`       INT(11)     NOT NULL AUTO_INCREMENT,
  `title` VARCHAR(225) NOT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
)
  ENGINE =MyISAM
  AUTO_INCREMENT =0
  DEFAULT CHARSET =utf8;