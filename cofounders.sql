##drop table Clients;
##drop table AccountTypes;
##drop table Identis;
##drop table IdentiTypes;
##drop table accounts;

CREATE TABLE Clients(
id INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
username VARCHAR(20) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(20) UNIQUE NOT NULL
);

