DROP TABLE IF EXISTS Contact_App;

-- Creamos las tablas del proyecto
CREATE DATABASE Contact_App;
USE Contact_App;

CREATE TABLE Contact(
    Id INT NOT NULL AUTO_INCREMENT,
    Name VARCHAR(255) NOT NULL,
    Phone_Number VARCHAR(255) NOT NULL,
    CONSTRAINT PK_Id_Contact PRIMARY KEY (Id)
);
DESCRIBE Contact;

CREATE TABLE User();
DESCRIBE User;


