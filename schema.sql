CREATE TABLE experiment
(
	`id` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
	`name` VARCHAR(32) NOT NULL,
	`description` TEXT,
	date_start DATETIME,
	date_end DATETIME
);