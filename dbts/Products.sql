CREATE TABLE `Products` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `item_name` varchar(255),
  `price` money,
  `stock` int NOT NULL
);

CREATE TABLE `StockRooms` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Location_name` varchar(255),
  `Description` varchar(255)
);

CREATE TABLE `Product_locations` (
  `product_id` int,
  `location_id` int
);

ALTER TABLE `Product_locations` ADD FOREIGN KEY (`product_id`) REFERENCES `Products` (`id`);

ALTER TABLE `Product_locations` ADD FOREIGN KEY (`location_id`) REFERENCES `StockRooms` (`id`);
