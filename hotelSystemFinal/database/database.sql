DROP DATABASE IF EXISTS `restaurant`;
CREATE DATABASE restaurant;
USE `restaurant`; 
CREATE TABLE users(
    uId INT NOT NULL AUTO_INCREMENT,
    uName VARCHAR(255) NOT NULL,
    uEmail VARCHAR(255) NOT NULL,
    uNumber VARCHAR(255) NOT NULL,
    uPassword VARCHAR(255) NOT NULL,
    PRIMARY KEY (uId)
);
INSERT INTO users(uName,uEmail,uNumber,uPassword) VALUES
('Admin', 'admin14@gmail.com', '03490735372','admin123'),
('Ali', 'ali@gmail.com', '03339073839','ali@123'),
('Alex', 'alex12@gmail.com', '03493932910','alex123'),
('Ahmed', 'ahmed@gmail.com', '03111198001','123A');
CREATE TABLE Orders(
    gId INT NOT NULL AUTO_INCREMENT,
    gName VARCHAR(255) NOT NULL,
    gEmail VARCHAR(255) NOT NULL,
    gNumber VARCHAR(255) NOT NULL,
    gDate VARCHAR(255) NOT NULL,
    gTime VARCHAR(255) NOT NULL,
    totalGuests VARCHAR(255) NOT NULL,
    type VARCHAR(255) NOT NULL,
    dinnerNum VARCHAR(255) NOT NULL,    
    tableNum VARCHAR(255) NOT NULL,    
    charges VARCHAR(255) NOT NULL,    
    uid INT NOT NULL,
    guest_id INT NOT NULL,
    PRIMARY KEY (gId)
);
CREATE TABLE traffic(
    trId INT NOT NULL AUTO_INCREMENT,
    users VARCHAR(255) NOT NULL,
    guests VARCHAR(255) NOT NULL,
    dayDate VARCHAR(255) NOT NULL,
    PRIMARY KEY (trId)
);
