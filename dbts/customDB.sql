CREATE DATABASE inventoryDB; 

CREATE TABLE Items (Units int);

ALTER TABLE Items 
ADD (item_description VARCHAR(30));

ALTER Items 
ADD PRIMARY KEY Units;

CREATE TABLE LinkedTable (
    FOREIGN KEY (itemID) REFERENCES Items(itemID)
    FOREIGN KEY (roomID) REFERENCES Rooms(roomID)
);

SELECT *FROM Items;

SELECT DISTINCT Country FROM Locations;