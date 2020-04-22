CREATE DATABASE inventoryDB; 

CREATE TABLE Items (Units VARCHAR(30) NOT NULL);

ALTER TABLE Items 
ADD (item_description VARCHAR(30) NOT NULL)
ADD (stock int NOT NULL);

CREATE TABLE Locations (room_number VARCHAR(30) NOT NULL);

ALTER TABLE Locations 
ADD (Loc_description VARCHAR(30));

ALTER Items 
ADD itemID int;
ALTER Items 
ADD PRIMARY KEY itemID;

ALTER Locations 
ADD roomID int;
ALTER Locations 
ADD PRIMARY KEY roomID;

CREATE TABLE LinkedTable (
    FOREIGN KEY (itemID) REFERENCES Items(itemID)
    FOREIGN KEY (roomID) REFERENCES Locations(roomID)
);