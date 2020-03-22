# Create Testuser
CREATE USER 'dev'@'localhost' IDENTIFIED BY 'dev';
GRANT SELECT,INSERT,UPDATE,DELETE,CREATE,DROP ON *.* TO 'dev'@'localhost';
# Create DB
CREATE DATABASE IF NOT EXISTS `librarywebapp` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `demo`;
# Create Table
CREATE TABLE IF NOT EXISTS `books` (
  `idbook` int(11) NOT NULL,
  `bookname` varchar(20) DEFAULT NULL,
  `genre` varchar(20) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  
)ENGINE=InnoDB DEFAULT CHARSET=utf8;
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT;
# Add Data