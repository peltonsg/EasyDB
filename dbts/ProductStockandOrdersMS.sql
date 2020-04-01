CREATE DATABASE `ProductStockOrder`;
CREATE TABLE `Products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `item_name` varchar(255),
  `price` int
);

CREATE TABLE `StockRooms` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Location_name` varchar(255),
  `Description` varchar(255),
  `building_id` int
);

CREATE TABLE `Product_locations` (
  `product_id` int,
  `location_id` int
);

CREATE TABLE `Stockinrooms` (
  `product_id` int,
  `location_id` int,
  `Stock` int
);

CREATE TABLE `Building_Locations` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Address` varchar(255) NOT NULL
);

CREATE TABLE `Orders` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `UserID` int,
  `Status` varchar(255),
  `time_created` timestamp
);

CREATE TABLE `Order_items` (
  `Order_ID` int,
  `Product_id` int,
  `Quantity` int
);

CREATE TABLE `Users` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255),
  `username` varchar(255)
);

ALTER TABLE `StockRooms` ADD FOREIGN KEY (`building_id`) REFERENCES `Building_Locations` (`id`);

ALTER TABLE `Product_locations` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `Product_locations` ADD FOREIGN KEY (`location_id`) REFERENCES `StockRooms` (`id`);

ALTER TABLE `Stockinrooms` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `Stockinrooms` ADD FOREIGN KEY (`location_id`) REFERENCES `StockRooms` (`id`);

ALTER TABLE `Orders` ADD FOREIGN KEY (`UserID`) REFERENCES `Users` (`id`);

ALTER TABLE `Order_items` ADD FOREIGN KEY (`Order_ID`) REFERENCES `Orders` (`id`);

ALTER TABLE `Order_items` ADD FOREIGN KEY (`Product_id`) REFERENCES `Products` (`id`);
