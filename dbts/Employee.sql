CREATE DATABASE `Employees`
CREATE TABLE `Employees` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Firstname` varchar(255),
  `Lastname` varchar(255),
  `Email` varchar(255),
  `Phone_number` varchar(255)
);

CREATE TABLE `WorkSchedule` (
  `EmployeeID` int,
  `ShiftID` int
);

CREATE TABLE `Shifts` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Shiftnumber` int,
  `Shiftdescription` varchar(255)
);

ALTER TABLE `WorkSchedule` ADD FOREIGN KEY (`EmployeeID`) REFERENCES `Employees` (`id`);

ALTER TABLE `WorkSchedule` ADD FOREIGN KEY (`ShiftID`) REFERENCES `Shifts` (`id`);
