CREATE DATABASE `SchoolTemplate`;
CREATE TABLE `Classes` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Class_name` varchar(255)
);

CREATE TABLE `Class_Period` (
  `Class_id` int,
  `Period_id` int,
  `StudentID` int,
  `TeacherID` int
);

CREATE TABLE `Teachers` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Firstname` varchar(255),
  `lastname` varchar(255),
  `department_id` int,
  `email` varchar(255)
);

CREATE TABLE `Departments` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Department_name` varchar(255)
);

CREATE TABLE `Students` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `Firstname` varchar(255),
  `lastname` varchar(255),
  `gradelevel` int
);

CREATE TABLE `StudentSchedule` (
  `StudentID` int,
  `ClassID` int
);

CREATE TABLE `Periods` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `PeriodDescription` varchar(255)
);

ALTER TABLE `Class_Period` ADD FOREIGN KEY (`Class_id`) REFERENCES `Classes` (`id`);

ALTER TABLE `Class_Period` ADD FOREIGN KEY (`Period_id`) REFERENCES `Periods` (`id`);

ALTER TABLE `Class_Period` ADD FOREIGN KEY (`StudentID`) REFERENCES `Students` (`id`);

ALTER TABLE `Class_Period` ADD FOREIGN KEY (`TeacherID`) REFERENCES `Teachers` (`id`);

ALTER TABLE `Teachers` ADD FOREIGN KEY (`department_id`) REFERENCES `Departments` (`id`);

ALTER TABLE `StudentSchedule` ADD FOREIGN KEY (`StudentID`) REFERENCES `Students` (`id`);

ALTER TABLE `StudentSchedule` ADD FOREIGN KEY (`ClassID`) REFERENCES `Classes` (`id`);
