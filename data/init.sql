CREATE DATABASE hotelTallafornia;
 use hotelTallafornia;
CREATE TABLE customers (
                       custId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       name VARCHAR(30) NOT NULL,
                       age INT(3),
                       dob VARCHAR(50) NOT NULL,
                       address VARCHAR(30) NOT NULL,
                       email VARCHAR(50) NOT NULL,
                       phoneNo INT(10) NOT NULL,
                       passportNo INT(11),
                       password VARCHAR(50) NOT NULL,
                       date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE rooms (
                        roomId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        roomType VARCHAR(30) NOT NULL,
                        accessibility VARCHAR(30) NOT NULL,
                        price INT(111) NOT NULL,
                        date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE tables (
                       tableId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                       capacity INT(111) NOT NULL,
                       date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE departments(
                        deptId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                        deptName VARCHAR(20) NOT NULL
);

INSERT INTO departments(deptId, deptName) VALUES
    (1, 'Rooms'),
    (2, 'Restaurant'),
    (3, 'Administration')
;

CREATE TABLE staff(
                      staffId INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                     deptId INT(3) UNSIGNED,
                            FOREIGN KEY (deptId) REFERENCES departments(deptId),
                      permissionLvl INT(3),
                      name VARCHAR(30) NOT NULL,
                      age INT(3),
                      dob VARCHAR(50) NOT NULL,
                      address VARCHAR(30) NOT NULL,
                      email VARCHAR(50) NOT NULL,
                      phoneNo INT(10) NOT NULL,
                      password VARCHAR(50) NOT NULL,
                      date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);