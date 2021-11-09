// Creating database
CREATE DATABASE XFab;

// Select database
USE XFab;

// Creating table
CREATE TABLE UserInput
(
    ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Devices varchar(255) NULL,
    Customers varchar(255) NULL,
    Process_Family varchar(255) NULL,
    Module_Category varchar(255) NULL,
    Device_Length varchar(255) NULL,
    Device_Type varchar(255) NULL,
    Sales_pool varchar(255) NULL,
    Service_level varchar(255) NULL,
    No_of_layers varchar(255) NULL,
    DPML varchar(255) NULL,
    No_of_days varchar(255) NULL
);

CREATE DATABASE XFab;
USE XFab;
CREATE TABLE UserInput
(
    ID int NOT NULL PRIMARY KEY AUTO_INCREMENT,
    Devices varchar(255) NULL,
    Customers varchar(255) NULL,
    Process_Family varchar(255) NULL,
    Module_Category varchar(255) NULL,
    Device_Length varchar(255) NULL,
    Device_Type varchar(255) NULL,
    Sales_pool varchar(255) NULL,
    Service_level varchar(255) NULL,
    No_of_layers varchar(255) NULL,
    DPML varchar(255) NULL,
    No_of_days varchar(255) NULL
);