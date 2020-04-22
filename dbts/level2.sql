ADD Firstname Varchar(30);

ADD item_description VARCHAR(30) NOT NULL);

CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
NickName Varchar(30) 
);

CREATE TABLE People(
ID int NOT NULL UNIQUE,
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
);

CREATE TABLE People(
ID int NOT NULL,
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
CONSTRAINT UC_People UNIQUE (ID, LastName)
);

CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
Age int CHECK (Age >=18) 
);

CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
City varchar(30) DEFAULT ‘Cincinnati’
);