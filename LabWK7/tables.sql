CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT, 
  `name` VARCHAR(20) NOT NULL, 
  `surname` VARCHAR(30) NOT NULL, 
  `nickname` VARCHAR(20) NOT NULL, 
  `address` VARCHAR(40) NOT NULL, 
  `numbers` VARCHAR(20) NOT NULL, 
  `email` VARCHAR(25) NOT NULL, 
  `info` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`id`)
)
