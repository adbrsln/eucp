

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Records 
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(50) NULL DEFAULT NULL,
	`price` DECIMAL(10,0) NULL DEFAULT NULL,
	`status` INT(10) NULL DEFAULT NULL,
	`taskcode` INT(20) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)
TYPE=MyISAM;


CREATE TABLE `donation` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`userid` INT(20) NULL DEFAULT NULL,
	`email` VARCHAR(50) NULL DEFAULT NULL,
	`product_id` INT(20) NULL DEFAULT NULL,
	`bank` VARCHAR(50) NULL DEFAULT NULL,
	`server` VARCHAR(50) NULL DEFAULT NULL,
	`date_time` VARCHAR(50) NULL DEFAULT NULL,
	`refid` VARCHAR(50) NULL DEFAULT NULL,
	`donation_status` INT(10) NOT NULL DEFAULT '0',
	PRIMARY KEY (`id`)
) TYPE=MyISAM;

CREATE TABLE `eucpadmins` (
	`id` INT(10) NOT NULL AUTO_INCREMENT,
	`username` VARCHAR(50) NULL DEFAULT NULL,
	`password` VARCHAR(50) NULL DEFAULT NULL,
	PRIMARY KEY (`id`)
)TYPE=MyISAM;

