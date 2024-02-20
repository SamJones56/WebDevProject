CREATE DATABASE hotelTallafornia;
 use hotelTallafornia;
CREATE TABLE customer (
                       custId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(30) NOT NULL,
                       address VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       password VARCHAR(50) NOT NULL,
                       age INT(3),
                       dob VARCHAR(50) NOT NULL,
                       passportNo INT(11),
                       phoneNo INT(10) NOT NULL,
                       date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);