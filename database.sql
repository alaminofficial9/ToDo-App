CREATE DATABASE todo_app;
USE todo_app;

CREATE TABLE users(
 id INT AUTO_INCREMENT PRIMARY KEY,
 username VARCHAR(50) UNIQUE,
 password VARCHAR(255)
);
INSERT INTO users(username,password) VALUES('admin',MD5('123456'));

CREATE TABLE tasks(
 id INT AUTO_INCREMENT PRIMARY KEY,
 title VARCHAR(200),
 description TEXT
);
